<?php
header('Content-Type: text/html; charset=utf-8');
ini_set("display_errors", 1);
include "config.php";
$bigQuery = new Google\Cloud\BigQuery\BigQueryClient([
    'keyFilePath' => __DIR__ . '/891b9da07620.json'
]);

// Get an instance of a previously created table.
$dataset = $bigQuery->dataset('simso');
$table = $dataset->table('checksim');

// Authenticating with a keyfile path.
$storage = new Google\Cloud\Storage\StorageClient([
    'keyFilePath' => './891b9da07620.json',
    'projectId' => 'valid-alpha-253206'
]);

$storage->registerStreamWrapper();

function hoahong($gianhap, $hoahong)
{
    $gianhap = $gianhap*1000000;

    if(is_array($hoahong))
    {
        foreach ($hoahong as $row) {
            

        if(is_array($row))
        {
              if($gianhap >= (int) $row['dk1'] AND $gianhap <= (int) $row['dk2'])
            {
                return (int)$row['pt']."%";
            }
            print_r($row);
        }
          
        }
    }

}
function sendmess($info, $row)
{
    $info = json_decode($info, true);



    $hoahong = hoahong($info['data']['gianhap'],$info['hh']);
    $daily = $info['daily'];


    $info = $info['data'];

    $thongtin = $info['sim1'] . " " . number_format($info['gianhap'] * 1000000, 0, ".", ".") . "=============";
    $thongtin .= "Hoa hồng:=============".$hoahong;
    $thongtin .= "Đại lý: " . $daily['mobile'] . "=============";
    $thongtin .= "Kho:" . $daily['city'] . "=============";
  	$thongtin .= "Cập nhật: " . date('d/m/Y', $daily['last_update']);



$data=array('api' => 'STV8cc343c2b119edc706a245e7de1da2','id' => (string) $row['fbid'], 'page_id' =>'2110930112489638', 'message' => array('text' => (string) $thongtin));

$postdata=json_encode($data);



$url= "https://stv.ai/api";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($postdata)));
$result = curl_exec($ch);
curl_close($ch);
$json=json_decode($result,true);

if($json['result']['message_id'])return true;
else {
	 return false;
}


  
}



// Run a query and inspect the results.
$queryJobConfig = $bigQuery->query(
    'SELECT sosim, fbid FROM `valid-alpha-253206.simso.checksim`  where send is Null AND sosim is Not Null GROUP BY sosim, fbid'
);
$queryResults = $bigQuery->runQuery($queryJobConfig);


foreach ($queryResults as $row) {
    

    if (file_exists("gs://stvvn/" . $row['sosim'])) {


$info = file_get_contents("gs://stvvn/" . $row['sosim']);



        if (sendmess($info, $row) === true) {

        	

        
            $bigQuery->runQuery('UPDATE `valid-alpha-253206.simso.checksim` SET send =1  where sosim  = "' . $row['sosim'] . '"');
        }


    }
}