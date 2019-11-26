<?php
function location($url)
{
    echo"<script>window.location='".$url."'</script>";
    exit();
}

function auth()
{
    if(!isset($_COOKIE['uid']))
    {
    if(isset($_COOKIE['uid']))$userid=$_COOKIE['uid'];
    else
    $userid="";
    
    if(empty($user))
    {
        if(isset($_GET['do']))$do=$_GET['do'];
        if(isset($_GET['ajax']))$do=$_GET['ajax'];
    
        if(isset($do) && $_GET['do']!='user.login')
        {
        location("index.php?do=user.login");
        exit;
        }
    }
    }
}