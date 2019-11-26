<?php

/**
 * @author stv.vn
 * @copyright 2014
 */
class sodep extends Smarty
{
    protected $lcs;

    /** view **/
    function index()
    {
        global $db, $mangpos, $kieu,$loai, $config;
       $this->setTemplateDir(TEMPLATE);
        $this->lcs=$this->lc();
  $this->assign($config);
        $where="where sim2";
        if(isset($_SESSION['simtype']))$where.=$_SESSION['simtype'];
        
    
        
        
        if(isset($_GET['network']))$where .=" AND mang=".$mangpos[ucfirst(strtolower($_GET['network']))];
        
        
        
        
             $loaikey = array_keys($loai['s']);
             
        if(isset($_GET['type']) AND (!isset($_GET['network']) || $_GET['network'] == 0))
        {
            
           
            if(!in_array($_GET['type'],$loaikey))
          {
                
               
             echo "<script type='text/javascript'>  window.location='/404.shtml'; </script>";
             
             exit;
              
          }
          
        }
        
        
        
        
        
        
        if(isset($_GET['type']))
        {
        if (is_array($kieu[$_GET['type']]))
        $where.=" AND (".join(" AND ",$kieu[$_GET['type']]).")";
        else
        $where.=" AND (".$kieu[$_GET['type']].")";
        }
        


        if(isset($_SESSION['toggleprice']))$orderby="ORDER BY giaban ".$_SESSION['toggleprice'];
        else
        $orderby="";


 
            $page = explode('?page=',$_SERVER["REQUEST_URI"]);
            
            $page = isset($page[1]) ? $page[1] : 1;
            
           


            $limit = 100; //per page

            if ($page >= 8)
                $offset1 = $limit * $page;
            else
                $offset1 = 0;
                
                 if($page > 30) $offset1=30000;



   include_once "locsim.php";


     if(isset($_GET['network']))
     {
        $use =" use INDEX(mang)";
     }

            $sql = "select sim1, sim2, giaban, mang, tong from sim {$use} {$where} {$orderby} limit $offset1, 800";


       
            $keysql = md5(preg_replace('/limit ([0-9]*)\, 800/','',$sql));
            
         
            
            if(isset($_SESSION['items'][$keysql]))
            {
                $items=$_SESSION['items'][$keysql];
                
               
                
                
                if($page >= 8)
                {
                    $tmpitems = $db->fetch_all_array($sql);
                    
                    foreach($tmpitems AS $row)
                    {
                        
                        if(!in_array($row,$items))
                        {
                         
                          array_push($items,$row);
                        }
                    }
                
                    $_SESSION['items'][$keysql]=$items;
                }
                
            }
            else
            {
                  $items = $db->fetch_all_array($sql);
                  $_SESSION['items'][$keysql]=$items;
            }

          

            
        

            $offset = ($page - 1) * $limit;
            if ($offset < 0)
                $offset = 0;

            $data2 = array_slice($items, $offset, $limit);


            $i = $offset = 0 ? 0 : $offset;
            foreach ($data2 as $r) {
                $i++;

                $r['stt'] = $i;
  
                $data[] = $r;
            }

            $total = count($items); //total items in array
            $totalPages = ceil($total / $limit);

            $paging = ' <ul class="pagination">';

            $purl = "" . preg_replace('/\?page=([0-9]*)/', '', $_SERVER["REQUEST_URI"]);
            if ($page > 1) {
                $paging .= " <li class=\"previous\"><a href=\"{$purl}&page=" . ($page - 1) . "\">Trang trước</a></li>";
            }
            for ($i = 1; $i <= $totalPages; $i++) {


                if ($i == $page) {
                    $paging .= ' <li class="active"><a href="#">' . $i . '</a></li>';
                } else {
                    $paging .= "<li><a href=\"{$purl}?page={$i}\">{$i}</a></li>";
                }


            }

            if ($page < $totalPages) {
                $paging .= "  <li class=\"next\"><a href=\"{$purl}&page=" . ($page + 1) . "\">Trang tiếp</a></li>";
            }
            $paging .= '<ul>';


            $this->assign("data", $data);


            $this->assign("paging", $paging);





        
        if(isset($_GET['type']))
        $name[]=$GLOBALS['loai']['s'][$_GET['type']];
        
        if(isset($_GET['network']))$name[]=$_GET['network'];
        
        $this->assign("name",isset($name) ? @join(" > ",$name) : "");
        $this->assign("nav",navmenu());
          $this->assign("menuloai",create_loai($loai['s'],$sloai));
        $this->assign("thisdomain", thisdomain);
               $print_url="index.php?ajax=sodep&page=".$pages->current_page."&print=true";
        $this->assign("print_url",$print_url);
        $this->registerFilter("output", "minify_html");
        if(isset($_GET['print']))
        {
        $this->assign("header",getPage('print_header'));
        
      
        $this->assign("footer",getPage('print_footer'));
        $this->display("print.htm");
        
        }
        else
        $this->display(temp_file);
    }

}
