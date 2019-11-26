<?php

/*
FILE NAME : config.php
LOCATION : includes/config.php
BASIC DETAILS : This file includes details about the database connections and basic settings.
AUTHOR : Bharat Parmar
VERSION : 1.0
CREATED DATE : 08-12-2016 

*/

//DATABASE DETAILS
define("HOST","localhost");
define("DBNAME","timsimvn_home");
define("DBUSER","timsimvn_home");
define("DBPASSWORD","8U2hp1g8Rv");


// SERVER URL WHERE YOU WANT TO SYCN DATABASE
define("SYNC_URL","http://localhost/bharat/git/syncdb/server2/example.php"); 

//SET TIMEZONE
date_default_timezone_set("Asia/Ho_Chi_Minh");
?>