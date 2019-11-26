<?php
session_start();
include "../conf2.php";

$mysqli = new mysqli("localhost", $admin_db_db, $admin_db_pass, $admin_db_db) or die('not connect');



if (isset($_GET['soduoi'])) {


    $soduoi = $_GET['soduoi'];
    $soduoi = trim($soduoi);

    $soduoi = str_replace("*", ".*", $soduoi);


    $giatu = trim(strtolower($_GET['giatu']));
    $giaden = trim(strtolower($_GET['giaden']));


    if (stristr($giatu, 'tr')) $giatu = preg_replace('/[^0-9]/', '', $giatu) * 1000000;
    if (stristr($giaden, 'tr')) $giaden = preg_replace('/[^0-9]/', '', $giaden) * 1000000;


  if($giatu > 0 AND $giaden > 0)
  {
       $where_gia = $giatu < $giaden ? " AND (giaban >= " . ($giatu) . " AND giaban <= " . ($giaden) . ")" : "";
  }

    
    $page = isset($_GET['page']) ? $_GET['page'] : "";
    
  
 
   if($page)
    {
        
        $bg=50*($page-1);
        
       
  
    
    }
    else
    {
        $bg=0;
        
        $page=1;
    }

        $km= isset($_GET['km']) ? $_GET['km'] :0;
        
        if($km ==1)
        {
            
            $where_km=" AND simdl=11201";
             $res = $mysqli->query("select * from simso where sim2 ".$where_km." limit $bg, 50");
             
           
             
      
        }
        else
        

        {
            
        
                $res = $mysqli->query("select * from simso where sim2 LIKE '%" . $soduoi . "'" . $where_gia . " limit $bg, 50");
                
          
                
                
        }
        
        

  //  $n=$mysqli->query("select * from simso where sim2 LIKE '%" . $soduoi . "' " . $where_gia . "");
    
    
    $num =1;


    



    if ($res->num_rows) {

        while ($row = $res->fetch_array(MYSQLI_ASSOC)):


            $list[] = $row['sim1'].' '.$row['giaban'].'tr';

        endwhile;


        echo '{
 "messages": [
  {"text": "'.join("\\n",$list).'"},
       
       {
      "attachment": {
        "type": "template",
        "payload": {
          "template_type": "button",
          "text": "Trang: ('.$page.')",
          "buttons": [
            {
              "type": "show_block",
              "block_names": ["xem tiếp"],
              "title": "Xem tiếp >>",
               "set_attributes": {
                    "page": "'.($page+1).'"
                    }
          
            },
            {
              "type": "show_block",
              "block_names": ["xem tiếp"],
              "title": "<< Quay lại",
               "set_attributes": {
                    "page": "'.($page-1).'"
                    }
          
            },
            
            {
              "type": "show_block",
              "block_names": ["đặt mua"],
              "title": "ĐẶT MUA",
               "set_attributes": {
                    "datmua": "true"
                    }
          
            }
            
          ],
          
          
   
   "quick_replies": [
        {
          "title": "Tìm sim khác",
        
          
          "block_names": ["Tìm sim"]
        }
        ]
        }
      }
    }

   
   ]
}';


    } else {
        header('Content-type: application/json');
        echo '{
 "messages": [
   {"text": "Sim có số cuối ' . $soduoi . ' hiện không có bạn vui lòng chọn số khác!",
   "buttons": [
            {
              "type": "show_block",
              "block_names": ["Tìm sim"],
              "title": "Tìm sim khác"
            }],
   
   "quick_replies": [
        {
          "title": "Tìm sim khác",
        
          
          "block_names": ["Tìm sim"]
        }
        ]
   
   
   
   }
  
 ]
}';
    }


} 
/*
 "buttons": [
            {
              "type": "show_block",
              "block_names": ["datmua"],
              "title": "Đặt mua"
            }],
            
              "set_attributes": {
            "page": "1"
          },
             "buttons": [
            {
              "type": "show_block",
              "block_names": ["xemtiep"],
              "title": "Xem tiếp"
            }]
            
            
            
                ,
      
    
            
            
   {
       
    "text": "Bạn muốn?",
     "quick_replies": [
        {
          "title": "Xem tiếp",
          "set_attributes": {
            "page": "'.($page+1).'"
          },
          
          "block_names": ["xem tiếp"]
        },
        
         {
          "title": "Quay lại",
          "set_attributes": {
            "page": "'.($page-1).'"
          },
          
          "block_names": ["xem tiếp"]
        },
        
        
        {
          "title": "Đặt mua",
          "set_attributes": {
            "datmua": "true"
          },
              "block_names": ["đặt mua"]
        }
      ]
   }
            */


