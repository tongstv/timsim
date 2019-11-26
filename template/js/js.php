<?php
header('Content-Type: application/javascript');
require 'min.php';
if(file_exists("java.js"))
{
    echo JSMin::minify(file_get_contents("java.js"));
}
else
{
    


$files=array();
$files[]='/apps/js/jquery.min.js';
$files[]='/apps/js/bootstrap.min.js';
$files[]='/apps/js/scriptlibs.js';
$files[]='/apps/js/script.min.js';
$files[]='/apps/js/menu.min.js';
$files[]='/script.js';

$data="";
foreach($files AS $file)
{
    
    $data .= @file_get_contents("http://".$_SERVER["HTTP_HOST"].$file);
}
@file_put_contents("java.js",$data);
echo JSMin::minify($data);
}