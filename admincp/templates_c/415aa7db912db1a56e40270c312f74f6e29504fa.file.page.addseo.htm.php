<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-12-27 16:15:25
         compiled from "/usr/local/lib/php/app/adm/templates/page.addseo.htm" */ ?>
<?php /*%%SmartyHeaderCode:5694666335c24982d8bdd00-42360763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '415aa7db912db1a56e40270c312f74f6e29504fa' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/page.addseo.htm',
      1 => 1530780179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5694666335c24982d8bdd00-42360763',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'alert' => 0,
    'value' => 0,
    'options' => 0,
    'selected' => 0,
    's' => 0,
    'page_des' => 0,
    'page_title' => 0,
    'page_detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c24982da11950_12024772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c24982da11950_12024772')) {function content_5c24982da11950_12024772($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/local/lib/php/app/lib/libs/plugins/function.html_options.php';
if (!is_callable('smarty_modifier_replace')) include '/usr/local/lib/php/app/lib/libs/plugins/modifier.replace.php';
?><?php echo '<script'; ?>
 type="text/javascript" src="/apps/lib/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Thêm trang mới</h2>
    
  </div>
  <div class="panel-body">
 
  <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
  
  <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
  <?php }?>
  
  <?php if (isset($_smarty_tpl->tpl_vars['alert']->value)) {?>
  
  <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</div>
  <?php }?>
   <form class="form-horizontal form-ajax" method="POST" action="index.php?do=<?php echo $_GET['do'];?>
">
  <input type="hidden" name="submit" />
   <div class="form-group form-group-sm">
  
   <div class="col-md-12">
   <button class="pull-right btn btn-sm btn-success">Thêm hàng loạt bài viết với từ khóa</button>
   </div>
   </div>
   <div class="col-sm-9">
      <div class="form-group form-group-sm">
   <label class="control-label col-md-3">Nhóm tin:</label>
   <div class="col-md-9">
   <select class="form-control" name="page_group">
   <option value="0">Chọn nhóm tin</option>
   <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['value']->value,'output'=>$_smarty_tpl->tpl_vars['options']->value,'selected'=>$_smarty_tpl->tpl_vars['selected']->value),$_smarty_tpl);?>

   </select>
   </div>
   </div>
   <div class="form-group form-group-sm">
   <label class="control-label col-md-3">Tiêu đề</label>
   <div class="col-md-9">
   <input name="page_title" value="<?php if (isset($_smarty_tpl->tpl_vars['s']->value)) {?>#keyword#<?php }?>" class="form-control" />
   </div>
   </div>
   
   

   
      <div class="form-group form-group-sm hidden">
   <label class="control-label col-md-3">Mã trang:</label>
   <div class="col-md-9">
   <input name="page_code" class="form-control" />
   </div>
   </div>
   
         <div class="form-group form-group-sm">
   <label class="control-label col-md-3">Thứ tự:</label>
   <div class="col-md-9">
   <input name="page_pos" class="form-control" />
   </div>
   </div>
   
   <div class="form-group form-group-sm">
   <label class="control-label col-md-3">Mô tả (*) :</label>
   <div class="col-md-9">
   <textarea cols="80" rows="6" name="page_des"  id="des"> <?php if (isset($_smarty_tpl->tpl_vars['page_des']->value)) {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['page_des']->value,$_smarty_tpl->tpl_vars['page_title']->value,"#keyword#");
}?></textarea>
   </div>
   </div>
   
   <div class="form-group form-group-sm">
   <label class="control-label col-md-3">Chi tiết (*) :</label>
   <div class="col-md-9">
   <textarea cols="120" rows="6" id="detail" name="page_detail">
   
   <?php if (isset($_smarty_tpl->tpl_vars['page_detail']->value)) {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['page_detail']->value,$_smarty_tpl->tpl_vars['page_title']->value,"#keyword#");
}?>
   </textarea>
   	<?php echo '<script'; ?>
>
CKEDITOR.replace( 'detail' );



	<?php echo '</script'; ?>
>
   </div>
   </div>
   </div>
   <div class="col-sm-3">
   <textarea cols="20" class="form-control" rows="50" name="keyword" placeholder="Nhập danh sách từ khóa #keyword#:
sim so dep
sim dep
Tai day ban sim
mua sim so dep"></textarea>
   </div>
   

   </form>
  </div>
</div><?php }} ?>
