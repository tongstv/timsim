<?php

function num_rows_cache3($sql)
{
    $db=new db;
    
    
    $md5 = md5($sql);
    
  
    
        $r=$db->getOne("select num FROM numrows WHERE id='".$md5."'");
        
        
        if(!isset($r['num']))
        {
            
        
            $sql2 =str_replace(array('from sim','count(*)'),array('from simso','count(DISTINCT sim2)'),strtolower($sql));
            $row =  $db->getOne($sql2);
           
            $num_rows = $row['num_rows'];
        
        
        
            $time=time();
        
         
            $db->query(sprintf("INSERT IGNORE INTO  numrows(id,sqltxt,time,num,last_update) VALUES('%s','%s','%s','%s','%s')",$md5,$sql2,$time,$num_rows, $time));
            
            return $num_rows;
            
            
        }
        else
        {
            return $r['num'];
        }
        
        
    
    
    
}

?>