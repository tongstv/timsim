<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-14 12:22:30
         compiled from "template/footer.htm" */ ?>
<?php /*%%SmartyHeaderCode:2581034725dcce49648ff05-61504448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5d17c1cd9a9aece825792032a540a89737ac228' => 
    array (
      0 => 'template/footer.htm',
      1 => 1565188689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2581034725dcce49648ff05-61504448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'khuyenmai' => 0,
    'groupNew' => 0,
    'i' => 0,
    'newfooter' => 0,
    'hotlinefoot' => 0,
    'copy' => 0,
    'thisdomain' => 0,
    'template' => 0,
    'mobilehotline' => 0,
    'body' => 0,
    'desktop' => 0,
    'share' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dcce496513646_29601148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dcce496513646_29601148')) {function content_5dcce496513646_29601148($_smarty_tpl) {?></div>
<div id="right">






<div class="panel panel-primary hidden-xs">
  <div class="panel-heading">
    <h3 class="panel-title">
    
    <?php echo $_smarty_tpl->tpl_vars['khuyenmai']->value['title'];?>
</h3>
  </div>
  <div class="panel-body mp0 khuyenmait">
  <div class="table-responsive" >
   <?php echo $_smarty_tpl->tpl_vars['khuyenmai']->value['detail'];?>

   </div>
  </div>
</div>



 
                <div class="panel panel-primary" id="theodau">
                  <div class="panel-heading">
                    <h4 class="panel-title">Tìm sim theo đầu</h4>
                  </div>
                  <div class="panel-body " style="padding: 15px;">
                        <div class="list-group" style="margin: -15px;"><a class="list-group-item" href="dau-so/Mobifome-090"> Đầu số đẹp 090 (Mobifone)</a><a class="list-group-item" href="dau-so/Vinaphone-091"> Đầu số đẹp 091 (Vinaphone)</a><a class="list-group-item" href="dau-so/Vietnamobile-092"> Đầu số đẹp 092 (Vietnamobile)</a><a class="list-group-item" href="dau-so/Mobifone-093"> Đầu số đẹp 093 (Mobifone)</a><a class="list-group-item" href="dau-so/Vinaphone-094"> Đầu số đẹp 094 (Vinaphone)</a><a class="list-group-item" href="dau-so/Viettel-096"> Đầu số đẹp 096 (Viettel)</a><a class="list-group-item" href="dau-so/Viettel-097"> Đầu số đẹp 097 (Viettel)</a><a class="list-group-item" href="dau-so/Viettel-098"> Đầu số đẹp 098 (Viettel)</a><a class="list-group-item" href="dau-so/Gmobile-099"> Đầu số đẹp 099 (Gmobile)</a></div>
             
                  </div>
                </div>
                

<div class="panel panel-primary hidden-xs ">
  <div class="panel-heading">
    <h2 class="panel-title">Đơn đặt hàng</h2>
  </div>
  <div class="panel-body" style="margin: 0; padding: 0;">
   <div id="order" class="wow slideInUp"></div>
  </div>
</div>



<div class="panel panel-primary ">
  <div class="panel-heading">
    <h2 class="panel-title">Tin khuyến mãi</h2>
  </div>
  <div class="panel-body" id="km">
    <?php echo $_smarty_tpl->tpl_vars['groupNew']->value;?>

  </div>
</div>



           <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (0) : 0-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
               
               
               <?php if (isset($_smarty_tpl->tpl_vars['boxr'.($_smarty_tpl->tpl_vars['i']->value)]->value['title'])&&$_smarty_tpl->tpl_vars['boxr'.($_smarty_tpl->tpl_vars['i']->value)]->value['status']==1) {?>
               
                    <div class="panel panel-primary hidden-xs" id="box<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                  <div class="panel-heading">
                     <h2 class="panel-title"> <?php echo $_smarty_tpl->tpl_vars['boxr'.($_smarty_tpl->tpl_vars['i']->value)]->value['title'];?>
</h2>
                  </div>
                  <div class="panel-body">
                     <?php echo $_smarty_tpl->tpl_vars['boxr'.($_smarty_tpl->tpl_vars['i']->value)]->value['detail'];?>

                  </div>
               </div>
               
               <?php }?>
               
               <?php }} ?>
               
               
</div>


</div>

<div class="row">




</div>

</div>
</div>


<div style="background: #F3F3F3;">

<div class="container">

<?php echo $_smarty_tpl->tpl_vars['newfooter']->value;?>


</div>
<div style="background: #fff;">

<div class="container">
<img alt=" Dịch vụ có trên timsim.com" class="img-responsive" style="margin: auto;" src="/template/css/images/logofooter.png"> 

</div>
</div>
<div style="background: #E6E6E5;">


<div class="container"><?php echo $_smarty_tpl->tpl_vars['hotlinefoot']->value['detail'];?>
</div>
</div>

<div style="background-color: #282828;">
<div class="container">

<?php echo $_smarty_tpl->tpl_vars['copy']->value['detail'];?>



</div>
</div>



<a class="glyphicon scrollToTop wowhover" data-effect="fadeInRight" href="javascript://" rel=""></a>
<a class="glyphicon scrollTobottom hidden-xs" href="javascript://" rel=""></a>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/java.js"><?php echo '</script'; ?>
>

<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/jquery.mmenu.css" />

		
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/jquery.mmenu.js"><?php echo '</script'; ?>
>
        
        		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
/js/select2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
			$(function() {
				$('nav#menu').mmenu();
			});
		<?php echo '</script'; ?>
>

<span class="designby">Version 2.0 mobile support - Thiết kế bởi: www.stv.vn - server:3</span>
<div id="c-mask" class="c-mask"></div>

<div class="navbar-fixed-bottom navbar-default visible-xs" style="min-height: 40px;  padding-left: 10px; padding-right: 10px;padding-top: 10px;">
<div class="pull-left">
<?php if (isset($_smarty_tpl->tpl_vars['mobilehotline']->value)) {
echo $_smarty_tpl->tpl_vars['mobilehotline']->value['detail'];
} else { ?>Mã Trang mobilehotline<?php }?>
</div>
<div class="pull-right">
<a href="/?desktop=1" class="pull-right"><i class="stv-display"></i><b> Xem bản Desktop</b></a>
</div>
</div>
<?php echo $_smarty_tpl->tpl_vars['body']->value;?>

<?php if ($_smarty_tpl->tpl_vars['desktop']->value>0) {?>
<a id="swich-mobile" style="font-size: 30px; margin-bottom: 10px;"  href="/?desktop=2" class="pull-left"><i class="stv-mobile"></i><b> Xem bản Mobile</b></a>
<?php }?>



  <?php echo '<script'; ?>
>

   $(document).ajaxComplete(function(){
         $(".ward, .district").select2();
});



$(document).ready(function(){
        

        
        
        $("#city").select2();
        
            







  $("#city").change(function(){


                            index=$(this).find('option:selected').val();
                            $(".district").remove();
                            $(".se1").remove();
                            $.get('/index.php?ajax=city.getdistrict&id='+index).done(function(data){
                           
                              $("#city").parents('.form-group').after(data);
                             
                            });
                            
                            city=$("#city").find('option:selected').text();
                            $("input[name='city']").val(city);
                            
                        });
                        $(document).on('change','.district',function(){
                             index=$(this).find('option:selected').val();
                            $(".se2").remove();
                            $.get('/index.php?ajax=city.getward&id='+index).done(function(data){
                           
                              $(".district").parents('.form-group').after(data);
                            
                    
                            });
                            qh=$(".se1").find('option:selected').text();
                            $("input[name='qh']").val(qh);
                        });
                      
                      
                      
                      
                                 $(document).on('change','.ward',function(){
                           
                            px=$(".se2").find('option:selected').text();
                            $("input[name='px']").val(px);
                        });
                        

                       
                           





    
    
  if($(window).width() < 700)
  {
    $(".mega-menu").remove();
    
    $(".stvmenu > li > a").click(function(){
        return false;
    })
  }

$("a#menushow").click(function(){
    
    $("#menumobile").toggle();
});

$("#menumobile > ul > li").click(function(){
    
    $(this).find('ul').toggle();
    return false;
});


    
    $(".facebook").click(function(){
        
        window.open('http://www.facebook.com/sharer.php?s=100&p[url]=<?php echo $_smarty_tpl->tpl_vars['share']->value['link'];?>
&p[images][0]=<?php echo $_smarty_tpl->tpl_vars['share']->value['img'];?>
&p[title]=<?php echo $_smarty_tpl->tpl_vars['share']->value['title'];?>
&p[summary]=', 'sharer', 'toolbar=0,status=0,width=548,height=425');
        return false;
        
    });
    
    w = $(window).width();
    
    if(w < 800)
    {
        html=$("#leftpage").html();
        $("#leftpage").remove();
        
        
        
        $("#theodau").append(html);
        
        
    }
    
    if(w >= 1024)
    {
      
      $("a.dropdown-toggle").each(function(index){
    
    href=$(this).attr('href');
    text=$(this).text();
    
    $(this).attr('href','Sim-So-Dep-'+text.trim()+'.html');

    
   });
   
   $("a.dropdown-toggle").click(function(){
    
    window.location=$(this).attr('href');
   });
   
   
    }
    
  

  
  

    $("button[name='submit']").click(function(){
    sim=$("#sim").val();
 
  
    if(sim.length==10 || sim.length==11)
    {
         window.location="/"+sim+".html";
            return false;
        
    }

});

    
})


<?php echo '</script'; ?>
>

<noscript id="style">

  #leftpage
                {
                    clear:both;
                }
                #leftpage .panel-body
                {
                    padding: 10px 15px !important;
                }
@media(max-width:767px)
{
    
  #search
    {
        padding: 15px 30px !important;       
    }
    .breadcrumb
    {
        margin-top: 40px;
        margin-bottom: -15px;
    }
    
    .list-group-item, a.list-group-item, .list-group-item
    {
        padding: 15px !important;
        display: inline-block !important;
        width: 49%;
    }
}
}
</noscript>

 <?php echo '<script'; ?>
>


var css = document.getElementById('style').innerHTML;
      
head = document.head || document.getElementsByTagName('head')[0],
style = document.createElement('style');

style.type = 'text/css';
if (style.styleSheet){
  style.styleSheet.cssText = css;
} else {
  style.appendChild(document.createTextNode(css));
}

head.appendChild(style);


      function simphongthuyHotLine()
{
     var x = document.getElementsByClassName("mobile-ctv-hotline")[0];
     
  
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
     
     
}
      <?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/alertify.min.js"><?php echo '</script'; ?>
>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/alertify.min.css"/>

<style type="text/css">
	.fomo img
	{
		float: left;
		padding: 5px;
	}
	.fomo
	{
		padding: 0;
		margin: 0
		border-radius:5px;
		list-style: none;
		background: white;
		box-shadow: 2px 2px 2px #eee;
		padding: 10px

	}
	.mofo li
	{
	  display:inline;
	}
	.mofo span
	{
		font-size: 10px;
	}
</style>
<?php echo '<script'; ?>
>
    $(document).ready(function () {


        alertify.set('notifier', 'position', 'bottom-left');


        var interval = setInterval(function () {

        		$.get("https://timsim.com/fomo").done(function(data){

        			  alertify.message(data,5);
        		})
           


        }, 10000)


    });
    <?php echo '</script'; ?>
>

</body>
</html><?php }} ?>
