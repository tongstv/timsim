<?php
class city
{
    function citys()
    {
        global $db;
        
        
        $row=$db->fetch_all_array("SELECT * FROM province ORDER BY provinceid ASC");
        return $row;
    }
    
    function quanhuyen($id)
    {
        global $db;
        
        $row=$db->fetch_all_array("SELECT * FROM district WHERE provinceid='".$id."' ORDER BY districtid ASC"); 
        return $row; 
        
    }
    function phuongxa($id)
    {
        global $db;
        
        $row=$db->fetch_all_array("SELECT * FROM ward WHERE districtid='".$id."' ORDER BY wardid ASC");
        
        return $row;
        
    }
}