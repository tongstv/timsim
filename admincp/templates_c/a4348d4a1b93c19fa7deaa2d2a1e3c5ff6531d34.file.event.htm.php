<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-09 17:06:38
         compiled from "/usr/local/lib/php/app/adm/templates/event.htm" */ ?>
<?php /*%%SmartyHeaderCode:21121917085ac2f0c47f5689-73851376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4348d4a1b93c19fa7deaa2d2a1e3c5ff6531d34' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/event.htm',
      1 => 1530780177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21121917085ac2f0c47f5689-73851376',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ac2f0c4867cf5_06088257',
  'variables' => 
  array (
    'error' => 0,
    'alert' => 0,
    'data' => 0,
    'row' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac2f0c4867cf5_06088257')) {function content_5ac2f0c4867cf5_06088257($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/usr/local/lib/php/app/lib/libs/plugins/modifier.date_format.php';
?><div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Sự kiện</h2>
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
<div>
<div class="pull-left">
<form class="form-inline" action="index.php">
<div class="form-group">
<input type="hidden" name="do" value="<?php echo $_GET['do'];?>
" />
<input name="keyword" class="form-control input-sm" placeholder="Nhập nội dung!" />
<button class="btn btn-warning btn-sm"> <i class="glyphicon glyphicon-search"></i> Tìm kiếm</button>
</div>
</form>

</div>
 <form method="POST">
<div class="btn-group pull-right">
<a class="btn btn-sm btn-success" href="index.php?do=<?php echo $_GET['do'];?>
">Sự kiện</a>
<a class="btn btn-sm btn-warning" href="index.php?do=<?php echo $_GET['do'];?>
&app=1">Auto đăng số</a>
<a class="btn btn-sm btn-info" href="index.php?do=<?php echo $_GET['do'];?>
&status=done">Sự kiện hoàn thành</a>
<button name="delselect" class="btn btn-sm btn-danger">Xóa lựa chọn</button>
</div>


</div>
<div class="clearfix"></div>

<table class="table table-hover table-condensed" id="tablesort">
<thead>
    <tr>
        <th class="active"></th>
        <th class="active">id</th>
         <th class="active">Tên sự kiện</th>
          <th class="active">Mô tả</th>
           <th class="active">Thời gian </th>
           <th class="active">Báo cáo</th>
            <th class="active noSort"></th>
         <th class="active noSort"><input type="checkbox" class="checkall" /></th>
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
        <td class="center"> <?php echo $_smarty_tpl->tpl_vars['row']->value['stt'];?>
</td>
        
         <td class="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
             <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
             <td><?php echo $_smarty_tpl->tpl_vars['row']->value['des'];?>
</td>
              <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['time'],'d/m/Y H:i:s');?>
</td>
               <td style="color: green; font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['row']->value['report'];?>
</td>
    
        <td> <a href="index.php?ajax=<?php echo $_GET['do'];?>
.del&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="confirm btn btn-sm btn-danger">Xóa</a></td>
        <td><input type="checkbox" class="check" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" /></td>
    </tr>
<?php endfor; endif; ?>    
</table>
</form>
<div class="pull-right"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</div>
  </div>
</div>
<?php echo '<script'; ?>
 src="/apps/js/tablesort.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(function(){
var theHeaders = {}
    $(this).find('th.noSort').each(function(i,el){
        theHeaders[$(this).index()] = { sorter: false };
    });

$("#tablesort").tablesorter({
    
headers: theHeaders
    
});
});
<?php echo '</script'; ?>
><?php }} ?>
