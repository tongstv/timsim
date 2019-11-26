<?php
$redis = new Redis();
$redis->connect('127.0.0.1', '6379', 20);
$redis->setOption(Redis::OPT_SCAN, Redis::SCAN_RETRY);
$match = 'timsim:*';
$count = 10000;
// 1
// 2
while ($keys = $redis->scan($it, $match, $count)) {
    
   
    		$data= $redis->get($keys);


    // get the keys,so can do what you want
    // mostly use the scan result to del keys
    // because the redis CMD "keys" is terrible.
    // on "keys" cmd could hang on the whole redis server...
    // so replace the "keys" cmd with the "scan"
   // $redis->del($keys);
}
?>