<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-08-03 10:31:55
         compiled from "/usr/local/lib/php/app/adm/templates/perm.htm" */ ?>
<?php /*%%SmartyHeaderCode:19423096345b63ccab213579-85637109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59ec4031f72a39c69b8b961ec7a5fd74a5191b16' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/perm.htm',
      1 => 1530780177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19423096345b63ccab213579-85637109',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'row' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5b63ccab2a3fd6_71600777',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63ccab2a3fd6_71600777')) {function content_5b63ccab2a3fd6_71600777($_smarty_tpl) {?><div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Quản lý tài khoản</h2>
  </div>
  <div class="panel-body">
  <form class="form-inline" action="index.php"  method="get">
<input type="hidden" name="do" value="users" />
<div class="form-group">
<input name="keyword" class="form-control input-sm" />
<button class="btn btn-sm btn-warning"> <i class="glyphicon glyphicon-search"></i> Tìm kiếm</button>
</div>
<div class="pull-right">

<div class="btn-group">
<a class="btn btn-sm btn-info ajax"  href="index.php?ajax=users.add">Thêm tài khoản</a>
</div>
</div>
</form>
<table class="table table-hover table-condensed">
<thead>
<tr>
<th class="active"></th>
<th class="active">Họ và tên</th>
<th class="active">Email</td>
<th class="active">Điện thoại</th>
<th class="active">Quyền quản lý</th>

<th class="active"></th>
</tr>
</thead>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['d'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total']);
?>
<?php $_smarty_tpl->tpl_vars['row'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']], null, 0);?>
<tr>
<td class="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['row']->value['fullname'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</td>

<td><?php echo $_smarty_tpl->tpl_vars['row']->value['phone'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['row']->value['per'];?>
</td>


<td><a href="index.php?ajax=perm.add&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="ajax btn btn-sm btn-success"> <i class="glyphicon glyphicon-check"></i>Thêm quyền</a></td>
</tr>
<?php endfor; endif; ?>
</table>
<div class="pull-right"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</div>
  </div>
</div>
<div class="container">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h2 class="panel-title">Hướng dẫn</h2>
  </div>
  <div class="panel-body">
    Phân quyền <strong>admin</strong>: mọi quyền (full)
    <br />
    Phân quyền : <strong>mod</strong> mặc định chỉ có check sim
    <br />
    Nếu bạn muốn thêm quyền cho <strong>mod</strong> nhấn vào biểu nút <strong>Thêm quyền</strong>
    
  </div>
</div>

</div><?php }} ?>
