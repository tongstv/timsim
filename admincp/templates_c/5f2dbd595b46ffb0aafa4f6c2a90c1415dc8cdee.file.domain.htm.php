<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-24 23:20:29
         compiled from "/usr/local/lib/php/app/adm/templates/domain.htm" */ ?>
<?php /*%%SmartyHeaderCode:17596948585b5751cd5a5435-22486507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f2dbd595b46ffb0aafa4f6c2a90c1415dc8cdee' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/domain.htm',
      1 => 1530780171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17596948585b5751cd5a5435-22486507',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ip' => 0,
    'error' => 0,
    'alert' => 0,
    'data' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5b5751cd66c9f9_47552641',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5751cd66c9f9_47552641')) {function content_5b5751cd66c9f9_47552641($_smarty_tpl) {?><div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Tự đăng ký tên miền  và chỉ vào web chỉ mất vài phút</h2>
  </div>
  <div class="panel-body">
  
    
    <strong>Thông tin máy chủ của bạn</strong>
    <br />
    NS1: nsv1.stv.vn 
    <br />
    NS2: nsv2.stv.vn
    <br />
    IP: <?php echo $_smarty_tpl->tpl_vars['ip']->value;?>

  </div>
</div>

<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Quản lý tên miền</h2>
  </div>
  <div class="panel-body">
   
<div>
<div class="pull-left">
  <?php if (isset($_smarty_tpl->tpl_vars['error']->value)&&$_smarty_tpl->tpl_vars['error']->value) {?>
  
  <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
  <?php }?>
  
  <?php if (isset($_smarty_tpl->tpl_vars['alert']->value)&&$_smarty_tpl->tpl_vars['alert']->value) {?>
  
  <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</div>
  <?php }?>
<form class="form-inline" action="index.php?do=domain" method="POST">
<div class="form-group">

<input name="domain" class="form-control input-sm" placeholder="Nhập tên miền" />
<input type="checkbox" name="alias" value="yes" checked="" />alias
<button class="btn btn-success btn-sm"> <i class="glyphicon glyphicon-add"></i>Thêm tên miền</button>
</div>
</form>


</div>

<div class="pull-right">
<form class="form-inline" action="index.php?do=domain" method="POST">
<div class="form-group">

<input name="del" class="form-control input-sm" placeholder="Nhập tên miền" />

<button class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-del"></i>Xóa tên miền</button>
</div>
</form>

</div>

</div>

<table class="table table-hover table-condensed" id="tablesort">
<thead>
    <tr>
        <th class="active text-center">STT</th>

         <th class="active text-center">Tên miền</th>
         
        <th class="active text-center">Kiểu</th>
        <th class="active text-center noSort">  </th>
          <th class="active text-center noSort">  </th>
            <th class="active text-center noSort">PROXY  </th>
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
        <td class="text-center col-md-1"><?php echo $_smarty_tpl->tpl_vars['row']->value['stt'];?>
</td>
       
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['domain'];?>
</td>
         <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['row']->value['type'];?>
</td>
        <td class="text-center"><a href="index.php?do=domain&del=<?php echo $_smarty_tpl->tpl_vars['row']->value['domain'];?>
" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> Xóa</a> </td>
        <td class="text-center"><a href="index.php?ajax=proxycache.add&domain=<?php echo $_smarty_tpl->tpl_vars['row']->value['domain'];?>
" class="ajax btn btn-sm btn-success">Proxy add</a> </td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['proxy'];?>
</td>
    </tr>
<?php endfor; endif; ?>    
</table>

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
