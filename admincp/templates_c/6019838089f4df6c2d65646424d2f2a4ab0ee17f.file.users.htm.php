<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-11 23:37:34
         compiled from "/usr/local/lib/php/app/adm/templates/users.htm" */ ?>
<?php /*%%SmartyHeaderCode:12849933355ac82df39cca52-56676862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6019838089f4df6c2d65646424d2f2a4ab0ee17f' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/users.htm',
      1 => 1530780176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12849933355ac82df39cca52-56676862',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ac82df3a9a739_72927950',
  'variables' => 
  array (
    'data' => 0,
    'row' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac82df3a9a739_72927950')) {function content_5ac82df3a9a739_72927950($_smarty_tpl) {?><div class="panel panel-success">
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
<th class="active">Trang thái</th>
<th class="active"></th>
<th class="active"></th>
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
<td><?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='active') {?>
<a data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" href="javascript:void(0)" class="unactive btn btn-sm btn-info">Active</a>
<?php } else { ?>
<a data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" href="javascript:void(0)" class="unactive btn btn-sm btn-danger">UnActive</a>
<?php }?>
</td>

<td><a href="index.php?ajax=users.edit&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="ajax btn btn-sm btn-info"> <i class="glyphicon glyphicon-edit"></i> Sửa</a></td>
<td><?php if ($_smarty_tpl->tpl_vars['row']->value['ulock']=='lock') {?>
<a data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" href="javascript:void(0)" class="lock btn btn-sm btn-info"><i class="glyphicon glyphicon-ulock"></i>Mở khóa</a>
<?php } else { ?>
<a data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" href="javascript:void(0)" class="lock btn btn-sm btn-danger"> <i class="glyphicon glyphicon-lock"></i> Khóa</a>
<?php }?>
</td>
<td><a href="index.php?ajax=users.del&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="confirm btn btn-sm btn-danger"> <i class="glyphicon glyphicon-trash"></i> Xóa</a></td>
</tr>
<?php endfor; endif; ?>
</table>
<div class="pull-right"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</div>
  </div>
</div>

<?php }} ?>
