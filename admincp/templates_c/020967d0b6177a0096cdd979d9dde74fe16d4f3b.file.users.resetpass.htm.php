<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-09-15 16:17:45
         compiled from "/usr/local/lib/php/app/adm/templates/users.resetpass.htm" */ ?>
<?php /*%%SmartyHeaderCode:6741843725ac98bbec575d5-80914322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '020967d0b6177a0096cdd979d9dde74fe16d4f3b' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/users.resetpass.htm',
      1 => 1530780178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6741843725ac98bbec575d5-80914322',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ac98bbecc1ec4_67856505',
  'variables' => 
  array (
    'error' => 0,
    'alert' => 0,
    'echo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac98bbecc1ec4_67856505')) {function content_5ac98bbecc1ec4_67856505($_smarty_tpl) {?><div class="container">
<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Lấy lại mật khẩu</h2>
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
    <form class="form-horizontal" method="POST"  action="index.php?do=<?php echo $_GET['do'];?>
">
    <div class="form-group form-group-sm">
    <label class="control-label col-md-4">Email:</label>
    <div class="col-md-6">
    <div class="form-group">
    <div class="col-md-7">
     <input name="email" class="form-control" />
     </div>
     <div class="co-md-5"><button class="btn btn-success input-sm">Tạo mật khẩu mới</button></div>
       
       
    </div>
   

    </div>
    </div>
    </form>
    <?php if (isset($_smarty_tpl->tpl_vars['echo']->value)) {?>
    <?php echo $_smarty_tpl->tpl_vars['echo']->value;?>

    <?php }?>

  </div>
</div>
</div><?php }} ?>
