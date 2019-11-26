<?php 
session_start();
header('Content-type: text/css');
ob_start("compress");

    function compress( $minify ) 
    {
	/* remove comments */
    	$minify = preg_replace( '!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $minify );

        /* remove tabs, spaces, newlines, etc. */
    	$minify = str_replace( array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $minify );
    		
        return $minify;
    }

    include('bootstrap.min.css');
    
    

include('mega-menu.css');

include "luxbar.css";
#include "menu.min.css";
include "tongstv.css";
include "hieustv.css";
include "newmenu.css";
include "select2.css";


if(isset($_GET['styleid']) OR $_SESSION['styleid'])
{
    if(isset($_GET['styleid']))
    $_SESSION['styleid']=$_GET['styleid'];
    $style=trim($_SESSION['styleid']).".css";
       include($style);
}
else
{
     include('style.css');  
}
 

//    include('min.css');
       
      

ob_end_flush();