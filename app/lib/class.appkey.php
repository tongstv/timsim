<?php

class appkey extends Smarty
{

    function add()
    {

        if (isset($_POST['key']) and $_POST['key'])
        {


            if (isset($_POST['key']))
            {

                if ($_POST['key'])
                {
                    $alert = "Key đã được lưu";
                     $this->assign("alert", $alert);
                } else
                {
                    $this->assign("error", "Bạn chưa nhập mã sử dụng");
                }

               

            }
        }
        
        if(file_exists("cache/".$_GET['do'].".key"))
        {
            $this->assign("error", "Key của bạn đã hết hạn!");
        }

        $this->display("addkey.htm");

    }
    function checkkey()
    {
        $status = 0;

        $domain = $_SERVER["HTTP_HOST"];
        $domain = str_replace("www.", "", $domain);

        $app = $_GET['do'];
           if (isset($_POST['key']))
            {
                $key = $_POST['key'];
                $keyin = $this->decrypt($key, "appkey");

                $keyin = explode("#", $keyin);

                if (isset($reg_date))
                    $key_exp = strtotime($keyin[2]);

                if ($keyin[0] == $domain and $keyin[1] == $app)
                {
                    @unlink("cache/" . $_GET['do'] . ".key");
                    file_put_contents("cache/" . $_GET['do'] . ".key", trim($_POST['key']));
                    $status = 1;
                } else
                    $status = 0;
            }

        else if (file_exists("cache/" . $app . ".key"))
        {
            $key = file_get_contents("cache/" . $app . ".key");
            $reg_date = filemtime("cache/" . $app . ".key");



                
            $keyin = $this->decrypt($key, "appkey");

            $keyin = explode("#", $keyin);

            if (isset($reg_date))
                $key_exp = $keyin[2];


            $exp = $key_exp;


            if (time() > $exp)
                $status = 0;
            else
                $status = 1;
if ($keyin[0] != $domain and $keyin[1] == $app)
                {
                    @unlink("cache/" . $_GET['do'] . ".key");
                 
                    $status = 0;
                }

        }
         

        $license['reg'] = isset($reg_date) ? $reg_date : "";
        $license['domain'] = isset($keyin[0]) ? $keyin[0] : "";
        $license['app'] = isset($keyin[1]) ? $keyin[1] : "";
        if (isset($exp))
            $license['exp'] = isset($exp) ? $exp : "";
        else
            $license['exp'] = time() + strtotime(isset($keyin[2]) ? $keyin[2] : "");

        if (!$status)
            $this->add();
        else
            return $license;

    }
    function encrypt($sData, $sKey = 'mysecretkey')
    {
        $sResult = '';
        for ($i = 0; $i < strlen($sData); $i++)
        {
            $sChar = substr($sData, $i, 1);
            $sKeyChar = substr($sKey, ($i % strlen($sKey)) - 1, 1);
            $sChar = chr(ord($sChar) + ord($sKeyChar));
            $sResult .= $sChar;
        }
        return $this->encode_base64($sResult);
    }

    function decrypt($sData, $sKey = 'mysecretkey')
    {
        $sResult = '';
        $sData = $this->decode_base64($sData);
        for ($i = 0; $i < strlen($sData); $i++)
        {
            $sChar = substr($sData, $i, 1);
            $sKeyChar = substr($sKey, ($i % strlen($sKey)) - 1, 1);
            $sChar = chr(ord($sChar) - ord($sKeyChar));
            $sResult .= $sChar;
        }
        return $sResult;
    }


    function encode_base64($sData)
    {
        $sBase64 = base64_encode($sData);
        return strtr($sBase64, '+/', '-_');
    }

    function decode_base64($sData)
    {
        $sBase64 = strtr($sData, '-_', '+/');
        return base64_decode($sBase64);
    }

}
