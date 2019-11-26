<?php
class api extends db
{
    function index()
    
    {


       
        $fp = fopen('php://input', 'r');
        $raw = stream_get_contents($fp);
        $data = json_decode($raw, true);
        
        
        if(is_array($data['table']))
        {
            $result=[];
            
           foreach($data['table'] AS $table)
           {
            
                $tab = $this->getALl("select * from ".$table);
                
                
                $result[$table] = $tab;
           }    
            
           $result['suceess']=1;
       
        header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
        header("Content-type: application/json; charset=utf-8");
       
        echo json_encode($result);     
        }


    }
}