<?php
$starttime = microtime(true);
ini_set('display_errors', 1);
//try {
//create redis instance
$redis = new Redis();

//connect with server and port
$redis->connect('localhost', 6379);
$redis->select(2);




$redis->setOption(Redis::OPT_SCAN, Redis::SCAN_RETRY);


if(isset($_GET['sosim'])):
$it = null;
$start =0;

$res=array();
while($start < 100)
{
    $ret = $redis->scan($it,"data:*:*:*:".$_GET['sosim'].":*",1000);
    
    
    array_push($res,$ret);
    
    $start =+ count($res);
    unset($ret);
    
    if($it > 8000000)break;
}










print_r($res);
$endtime = microtime(true);
echo "<hr>";
printf("Thoi gian tim kiem %f seconds", $endtime - $starttime );
echo "<hr>";
echo $it;
echo "<hr>";

echo count($res);
unset($res);
endif;