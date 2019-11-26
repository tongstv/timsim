<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-18 11:11:42
         compiled from "/usr/local/lib/php/app/adm/templates/seo301.add.htm" */ ?>
<?php /*%%SmartyHeaderCode:10697133105b4ebdfeeaccf7-70434555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b870df3ca49ee45c66f8143890fad50d839d9fbb' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/seo301.add.htm',
      1 => 1530780174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10697133105b4ebdfeeaccf7-70434555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_addnew' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5b4ebdff004c50_01892072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4ebdff004c50_01892072')) {function content_5b4ebdff004c50_01892072($_smarty_tpl) {?>      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <input name="submit" value="true" type="hidden" />
      


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Thêm mã lỗi</h4>
      </div>
      <div class="modal-body">
     
  
  
  <div class="form-group">
  <label class="col-sm-3 control-label text-right">Url cũ</label>
  <div class="col-sm-9"><input type="text" name="url1" class="form-control" placeholder="phong-thuy or http://domain.com/phong-thuy"></div>
  </div>
  
  
  
  
  <div class="form-group">
  <label class="col-sm-3 control-label text-right">Mã lỗi</label>
  <div class="col-sm-9"><select name="error" class="form-control">
  <option value="0">Chọn mã  301 - 302</option>
  <option value="301">301</option>
  <option value="302">302</option>
  </select></div>
  </div>
  
<div class="form-group">
<label class="col-sm-3 control-label text-right">Url mới</label>
<div class="col-sm-9"><input type="text" name="url2" class="form-control" placeholder="/xem-phong-thuy or http://domain.com/phong-thuy"></div>
</div>

     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_addnew']->value;?>
</button>
      </div>
    </div>
      </form>
      
                  <?php }} ?>
