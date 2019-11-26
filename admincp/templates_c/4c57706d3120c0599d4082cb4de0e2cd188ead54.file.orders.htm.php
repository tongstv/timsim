<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-09 13:49:17
         compiled from "/usr/local/lib/php/app/adm/templates/orders.htm" */ ?>
<?php /*%%SmartyHeaderCode:11046735185ac2f06c5675e2-27479029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c57706d3120c0599d4082cb4de0e2cd188ead54' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/orders.htm',
      1 => 1530780171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11046735185ac2f06c5675e2-27479029',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ac2f06c5ef119_34396524',
  'variables' => 
  array (
    'city' => 0,
    'city_selected' => 0,
    'status' => 0,
    'status_selected' => 0,
    'select_date_value' => 0,
    'select_date' => 0,
    'date_selected' => 0,
    'data' => 0,
    'row' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac2f06c5ef119_34396524')) {function content_5ac2f06c5ef119_34396524($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/local/lib/php/app/lib/libs/plugins/function.html_options.php';
if (!is_callable('smarty_modifier_date_format')) include '/usr/local/lib/php/app/lib/libs/plugins/modifier.date_format.php';
?><link rel="stylesheet" href="/apps/css/datepicker.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="/apps/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>


<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Đơn đặt hàng</h2>
  </div>
  <div class="panel-body">
   
<div>
<div class="pull-left">
<form class="form-inline">
<div class="form-group">
<input type="hidden" name="do" value="<?php echo $_GET['do'];?>
" />
<input data-toggle="tooltip" data-placement="bottom" title="Tìm theo: Tên Hoặc địa chỉ Hoặc số sim Hoặc điện thoại có dấu hoặc không dấu" name="keyword" class="form-control input-sm" placeholder="Nội dung cần tìm" />
<button class="btn btn-warning btn-sm"> <i class="glyphicon glyphicon-search"></i> Tìm kiếm</button>
</div>
</form>

</div>

<div class="btn-group pull-right ">
<form method="POST" class="form-inline" id="orders">
<input name="change" value="1" type="hidden" />
<select id="city" name="city" class="form-control input-sm chosen-select">
<option value="0">Thành phố</option>
<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['city']->value,'output'=>$_smarty_tpl->tpl_vars['city']->value,'selected'=>$_smarty_tpl->tpl_vars['city_selected']->value),$_smarty_tpl);?>

</select>
<select name="status" id="status" name="status" class="form-control input-sm">
<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['status']->value,'selected'=>$_smarty_tpl->tpl_vars['status_selected']->value),$_smarty_tpl);?>

</select>

<select id="date" name="date" class="form-control input-sm">
<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['select_date_value']->value,'output'=>$_smarty_tpl->tpl_vars['select_date']->value,'selected'=>$_smarty_tpl->tpl_vars['date_selected']->value),$_smarty_tpl);?>

<option value="99">Chọn ngày</option>
</select>
</form>
</div>
</div>
<div class="clearfix"></div>
<form method="POST">
<table class="table table-hover table-condensed" id="tablesort">
<thead>
    <tr>
        <th class="active noSort">#</th>
        <th class="active">Thời gian</th>
         <th class="active">Họ và tên</th>
         
         <th class="active">Điện thoại</th>
         <th class="active">Thành phố</th>
         <th class="active hidden-xs">ip</th>
          <th class="active">Số sim</th>
           <th class="active">Giá tiền</th>
           <th class="active">Trạng thái</th>
           <th class="active noSort"><div class="dropdown">
    <button class="btn btn-sm btn-success dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Tắc vụ
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><button class="btn btn-sm btn-danger" name="delselect">Xóa lựa chọn</button></li>
      <li class="divider"></li>
   <li role="presentation"><button class="btn btn-sm btn-default" name="hetsim">Đánh dấu ko còn sim</button></li>
    
    </ul>
  </div></th>
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
        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['date_order'],'d/m/y H:i');?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['fullname'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['row']->value['phone'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value['city'];?>
</td>
          <td class="hidden-xs"><a style="font-size: 11px;" data-toggle="tooltip" data-placement="bottom" title="Bỏ vào đã hủy đơn hàng từ địa chỉ Ip này" class="confirm glyphicon glyphicon-trash"  href="index.php?ajax=orders.delfromip&ip=<?php echo $_smarty_tpl->tpl_vars['row']->value['ip'];?>
"></a> <?php echo $_smarty_tpl->tpl_vars['row']->value['ip'];?>
 </td>
          <td><strong><?php echo $_smarty_tpl->tpl_vars['row']->value['sosim'];?>
</strong></td>
           <td><strong><?php echo number_format($_smarty_tpl->tpl_vars['row']->value['giatien']);?>
</strong></td>
            <td>
            
            
            <?php echo $_smarty_tpl->tpl_vars['row']->value['status'];?>
</td>
         <td class="center">
         
         <?php if ($_smarty_tpl->tpl_vars['row']->value['ulock']!=''&&$_smarty_tpl->tpl_vars['row']->value['ulock']!=$_COOKIE['email']) {?>
         <?php echo $_smarty_tpl->tpl_vars['row']->value['ulock'];?>

         <?php } else { ?>
         
         <a href="index.php?ajax=<?php echo $_GET['do'];?>
.view&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="frame btn btn-sm btn-info" data-width="60%" title="Đơn hàng  ::  <?php echo $_smarty_tpl->tpl_vars['row']->value['sosim'];?>
 -  <?php echo number_format($_smarty_tpl->tpl_vars['row']->value['giatien']);?>
 VNĐ">Xem</a>
         <?php }?>
         </td>
         <td>
         <input type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="check" />
         </td>

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



$(".chosen-select").chosen({ search_contains: true });

$("#city, #status, #date").change(function(){
    
   test=$("#date option:selected" ).val();
   
   if(test==99)
   {
    $(this).after("<input id=\"datef\" name=\"datef\" class=\"datepicker form-control input-sm\" style=\"width:200px\">");
    $("#date").remove();
    $("#datef").datepicker().on('changeDate', function(ev){

$("#orders").submit();
});
   
  return false;
   }
   
   $("#orders").submit();
})

var theHeaders = {}
    $(this).find('.noSort').each(function(i,el){
        theHeaders[$(this).index()] = { sorter: false };
    });

$("#tablesort").tablesorter({
    
headers: theHeaders
    
});

});






<?php echo '</script'; ?>
><?php }} ?>
