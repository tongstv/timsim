<?php

class db
{
    var $db;
     var $affected_rows = 0;
    public function __construct()
    {
        $this->db=new mysqli(DB_SERVER,ADM_DB_USER,ADM_DB_PASS,ADM_DB_DATABASE);
        $this->db->query("SET NAMES utf8");
    }
    
    function query($sql)
    {
        $query_id="";
        $query_id=$this->db->query($sql);
    
        if($query_id)
        $this->affected_rows=$this->db->affected_rows;
        return $query_id;
        
    }
    function getOne($sql)
    {
        $row=null;
        $query_id=$this->query($sql);
        if($query_id)
        {
        $row=$query_id->fetch_array(MYSQLI_ASSOC);
        $query_id->free();
        }
        return $row;
        
    }
    
    
    function query_insert($table, $data) {
	$q="INSERT INTO `".$table."` ";
	$v=''; $n='';

	foreach($data as $key=>$val) {
		$n.="`$key`, ";
		$v.= "'".$val."', ";
	}

	$q .= "(". rtrim($n, ', ') .") VALUES (". rtrim($v, ', ') .");";

    $this->query($q);

}

    function getAll($sql)
    {
        $data="";
        $query_id=$this->query($sql);
        
        if($query_id):
        while($row=$query_id->fetch_array(MYSQLI_ASSOC))
        {
            $data[]=$row;
        }
        $query_id->free();
        

        return $data;
        endif;
    }
    function close()
    {
        $this->db->close();
    }
    
}

class dh
{
    var $db;
     var $affected_rows = 0;
    public function __construct()
    {
        $this->db=new mysqli(DB_SERVER,DH_DB_USER,DH_DB_PASS,DH_DB_DATABASE);
        $this->db->query("SET NAMES utf8");
    }
    
    function query($sql)
    {
        $query_id=$this->db->query($sql);
        $this->affected_rows=$this->db->affected_rows;
        return $query_id;
    }
    function getOne($sql)
    {
        $query_id=$this->query($sql);
        
        $row=$query_id->fetch_array(MYSQLI_ASSOC);
        $query_id->free();
        
        return $row;
        
    }
    
    
    function query_insert($table, $data) {
	$q="INSERT INTO `".$table."` ";
	$v=''; $n='';

	foreach($data as $key=>$val) {
		$n.="`$key`, ";
		$v.= "'".$val."', ";
	}

	$q .= "(". rtrim($n, ', ') .") VALUES (". rtrim($v, ', ') .");";

    $this->query($q);

}

    function getAll($sql)
    {
        $query_id=$this->query($sql);
        
        while($row=$query_id->fetch_array(MYSQLI_ASSOC))
        {
            $data[]=$row;
        }
        $query_id->free();
        
        return $data;
    }
    function close()
    {
        $this->db->close();
    }
    
}