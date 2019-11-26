<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-10 09:48:20
         compiled from "/usr/local/lib/php/app/adm/templates/lichsuchecksim.htm" */ ?>
<?php /*%%SmartyHeaderCode:16728197435ad75b03a6b6f5-49861054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62199ebe7a5f69b10ea748588063781c9d362758' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/lichsuchecksim.htm',
      1 => 1530780182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16728197435ad75b03a6b6f5-49861054',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ad75b03ae1d05_20320768',
  'variables' => 
  array (
    'data' => 0,
    'row' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad75b03ae1d05_20320768')) {function content_5ad75b03ae1d05_20320768($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/usr/local/lib/php/app/lib/libs/plugins/modifier.date_format.php';
?><div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Lịch sử check sim</h2>
  </div>
  <div class="panel-body">
   
<div>
<div class="pull-left">
<form class="form-inline" action="index.php">
<div class="form-group">
<input type="hidden" name="do" value="<?php echo $_GET['do'];?>
" />
<input name="keyword" class="form-control input-sm" placeholder="Nội dung cần tìm" />
<button class="btn btn-warning btn-sm"> <i class="glyphicon glyphicon-search"></i> Tìm kiếm</button>
</div>
</form>

</div>
<form method="POST">
<div class="btn-group pull-right">

</div>


</div>

<table class="table table-hover table-condensed" id="tablesort">
<thead>
    <tr>
        <th class="active center col-md-1">#</th>
        <th class="active">Thời gian</th>
         <th class="active">Số sim</th>
         
         <th class="active">Tài khoản</th>
          <th class="active">Giữ sim</th>
          <th class="active">Ghi chú</th>
          <th class="active noSort col-md-1"></th>
         <th class="active noSort center col-md-1"><input class="checkall" type="checkbox" /></th>
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
        <td class="center"> <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['d']['index']+1;?>
</td>
        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['check_date'],'d/m/Y H:j:s');?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['check_sim'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['row']->value['check_user'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['row']->value['check_giusim'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['row']->value['check_note'];?>
</td>
        <td class="center"> </td>
        <td class="center"><input type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="check" /></td>
    </tr>
<?php endfor; endif; ?>    
</table>
<div class="pull-right"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</div>
  </div>
  </form>
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
