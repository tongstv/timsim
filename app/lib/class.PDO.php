<?php
//define('CRON_DB_USER', "root");
//define('APP','/usr/local/lib/php/app/lib/');
//define('APP_LIB','/usr/local/lib/php/app/lib/');
//define('APP_SHARE','/usr/local/lib/php/app/share/');
//define('CRON_DB_PASS', "HC35H7Qv");

#include APP_LIB."Error.php";

if(!class_exists('Database')):
class Database {


var $server   = ""; //database server
var $user     = ""; //database login name
var $pass     = ""; //database login password
var $database = ""; //database name
var $pre      = ""; //table prefix


#######################
//internal info
var $error = "";
var $errno = 0;

//number of rows affected by SQL query
var $affected_rows = 0;

var $link_id = 0;
var $query_id = 0;


#-#############################################
# desc: constructor
function Database($server, $user, $pass, $database, $pre=''){
	$this->server=$server;
	$this->user=$user;
	$this->pass=$pass;
	$this->database=$database;
	$this->pre=$pre;
}#-#constructor()


#-#############################################
# desc: connect and select database using vars above
# Param: $new_link can force connect() to open a new link, even if mysql_connect() was called before with the same parameters
function connect($new_link=false) {

       

   
    
    try {
     $this->link_id=new PDO("mysql:host=$this->server;dbname=$this->database;charset=utf8", $this->user, $this->pass, array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    
    }
    catch(PDOException $e) {
    echo $e->getMessage();
}

	$this->server='';
	$this->user='';
	$this->pass='';
	$this->database='';
  
}#-#connect()


#-#############################################
# desc: close the connection
function close() {
	
    $this->link_id=NULL;
}#-#close()


#-#############################################
# Desc: escapes characters to be mysql ready
# Param: string
# returns: string
function escape($string) {
	if(get_magic_quotes_runtime()) $string = stripslashes($string);
	return $this->link_id->quote($string);
}#-#escape()


#-#############################################
# Desc: executes SQL query to an open connection
# Param: (MySQL query) to execute
# returns: (query_id) for fetching results etc
function query($sql) {
	// do query

    $query_id=$this->link_id->prepare($sql);
    $query_id->execute();

	
	$this->affected_rows = $query_id->rowCount();

	return $query_id;
}#-#query()

function num_rows($sql)
{

    $row="";
    
    $row=$this->query_first($sql);
    
    
    
    return isset($row['num_rows']) ?  $row['num_rows'] : 0;
}

#-#############################################
# desc: fetches and returns results one line at a time
# param: query_id for mysql run. if none specified, last used
# return: (array) fetched record(s)
function fetch_array($query_id=-1) {



	if ($query_id) {
	   
    
		$record = $query_id->fetch(PDO::FETCH_ASSOC);
	}
	return $record;
}


#-#############################################
# desc: returns all the results (not one row)
# param: (MySQL query) the query to run on server
# returns: assoc array of ALL fetched results
function fetch_all_array($sql) {
	$query_id = $this->link_id->prepare($sql);
    $query_id->execute();
	$out = array();

	while ($row = $query_id->fetch(PDO::FETCH_ASSOC)){
		$out[] = $row;
	}

	$query_id->closeCursor();
	return $out;
}#-#fetch_all_array()


#-#############################################
# desc: frees the resultset
# param: query_id for mysql run. if none specified, last used
function free_result($query_id=-1) {

$query_id->closeCursor();
}#-#free_result()


#-#############################################
# desc: does a query, fetches the first row only, frees resultset
# param: (MySQL query) the query to run on server
# returns: array of fetched results
function query_first($query_string) {
	$query_id = $this->link_id->prepare($query_string);  
	
    $query_id->execute();

    if($query_id)
    {    
    $row=$query_id->fetch(PDO::FETCH_ASSOC);
    $this->affected_rows=$query_id->rowCount();
    
    $query_id->closeCursor();
    }
    else
    $row="";
    return $row;
    
    
}


#-#############################################
# desc: does an update query with an array
# param: table (no prefix), assoc array with data (doesn't need escaped), where condition
# returns: (query_id) for fetching results etc
function query_update($table, $data, $where='1') {
	$q="UPDATE `".$table."` SET ";

	foreach($data as $key=>$val) {
		if(strtolower($val)=='null') $q.= "`$key` = NULL, ";
		elseif(strtolower($val)=='now()') $q.= "`$key` = NOW(), ";
        elseif(preg_match("/^increment\((\-?\d+)\)$/i",$val,$m)) $q.= "`$key` = `$key` + $m[1], "; 
		else $q.= "`$key`='".$val."', ";
	}

	$q = rtrim($q, ', ') . ' WHERE '.$where.';';
    $query_id=$this->link_id->query($q);
    
    

    if($query_id)
    {
        $this->affected_rows=$query_id->rowCount();
       return $this->link_id->lastInsertId();
    }
	else
    {
        return false;
    }
}#-#query_update()


#-#############################################
# desc: does an insert query with an array
# param: table (no prefix), assoc array with data
# returns: id of inserted record, false if error
function query_insert($table, $data) {
	$q="INSERT INTO `".$table."` ";
	$v=''; $n='';

	foreach($data as $key=>$val) {
		$n.="`$key`, ";
		if(strtolower($val)=='null') $v.="NULL, ";
		elseif(strtolower($val)=='now()') $v.="NOW(), ";
		else $v.= "'".$val."', ";
	}

	$q .= "(". rtrim($n, ', ') .") VALUES (". rtrim($v, ', ') .");";

    $query_id=$this->link_id->prepare($q);
	if($query_id->execute()){
		//$this->free_result();
        
        $this->affected_rows=$query_id->rowCount();
		return $this->link_id->lastInsertId();
	}
	else return false;

}#-#query_insert()




}
endif;
?>