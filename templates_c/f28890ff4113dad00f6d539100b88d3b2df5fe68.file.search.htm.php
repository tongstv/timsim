<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-14 12:25:29
         compiled from "template/search.htm" */ ?>
<?php /*%%SmartyHeaderCode:14260124315dcce549dde221-96149734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f28890ff4113dad00f6d539100b88d3b2df5fe68' => 
    array (
      0 => 'template/search.htm',
      1 => 1544613860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14260124315dcce549dde221-96149734',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'data' => 0,
    'nosim1' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dcce549e4cba1_57957366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dcce549e4cba1_57957366')) {function content_5dcce549e4cba1_57957366($_smarty_tpl) {?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"><?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {
echo $_smarty_tpl->tpl_vars['name']->value;
}?></h1>
  </div>
  <?php echo $_smarty_tpl->getSubTemplate ('locsim.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  
<table class="table table-bordered table-condensed">

<thead>
<tr>

<th class="active center">STT</th>
<th class="active center">

Số sim


</th>
<th class="active sortprice center">Giá bán <span class="glyphicon"> <a class="pricetoogle" href="javascript://">
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
<?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate ('table_body.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
<div class="text1">
<?php echo $_smarty_tpl->tpl_vars['nosim1']->value['detail'];?>

<style>
.text-right{
    display:none;
    }
    thead{
        display:none;
    }
    
    

</style>
</div>

<?php }?>
<tfoot>
<tr>
<td colspan="8" class="text-right">


<?php echo $_smarty_tpl->tpl_vars['paging']->value;?>

</td>
</tr>
</tfoot>
</table>

</div>


<?php echo '<script'; ?>
 >
  document.addEventListener("DOMContentLoaded", function(event) {
     event.preventDefault();

     $('html,body').animate({scrollTop: $("#fixpos").position()}, 'show');

  });
<?php echo '</script'; ?>
>

<?php }} ?>
