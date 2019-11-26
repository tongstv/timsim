<?php

class sethome
{
    var $sort;
    
    
    function index()
    {
     
     if (!class_exists('db')) {
        require_once "app/lib/mysqli.php";
        }
        $db = new db;
        
        
        
        $cache_key="sethome";
        $cache_path="page/";
        
        $data=cache($cache_key,null,"+1 hour","cache/".$cache_path);
        
        if(empty($data))
        {
            $data=$db->getOne("select * from apps where appcode='sethome' limit 1");
            
            
            
            cache($cache_key,$data,"+1 hour", "cache/".$cache_path);
           
        }
        
        $row=unserialize($data['appconf']);
        
        $_SESSION['sort']=$row['sort'];
        
        if(isset($row['maxrow']))
        $_SESSION['maxrowhome']=$row['maxrow'];
        
        
        if(is_array($row['daily']) AND count($row['daily']) > 0)
        return "WHERE simdl IN(".@join(', ',$row['daily']).")";
        else
        return "WHERE simdl";        
    }
    
    function sort()
    {
        if(isset( $_SESSION['sort']))
        {
        
        if($_SESSION['sort']=='random')
        {
              return "";
        }
        else
        return "ORDER BY giaban ". $_SESSION['sort'];
        
        }
        else
        return "";
    }
    function maxrow()
    {
       if(isset($_SESSION['maxrowhome']) AND $_SESSION['maxrowhome'] > 0) return $_SESSION['maxrowhome'];
       else
       return 100;
        
        

    }
}
