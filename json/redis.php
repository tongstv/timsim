<?php
$starttime = microtime(true);
set_time_limit(0);
ini_set('memory_limit', '20480M');

ini_set('display_errors', 1);
//try {
//create redis instance
$redis = new Redis();

//connect with server and port
$redis->connect('127.0.0.1', 6379);
$redis->select(0);

$pipeline = $redis->pipeline();


/*

$res = $redis->keys("simso:*:09*888:*");
print_r($res);

$endtime = microtime(true);

printf("<br>Page loaded in %f seconds", $endtime - $starttime);




*/

$db = new mysqli("103.249.103.31", "tksimcard_admin", "@hyn12345",
    "tksimcard_admin");


function hoahong($simdl, $gia)
{
    global $db;

    $res = $db->query("SELECT * FROM hh WHERE dlid=" . $simdl . " AND (dk1 <= " . ($gia *
        1000000) . " AND dk2 > " . ($gia * 1000000) . ") LIMIT 1");

    $row = $res->fetch_array(MYSQLI_ASSOC);
    return $row['pt'];
}

function daily($simdl)
{
    global $db;

    $res = $db->query("SELECT * FROM daily WHERE id=" . $simdl . " LIMIT 1");

    $row = $res->fetch_array(MYSQLI_ASSOC);
    return json_encode($row);
}

$app="tongkhosim_cache";

$count = $db->query("select count(*) from simso");
$count = $count->fetch_row();

$count = $count[0];

$max=10000;
$num = ceil($count/$max);


for ($i = 0; $i < $num; $i++) {

    $bg = $max * $i;

    $query = $db->query("select * from simso limit $bg,$max");

    while ($row = $query->fetch_assoc()) {

/*
        $data = ['sim1' => $row['sim1'], 'simdl' => $row['simdl'], 'gianhap' => $row['gianhap'],
            'hoahong' => hoahong($row['simdl'], $row['gianhap']), 'daily' => daily($row['simdl'])];

        $redis->hmset("simsodep:" . $row['sim2'] . ":" . $row['giaban'] . ":" . $row['mang'] .
            ":" . $row['tong'], $data);
            */

        $pipeline->set($app.":simso:".$row['sim2'],serialize($row));
    }
    $pipeline->exec();
    $query->free();
    unset($row);
    unset($query);
}

$db->close();
