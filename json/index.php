<?php
include "../conf2.php";

$mysqli = new mysqli("localhost", $admin_db_db, $admin_db_pass, $admin_db_db) or die('not connect');


if (isset($_GET['soduoi'])) {
    $request_body = file_get_contents('php://input');
    $data = json_decode($request_body);

    file_put_contents("json.json", json_encode($_REQUEST));

    header('Content-type: application/json');
    

    $soduoi = $_GET['soduoi'];
    $soduoi = trim($soduoi);

    $soduoi = str_replace("*", ".*", $soduoi);


    $giatu = trim(strtolower($_GET['giatu']));
    $giaden = trim(strtolower($_GET['giaden']));


    if (stristr($giatu, 'tr')) $giatu = preg_replace('/[^0-9]/', '', $giatu) * 1000000;
    if (stristr($giaden, 'tr')) $giaden = preg_replace('/[^0-9]/', '', $giaden) * 1000000;


    $where_gia = $giatu < $giaden ? " AND (giaban >= " . ($giatu / 1000000) . " AND giaban <= " . ($giaden / 1000000) . ")" : "";


    $res = $mysqli->query("select * from simso where sim2 LIKE '%" . $soduoi . "' " . $where_gia . " limit 5");


    if ($res->num_rows) {

        while ($row = $res->fetch_array(MYSQLI_ASSOC)):


            $list[] = '{
              "title":"' . $row['sim1'] . ' Giá tiền: ' . number_format($row['giaban'] * 1000000) . ' vnđ",
              "image_url":"https://timsim.com/index.php/img?sim=' . $row['sim1'] . '&gia=' . ($row['giaban'] * 1000000) . '&hotline=097.335.7777&domain=WWW.TIMSIM.COM&size3=15&left3=255",
              "subtitle":"Bạn muốn mua sim này nhấn call để gọi cho chúng tôi!",
              "buttons":[
                {
                  "type":"phone_number",
                  "phone_number":"+84973357777",
                  "title":"Call"
                },
                {
                  "type":"element_share"
                }
              ]
            }';

        endwhile;


        echo '{
  "messages":[
    {
      "attachment":{
        "type":"template",
        "payload":{
          "template_type":"generic",
          "elements":[
            
            ' . join(",", $list) . '
          ]
        }
      }
    }
  ]
}';


    } else {
        header('Content-type: application/json');
        echo '{
 "messages": [
   {"text": "Sim có số cuối ' . $soduoi . ' hiện không có bạn vui lòng chọn số khác!"}
  
 ]
}';
    }


} 



