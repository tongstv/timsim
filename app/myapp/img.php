<?php
if (isset($_SERVER["REQUEST_URI"]) and strstr($_SERVER["REQUEST_URI"],'index.php/img')) {
ini_set("display_errors",1);


header('Content-type: image/png');
$hotline=isset($_REQUEST['hotline'])? $_REQUEST['hotline']: "";

$domain=isset($_REQUEST["domain"]) ? $_REQUEST["domain"] : "";


$sim=isset($_REQUEST['sim']) ? $_REQUEST['sim'] : "";
$gia=isset($_REQUEST['gia']) ? $_REQUEST['gia'] : "";
$size3=isset($_REQUEST['size3']) ? $_REQUEST['size3'] : 13;
$left3=isset($_REQUEST['left3']) ? $_REQUEST['left3'] : 220;

$sim=preg_replace('/[^0-9,]/','',$sim);


if($gia)
{
    $gia=number_format($gia,0,',','.')."%20%C4%91";
}
else
{
    $gia="Call";
}




readfile("http://img.stv.vn/img.php?text3=".$domain."&text4=HOTLINE%3A%20".$hotline."&text1=".$sim."&text2=Gi%C3%A1:%20".$gia."&size3=".$size3."&left3=".$left3);



}
