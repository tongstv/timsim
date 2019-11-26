<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-14 12:22:33
         compiled from "template/home.htm" */ ?>
<?php /*%%SmartyHeaderCode:15187258615dcce49964d362-69173141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2aeeea84a2f900a634be6badec53cd5158a2538' => 
    array (
      0 => 'template/home.htm',
      1 => 1544611636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15187258615dcce49964d362-69173141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'paging' => 0,
    'seo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dcce4996994a5_10177452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dcce4996994a5_10177452')) {function content_5dcce4996994a5_10177452($_smarty_tpl) {?><div class="panel panel-default">
  <div class="panel-heading">
    <h2 class="panel-title" style="font-size: 16px;">SIM SỐ ĐẸP - MỚI CẬT NHẬT - TẠI TÌM SIM.COM</h2>
  </div>
<?php echo $_smarty_tpl->getSubTemplate ('locsim.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table class="table table-bordered table-condensed table-hover ">
<thead>
<tr>
<th class="active center">STT</th>
<th class="active center">
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
</div>


<div class="panel panel-default hidden-xs">
<div class="panel-heading">
<h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['seo']->value['title'];?>
</h2>
</div>
<div class="panel-body">
<div style="max-height: 300px; overflow: auto;">
<?php echo $_smarty_tpl->tpl_vars['seo']->value['detail'];?>

</div>

</div>
</div><?php }} ?>
