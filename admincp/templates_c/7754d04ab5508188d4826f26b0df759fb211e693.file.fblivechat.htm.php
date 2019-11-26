<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-09-06 12:29:20
         compiled from "/usr/local/lib/php/app/adm/templates/fblivechat.htm" */ ?>
<?php /*%%SmartyHeaderCode:469437355b323713c3d967-37202990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7754d04ab5508188d4826f26b0df759fb211e693' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/fblivechat.htm',
      1 => 1530780172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '469437355b323713c3d967-37202990',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5b323713c7e273_13807087',
  'variables' => 
  array (
    'code' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b323713c7e273_13807087')) {function content_5b323713c7e273_13807087($_smarty_tpl) {?>
    <?php echo '<script'; ?>
 src="/apps/js/colpick.js" type="text/javascript"><?php echo '</script'; ?>
>
    
    <link rel="stylesheet" href="/apps/css/colpick.css" />

<style>
.fb-chat-popup{
    position: fixed;
    z-index: 9999999;
    
    cursor: pointer;
    bottom: 5px;
    border: 1px solid #d1d1d1;
    box-shadow: 0px 0px 25px #666;
    background: #FFF;
}

.fb-chat-popup-r{
    position: fixed;
    z-index: 9999999;
    right: 5px;
    cursor: pointer;
    bottom: 5px;
    border: 1px solid #d1d1d1;
    box-shadow: 0px 0px 25px #666;
    background: #FFF;
}

.fb-chat-popup-l{
    position: fixed;
    z-index: 9999999;
    left: 5px;
    cursor: pointer;
    bottom: 5px;
    border: 1px solid #d1d1d1;
    box-shadow: 0px 0px 25px #666;
    background: #FFF;
}
.fb-chat-popup .fb-page-header {
    background-color: #1dafec;
    padding: 8px 10px 5px 10px;
    color: #FFF;
    font-weight: bold;
    font-size: 16px;
}
.fb-page-box .chat-single{line-height: 25px; line-height: 25px; color: #333; width: 100%;}
.fb-page-box .chat-single a{float: right; text-decoration: none; margin-right: 10px; color: #888; font-size: 12px;}
.fb-page-box .chat-single a:hover{color: #222;}
@media all and (max-width: 799px) {
    .fb-page-box{display: none;}
    .fb-chat-popup {
        position: fixed;
        z-index: 9999999;
        right: 1px;
        cursor: pointer;bottom: 5px;
        border: 1px solid #d1d1d1;
        box-shadow: 0px 0px 25px #666;
        background: #FFF;}
}
/*btnsearch*/
input[type=search] {
    width: 150px;            /* Overridden by padding: 1px; */
    height: 20px;
    background-color: #333;
    color: #ffffff;
}
.input-search{
    background-color: #333;
    border: 2px ;
    display: none;

}
</style>


<div id="fb-root"></div>
<?php echo '<script'; ?>
>
$(document).ready(function(){
    
    $('.color').colpick({
    layout:'hex',
    submit:0,
    colorScheme:'dark',
    onChange:function(hsb,hex,rgb,el,bySetColor) {
        $(el).css('border-color','#'+hex);
        
        $(".fb-page-header, .fbt").css("background-color",'#'+hex);
        // Fill the text box just if the color was set using the picker, and not the colpickSetColor function.
        if(!bySetColor) $(el).val('#'+hex);
    }
    }).keyup(function(){
        $(this).colpickSetColor('#'+this.value);
    });
    
    $(".pos").click(function(){
        
        $(".fb-chat-popup").toggleClass('fb-chat-popup-l, fb-chat-popup-r');
    })
    
    $(".fbt").bind('change',function(){
        $(".title").html($(this).val());
    })
    
    
      $(".fb").bind('change',function(){
        $(".fb-page").data('href',$(this).val());
    })
    
     $(".ffoter").change(function(){
        $(".chat-single").html($(this).val());
    })
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    (function($) {
        $(document).ready(function() {
            $('.fb-page-box').hide();
            $('.fb-page-header').click(function(){
                $('.fb-page-box').slideToggle();
            });
        });
    })(jQuery);
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
    }
    (document, 'script', 'facebook-jssdk'));
<?php echo '</script'; ?>
>
<div class="fb-chat-popup fb-chat-popup-r">
    <div class="fb-page-header"><i class="glyphicon glyphicon-comment"></i> <span class="title">Hỗ Trợ Trực Tuyến</span></div>
    <div class="fb-page-box">
        <div class="fb-page" data-href="https://www.facebook.com/www.stv.vn" data-height="350" data-width="300" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false" data-tabs="messages" data-show-posts="false"></div>
        <div class="chat-single"><a target="_blank" href="https://www.facebook.com/stv.vn"><i class="fa fa-facebook-square"></i> <a href="tel:0914779999"><strong>0914779999</strong></a> <a href="tel:0911156888"><strong>0911156888</strong></a></a><a class="glyphicon glyphicon-phone"></a> Hotline:</div>
    </div>
</div>

<div class="container">
<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">THIẾT LẬP FACEBOOK LIVE CHÁT</h2>
  </div>
  <div class="panel-body">
   
   
 


<form method="POST" class="form-horizontal">
<div class="btn-group pull-right">


<button name="save" class="btn btn-success">Lấy code</button>
</div>
<div class="clearfix"></div>

  <div class="form-group">
   <div class="col-md-2"><strong>Địa chỉ facebook</strong></div>
   <div class="col-md-4"><input type="text" name="fb" value="http://facebook.com/www.stv.vn" class="form-control"></div>
   </div>
   
 <div class="form-group">
   <div class="col-md-2"><strong>Tiêu đề & mầu hỗ trợ</strong></div>
   <div class="col-md-4"><input type="text" name="fbt"  value="Hỗ Trợ Trực Tuyến" class="fbt form-control"></div>
   <div class="col-md-1"><input type="text" name="color" placeholder="Mầu nền" class="form-control color"></div>
   </div>
   
 <div class="form-group">
   <div class="col-md-2"><strong>Footer</strong></div>
   <div class="col-md-4"><input type="text" name="fbf" value="Hotline: 0911156888 - 0914779999" class="ffoter form-control"></div>
 
   </div>
 <div class="form-group">
   <div class="col-md-2"><strong>Vị trí</strong></div>
   <div class="col-md-4"> <input class="pos" type="radio" name="pos" value="left" />Trái</div>
   <input type="radio" name="pos" class="pos" value="right" checked="" />Phải</div> 
   </div>
</form>

<?php if (isset($_smarty_tpl->tpl_vars['code']->value)) {?>
Lấy mã nhúng phía dưới
Truy cập <a href="/admincp/index.php?do=config">config</a> nhúng vào vị trí body
<br />
Code:

<textarea cols="60" class="form-control" rows="60"><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
</textarea>
<?php }?>
  </div>
</div>
</div>
<?php }} ?>
