<?php

class querycache extends db
{
    function anhsim($data=null)
    {
       
        $str='<div id="anhsim"></div>';
        
          $list=explode("-",$data);
          
          if(isset($list[0]))
          {
             $hotline=$list[0];
          
          $html ='&hotline='.$hotline;
          }
          
          if(isset($list[1]))
          {
           
           $html .='&domain='.$list[1]; 
          }
          
          if(isset($list[2]))
          {
            $html .='&size3='.$list[2];
          }
          if(isset($list[3]))
          {
            $html .='&left3='.$list[3];
          }
         
         if(isset($list[4]))
         {
            $width='width="'.$list[4].'"';
         }
          
                  
        $str .= <<<EOF
        
        <script type='text/javascript'>
        var d={};
        function fbshareCurrentPage()
    {window.open("https://www.facebook.com/sharer/sharer.php?s=100&p[url]="+encodeURIComponent(window.location.href)+"&p[title]="+encodeURIComponent(document.title)+"&p[images][0]="+encodeURIComponent(d.img)+"", '', 
    'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
    return false; }
function windowload()
{
    var datasim={};

  data=$('#ordered input[type="hidden"]');
            
            var gia="";
            data.each(function( index, element )
            {
                if(index==1)
                {
                  
                     var sim=$(element).attr('name').replace(/[^0-9]/g,'');
                     var gia=$(element).attr('value');
                     datasim.sim=sim;
                     datasim.gia=gia;
                
            
            
            if (location.protocol != 'https:')
{
    var http="http://";
}
else
{
    var http="https://";
}
d.img=http+document.domain+'/index.php/img?sim='+datasim.sim+'&gia='+datasim.gia+'{$html}';
$("meta[property='og:url']").attr("content", window.location.href);
$("meta[property='og:image']").attr("content", d.img);
                }
               
            }
            );


var imgdata='<img {$width} class="center-block img-responsive" alt="Sim '+datasim.sim+'" src="/index.php/img?sim='+datasim.sim+'&gia='+datasim.gia+'{$html}">';


$("#anhsim").append(imgdata);



}
window.addEventListener ? window.addEventListener("load",windowload,false) : window.attachEvent && window.attachEvent("onload",windowload);
</script>

<a href="javascript:fbshareCurrentPage()" target="_blank" alt="Share on Facebook">Facebook</a>
EOF;
      
        
       
       
        
        return $str;        
        
    }
 
    function phannhom()
    {
        $data=$this->getAll("select * FROM simnha_phannhom");
        
        foreach($data AS $row)
        {
            $link .= "<li class='list-group-item'><a href=\"/loai/".$row['url']."\">".$row['tenphannhom']."</a></li>";
        }
        
        if($link)
        return '<ul class="list-group" style="padding: 0; margin: -15px;" id="phannhom">'.$link.'</ul>';
        else
        return '';
    }
    function simgiamgia($id=null)
    {
        global $db;
        if($id!=null)
        {
            
            ob_start();
            
            
            $list=explode("-",$id);
            
            if(intval($list[0]) > 0 AND intval($list[1]) > 0)
            {
                
                $giamgia=intval($list[1]);
                
                if(isset($list[2]) AND $list[2]!='')$order_by=$list[2];
                else
                $order_by="DESC";
                
                
                $data = $db->fetch_all_array("select sim1, giaban FROM sim where simdl=".intval($list[0])." order by giaban {$order_by} limit 200");
       
                
                echo '<div  id="simgiamgia" class="row"  style="max-height: 400px; overflow-y: auto;    overflow-x: hidden;">';
                foreach($data AS $row)
                {
                    $phantram=intval($list[1]);
                    
                    $giamoi =($row['giaban']*1000000)-($row['giaban']*1000000*$phantram/100);
                    
                     $giamoi=round($giamoi);
                    
                    $giamoi=number_format($giamoi);
                   
                    
                    $giaban=number_format($row['giaban']*1000000);
                    
                    echo '<div class="row" style="border-bottom: 1px solid #eee;padding:5px;">
<div class="col-md-6 col-xs-6 sim" ><strong style="margin-left:8px">'.$row['sim1'].'</strong></div>
<div class="col-md-6 col-xs-6 text-right giacu"><i style="text-decoration: line-through;color: red; margin-right:5px;">'.$giaban.'</i></div>

<div class="clearfix"></div>
<div class="col-md-6 col-xs-6"><span class="label label-success" style="margin-left:10px">Sale '.$phantram.'%</span></div>

<div class="col-md-6 col-xs-6 text-right giamoi" style="color:#008040; "><b style="margin-right:5px;">'.$giamoi.'</b></div>
</div>';
                    
                }
                echo '</div>';
            }
           
            
            
            
            $ob=ob_get_contents();
            
            ob_clean();
            
            return $ob;
        }
        else
        {
            return "";
        }
        
    }
    function import($file)
    {
  

            ob_start();
            include_once "app/import/".$file.".php";
               $ob=ob_get_contents();
            ob_clean();
                   

        
        return $ob;
        
    }
     function seo($name=null)
     {
        switch($name)
        {
            case 'des' :
            
            break;
            
            
            
            
            default:
            
            break;
            
        }
        
     }
     
     function tinkhuyenmai($id=null)
     {
        return getGroupNew();
     }
     function slide($code)
    {
         $query = $this->query("SELECT page_title, page_url, page_pos, page_detail FROM page WHERE page_group=(SELECT id FROM pagegroup WHERE groupcode='" .
                    $code . "' limit 1) AND page_status = 1 ORDER BY page_pos ASC, id DESC");

                while ($row = $query->fetch_array(MYSQLI_ASSOC)) {


                  $data[]=$row;
                }

        $i = 0;
        foreach ($data as $row) {
            $h .= '<li data-target="#slide' . $id . '" data-slide-to="' . $i . '"';


            if ($i == 0) {
                $h .= 'class="active"';
            }


            $h .= "></li>";


            if ($i == 0)
                $b .= '<div class="carousel-item item active">
 ' . $row['page_detail'] . '
</div>';
            else
                $b .= '<div class="carousel-item item">
 ' . $row['page_detail'] . '
</div>';
            $i++;
        }


        $htm .= '<div id="slide' . $id . '" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">';

        $htm .= $h;
        $htm .= '  
  </ol>
  <div class="carousel-inner" role="listbox">
    ';

        $htm .= $b;
        $htm .= '
  </div>
  <a class="left carousel-control" href="#slide' . $id .
            '" role="button" data-slide="prev">
    <span class="icon-prev" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#slide' . $id .
            '" role="button" data-slide="next">
    <span class="icon-next" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>';

        return $htm;

    }
    
    
    function tintuclink($data)
    {
        $var=explode('-',$data);
        
        $list1=trim($var[0]);
        if(isset($var[1]))
        {
            $list2=trim($var[1]);
            $limit = " LIMIT 0, ".$list2;
        }
        
        
     
        
         $str = '<div class="list-group ullink" id="link'.$list1.'">';
         if(is_numeric($list1))
         {
              $query = $this->query("SELECT page_title, page_url, page_pos FROM page WHERE page_group='".$list1."' AND page_status = 1 ORDER BY page_pos ASC, id DESC".$limit);
         }
         else
         {
                 $query = $this->query("SELECT page_title, page_url, page_pos FROM page WHERE page_group=(SELECT id FROM pagegroup WHERE groupcode='" .
                    $list1 . "' limit 1) AND page_status = 1 ORDER BY page_pos ASC, id DESC ".$limit);  
         }
         

                while ($row = $query->fetch_array(MYSQLI_ASSOC)) {


                    $str .= '<a href="/p/' . $row['page_url'] . '" class="list-group-item">' . $row['page_title'] .
                        '</a>';
                }
                $str .= '</div>';
                
                return $str;        
        
    }

    function menu($gid)
    {

        $str = stvmenu($gid, 'class="menu-' . $gid . '"');
        return $str;
    }
    function panel($panel = null)
    {
        global $loai, $sloai;
        $str = "";
        switch ($panel) {
            case 'tintuc':
                $code = 'tintuc';

                $str = '<div class="list-group"  style="margin: -15px;">';
                $query = $this->query("SELECT page_title, page_url, page_pos FROM page WHERE page_group=(SELECT id FROM pagegroup WHERE groupcode='" .
                    $code . "' limit 1) AND page_status = 1 ORDER BY page_pos ASC, id DESC limit 100");

                while ($row = $query->fetch_array(MYSQLI_ASSOC)) {


                    $str .= '<a href="/p/' . $row['page_url'] . '" class="list-group-item">' . $row['page_title'] .
                        '</a>';
                }
                $str .= '</div>';

                return $str;

                break;


            case 'donhang':

                $str = '<div id="order" class="wow slideInUp"  style="margin: -15px;"></div>';
                break;

            case 'timtheodau':

                $str = '<ul class="list-group" style="margin: -15px;">
    
  <a class="list-group-item" href="dau-so/Mobifome-090"> Đầu số đẹp 090 (Mobifone)</a>
  <a class="list-group-item" href="dau-so/Vinaphone-091"> Đầu số đẹp 091 (Vinaphone)</a>
  <a class="list-group-item" href="dau-so/Vietnamobile-092"> Đầu số đẹp 092 (Vietnamobile)</a>
  <a class="list-group-item" href="dau-so/Mobifone-093"> Đầu số đẹp 093 (Mobifone)</a>
  <a class="list-group-item" href="dau-so/Vinaphone-094"> Đầu số đẹp 094 (Vinaphone)</a>
  <a class="list-group-item" href="dau-so/Viettel-096"> Đầu số đẹp 096 (Viettel)</a>
  <a class="list-group-item" href="dau-so/Viettel-097"> Đầu số đẹp 097 (Viettel)</a>
  <a class="list-group-item" href="dau-so/Viettel-098"> Đầu số đẹp 098 (Viettel)</a>
    <a class="list-group-item" href="dau-so/Gmobile-099"> Đầu số đẹp 099 (Gmobile)</a>
    </ul>';
                break;

            case 'timtheogia':

                $str = '<div class="list-group"  style="margin: -15px;"><a class="list-group-item" href="/index.php?do=search&amp;submit=true&amp;network=0&amp;giatu=&amp;den=499%2C999&amp;sim=0*&amp;submit=&amp;tongdiem=&amp;tongnut=">Dưới 500,000Đ</a> <a class="list-group-item" href="/index.php?do=search&amp;submit=true&amp;network=0&amp;giatu=500%2C000&amp;den=999%2C999&amp;sim=0*&amp;submit=&amp;tongdiem=&amp;tongnut=">Từ 500,000Đ đến dưới 1Triệu</a><a class="list-group-item" href="/index.php?do=search&amp;submit=true&amp;network=0&amp;giatu=1%2C000%2C000&amp;den=1%2C999%2C999&amp;sim=0*&amp;submit=&amp;tongdiem=&amp;tongnut=">Từ 1Triệu đến dưới 2Triệu</a><a class="list-group-item" href="/index.php?do=search&amp;submit=true&amp;network=0&amp;giatu=2%2C000%2C000&amp;den=4%2C999%2C999&amp;sim=0*&amp;submit=&amp;tongdiem=&amp;tongnut=">Từ 2Triệu đến dưới 5Triệu</a><a class="list-group-item" href="/index.php?do=search&amp;submit=true&amp;network=0&amp;giatu=5%2C000%2C000&amp;den=9%2C999%2C999&amp;sim=0*&amp;submit=&amp;tongdiem=&amp;tongnut=">Từ 5Triệu đến dưới 10Triệu</a><a class="list-group-item" href="/index.php?do=search&amp;submit=true&amp;network=0&amp;giatu=10%2C000%2C000&amp;den=19%2C999%2C999&amp;sim=0*&amp;submit=&amp;tongdiem=&amp;tongnut=">Từ 10Triệu đến dưới 20Triệu</a><a class="list-group-item" href="/index.php?do=search&amp;submit=true&amp;network=0&amp;giatu=20%2C000%2C000&amp;den=49%2C999%2C999&amp;sim=0*&amp;submit=&amp;tongdiem=&amp;tongnut=">Từ 20Triệu đến dưới 50Triệu</a><a class="list-group-item" href="/index.php?do=search&amp;submit=true&amp;network=0&amp;giatu=50%2C000%2C000&amp;den=99%2C999%2C999&amp;sim=0*&amp;submit=&amp;tongdiem=&amp;tongnut=">Từ 50Triệu đến dưới 100Triệu</a><a class="list-group-item" href="/index.php?do=search&amp;network=0&amp;giatu=100%2C000%2C000&amp;den=100%2C000%2C000%2C000&amp;sim=0*&amp;tongdiem=&amp;tongnut=&amp;submit=true">Từ 100Triệu trở lên</a></div>';
                break;

            case 'theloaisim':


                $str = '<ul class="list-group"  style="margin: -15px;">';
                foreach ($loai['s'] as $link_url => $link_name) {


                    $str .= '<a class="list-group-item" href="' . $link_url . '.html">' . $link_name .
                        '</a>';

                }
                $str .= '</ul>';
                break;

            case 'timsimnamsinh':

                $str = '<form method="GET" action="index.php"  style="margin: -15px;">
   <input name="do" value="search" type="hidden" />
				<div class="form-group">
					<label>Chọn ngày</label>
					<input name="date" type="text" class="form-control input-sm datepicker" placeholder="dd/mm/yyyy" type="text">
				</div>
				<div class="row form-group">
					<div class="col-xs-12 text-center">
						<label> <input name="dtp" checked="checked" value="0" type="radio"> Tất cả</label> <label> <input name="dtp" value="2" type="radio"> m/d/y</label> <label> <input name="dtp" value="1" type="radio"> 19xx</label> 
					</div>
					<div class="col-xs-12 text-center margin-top"><input class="btn btn-primary btn-sm" value="Tìm sim" type="submit"></div>
				</div>
                <input name="submit" value="true" type="hidden" />
			</form>';
                break;

            case 'timsimphongthuy':

                $str = ' <form method="GET" action="index.php"  style="margin: -15px;">
  <input name="do" value="search" type="hidden" />
				<div class="form-group">
					<label>Tổng nút</label>
					<input name="tongnut" class="form-control input-sm" placeholder="Tổng nút 1-10" type="text">
				</div>
				<div class="form-group">
					<label>Tổng điểm</label>
					<input name="tongdiem" class="form-control input-sm" placeholder="Tổng điểm < 81" type="text">
				</div>
				<div class="row form-group" style="font-size: 11px; font-weight: normal;">
					<div class="col-xs-12 text-center">
						<label><input name="type" checked="checked" value="0" type="radio"> Tất cả</label> 	<label><input name="type" value="09" type="radio"> 10 Số</label> <label><input name="type" value="01" type="radio"> 11 Số</label> 
					</div>
					<div class="col-xs-12 text-center margin-top"><input class="btn btn-primary btn-sm" value="Tìm sim" type="submit"></div>
				</div>
                <input type="hidden" name="submit" value="true" />
			</form>';
                break;

            case 'timsimtuquy':

                $str = '<div class="list-group"  style="margin: -15px;"><a class="list-group-item" href="/index.php?do=search&amp;network=0&amp;giatu=&amp;den=&amp;sim=*[^9]9999&amp;tongdiem=&amp;tongnut=&amp;submit=true">Sim Tứ Quý 9999</a><a class="list-group-item" href="/index.php?do=search&amp;network=0&amp;giatu=&amp;den=&amp;sim=*[^8]8888&amp;tongdiem=&amp;tongnut=&amp;submit=true">Sim Tứ Quý 8888</a><a class="list-group-item" href="/index.php?do=search&amp;network=0&amp;giatu=&amp;den=&amp;sim=*[^7]7777&amp;tongdiem=&amp;tongnut=&amp;submit=true">Sim Tứ Quý 7777</a><a class="list-group-item" href="/index.php?do=search&amp;network=0&amp;giatu=&amp;den=&amp;sim=*[^6]6666&amp;tongdiem=&amp;tongnut=&amp;submit=true">Sim Tứ Quý 6666</a><a class="list-group-item" href="/index.php?do=search&amp;network=0&amp;giatu=&amp;den=&amp;sim=*[^5]5555&amp;tongdiem=&amp;tongnut=&amp;submit=true">Sim Tứ Quý 5555</a><a class="list-group-item" href="/index.php?do=search&amp;network=0&amp;giatu=&amp;den=&amp;sim=*[^4]4444&amp;tongdiem=&amp;tongnut=&amp;submit=true">Sim Tứ Quý 4444</a><a class="list-group-item" href="/index.php?do=search&amp;network=0&amp;giatu=&amp;den=&amp;sim=*[^3]3333&amp;tongdiem=&amp;tongnut=&amp;submit=true">Sim Tứ Quý 3333</a><a class="list-group-item" href="/index.php?do=search&amp;network=0&amp;giatu=&amp;den=&amp;sim=*[^2]2222&amp;tongdiem=&amp;tongnut=&amp;submit=true">Sim Tứ Quý 2222</a><a class="list-group-item" href="/index.php?do=search&amp;network=0&amp;giatu=&amp;den=&amp;sim=*[^1]1111&amp;tongdiem=&amp;tongnut=&amp;submit=true">Sim Tứ Quý 1111</a><a class="list-group-item" href="/index.php?do=search&amp;network=0&amp;giatu=&amp;den=&amp;sim=*[^0]0000&amp;tongdiem=&amp;tongnut=&amp;submit=true">Sim Tứ Quý 0000</a></div>';

                break;

            case 'timsimtamhoa':

                $str = '<div class="list-group"  style="margin: -15px;"><a class="list-group-item" href="/index.php?do=search&amp;network=0&amp;giatu=&amp;den=&amp;sim=*[^9]999&amp;tongdiem=&amp;tongnut=&amp;submit=true">Sim Tam Hoa 999</a> <a class="list-group-item" href="/index.php?do=search&amp;network=0&amp;giatu=&amp;den=&amp;sim=*[^8]888&amp;tongdiem=&amp;tongnut=&amp;submit=true">Sim Tam Hoa 888</a> <a class="list-group-item" href="/index.php?do=search&amp;network=0&amp;giatu=&amp;den=&amp;sim=*[^7]777&amp;tongdiem=&amp;tongnut=&amp;submit=true">Sim Tam Hoa 777</a> <a class="list-group-item" href="/index.php?do=search&amp;network=0&amp;giatu=&amp;den=&amp;sim=*[^6]666&amp;tongdiem=&amp;tongnut=&amp;submit=true">Sim Tam Hoa 666</a> <a class="list-group-item" href="/index.php?do=search&amp;network=0&amp;giatu=&amp;den=&amp;sim=*[^5]555&amp;tongdiem=&amp;tongnut=&amp;submit=true">Sim Tam Hoa 555</a> <a class="list-group-item" href="/index.php?do=search&amp;network=0&amp;giatu=&amp;den=&amp;sim=*[^4]444&amp;tongdiem=&amp;tongnut=&amp;submit=true">Sim Tam Hoa 444</a> <a class="list-group-item" href="/index.php?do=search&amp;network=0&amp;giatu=&amp;den=&amp;sim=*[^3]333&amp;tongdiem=&amp;tongnut=&amp;submit=true">Sim Tam Hoa 333</a> <a class="list-group-item" href="/index.php?do=search&amp;network=0&amp;giatu=&amp;den=&amp;sim=*[^2]222&amp;tongdiem=&amp;tongnut=&amp;submit=true">Sim Tam Hoa 222</a> <a class="list-group-item" href="/index.php?do=search&amp;network=0&amp;giatu=&amp;den=&amp;sim=*[^1]111&amp;tongdiem=&amp;tongnut=&amp;submit=true">Sim Tam Hoa 111</a> <a class="list-group-item" href="/index.php?do=search&amp;network=0&amp;giatu=&amp;den=&amp;sim=*[^0]000&amp;tongdiem=&amp;tongnut=&amp;submit=true">Sim Tam Hoa 000</a></div>';
                break;

            case 'timsimtien':

                $str = '<div class="list-group"  style="margin: -15px;"><a class="list-group-item" href="/index.php?do=search&amp;submit=true&amp;network=0&amp;giatu=&amp;den=&amp;sim=*6789&amp;submit=&amp;tongdiem=&amp;tongnut=">Sim Tiến Đuôi 6789</a> <a class="list-group-item" href="/index.php?do=search&amp;submit=true&amp;network=0&amp;giatu=&amp;den=&amp;sim=*5678&amp;submit=&amp;tongdiem=&amp;tongnut=">Sim Tiến Đuôi 5678</a> <a class="list-group-item" href="/index.php?do=search&amp;submit=true&amp;network=0&amp;giatu=&amp;den=&amp;sim=*4567&amp;submit=&amp;tongdiem=&amp;tongnut=">Sim Tiến Đuôi 4567</a> <a class="list-group-item" href="/index.php?do=search&amp;submit=true&amp;network=0&amp;giatu=&amp;den=&amp;sim=*3456&amp;submit=&amp;tongdiem=&amp;tongnut=">Sim Tiến Đuôi 3456</a> <a class="list-group-item" href="/index.php?do=search&amp;submit=true&amp;network=0&amp;giatu=&amp;den=&amp;sim=*2345&amp;submit=&amp;tongdiem=&amp;tongnut=">Sim Tiến Đuôi 2345</a> <a class="list-group-item" href="/index.php?do=search&amp;submit=true&amp;network=0&amp;giatu=&amp;den=&amp;sim=*1234&amp;submit=&amp;tongdiem=&amp;tongnut=">Sim Tiến Đuôi 1234</a> <a class="list-group-item" href="/index.php?do=search&amp;submit=true&amp;network=0&amp;giatu=&amp;den=&amp;sim=*0123&amp;submit=&amp;tongdiem=&amp;tongnut=">Sim Tiến Đuôi 0123</a> <a class="list-group-item" href="/index.php?do=search&amp;submit=true&amp;network=0&amp;giatu=&amp;den=&amp;sim=*3579&amp;submit=&amp;tongdiem=&amp;tongnut=">Sim Tiến Đuôi 3579</a> <a class="list-group-item" href="/index.php?do=search&amp;submit=true&amp;network=0&amp;giatu=&amp;den=&amp;sim=*2468&amp;submit=&amp;tongdiem=&amp;tongnut=">Sim Tiến Đuôi 2468</a> <a class="list-group-item" href="/index.php?do=search&amp;submit=true&amp;network=0&amp;giatu=&amp;den=&amp;sim=*1357&amp;submit=&amp;tongdiem=&amp;tongnut=">Sim Tiến Đuôi 1357</a> <a class="list-group-item" href="/index.php?do=search&amp;submit=true&amp;network=0&amp;giatu=&amp;den=&amp;sim=*0246&amp;submit=&amp;tongdiem=&amp;tongnut=">Sim Tiến Đuôi 0246</a> <a class="list-group-item" href="/index.php?do=search&amp;submit=true&amp;network=0&amp;giatu=&amp;den=&amp;sim=*1368&amp;submit=&amp;tongdiem=&amp;tongnut=">Sim Tiến Đuôi 1368</a></div>';
                break;

            case 'menu-a':


                $str = "<style type=\"text/css\">";

                $str .= "@charset \"UTF-8\";.menu-a
{
        margin: -15px;
    padding: 0;
  
}
.menu-a > li > a
{
    font-weight: bold;
}
.menu-a > li > ul
{
    padding: 0;
    display: none;
}
.menu-a .glyphicon
{
    display: none;
}
.menu-a li
{
    list-style: none;
    padding: 8px 15px;
    background: #fff;
    border-bottom: 1px solid #ddd;

}
.menu-a li:hover
{
    background: #fdfafa;
}
.menu-a li li:hover
{
    list-style: none;
    padding: 8px 15px;
    background: #fdfafa;
    border-bottom: 1px solid #ddd;

}
.menu-a li:hover ul
{
  
    padding: 0;
}
 .menu-a li:hover li
 {

   margin-left: -10px;
   margin-right: -10px;
   padding: 5px 15px;
 }
.menu-a > li:last-child
{
    border-bottom: 0;
    margin-bottom: -10px;

}
.menu-a > li > a:after
{
     content: \"\\02795\";
    font-size: 13px;
    color: #777;
    float: right;
    margin-left: 5px;
} 
.menu-a > li:hover > a:after
{
   content: \"\\2796\";
    font-size: 13px;
    color: green;
    float: right;
    margin-left: 5px;
}
.menu-a > li:hover ul
{
    display: block;
}";

                $str .= "</style>";
                $str .= stvmenu(1, 'class="menu-a"');
                break;

            case 'menu-r':

                $str = "<style>";

                $str .= ".menu-r
{
        margin: -15px;
    padding: 0;
    width: 100%;
}
.menu-r li:hover
{
    background: #fdfafa;
}
.menu-r li
{
    list-style: none;
    width: 100%;
    padding: 8px 15px;
   
    border-bottom: 1px solid #ddd;
}
.menu-r > li > a
{
    font-weight: bold;
}
.menu-r > li:last-child
{
    border: none;
    margin-bottom: -10px;
}
.menu-r > li:hover:after
{
    content: \"\\1F449\";
    float: right;
}
.menu-r > li > ul
{
    display: none;
}
.menu-r > li > ul > li
{
    padding: 5px 10px;
}
.menu-r >li:hover > ul
{
    display: block;
    margin-top: -28px;
    width: 200px;
    background: #fff;
    padding: 0;
    margin-left: 200px;
    position: absolute;
    z-index: 10000;
    border-radius: 0 6px 6px 0;
    box-shadow: 2px 2px 4px #ddd;
    
}";

                $str .= "</style>";
                $str .= stvmenu(1, 'class="menu-r"');
                break;

            case 'menu-l':
                $str = "<style>";

                $str .= ".menu-l
{
    padding: 0;
    width: 100%;
}
.menu-l li:hover
{
    background: #fdfafa;
}
.menu-l li
{
    list-style: none;
    width: 100%;
    padding: 8px 15px;
    float: right;
   
    border-bottom: 1px solid #ddd;
}
.menu-l > li > a
{
    font-weight: bold;
}
.menu-l > li:last-child
{
    border: none;
    margin-bottom: -10px;
}
.menu-l > li:hover:after
{
    content: \"\\25C0\";
    float: left;
    padding-right: 10px;
}
.menu-l > li > ul
{
    display: none;
}
.menu-l > li > ul > li
{
    padding: 5px 10px;
}
.menu-l >li:hover > ul
{
    display: block;
    margin-top: -28px;
    width: 200px;
    background: #fff;
    padding: 0;
    margin-left: -210px;
    position: absolute;
    z-index: 10000;
    border-radius: 6px 0 0 6px;
    box-shadow: 2px 2px 4px #ddd;
    
}";
                $str .= "</style>";
                $str .= stvmenu(1, 'class="menu-l"');
                break;

        }
        return $str;
    }
    function strtofunc($text)
    {
        $reg = "/\{{([0-9a-zA-Z\- ]+)\:([0-9a-zA-Z.\- ]+):?\}}/";
        return preg_replace_callback($reg, array($this, 'ireplace'), $text);
    }

    function ireplace($matches)
    {
        if (method_exists($this, $matches[1])) {
            return @$this->$matches[1]($matches[2]);
        } else {
            return "{{" . $matches[1] . ":" . $matches[2] . "}}";
        }
    }


    function getPage($code)
    {
        $cache_key = md5($code)."x";

        $data = cache($cache_key, null, "+1 year", "cache/page/");

        if (empty($data)) {
            if (test == 1)
                echo "Chưa hoạt động page cache!";
            $query = $this->query("SELECT page_title, page_code, page_detail, page_status, page_pos FROM page WHERE page_group=(SELECT id FROM pagegroup WHERE groupcode='" .
                $code . "' limit 1) AND page_status = 1 ORDER BY page_pos ASC");

            while ($row = $query->fetch_array(MYSQLI_ASSOC)) {
                $data[$row['page_code']]['title'] = $row['page_title'];
                $data[$row['page_code']]['detail'] = @$this->strtofunc($row['page_detail']);
                $data[$row['page_code']]['status'] = $row['page_status'];
                $data[$row['page_code']]['id'] = $row['page_code'];
            }
            $data = serialize($data);
            cache($cache_key, $data, "+1 minutes", "cache/page/");
        }

        return unserialize($data);
    }
    
    function page($code)
    {
        $cache_key = md5($code)."x";

        $data = cache($cache_key, null, "+1 year", "cache/page/");

        if (empty($data)) {
            if (test == 1)
                echo "Chưa hoạt động page cache!";
            $query = $this->query("SELECT page_detail FROM page WHERE page_code='".$code."' AND page_status = 1 ORDER BY page_pos ASC");

        $row = $query->fetch_array(MYSQLI_ASSOC);
              
            $data = $row['page_detail'];
            cache($cache_key, $data, "+1 minutes", "cache/page/");
        }

        return $data;
    }
}
