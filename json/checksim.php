<?php
ini_set('display_errors', 1);
//try {
//create redis instance
$redis = new Redis();
//connect with server and port
$redis->connect('103.28.37.111', 6379);
//set value
//$redis->set('website3', 'www.phpflow.com');

// $redis->expire('website3',10);


function setcheck($post)
{

    extract($post);
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.chatfuel.com/bots/" . $bot_id . "/users/" . $messenger_user_id .
            "/send?chatfuel_token=" . $token .
            "&chatfuel_message_tag=CONFIRMED_EVENT_REMINDER&chatfuel_block_name=none&check=" .
            ($check + 1),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 5,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "content-type: application/json",
            ),
        ));

    $response = curl_exec($curl);
}

if (isset($_REQUEST['sosim'])) {

$key="Checksim_".$_REQUEST['sosim'];

    if (!$reply = $redis->get($key)) {


        include "../conf2.php";

        $mysqli = new mysqli("localhost", $admin_db_db, $admin_db_pass, $admin_db_db) or
            die('not connect');

        $mysqli->query("SET NAMES utf8");


        $sosim = trim($_REQUEST['sosim']);
        $sosim=str_replace(array('.',' '),'',$sosim);

        $sosim = trim(str_replace("*", ".*", $sosim));
        $sosim = str_replace(' ', '', $sosim);

        function hoahong($simdl, $gia)
        {
            global $mysqli;

            $res = $mysqli->query("SELECT * FROM hh WHERE dlid=" . $simdl . " AND (dk1 <= " .
                ($gia * 1000000) . " AND dk2 > " . ($gia * 1000000) . ") LIMIT 1");

            $row = $res->fetch_array(MYSQLI_ASSOC);
            return $row['pt'];
        }


        if (stristr($sosim, "*")) {
            $res = $mysqli->query("select * from simso JOIN daily on simso.simdl = daily.id where simso.sim2 rlike '^" .
                $sosim . "$' limit 5");
        } else {
            $res = $mysqli->query("select * from simso JOIN daily on simso.simdl = daily.id where simso.sim2 like '%" .
                $sosim . "' limit 5");
        }


        if ($res->num_rows) {


            while ($row = $res->fetch_array(MYSQLI_ASSOC)) {


                $row['hh'] = hoahong($row['simdl'], $row['gianhap']);
                $row['giathu'] = $row['gianhap'] - ($row['gianhap'] * $row['hh'] / 100);


                $reply[] = '{"text": "☛' . $row['sim1'] . '\n☛Giá tiền: ' . number_format($row['gianhap'] *
                    1000000) . 'đ\n☛Hoa hồng: ' . $row['hh'] . '%\n☛Giá thu:  ' . number_format($row['giathu'] *
                    1000000) . 'đ\n♿'.@$row['city'].'\n☎: ' . $row['mobile'] . '"}';


            }
        } else {
            if (preg_match('/[0-9. ]/', $sosim)) {
                $reply[] = '{"text": " Sim '.$sosim.' hiện không có trong kho dữ liệu.... mời bạn check thử sim khác\n Checksimmienphi Sẽ tìm và nhắn cho bạn ngay khi tìm thấy sim!"}';
                
            
            include __DIR__."/google/vendor/autoload.php";

            $bigQuery = new Google\Cloud\BigQuery\BigQueryClient([
    'keyFilePath' => __DIR__.'/google/891b9da07620.json'
]);

$dataset = $bigQuery->dataset('simso');
$table = $dataset->table('checksim');
 
$data= array(

'sosim' => $sosim,
'fbid' =>$_REQUEST['messenger_user_id'],
'check_at' =>date('Y-m-d H:i:s')

);

$table->insertRows(array(

array('data' => $data)

));

            } else {
                $reply[] = '{"text": "Bạn vui lòng gõ số sim cần check! VD: 99999"}';
            }
           
            
        }


        $reply = json_encode($reply);
        $redis->set($key, $reply);
        $redis->expire($key, 60 * 60 * 24);
    }


    $reply = json_decode($reply, true);
    if (count($reply) > 0) {
        
         header('Content-type: application/json');
    echo '{
 "messages": [
 ' . join(", ", $reply) . '
],
 "redirect_to_blocks": ["setcheck"]
}';


      
    }


   

}
