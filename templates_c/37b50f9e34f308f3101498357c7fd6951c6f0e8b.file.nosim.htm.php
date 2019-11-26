<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-15 13:04:39
         compiled from "template/nosim.htm" */ ?>
<?php /*%%SmartyHeaderCode:18364090135dce3ff7c09a68-43975148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37b50f9e34f308f3101498357c7fd6951c6f0e8b' => 
    array (
      0 => 'template/nosim.htm',
      1 => 1487218614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18364090135dce3ff7c09a68-43975148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'sosim' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dce3ff7c46113_99794741',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dce3ff7c46113_99794741')) {function content_5dce3ff7c46113_99794741($_smarty_tpl) {?><div class="panel panel-primary">
  <div class="panel-heading">
    <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
  </div>
  <div class="panel-body">
   
   
   SIM: <strong style="color: red; font-size: 20px;"><?php echo $_smarty_tpl->tpl_vars['sosim']->value;?>
</strong>
   <br />
   Quý khách gọi vào chính số sim <strong><?php echo $_smarty_tpl->tpl_vars['sosim']->value;?>
</strong>
    <br />. Nếu thấy: 
• ĐỔ CHUÔNG -> Số Đã bán
   <br />
• HIỆN KHÔNG LIÊN LẠC ĐƯỢC -> 80% đã bán
   <br />
• MỌI TÍN HIỆU KHÁC -> Số vẫn còn trong kho
  </div>
</div>



<div id="simlienquan"></div>

<style>
#lienquan
{
    padding: 0;
    margin: 0;
}

#lienquan li

{
    width: 50%;
    float: left;
    list-style: none;
    border: 1px solid #cccccc;
    padding: 5px;
    border-bottom: 0px;
}
#lienquan li .sim
{
  font-size: 16px;
  margin-left: 15px;

}
.form-group-sm
{
  display: none;
}

</style>

<?php echo '<script'; ?>
 type="text/javascript">
  
window.onload=function(){
  var load="";
load += "<div id=\"fountainTextG\"><div id=\"fountainTextG_1\" class=\"fountainTextG\">L<\/div><div id=\"fountainTextG_2\" class=\"fountainTextG\">o<\/div><div id=\"fountainTextG_3\" class=\"fountainTextG\">a<\/div><div id=\"fountainTextG_4\" class=\"fountainTextG\">d<\/div><div id=\"fountainTextG_5\" class=\"fountainTextG\">i<\/div><div id=\"fountainTextG_6\" class=\"fountainTextG\">n<\/div><div id=\"fountainTextG_7\" class=\"fountainTextG\">g<\/div><\/div>";

$("#simlienquan").html(load);
 $.get('/index.php?ajax=ordered.loadmore&sosim=<?php echo $_GET['sosim'];?>
').done(function(html){

                                  $("#simlienquan").html(html);
                                 });  
};
<?php echo '</script'; ?>
><?php }} ?>
