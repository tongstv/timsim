<?php
/**
 * @author stv.vn
 * @copyright 2014
 */
class doisim extends Smarty
{

	/** view **/
	function index()
	{
	           $this->setTemplateDir(TEMPLATE);
	global $db;




   
    


    if(isset($_POST['list1']))
    {
        
        
        $daucu =explode(',',$_POST['daucu']);
        
        $daumoi =explode(',',$_POST['daumoi']);
        
        
        foreach($daucu AS $key => $val)
        {
            
            
            $dau1 = trim($val);
            
            $dau2 = trim($daumoi[$key]);
            
            $array[$dau1] = $dau2;
            
            
        }
        
        $list = explode("\n",$_POST['list1']);
        
        
        foreach($list AS $line)
        {
        
            
            $line=trim($line);
            
            
            
            $dau = substr($line,0,4);
            
            $leng = strlen($line) - 4;
            $duoi = substr($line,-$leng,$leng);
            
            $data2[] = str_replace(array_keys($array),array_values($array),$dau).$duoi;
            
                
        }
        
    }
    if(isset($data2)) $data= join("\n",$data2);
    
    if(isset($data))
    {
        $this->assign("data",$data);
    }
    
	$this->display(temp_file);
	}



}