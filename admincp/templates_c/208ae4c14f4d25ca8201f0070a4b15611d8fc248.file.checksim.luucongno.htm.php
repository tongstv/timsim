<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-04-12 19:20:26
         compiled from "/usr/local/lib/php/app/adm/templates/checksim.luucongno.htm" */ ?>
<?php /*%%SmartyHeaderCode:1732594795cb0828a3ba897-47151622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '208ae4c14f4d25ca8201f0070a4b15611d8fc248' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/checksim.luucongno.htm',
      1 => 1530780182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1732594795cb0828a3ba897-47151622',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fullname' => 0,
    'sim2' => 0,
    'giaban' => 0,
    'gianhap' => 0,
    'hh' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5cb0828a4b9423_54355452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb0828a4b9423_54355452')) {function content_5cb0828a4b9423_54355452($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/usr/local/lib/php/app/lib/libs/plugins/modifier.date_format.php';
?>      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Lưu công nợ</h4>
      </div>
      <div class="modal-body">
     <?php echo $_smarty_tpl->tpl_vars['fullname']->value;?>

    <div class="form-group form-group-sm">
    <label class="control-label col-sm-4">Họ và tên</label>
    <div class="col-sm-6">
    <input name="fullname" value="" class="form-control" />
    </div>
    </div>
    
    <div class="form-group form-group-sm">
    <label class="control-label col-sm-4">Địa chỉ</label>
    <div class="col-sm-6">
    <input name="address" value="" class="form-control" />
    </div>
    </div>
    

    
    <div class="form-group form-group-sm">
    <label class="control-label col-sm-4">Số sim</label>
    <div class="col-sm-6">
    <input name="sosim" value="<?php echo $_smarty_tpl->tpl_vars['sim2']->value;?>
" class="form-control" />
    </div>
    </div>
    
    <div class="form-group form-group-sm">
    <label class="control-label col-sm-4">Giá bán:</label>
    <div class="col-sm-3">
    <input name="giaban" value="<?php echo $_smarty_tpl->tpl_vars['giaban']->value*1000;?>
" class="form-control price" />
    </div>
  
      <div class="col-sm-3">
    <input name="tuthu" class="form-control price" placeholder="Thự thu" />
    </div>
    </div>
    
    <div class="form-group form-group-sm">
    <label class="control-label col-sm-4">Giá nhập</label>
    <div class="col-sm-6">
    <input name="gianhap" value="<?php echo $_smarty_tpl->tpl_vars['gianhap']->value*1000;?>
" class="form-control price" />
    </div>
    </div>
    
    <div class="form-group form-group-sm">
    <label class="control-label col-sm-4">Hoa hồng</label>
    <div class="col-sm-3">
    <input name="hh" value="<?php echo $_smarty_tpl->tpl_vars['hh']->value;?>
" class="form-control" />
    </div>
       <div class="col-sm-3">
     <input name="chiphi" class="form-control input-sm" placeholder="Chi phí" />
    </div>
    </div>
    <div class="form-group form-group-sm">
    <label class="control-label col-sm-4">Ngày</label>
    <div class="col-sm-6">
     <input name="ngay" class="form-control input-sm" value="<?php echo smarty_modifier_date_format(time(),'d/m/Y');?>
" />
    </div>
    </div>
   

    
           <div class="form-group form-group-sm">
    <label class="control-label col-sm-4">Ghi chú:</label>
    <div class="col-sm-6">
     <input name="note" class="form-control input-sm" />
    </div>
    </div>
    
 <input name="user" value="<?php echo $_COOKIE['email'];?>
" type="hidden" />
 <input name="daily" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" type="hidden" />
    <input type="hidden" name="savecn" value="1" />
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Lưu công nợ</button>
      </div>
    </div>
      </form>
      
                  <?php }} ?>
