<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-10 11:26:34
         compiled from "/usr/local/lib/php/app/adm/templates/sim.quickremove.htm" */ ?>
<?php /*%%SmartyHeaderCode:18921451105ac2f56e3a02f3-16131022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2edda7d4c205d3265d60e833f9e757f6f1c7bd56' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/sim.quickremove.htm',
      1 => 1530780173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18921451105ac2f56e3a02f3-16131022',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ac2f56e3f0af7_12983780',
  'variables' => 
  array (
    'error' => 0,
    'alert' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac2f56e3f0af7_12983780')) {function content_5ac2f56e3f0af7_12983780($_smarty_tpl) {?><div class="container">

  <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
  
  <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
  <?php }?>
  
  <?php if (isset($_smarty_tpl->tpl_vars['alert']->value)) {?>
  
  <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</div>
  <?php }?>
<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Xóa nhanh sim</h2>
  </div>
  <div class="panel-body">
  <form method="POST">
   <div class="row">
  
   <button class="btn btn-sm btn-danger center-block">Xóa nhanh danh sách</button>
   <br />
  </div>
  <div class="row">

  
  <textarea class="center-block"  name="data" cols="40" rows="20" placeholder="0914779999
0973357777"></textarea>

  </div>
 
 
  </form>
  </div>
</div>
</div><?php }} ?>
