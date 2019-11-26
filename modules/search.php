<?php
function array_merge_recursive_distinct ( array &$array1, array &$array2 )
{
  $merged = $array1;

  foreach ( $array2 as $key => &$value )
  {
    if ( is_array ( $value ) && isset ( $merged [$key] ) && is_array ( $merged [$key] ) )
    {
      $merged [$key] = array_merge_recursive_distinct ( $merged [$key], $value );
    }
    else
    {
      $merged [$key] = $value;
    }
  }

  return $merged;
}
function cuspage()
{
    
    
}

class search extends smarty
{

    function namsinh($d, $m, $y, $x)
    {
        $where = " AND (";
        $where .= "RIGHT(sim2,8)='" . $d . $m . $y . "'"; //1 DK 1 01.09.1990
        $where .= " || RIGHT(sim2,7)='" . substr($d, -1, 1) . $m . $y . "'"; //DK 2 1.09.1990
        if ($m < 10)
            $where .= " || RIGHT(sim2,7)='" . $d . substr($m, -1, 1) . $y . "'"; //DK 3 01.9.1990
        if ($m < 10 && $d < 10)
        {
            $where .= " || RIGHT(sim2,6)='" . substr($d, -1, 1) . substr($m, -1, 1) . $y .
                "'"; //DK4 1.9.1990
            $where .= " || RIGHT(sim2,6)='" . $d . $m . substr($y, -2, 2) . "'"; //DK5 01.09.90
        }
        if ($d < 10)
            $where .= " || RIGHT(sim2,5)='" . substr($d, -1, 1) . $m . substr($y, -2, 2) .
                "'"; //DK6 1.09.90
        if ($m < 10)
            $where .= " || RIGHT(sim2,5)='" . $d . substr($m, -1, 1) . substr($y, -2, 2) .
                "'"; //DK7 01.9.90
        if ($m < 10 && $d < 10)
            $where .= " || RIGHT(sim2,4)='" . substr($d, -1, 1) . substr($m, -1, 1) . substr($y,
                -2, 2) . "'"; //DK8 1.9.90
        $where .= " || RIGHT(sim2,4)='" . $y . "'"; //DK 9 VD: 1990
        $where .= ")";

        if ($x == 2)
        {
            $where = " AND (";

            if ($m < 10)
                $where .= "RIGHT(sim2,7)='" . $d . substr($m, -1, 1) . $y . "'"; //DK 3 01.9.1990
            if ($m < 10 && $d < 10)
            {
                $where .= " || RIGHT(sim2,6)='" . substr($d, -1, 1) . substr($m, -1, 1) . $y .
                    "'"; //DK4 1.9.1990
                $where .= " || RIGHT(sim2,6)='" . $d . $m . substr($y, -2, 2) . "'"; //DK5 01.09.90
            }

            if ($d < 10)
                $where .= " || RIGHT(sim2,5)='" . substr($d, -1, 1) . $m . substr($y, -2, 2) .
                    "'"; //DK6 1.09.90
            if ($m < 10)
                $where .= " || RIGHT(sim2,5)='" . $d . substr($m, -1, 1) . substr($y, -2, 2) .
                    "'"; //DK7 01.9.90
            if ($m < 10 && $d < 10)
                $where .= " || RIGHT(sim2,4)='" . substr($d, -1, 1) . substr($m, -1, 1) . substr($y,
                    -2, 2) . "'"; //DK8 1.9.90
            if($where!=' AND (')
            $where .= " || RIGHT(sim2,4)='" . $y . "'"; //DK 9 VD: 1990
            else 
            $where .= " RIGHT(sim2,4)='" . $y . "'"; //DK 9 VD: 1990
            $where .= ")";
        }
        else if($x == 1)
        {
            $where = " AND (";
            $where .= "RIGHT(sim2,8)='" . $d . $m . $y . "'"; //1 DK 1 01.09.1990
            $where .= " || RIGHT(sim2,7)='" . substr($d, -1, 1) . $m . $y . "'"; //DK 2 1.09.1990
            if ($m < 10)
                $where .= " || RIGHT(sim2,7)='" . $d . substr($m, -1, 1) . $y . "'"; //DK 3 01.9.1990

            $where .= " || RIGHT(sim2,4)='" . $y . "'"; //DK 9 VD: 1990

            $where .= ")";

        }
        return $where;
    }

    function index()
    {
          global $db, $loai, $config, $txt;
        $this->assign($txt->getPage('main1'));
        $this->setTemplateDir(TEMPLATE);
        $lc = $this->lc();

  $this->assign($config);
        if ($lc):


            // TODO:

            if (isset($_GET['sim']))
            {

                $txtsim = $_GET['sim'];

                $txtsim = str_replace(array('.', ' '), array('', ''), $txtsim);
                if ($txtsim != "")
                    $this->assign("thiskey", $txtsim);
                $spot = strpos($txtsim, "*");
                $slen = strlen($txtsim);
                if (stristr($txtsim, "*") === false)
                {
                    $txtsim = str_replace(array(
                        'x',
                        'X',
                        '*'), array(
                        '[0-9]',
                        '[0-9]',
                        '.*'), $txtsim);
                    $where = "WHERE sim2 rlike'.*" . $txtsim . ".*'";
                } else
                {
                    $txtsim = str_replace(array(
                        'x',
                        'X',
                        '*'), array(
                        '[0-9]',
                        '[0-9]',
                        '.*'), $txtsim);
                    if ($spot == 0)
                        $where = "WHERE sim2 rlike '" . $txtsim . "$'";
                    elseif ($spot == ($slen - 1))
                        $where = "WHERE sim2 rlike '^" . $txtsim . "'";
                    else
                        $where = "WHERE sim2 rlike '^" . $txtsim . "$'";
                }
            } else
            {
                $where = "where sim2 IS NOT NULL";
            }

            // TODO:

            if (isset($_GET['n']) and is_array($_GET['n']))
            {
                $vv = "";
                foreach ($_GET['n'] as &$v)
                {
                    $vv .= $v;
                }
                $where .= " AND sim2 NOT rlike'[" . $vv . "]'";
            }


            // TODO: Mạng

            if (isset($_GET['date']))
            {
                $date = urldecode($_GET['date']);
                $date = explode("/", $date);

                $where .= $this->namsinh($date[0], $date[1], $date[2], $_GET['dtp']);
            }
            if (isset($_GET['network']) and $_GET['network'])
            
            {
            
                if(is_numeric($_GET['network']))
                $where .= " AND mang=" . (int)$_GET['network'];
                else
                {
                    global $mangpos;
                    $where .= " AND mang=" . (int)$mangpos[$_GET['network']];
                }

            }
            // TODO:  Theeo giá


        if(isset($_GET['dang']))
        {
        global $kieu;
        if (is_array($kieu[$_GET['dang']]))
        $where.=" AND (".join(" AND ",$kieu[$_GET['dang']]).")";
        else
        $where.=" AND (".$kieu[$_GET['dang']].")";
        }
        
        
            if (isset($_GET['giatu']) && isset($_GET['den']))
            {
                $giatu = stringtonumber($_GET['giatu']);
                $den = stringtonumber($_GET['den']);

                if ($den > $giatu)
                    $where .= " AND (giaban >= " . ($giatu / 1000000) . " AND giaban <= " . ($den /
                        1000000) . ")";


            }

            if (test == 1)
                echo $where;

            if (isset($_GET['type']))
                $where .= " AND stype=" . $_GET['type'];
           
           

            
            
            

            if (isset($_GET['tongdiem']) and isset($_GET['tongnut']))
            {

                if ((int)$_GET['tongdiem'] > 0)
                    $where .= " AND tong=" . (int)$_GET['tongdiem'];
                else
                    if ((int)$_GET['tongnut'] > 0)
                    {
                        if ((int)$_GET['tongnut'] == 10)
                            $_GET['tongnut'] = 0;
                        $where .= " AND right(tong,1)=" . (int)$_GET['tongnut'];
                    }
            }



            if (isset($_SESSION['toggleprice']))
                $orderby = "ORDER BY giaban " . $_SESSION['toggleprice'];
            else
                $orderby = "";





            $page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;


            $limit = 100; //per page

            if ($page >= 8)
                $offset1 = $limit * $page;
            else
                $offset1 = 0;

    
            if($page > 30) $offset1=30000;


            include_once "locsim.php";


            if(isset($_get['tongdiem']))
            {
                $use ="use INDEX(tong)";
            }
        
            
            $sql = "select sim1, sim2, giaban, mang, tong from sim {$use} {$where} {$orderby} limit $offset1, 800";


       
            $keysql = md5(preg_replace('/limit ([0-9]*)\, 800/','',$sql));
            
            
            if(isset($_SESSION['items']))
            {
                
                foreach($_SESSION['items'] AS $skey => $sval)
                {
                    if($skey != $keysql)
                    {
                        unset($_SESSION['items'][$skey]);
                    }
                }
            }
            
         
            
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

            $purl = "?" . preg_replace('/&page=([0-9]*)/', '', $_SERVER["QUERY_STRING"]);
            if ($page > 1) {
                $paging .= " <li class=\"previous\"><a href=\"{$purl}&page=" . ($page - 1) . "\">Trang trước</a></li>";
            }
            for ($i = 1; $i <= $totalPages; $i++) {


                if ($i == $page) {
                    $paging .= ' <li class="active"><a href="#">' . $i . '</a></li>';
                } else {
                    $paging .= "<li><a href=\"{$purl}&page={$i}\">{$i}</a></li>";
                }


            }

            if ($page < $totalPages) {
                $paging .= "  <li class=\"next\"><a href=\"{$purl}&page=" . ($page + 1) . "\">Trang tiếp</a></li>";
            }
            $paging .= '<ul>';


            $this->assign("data", $data);


            $this->assign("paging", $paging);
            
            
                                                



            if(isset($_GET['sim']))
            $name[]="Tìm sim: ".$_GET['sim'];
             $name1=isset($_GET['sim']) ? $_GET['sim'] : "";
        $this->assign("sim",$name1);
       
               $pagegoimua2=getPage('nosim1');
        $pagegoimua2['nosim1']['title']=str_replace('#sim3#',$name1,$pagegoimua2['nosim1']['title']);
        $pagegoimua2['nosim1']['detail']=str_replace('#sim3#',$name1,$pagegoimua2['nosim1']['detail']);
        $this->assign($pagegoimua2);
            
            if(isset($_GET['network']))
           {
                  global $mangpos;
            $netw= strtolower(ucfirst($_GET['network']));
      
            
            if(isset($mangpos[$netw]))$_GET['network']=$mangpos[$netw];
                       
            
            if(is_numeric($_GET['network']) AND $_GET['network']!=0)
            {
            foreach($GLOBALS['mangpos'] AS $k => $v)
            {
                if($v==$_GET['network'])
                {
                    if($_GET['network'])
                    $name[]="Mạng ".$k;
                }
            }
            }
            else
            {
                if(isset($_GET['network']) AND $_GET['network'])
                $name[]="Mạng ".$_GET['network'];
            }
           }
           if(isset($_GET['giatu']) AND isset($_GET['den']))
           {
            $gtu=stringtonumber($_GET['giatu']);
            $gden=stringtonumber($_GET['den']);
            
            if($gden > $gtu)$name[]="Giá từ ".number_format($gtu)." đến ".number_format($gden);
           }
          
            $this->assign("name",isset($name) ? @join(" ",$name) : "");

            $this->assign("thisdomain", thisdomain);
$this->assign("nav",navmenu());
  $this->assign("menuloai",create_loai($loai['s'],$sloai));
$this->registerFilter("output", "minify_html");

if(isset($_GET['print']))
        {
        $this->assign("header",getPage('print_header'));
        
      
        $this->assign("footer",getPage('print_footer'));
        $this->display("print.htm");
        
        }
        else
            $this->display(temp_file);

        endif;
    }
}
