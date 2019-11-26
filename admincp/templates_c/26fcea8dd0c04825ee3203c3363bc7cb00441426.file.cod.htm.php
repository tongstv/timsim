<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-19 15:07:39
         compiled from "/usr/local/lib/php/app/adm/templates/cod.htm" */ ?>
<?php /*%%SmartyHeaderCode:5763830825ac2f575cb1553-38931170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26fcea8dd0c04825ee3203c3363bc7cb00441426' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/cod.htm',
      1 => 1530780182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5763830825ac2f575cb1553-38931170',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ac2f575d80ea0_23227178',
  'variables' => 
  array (
    'option_values' => 0,
    'option_name' => 0,
    'option_selected' => 0,
    'data' => 0,
    'row' => 0,
    'tong' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac2f575d80ea0_23227178')) {function content_5ac2f575d80ea0_23227178($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/local/lib/php/app/lib/libs/plugins/function.html_options.php';
if (!is_callable('smarty_modifier_date_format')) include '/usr/local/lib/php/app/lib/libs/plugins/modifier.date_format.php';
?><div class="container-fluid">
<div class="panel panel-success">
<div class="panel-heading">
<h2 class="panel-title">Quản lý cod mã bưu phẩm</h2>
</div>
<div class="panel-body">

<div>
<div class="pull-left">
<form class="form-inline" action="index.php">
<div class="form-group">
<input type="hidden" name="do" value="<?php echo $_GET['do'];?>
" />
<input name="keyword" class="form-control input-sm" placeholder="Nội dung cần tìm!" />
<button class="btn btn-warning btn-sm"> <i class="glyphicon glyphicon-search"></i> Tìm kiếm</button>
</div>
</form>

</div>

<div class="btn-group pull-right form-inline">



<a class="btn btn-sm btn-info ajax" href="index.php?ajax=<?php echo $_GET['do'];?>
.add">Thêm mới</a>

<select name="change" id="change" class="form-control input-sm">
<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['option_values']->value,'output'=>$_smarty_tpl->tpl_vars['option_name']->value,'selected'=>$_smarty_tpl->tpl_vars['option_selected']->value),$_smarty_tpl);?>

</select>
</div>


</div>
<div class="row">

<ul class="nav nav-tabs" role="tablist">
<?php if (!isset($_GET['tab'])) {?>
<li class="active"><a href="index.php?do=cod">Đang chuyển</a></li>
<?php } else { ?>
<li><a href="index.php?do=cod">Đang chuyển</a></li>
<?php }?>


<?php if (isset($_GET['tab'])&&$_GET['tab']==1) {?>
<li class="active"><a  href="index.php?do=cod&tab=1">Cod đã có tiền</a></li>
<?php } else { ?>
<li><a href="index.php?do=cod&tab=1">Cod đã có tiền</a></li>
<?php }?>


<?php if (isset($_GET['tab'])&&$_GET['tab']==2) {?>
<li class="active" ><a href="index.php?do=cod&tab=2">Cod Đã nhận tiền</a></li>
<?php } else { ?>
<li><a href="index.php?do=cod&tab=2">Cod đã nhận tiền</a></li>
<?php }?>

<?php if (isset($_GET['tab'])&&$_GET['tab']==3) {?>
<li class="active" ><a href="index.php?do=cod&tab=3">Co hủy</a></li>
<?php } else { ?>
<li><a href="index.php?do=cod&tab=3">Cod hủy</a></li>
<?php }?>


</ul>
</div>
<form method="POST" action="index.php?do=<?php echo $_GET['do'];?>
">
<table class="table table-hover table-condensed" id="tablesort">
<thead>
<tr>
<th class="active col-md-1"></th>
<th class="active">Ngày chuyển</th>
<th class="active">Họ tên</th>
<th class="active">Sim card</th>
<th class="active">Giá tiền</th>

<th class="active">Điện thoại</th>
<th class="active">Mã cod</th>
<th class="active">Đã chuyển</th>
<th class="active">Trạng thái</th>
<th class="active noSort"></th>
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
<td class="col-md-1 center"> <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['d']['index']+1;?>
</td>
<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['date_send'],'d/m/Y');?>
</td>
<td class="editable" data-name="cod|name|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
<td class="editable" data-name="cod|simcard|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['simcard'];?>
</td>
<td class="editable" data-name="cod|price|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo number_format($_smarty_tpl->tpl_vars['row']->value['price']);?>
</td>
<td class="editable" data-name="cod|code|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['phone'];?>
</td>
<td><a  target="_search" href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
" title="Track: <?php echo $_smarty_tpl->tpl_vars['row']->value['code'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['code'];?>
</a></td>
<td><?php echo $_smarty_tpl->tpl_vars['row']->value['dachuyen'];?>
 Ngày</td>

<td>
<?php if ($_smarty_tpl->tpl_vars['row']->value['status']==1) {?>
<b class="text-info">Đã có tiền</b>

<?php } elseif ($_smarty_tpl->tpl_vars['row']->value['status']==2) {?>
<b class="text-success">Đã Nhận Tiền</b>

<?php } elseif ($_smarty_tpl->tpl_vars['row']->value['status']==3) {?>
<b class="text-danger">Đã Hủy</b>
<?php } else { ?>
Đang chuyển
<?php }?>

</td>
<td class="col-md-1"><a href="index.php?ajax=<?php echo $_GET['do'];?>
.edit&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="ajax btn btn-sm btn-info"> <i class="glyphicon glyphicon-edit"></i> Sửa</a></td>
<td class="col-md-1"> <a href="index.php?ajax=<?php echo $_GET['do'];?>
.del&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="confirm btn btn-sm btn-danger"> <i class="glyphicon glyphicon-trash"></i> Xóa</a></td>
<td> <input type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="check" /></td>
</tr>
<?php endfor; endif; ?>
</table>
<div class="row">
<div class="pull-right"><div class="btn-group">
<button name="tab[dangchuyen]" class="btn btn-sm btn-default">Đang chuyển</button>
<button name="tab[daco]" class="btn btn-sm btn-default">Đã có tiền</button>
<button name="tab[danhan]" class="btn btn-sm btn-default">Đã nhận tiền</button>
<button name="tab[huy]" class="btn btn-sm btn-default">Hủy</button>
</div></div>
</div>
</form>
<div class="pull-left"><strong class="red">Tổng tiền: <?php echo number_format($_smarty_tpl->tpl_vars['tong']->value);?>
 VNĐ</strong></div>
<div class="row">
<div class="pull-right"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</div>
</div>

</div>
</div>
</div>
<?php echo '<script'; ?>
 src="/apps/js/tablesort.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(function(){
$("#change").change(function(){
    
indexvalue=$(this).find("option:selected").val();
location.href='index.php?do=cod&noprice='+indexvalue;
});

<?php if ($_smarty_tpl->tpl_vars['row']->value['stt']) {?>
var theHeaders = {}
    $(this).find('th.noSort').each(function(i,el){
        theHeaders[$(this).index()] = { sorter: false };
    });

$("#tablesort").tablesorter({
    
headers: theHeaders
    
});
<?php }?>
})
<?php echo '</script'; ?>
><?php }} ?>
