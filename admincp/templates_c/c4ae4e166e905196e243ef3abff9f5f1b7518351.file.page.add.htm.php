<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-24 22:30:04
         compiled from "/usr/local/lib/php/app/adm/templates/page.add.htm" */ ?>
<?php /*%%SmartyHeaderCode:1112475295ac82821d875e8-06371180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4ae4e166e905196e243ef3abff9f5f1b7518351' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/page.add.htm',
      1 => 1530780171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1112475295ac82821d875e8-06371180',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ac82821de2b44_35310803',
  'variables' => 
  array (
    'error' => 0,
    'alert' => 0,
    'value' => 0,
    'options' => 0,
    'selected' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac82821de2b44_35310803')) {function content_5ac82821de2b44_35310803($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/local/lib/php/app/lib/libs/plugins/function.html_options.php';
?><?php echo '<script'; ?>
 type="text/javascript" src="/apps/lib/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="https://cache.stv.vn/stvfont/style.css" />
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
   <button class="pull-right btn btn-sm btn-success">Thêm trang mới</button>
   </div>
   </div>
   
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
   <input name="page_title" class="form-control" />
   </div>
   </div>
   
   
   <div class="form-group form-group-sm">
   <label class="control-label col-md-3">Url:</label>
   <div class="col-md-9">
   <input name="page_url" class="form-control" />
   </div>
   </div>
   
      <div class="form-group form-group-sm">
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
   <label class="control-label col-md-3">Mô tả:</label>
   <div class="col-md-9">
   <textarea cols="120" rows="6" name="page_des" id="des"></textarea>
   </div>
   </div>
   
   <div class="form-group form-group-sm">
   <label class="control-label col-md-3">Chi tiết:</label>
   <div class="col-md-9">
   <textarea cols="120" rows="6" id="detail" name="page_detail"></textarea>
   	<?php echo '<script'; ?>
>
CKEDITOR.replace( 'detail' );

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
