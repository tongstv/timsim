<?php
ini_set("display_errors",1);
/**
 * @author stv.vn
 * @copyright 2014
 */
class p extends SmartyBC
{


    function index()
    {
       $db = new db;
    
        
        
 $this->setTemplateDir(TEMPLATE);
        
  


        $where = "WHERE page_group =12";

        if (isset($_GET['keyword']) && !empty($_GET['keyword']))
        {
            $keyword = trim($_GET['keyword']);
            $filed[] = "fullname";


            foreach ($filed as $file_name)
            {
                $like[] = $file_name . " LIKE '%" . $keyword . "%'";
            }
            $where = "WHERE (" . @join(" || ", $like) . ")";
        }

        $num_rows = num_rows_cache("select COUNT(*) AS num_rows FROM page $where");


        $pages = new Paginator($num_rows, 9, array(
            12,
            100,
            250,
            'All'));


        $data = $db->getAll("SELECT * FROM page $where order by id DESC LIMIT $pages->limit_start,$pages->limit_end");
        


 $i=0;
 $data2="";
        foreach($data AS $row)
        {
            $i++;
            $row['stt']=$i;
            
            preg_match_all('/<img[^>]+>/i', $row['page_detail'],$img);
            
       
          
            if(isset($img[0][0]))
            {
               $row['img']=$img[0][0];
            }
           
            $row['page_title']=preg_replace( "/\n\s+/", "\n", rtrim(html_entity_decode(strip_tags($row['page_title']))) );
            $row['page_detail']=preg_replace( "/\n\s+/", "\n", rtrim(html_entity_decode(strip_tags($row['page_detail']))) );
            $data2[]=$row;
        }
        
        $this->assign("data", $data2);

        $this->assign("paging", $pages->display_pages());


        $this->display('p.htm');
    }

}