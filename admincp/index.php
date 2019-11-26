<?php
session_start();
ini_set("display_errors",0);
header('Content-Type: text/html; charset=utf-8');
require_once "adminauth.php";
require_once "app/lib/cache.php";
require_once "app/lib/auth.php";

require_once "../config.inc.php";
require_once "app/lib/Database.class.php";
$db=new Database(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);
$db->connect();
$db->query("SET NAMES utf8");
require_once "app/lib/paginator.class.php";
require_once "app/lib/libs/SmartyBC2.class.php";
require_once "app/lib/function.php";




if(isset($_REQUEST['do']))
$do=$_REQUEST['do'];
else
$do="";
if(isset($_REQUEST['ajax']))
$ajax=$_REQUEST['ajax'];
else
$ajax="";


    if(!empty($do))
    $pro=$do;
    else
    $pro=$ajax;
    
    $pro2=explode('.',$pro);
    if(isset($pro2[1]));
    $pro=$pro2[0];
    
    if(isset($_SESSION['modallow']))
    {
        
        $_SESSION['lock']=array_merge($_SESSION['lock'],$_SESSION['modallow']);
        
    }
    
 
    if(isset($_SESSION['lock']) AND !empty($pro)):
    if(!in_array($pro,$_SESSION['lock']))
    {
         if($ajax)
        $ajax="lock.mod";
        else
        $do="lock.mod";
    }
    endif;

    


        
$control="home";
$method="index";
$stv =new Smarty;
if ($ajax)
{
    $control=$ajax ? $ajax : $control;
    
    define("temp_file",$control.".htm");
    
    $ex=explode('.',$control);
    if(isset($ex[1]))
    {
        $method=$ex[1];
        $control=$ex[0];
    }
    
    
    
    if($control)
    {
    require_once "app/adm/modules/".$control.".php";
    $Class_name = ucfirst($control);
	$instance = new $Class_name;
	if (!is_callable(array($instance, $method))) {
		die("Không thể gọi class:  $method");
	}
	$instance->$method();
    }
    else
    {
        die("Không thể gọi file: $control");
    }
}
else
{
  
    $control=$do ? $do : $control;
    define("temp_file",$control.".htm");
    $ex=explode('.',$control);
    
    if(isset($ex[1]))
    {
        $method=$ex[1];
        $control=$ex[0];
    }
    if($control)
    {
    require_once "app/adm/modules/header.php";
    require_once "app/adm/modules/".$control.".php";
    $Class_name = ucfirst($control);
	$instance = new $Class_name;
	if (!is_callable(array($instance, $method))) {
		die("Không thể gọi class:  $method");
	}
	$instance->$method();
    require_once "app/adm/modules/footer.php";
    }
    else
    {
        die("Không thể gọi file: $control");
    }
}
$db->close();
?>
