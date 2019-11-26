<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-04-10 19:24:45
         compiled from "/usr/local/lib/php/app/adm/templates/seo.replace.htm" */ ?>
<?php /*%%SmartyHeaderCode:12272928195accad0d42d599-42193895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35b980c2072cff7ec6ea11450175a4979739882a' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/seo.replace.htm',
      1 => 1492488416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12272928195accad0d42d599-42193895',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5accad0d46a113_10161487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5accad0d46a113_10161487')) {function content_5accad0d46a113_10161487($_smarty_tpl) {?><form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
  <input name="submit" value="true" type="hidden" />
  
  <!--- EDIT--->
  <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" type="hidden" />
  <!------>
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <h4 class="modal-title" id="myModalLabel">Thay thế nội dung hàng loạt</h4>
    </div>
    <div class="modal-body">
      
      
      
      
      
      <div class="form-group">
        <label class="col-sm-3 control-label text-right">Nội dung cũ</label>
        <div class="col-sm-9"><input type="text" name="url1" class="form-control"></div>
      </div>
      
      
      
      <div class="form-group">
        <label class="col-sm-3 control-label text-right">Nội dung mới</label>
        <div class="col-sm-9"><input type="text" name="url2" class="form-control"></div>
      </div>
      
      
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button class="btn btn-primary">Thực hiện</button>
    </div>
  </div>
</form><?php }} ?>
