<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-19 16:00:34
         compiled from "/usr/local/lib/php/app/adm/templates/acc.add.htm" */ ?>
<?php /*%%SmartyHeaderCode:13276775235bf27bb2b573a9-74519385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa1dea91e5e9066642eaa7be8bb291efae477e85' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/acc.add.htm',
      1 => 1530780172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13276775235bf27bb2b573a9-74519385',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'option_key' => 0,
    'option_name' => 0,
    'option_selected' => 0,
    '_addnew' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bf27bb2c3f380_13267159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf27bb2c3f380_13267159')) {function content_5bf27bb2c3f380_13267159($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/local/lib/php/app/lib/libs/plugins/function.html_options.php';
?>      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <input name="submit" value="true" type="hidden" />
      


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Thêm tài khoản</h4>
      </div>
      <div class="modal-body">
     
  
  
  
  
  
  <div class="form-group">
  <select class="chosen-select form-control" name="gid">
                  <option value="0">Nhóm tài khoản</option>
                  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['option_key']->value,'output'=>$_smarty_tpl->tpl_vars['option_name']->value,'selected'=>$_smarty_tpl->tpl_vars['option_selected']->value),$_smarty_tpl);?>

               </select>
  </div>
  
  <div class="form-group">
  <label class="col-sm-3 control-label text-right">Tài khoản</label>
  <div class="col-sm-9"><input type="text" name="acc" class="form-control"></div>
  </div>
  
<div class="form-group">
<label class="col-sm-3 control-label text-right">Mật khẩu</label>
<div class="col-sm-9"><input type="password" name="pwd" class="form-control"></div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label text-right">Token</label>
<div class="col-sm-9"><input type="text" name="token" class="form-control"></div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label text-right">Điện thoại</label>
<div class="col-sm-9"><input type="text" name="mobile" class="form-control"></div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label text-right">Email</label>
<div class="col-sm-9"><input type="text" name="email" class="form-control"></div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label text-right">Ngày sinh</label>
<div class="col-sm-9"><input type="text" name="birday" placeholder="21/06/1986" class="form-control"></div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label text-right">Giới tính</label>

<div class="col-sm-9"><input type="radio" name="gioitinh" value="Nam" />Nam /
<input type="radio" name="gioitinh" value="Nữ" /> Nữ</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label text-right">Url</label>
<div class="col-sm-9"><input type="text" name="url" class="form-control"></div>
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
