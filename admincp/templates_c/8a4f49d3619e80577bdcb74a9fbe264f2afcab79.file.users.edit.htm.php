<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-08-03 10:31:20
         compiled from "/usr/local/lib/php/app/adm/templates/users.edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:10031369235b25114ab6c175-46841645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a4f49d3619e80577bdcb74a9fbe264f2afcab79' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/users.edit.htm',
      1 => 1530780181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10031369235b25114ab6c175-46841645',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5b25114abb81a8_05132491',
  'variables' => 
  array (
    'id' => 0,
    'email' => 0,
    'fullname' => 0,
    'address' => 0,
    'phone' => 0,
    'options' => 0,
    'perm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b25114abb81a8_05132491')) {function content_5b25114abb81a8_05132491($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/local/lib/php/app/lib/libs/plugins/function.html_options.php';
?> 
 
 <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Sửa tài khoản</h4>
      </div>
      <div class="modal-body">
        
        <form class="form-horizontal ajax-form" action="index.php?ajax=users.editsubmit" autocomplete="off">
        
             
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="id" />
      
          <div class="form-group">
        <label class="control-label col-md-4">Email:</label>
        <div class="col-md-8">
        <input value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" name="email" class="form-control"  />
        </div>  
        </div>   
        <div class="form-group">
        <label class="control-label col-md-4">Mật khẩu:</label>
        <div class="col-md-8">
        <input name="password" type="password" class="form-control"  />
        </div>  
        </div>
        
        <div class="form-group">
        <label class="control-label col-md-4">Họ và tên:</label>
        <div class="col-md-8">
        <input name="fullname" value="<?php echo $_smarty_tpl->tpl_vars['fullname']->value;?>
" class="form-control"  />
        </div>  
        </div>
        
        <div class="form-group">
        <label class="control-label col-md-4">Địa chỉ:</label>
        <div class="col-md-8">
        <input name="address" value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
" class="form-control"  />
        </div>  
        </div>
        
        <div class="form-group">
        <label class="control-label col-md-4">Điện thoại:</label>
        <div class="col-md-8">
        <input name="phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" class="form-control"  />
        </div>  
        </div>

    
        
        <div class="form-group">
        <label class="control-label col-md-4">Phân quyền:</label>
        <div class="col-md-8">
        <select name="perm" class="form-control">
       <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['options']->value,'output'=>$_smarty_tpl->tpl_vars['options']->value,'selected'=>$_smarty_tpl->tpl_vars['perm']->value),$_smarty_tpl);?>

        </select>
        </div>  
        </div>
        <div class="form-group"> <button type="submit" class="btn btn-primary center-block">Sửa tài khoản</button></div>
        
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div><?php }} ?>
