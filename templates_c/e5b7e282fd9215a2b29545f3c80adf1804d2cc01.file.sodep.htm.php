<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-14 12:22:30
         compiled from "template/sodep.htm" */ ?>
<?php /*%%SmartyHeaderCode:9469880365dcce49629a159-90485033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5b7e282fd9215a2b29545f3c80adf1804d2cc01' => 
    array (
      0 => 'template/sodep.htm',
      1 => 1553922450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9469880365dcce49629a159-90485033',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dcce4962fc425_20228459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dcce4962fc425_20228459')) {function content_5dcce4962fc425_20228459($_smarty_tpl) {?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"><?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {
echo $_smarty_tpl->tpl_vars['name']->value;
}?> </h1>

  </div>
 
  <?php echo $_smarty_tpl->getSubTemplate ('locsim.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table class="table table-borderedtable-condensed">

<thead>
<tr>

<th class="active center">STT</th>
<th class="active text-center">

Số sim


</th>
<th class="active sortprice text-center">Giá bán <span class="glyphicon"> <a class="pricetoogle" href="javascript://">
<?php if (!isset($_SESSION['toggleprice'])) {?>
<span class="glyphicon-arrow-up"></span><span class="glyphicon glyphicon-arrow-down"></span>
<?php } elseif ($_SESSION['toggleprice']=='ASC') {?>
<span class="glyphicon glyphicon-arrow-up red"></span>
<?php } else { ?>
<span class="glyphicon glyphicon-arrow-down red"></span>
<?php }?>

</a>


</span></th>
<th class="active text-center">Điểm</th>
<th class="active center">Mạng</th>
<th class="hidden">Phong Thủy +/-</th>
<th class="active text-center">Đặt mua</th>
<th class="active text-center text-center">Giỏ</th>

</tr>
</thead>


<?php echo $_smarty_tpl->getSubTemplate ('table_body.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<tfoot>
<tr>
<td colspan="8" class="text-right"><ul class="pagination pagination-sm"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</ul></td>
</tr>
</tfoot>
</table>


</div><?php }} ?>
