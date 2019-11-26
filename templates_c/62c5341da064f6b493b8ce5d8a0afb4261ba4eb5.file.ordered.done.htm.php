<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-14 13:34:33
         compiled from "template/ordered.done.htm" */ ?>
<?php /*%%SmartyHeaderCode:3420380295dccf5797c8029-75523518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62c5341da064f6b493b8ce5d8a0afb4261ba4eb5' => 
    array (
      0 => 'template/ordered.done.htm',
      1 => 1487218614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3420380295dccf5797c8029-75523518',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'row' => 0,
    'tt' => 0,
    'fullname' => 0,
    'address' => 0,
    'city' => 0,
    'phone' => 0,
    'note' => 0,
    'dathangxong' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dccf5798323a7_39795055',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dccf5798323a7_39795055')) {function content_5dccf5798323a7_39795055($_smarty_tpl) {?><div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Đặt hàng thành công</h2>
  </div>
  <div class="panel-body">
   <table class="table table-hover table-condensed table-bordered" >
   <thead>
   <tr>
    <th class="active text-center col-md-1">STT</th>
     <th class="active text-center">Số sim</th>
      <th class="active">Giá tiền</th>
     
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
   
   <td class="center">
   

   <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['d']['index']+1;?>
</td>
   <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['row']->value['sosim'];?>
</td>
   <td><?php echo number_format(($_smarty_tpl->tpl_vars['row']->value['giatien']));?>
 VNĐ</td>


 
   </tr>
   <?php endfor; endif; ?>

    <tr>
    <td colspan="4" class="active">
    <?php if (isset($_smarty_tpl->tpl_vars['tt']->value)) {?>
    <h5 class="pull-right">
    Tổng tiền: <span id="total"><?php echo number_format(($_smarty_tpl->tpl_vars['tt']->value));?>
</span> VNĐ
    </h5>
    <?php }?>
    </td>
    </tr>
  
   </table>
   
   
   <table class="table table-hover table-condensed table-striped">
   <thead>
    <tr>
        <th class="active" colspan="2">Thông tin giao hàng</th>
    </tr>
   </thead>
   <tr>
   <td>Họ và tên:</td>
   <td><?php echo $_smarty_tpl->tpl_vars['fullname']->value;?>
</td>
   </tr>
   
      <tr>
   <td>Địa chỉ:</td>
   <td><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['city']->value;?>
</td>
   </tr>
   
         <tr>
   <td>Điện thoại:</td>
   <td><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</td>
   </tr>
   
   <?php if (isset($_smarty_tpl->tpl_vars['note']->value)) {?>
            <tr>
   <td>Ghi chú:</td>
   <td><?php echo $_smarty_tpl->tpl_vars['note']->value;?>
</td>
   </tr>
   
   <?php }?>
   </table>
   

   
  </div>
</div>

   <?php if (isset($_smarty_tpl->tpl_vars['dathangxong']->value)) {?>
   <div class="panel panel-default">
     <div class="panel-heading">
       <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['dathangxong']->value['title'];?>
</h2>
     </div>
     <div class="panel-body">
      <?php echo $_smarty_tpl->tpl_vars['dathangxong']->value['detail'];?>

     </div>
   </div>
   <?php }?><?php }} ?>
