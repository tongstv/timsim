<?php
class smssyncall
{
    var $secret = "123";
    var $config;
    var $db;

    function __construct($sdb)
    {
        $this->db = $sdb;
        $row = $sdb->getOne("select * FROM apps where appcode='smsconfig' limit 1");

        $this->config = (object)unserialize($row['appconf']);

        if ($this->config->secret)
            $this->secret = $this->config->secret;


    }
    function get_message()
    {
        $error = null;

        $success = false;

        if (isset($_POST['from'])) {
            $from = $_POST['from'];
            $from = str_replace("+84", "0", $from);
        } else {
            $error = 'Địa chỉ người nhận không hợp lệ';
        }

        if (isset($_POST['message'])) {
            $message = $_POST['message'];
        } else {
            $error = 'Nội dung tin nhắn ko hợp lệ';
        }

        if (isset($_POST['secret'])) {
            $secret = $_POST['secret'];
        }

        if (isset($_POST['sent_timestamp'])) {
            $sent_timestamp = $_POST['sent_timestamp'];
        } else {
            $sent_timestamp = time();
        }

        if (isset($_POST['sent_to'])) {
            $sent_to = $_POST['sent_to'];
            $sent_to = str_replace("+84", "0", $sent_to);
        }

        if (isset($_POST['message_id'])) {
            $message_id = $_POST['message_id'];
        } else
            $message_id = "api";

        if (isset($_POST['device_id'])) {
            $device_id = $_POST['device_id'];
        }

        if ((strlen($from) > 0) and (strlen($message) > 0) and (strlen($sent_timestamp) >
            0) and (strlen($message_id) > 0)) {

            if (($secret == $this->secret)) {
                $success = true;
            } else {
                $error = "Khóa bị mật (secret) không hợp lệ!";
            }

            $string = "From: " . $from . "\n";
            $string .= "Message: " . $message . "\n";
            $string .= "Timestamp: " . $sent_timestamp . "\n";
            $string .= "Messages Id:" . $message_id . "\n";
            $string .= "Sent to: " . $sent_to . "\n";
            $string .= "Device ID: " . $device_id . "\n\n\n";

            $sms['sms_sender'] = $from;
            $sms['sms_msg'] = $message;
            $sms['sms_to'] = $sent_to;

            $sms['sms_date'] = date('H:i:s - d/m/Y', substr($sent_timestamp, 0, strlen($sent_timestamp) -
                3));
            if ($message_id == "api") {
                $sms['sms_staus'] = 0;
                $sms['sms_date'] = date('H:i:s - d/m/Y', time());
            } else {
                $sms['sms_staus'] = 2;
            }

            if ($success)
                $this->write_message_to_file($sms);
        }

        //  $this->send_instant_message($from);

        //$this->send_task();

        $response = json_encode(["payload" => ["success" => $success, "error" => $error]]);
        if ($message_id == "api")
            $response = json_encode(['success' => $success]);
        $this->send_response($response);

    }

    function write_message_to_file($sms)
    {
        $this->db->query_insert("sms", $sms);
    }

    function send_task()
    {
        $error = null;
        $success = false;

        if (isset($_REQUEST['secret'])) {
            $secret = $_REQUEST['secret'];
        }
        if (isset($_GET['task']) and $_GET['task'] === 'send') {


            if (($secret == $this->secret)) {
                $success = true;
            } else {
                $error = "Khóa bị mật (secret) không hợp lệ!";
                $response = json_encode(["payload" => ["success" => $success, "error" => $error]]);
                $this->send_response($response);
                exit;
            }

            
            include "app/lib/synctheomang.php";

            $sms = $this->db->getAll("SELECT * FROM sms WHERE sms_staus=0 {$where} limit {$limit}");
            
            
           

            foreach ($sms as $row) {
                $reply[] = array(
                    "to" => $row['sms_to'],
                    "message" => $row['sms_msg'],
                    "uuid" => $row['id']);
            }
            $s = "true";

            $response = json_encode(["payload" => ["success" => $s, "task" => "send",
                "secret" => $this->secret, "messages" => array_values($reply)]]);
            $this->send_response($response);
        }
    }

    function send_instant_message($to)
    {
        $m = "Your message has been received";
        $f = "+000-000-0000";
        $s = true;
        $reply[0] = ["to" => $to, "message" => $m, "uuid" => "1ba368bd-c467-4374-bf28"];

        $response = json_encode(["payload" => ["success" => $s, "task" => "send",
            "secret" => $this->secret, "messages" => array_values($reply)]]);
        //$this->send_response($response);
    }

    function send_response($response)
    {
        // Avoid caching
        header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
        header("Content-type: application/json; charset=utf-8");
        echo $response;
    }

    function get_sent_message_uuids()
    {
        $data = file_get_contents('php://input');
        $queued_messages = file_get_contents('php://input');

     
        $json_obj = json_decode($queued_messages, true);

        $this->db->query("UPDATE sms SET sms_staus=1 WHERE id IN(" . @join(',', $json_obj['queued_messages']) .
            ")");


        $this->send_message_uuids_waiting_for_a_delivery_report($queued_messages);

    }

    function send_message_uuids_waiting_for_a_delivery_report($queued_messages)
    {

        $json_obj = json_decode($queued_messages);
        $response = json_encode(["message_uuids" => $json_obj->queued_messages]);
        $this->send_response($response);
    }

    function send_messages_uuids_for_sms_delivery_report()
    {
        if (isset($_GET['task']) and $_GET['task'] == 'result') {

            $sms = $this->db->getAll("SELECT * FROM sms WHERE sms_staus=0 limit 5");

            foreach ($sms as $row) {
                $uuid[] = $row['id'];
            }

            $response = json_encode(["message_uuids" => $uuid]);
            $this->send_response($response);
        }

    }

    function get_sms_delivery_report()
    {
        if ($_GET['task'] === 'result' AND $_GET['secret']=== $this->secret) {
            $message_results = file_get_contents('php://input');
            //$this->write_file("message " . $message_results . "\n\n");

        }
    }

    function write_file($message)
    {
        $myFile = "tes11111111111111111t.txt";
        $fh = fopen($myFile, 'a') or die("can't open file");
        @fwrite($fh, $message);
        @fclose($fh);
    }
}
