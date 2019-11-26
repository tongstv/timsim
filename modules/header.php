<?php
$stv->setTemplateDir(TEMPLATE);
if(isset($_GET['desktop']) AND $_GET['desktop']==1)
$_SESSION['desktop']=1;
else if(isset($_GET['desktop']) AND $_GET['desktop']==2)
{
    unset($_SESSION['desktop']);
    
}

$stv->assign('desktop',isset($_SESSION['desktop']) ? $_SESSION['desktop'] :0);

$stv->assign("cartcount",isset($_SESSION['mycart']) ? count($_SESSION['mycart']) : 0);
$stv->assign("menu",menu(1));
$stv->assign("menu1",stvmenu(1,"class='stvmenu'"));
$stv->assign("top_menu",menu(18));
$stv->assign("thisdomain",thisdomain);


$stv->assign("menuloai",create_loai($loai['s'],$sloai));

include 'app/share/seo.php';


$seo=seo($_SERVER['REQUEST_URI'],$array1,$array2);
$stv->assign($txt->getPage('header'));
$stv->assign($seo);

$stv->assign("header",getconfig('header'));

$stv->assign($config);
$stv->registerFilter("output", "minify_html");

$stvconfig['date']=date('d/m/Y');

$stv->assign($stvconfig);
if(isset($_GET['styleid']))
{
    $_SESSION['styleid']=trim($_GET['styleid']);
}


function seonav(){
   

global $loai, $seo;


   
   $getdo=isset($_REQUEST['do']) ? $_REQUEST['do'] : "";
   $mang=isset($_REQUEST['network']) ? $_REQUEST['network'] : "";
   $loaiurl=isset($_REQUEST['type']) ? $_REQUEST['type'] : "";
   
   
   $loainame=$loai['s'][$loaiurl];
   
 
   if($getdo=='' || $getdo=='xhome' )
   {
        return '<li class="active">Trang chủ</li>';
   }
   
   
   if($mang AND $loaiurl)
   {
    
      $nav= '<li><a href="'.thisdomain.'">Trang chủ</a></li>';
            $nav .= '<li><a href="'.thisdomain.'/Sim-So-Dep-'.$mang.'.html">'.$mang.'</a></li>';
                   $nav .= '<li class="active">'.$loainame.'</li>';
      return $nav;
    
   }
   
      if($mang)
   {
    
      $nav= '<li><a href="'.thisdomain.'">Trang chủ</a></li>';
            $nav .= '<li class="active">'.$mang.'</a></li>';
                   //$nav .= '<li class="active"><a href="'.thisdomain.'/'.$loaiurl.'/'.$mang.'.html">'.$loainame.'</a></li>';
      return $nav;
    
   }
   
      if($loaiurl)
   {
    $nav= '<li><a href="'.thisdomain.'">Trang chủ</a></li>';
        
        $nav .= '<li class="active">'.$loainame.'</li>';
    
         return $nav;
   }
   
   if($getdo!='')
   {
    
      $nav= '<li><a href="'.thisdomain.'">Trang chủ</a></li>';
        
        $nav .= '<li class="active">'.$seo['title'].'</li>';
    
         return $nav;
   }
   
  
   
   
   
   
   
   return "";
   
   
   
    
}

$canonical = thisdomain. $_SERVER["REQUEST_URI"];

$canonical = str_replace(['index.php','index.htm','index.html'],'',$canonical);


$canonical = preg_replace('/\?page=([0-9]+)/','',$canonical);

$stv->assign("canonical",$canonical);


$URI =$_SERVER["REQUEST_URI"];

if(stristr($URI,'?page'))
{
    
    $URI=explode('?page=',$URI);
    $thispage= $URI[1];
    $stv->assign("thispage",$thispage);
}



$stv->assign("seonav",seonav());
$stv->display("header.htm");
?>