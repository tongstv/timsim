<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-26 17:56:29
         compiled from "/usr/local/lib/php/app/adm/templates/daily.edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:2018147325ac3241a5a5dc8-98948139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04c4a92edcdab670b7781691ac3ca13c4a6db2b8' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/daily.edit.htm',
      1 => 1530780174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2018147325ac3241a5a5dc8-98948139',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ac3241a5fd095_03630132',
  'variables' => 
  array (
    'id' => 0,
    'fullname' => 0,
    'address' => 0,
    'mobile' => 0,
    'citys' => 0,
    'city' => 0,
    'email' => 0,
    'website' => 0,
    'pos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac3241a5fd095_03630132')) {function content_5ac3241a5fd095_03630132($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/local/lib/php/app/lib/libs/plugins/function.html_options.php';
?>      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <input name="submit" value="true" type="hidden" />
      <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" type="hidden" />
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Sửa đại lý</h4>
      </div>
      <div class="modal-body">
     
       <div class="form-group form-group-sm">
       <label class="control-label col-md-4">Tên đại lý:</label>
       <div class="col-md-6">
       <input name="fullname" value="<?php echo $_smarty_tpl->tpl_vars['fullname']->value;?>
" class="form-control" />
       </div>
       </div>

     <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Địa chỉ:</label>
     <div class="col-md-6">
     <input name="address" value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
" class="form-control" />
     </div>
     </div>
     
     
     <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Điện thoại:</label>
     <div class="col-md-6">
     <input name="mobile" value="<?php echo $_smarty_tpl->tpl_vars['mobile']->value;?>
" class="form-control" />
     </div>
     </div>
     
     <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Tỉnh thành:</label>
     <div class="col-md-6">
     <select class="form-control chosen" name="city" id="select">
     <option value="0"> Chọn tỉnh</option>
     
     <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['citys']->value,'output'=>$_smarty_tpl->tpl_vars['citys']->value,'selected'=>$_smarty_tpl->tpl_vars['city']->value),$_smarty_tpl);?>

     </select>
     </div>
     </div>
     
     
     <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Email:</label>
     <div class="col-md-6">
     <input name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" class="form-control" />
     </div>
     </div>
     
     <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Website:</label>
     <div class="col-md-6">
     <input name="website" value="<?php echo $_smarty_tpl->tpl_vars['website']->value;?>
" class="form-control" />
     </div>
     </div>
     
       <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Thứ tự:</label>
     <div class="col-md-6">
     <input name="pos" value="<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
" class="form-control" />
     </div>
     </div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Sửa đại lý</button>
      </div>
    </div>
      </form>
      
      
                 <?php }} ?>
