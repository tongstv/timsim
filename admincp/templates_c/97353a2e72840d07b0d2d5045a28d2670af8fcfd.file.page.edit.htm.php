<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-11 23:37:59
         compiled from "/usr/local/lib/php/app/adm/templates/page.edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:1010208275ac42163e53fe1-32768567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97353a2e72840d07b0d2d5045a28d2670af8fcfd' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/page.edit.htm',
      1 => 1530780174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1010208275ac42163e53fe1-32768567',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ac42163ec34c8_06816333',
  'variables' => 
  array (
    'error' => 0,
    'alert' => 0,
    'id' => 0,
    'value' => 0,
    'options' => 0,
    'page_group' => 0,
    'page_title' => 0,
    'page_url' => 0,
    'page_code' => 0,
    'page_pos' => 0,
    'page_des' => 0,
    'page_detail' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42163ec34c8_06816333')) {function content_5ac42163ec34c8_06816333($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/local/lib/php/app/lib/libs/plugins/function.html_options.php';
?><?php echo '<script'; ?>
 type="text/javascript" src="/apps/lib/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="https://cache.stv.vn/stvfont/style.css" />
<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Sửa nôi dung</h2>
    
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
&id=<?php echo $_GET['id'];?>
">
  <input type="hidden" name="submit" />
   <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
   <div class="form-group form-group-sm">
  
   <div class="col-md-12 text-right">
   <div class="">
      <button class="pull-right btn btn-success"><i class="glyphicon glyphicon-saved"></i>Sửa & Save</button>
 
    <a href="index.php?do=page.addseo&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn  btn-primary pull-right">Thêm bằng từ khóa</a>

    <button name="copy" class="pull-right btn btn-info">Tạo bản sao</button>
      <a href="index.php?do=page" class="btn btn-danger pull-right">Back</a>
   </div>
   </div>
   </div>
   
   <div class="form-group form-group-sm">
   <label class="control-label col-md-3">Nhóm tin:</label>
   <div class="col-md-9">
   <select class="form-control" name="page_group">
   <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['value']->value,'output'=>$_smarty_tpl->tpl_vars['options']->value,'selected'=>$_smarty_tpl->tpl_vars['page_group']->value),$_smarty_tpl);?>

   </select>
   </div>
   </div>
   <div class="form-group form-group-sm">
   <label class="control-label col-md-3">Tiêu đề</label>
   <div class="col-md-9">
   <input name="page_title" value="<?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
" class="form-control" />
   </div>
   </div>
   
   
   <div class="form-group form-group-sm">
   <label class="control-label col-md-3">Url:</label>
   <div class="col-md-9">
   <input name="page_url" value="<?php echo $_smarty_tpl->tpl_vars['page_url']->value;?>
" class="form-control" />
   </div>
   </div>
   
         <div class="form-group form-group-sm">
   <label class="control-label col-md-3">Mã trang:</label>
   <div class="col-md-9">
   <input name="page_code" value="<?php echo $_smarty_tpl->tpl_vars['page_code']->value;?>
" class="form-control" />
   </div>
   </div>
   
           <div class="form-group form-group-sm">
   <label class="control-label col-md-3">Thứ tự:</label>
   <div class="col-md-9">
   <input name="page_pos" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['page_pos']->value;?>
" />
   </div>
   </div>
   
   <div class="form-group form-group-sm">
   <label class="control-label col-md-3">Mô tả:</label>
   <div class="col-md-9">
   <textarea cols="120" rows="6" name="page_des" id="des"><?php echo $_smarty_tpl->tpl_vars['page_des']->value;?>
</textarea>
   </div>
   </div>
   
   <div class="form-group form-group-sm">
   <label class="control-label col-md-3">Chi tiết:</label>
   <div class="col-md-9">
   <textarea cols="120" rows="6" id="detail" name="page_detail"><?php echo $_smarty_tpl->tpl_vars['page_detail']->value;?>
</textarea>
   
   	<?php echo '<script'; ?>
>
    CKEDITOR.dtd.$removeEmpty['span'] = false;
CKEDITOR.replace( 'detail');

CKEDITOR.replace( 'des', {
	toolbar: [
		{ name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },	// Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
		[ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],			// Defines toolbar group without name.
		'/',																					// Line break - next group will be placed in new line.
		{ name: 'basicstyles', items: [ 'Bold', 'Italic' ] }
	]
});

$("input[name='page_title']").keyup(function(){
    $("input[name='page_url']").val(xoadau($(this).val()));
})
	<?php echo '</script'; ?>
>
    
    <?php echo $_smarty_tpl->getSubTemplate ('edittool.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   </div>
   </div>
   </form>
  </div>
</div><?php }} ?>
