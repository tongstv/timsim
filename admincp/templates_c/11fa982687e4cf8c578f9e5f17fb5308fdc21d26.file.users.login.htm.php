<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-09 13:49:12
         compiled from "/usr/local/lib/php/app/adm/templates/users.login.htm" */ ?>
<?php /*%%SmartyHeaderCode:15834321065ac32c5d5b5464-48765070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11fa982687e4cf8c578f9e5f17fb5308fdc21d26' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/users.login.htm',
      1 => 1530780180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15834321065ac32c5d5b5464-48765070',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ac32c5d603378_20900019',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac32c5d603378_20900019')) {function content_5ac32c5d603378_20900019($_smarty_tpl) {?><div class="container">
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
    
    <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
    <?php }?>
    <div class="container">

      <form class="form-signin ajax-form" action="index.php?ajax=users.login" method="post" autocomplete="off">
      <input type="hidden" name="do" value="users.login" />
        <h2 class="form-signin-heading"></h2>
        <input type="text" name="username" class="input-block-level form-control" placeholder="Email">
        <input type="password" name="password" class="input-block-level form-control" placeholder="Mật khẩu">
        <label class="checkbox">
          <input type="checkbox" value="remember-me">Lưu mật khẩu
        </label>
        <button class="btn btn-large btn-primary" type="submit">Đăng nhập</button>
        <a href="?do=users.resetpass">Quên mật khẩu</a>
      </form>
    
    </div>
    </div><?php }} ?>
