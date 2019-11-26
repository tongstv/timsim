<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-09 14:09:09
         compiled from "/usr/local/lib/php/app/adm/templates/checksim.htm" */ ?>
<?php /*%%SmartyHeaderCode:4136824765ac2f073a89ef2-22305880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8cd72e4a9df50cc587668b440199a19110f3271' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/checksim.htm',
      1 => 1530780175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4136824765ac2f073a89ef2-22305880',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ac2f073b4aba4_51407320',
  'variables' => 
  array (
    'option_key' => 0,
    'option_name' => 0,
    'selected' => 0,
    'check' => 0,
    'checkid' => 0,
    'data' => 0,
    'row' => 0,
    'sosim' => 0,
    'lichsucheck' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac2f073b4aba4_51407320')) {function content_5ac2f073b4aba4_51407320($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/local/lib/php/app/lib/libs/plugins/function.html_options.php';
if (!is_callable('smarty_modifier_date_format')) include '/usr/local/lib/php/app/lib/libs/plugins/modifier.date_format.php';
?>
<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Check sim <a class="btn btn-sm btn-info ajax pull-right" href="index.php?ajax=daily.add">Thêm đại lý</a></h2>
   
  </div>
  <div class="panel-body">

 
    <div class="row">
    
    
    <div class="col-md-12">
    
      <div class="row">
    
<div class="col-md-1"></div>
    <div class="col-md-5 ">
    
    <form class="form-inline" method="POST">
    
    <div class="form-group">

    <input data-toggle="tooltip" data-placement="bottom" title="Check sim đầy đủ số hoặc có thể check theo dạng 09*9999" name="checksim" style="font-size: 18px;" class="form-control input-lg" value="<?php if (isset($_POST['checksim'])) {
echo $_POST['checksim'];
}?>" placeholder="Nhập số sim cần check" />

    </div>
    <div class="form-group">
    <div class="col-md-3">
    <button name="submit" class="btn btn-lg btn-success">Check sim</button>
    </div>
    </div>
    <div class="form-group">
    <div class="col-md-3"> <select name="dl" class="form-control center-block chosen" style="max-width: 200px;">
 
 <option value="0">Tất cả</option>
 <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['option_key']->value,'output'=>$_smarty_tpl->tpl_vars['option_name']->value,'selected'=>$_smarty_tpl->tpl_vars['selected']->value),$_smarty_tpl);?>

 </select></div>
    </div>
      <div class="form-group">
      
    
      <div class="col-md-12">
      
     <input name="sort" value="ASC" type="radio" data-toggle="tooltip" data-placement="bottom" title="Hạn chế sử dụng tính năng này tính năng này gây chậm web" /> Giá thấp ưu tiên
      <input name="sort" value="DESC" type="radio" data-toggle="tooltip" data-placement="bottom" title="Hạn chế sử dụng tính năng này tính năng này gây chậm web" /> Giá cao ưu tiên
      </div>
      </div>
    </form>
    
    
    </div>
    <div class="col-md-4">
    <?php if (isset($_smarty_tpl->tpl_vars['check']->value)&&$_smarty_tpl->tpl_vars['check']->value==true) {?>
    <form class="form-horizontal">
    
    <div class="form-group form-group-sm">
    <label class="control-label col-md-4">Đại lý báo giữ:</label>
    <div class="col-md-6 editable"  data-name="lichsuchecksim|check_giusim|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['checkid']->value;?>
">
   
    </div>
    </div>
    
    <div class="form-group form-group-sm">
    <label class="control-label col-md-4">Ghi chú:</label>
    <div class="col-md-6 editable" data-name="lichsuchecksim|check_note|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['checkid']->value;?>
">
    
    </div>
    </div>
    <div class="form-group form-group-sm">
   
    <a data-toggle="tooltip" data-placement="bottom" title="Nhắn list số tới 1 số điện thoại bất kỳ" class="btn btn-sm btn-success pull-right ajax" href="index.php?ajax=checksim.smslist">Nhắn list số</a>
    </div>
    </form>
    <?php }?>
    </div>
    
    </div>
       <?php if (isset($_smarty_tpl->tpl_vars['check']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['check']->value==true) {?>
    <table class="table table-hover table-condensed" id="tablesort">
    <thead>
    <tr>
    <th class="active center">STT</th>
    <th class="active">Số sim</th>
    <th class="active">Giá bán</th>
    <th class="active">Giá nhập</th>
     <th class="active">HH</th>
      <th class="active">Giá thu</th>
       <th class="active">Lãi</th>
       <th class="active">Điện thoại</th>
        <th class="active">Đại lý</th>
        <th class="active noSort col-md-2"></th>
        
    </thead>
    </tr>
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
    <td class="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['stt'];?>
</td>
    
    <td><strong><?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
</strong></td>
    <td><strong><?php echo number_format($_smarty_tpl->tpl_vars['row']->value['giaban']);?>
</strong></td>
    
     <td><?php echo number_format($_smarty_tpl->tpl_vars['row']->value['gianhap']);?>
</td>
     <td><?php echo $_smarty_tpl->tpl_vars['row']->value['hh'];?>
%</td>
     <td><?php echo number_format($_smarty_tpl->tpl_vars['row']->value['giathu']);?>
</td>
     <td><?php echo number_format($_smarty_tpl->tpl_vars['row']->value['lai']);?>
</td>
     
     <td><?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
</td>
     <td style="max-width: 250px;overflow: auto;"><?php echo $_smarty_tpl->tpl_vars['row']->value['fullname'];?>
 <strong>(
     <?php if ($_smarty_tpl->tpl_vars['row']->value['last_update']>0) {?>
     <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['last_update'],'d/m/y: H:i');?>

     <?php }?>
     
     )</strong><a href="index.php?ajax=daily.edit&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['dlid'];?>
" class="ajax btn btn-sm btn-info" data-toggle="tooltip" data-placement="bottom" title="Sửa thông tin đại lý"> Sửa</a>
     
     
     <a class="ajax" href="index.php?ajax=checksim.top200&dlid=<?php echo $_smarty_tpl->tpl_vars['row']->value['dlid'];?>
" data-toggle="tooltip" data-placement="bottom" title="Xem top 200 sim của đại lý: <?php echo $_smarty_tpl->tpl_vars['row']->value['fullname'];?>
" >Top 200</a>
     </td>
     
    <td>
    <div class="btn-group">
    <a data-toggle="tooltip" data-placement="bottom" title="Nhắn tin cho đại lý" href="index.php?ajax=checksim.sms&sosim=<?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
&giatien=<?php echo $_smarty_tpl->tpl_vars['row']->value['gianhap'];?>
&mobile=<?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
" class="ajax btn btn-sm btn-info">SMS</a>
    <a href="../<?php echo $_smarty_tpl->tpl_vars['row']->value['sim2'];?>
.html" target="_blank" class="btn btn-sm btn-success">Đặt mua</a>
    <a data-toggle="tooltip" data-placement="bottom" href="index.php?ajax=daily.dangsim&dlid=<?php echo $_smarty_tpl->tpl_vars['row']->value['dlid'];?>
" title="Đăng sim vào đại lý: <?php echo $_smarty_tpl->tpl_vars['row']->value['fullname'];?>
" class="frame btn btn-sm btn-warning">Đăng</a>
    <a data-toggle="tooltip" data-placement="bottom" title="Để sử dụng chức năng tìm bảng số theo email :<?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
 vui lòng đăng nhập gmail của bạn ở tab bên cạnh" class="btn btn-sm btn-default" target="_search" href="https://mail.google.com/mail/u/0/#advanced-search/from=<?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
&subset=all&within=1d&sizeoperator=s_sl&sizeunit=s_smb">(E)</a>
    <a data-toggle="tooltip" data-placement="bottom" class="ajax btn btn-sm btn-default" title="lưu công nợ" href="index.php?ajax=checksim.luucongno&dlid=<?php echo $_smarty_tpl->tpl_vars['row']->value['dlid'];?>
&sosim=<?php echo $_smarty_tpl->tpl_vars['row']->value['sim2'];?>
">LCN</a>
    <a href="index.php?ajax=checksim.del&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['simid'];?>
" class="btn btn-sm btn-danger confirm"><i class="glyphicon glyphicon-trash"></i> Xóa</a>
    <a data-toggle="tooltip" data-placement="bottom" class="btn btn-sm btn-default frame" title="Thiết lập tăng giảm giá cho đại lý: <?php echo $_smarty_tpl->tpl_vars['row']->value['fullname'];?>
 " href="index.php?ajax=daily.tg&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['dlid'];?>
">TG</a>
    <a data-toggle="tooltip" data-placement="bottom" class="btn btn-sm btn-default frame" title="Thiết lập hoa hồng cho đại lý <?php echo $_smarty_tpl->tpl_vars['row']->value['fullname'];?>
" href="index.php?ajax=daily.hh&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['dlid'];?>
">HH</a>
    </div>
    </td>
   
    </tr>
    <?php endfor; endif; ?>
    </table>
      
    </div>

    <?php } else { ?>
    
    <div class="row">
    
    <div class="center text-danger" style="margin: 0 auto;"> Số sim <strong><?php echo $_smarty_tpl->tpl_vars['sosim']->value;?>
</strong> không có trong cơ sở dữ liệu</div>
    </div>
    <?php }?>
    <?php }?>
    
  </div>
</div>
<div style="height: 300px; overflow: auto;">
<table class="table table-hover table-bordered table-condensed table-striped">
       <?php if (isset($_smarty_tpl->tpl_vars['lichsucheck']->value)) {?>
   
    
    <thead>
    <tr>
        <th class="active">Số sim</th>
           <th class="active">Thời gian</th>
              <th class="active">Tài khoản</th>
                 <th class="active">Đại lý báo giữ</th>
                  <th class="active">Ghi chú</th>
    </tr>
    </thead>
     <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['s'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['s']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['name'] = 's';
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['lichsucheck']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total']);
?>
    <?php $_smarty_tpl->tpl_vars['r'] = new Smarty_variable($_smarty_tpl->tpl_vars['lichsucheck']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']], null, 0);?>
    <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['check_sim'];?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['r']->value['check_date'],'d/m/Y H:i:s');?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['check_user'];?>
</td>
    <td class="red"><strong><?php echo $_smarty_tpl->tpl_vars['r']->value['check_giusim'];?>
</strong></td>
    <td class="red"><strong><?php echo $_smarty_tpl->tpl_vars['r']->value['check_note'];?>
</strong></td>
    </tr>
    
     <?php endfor; endif; ?>
    </table>
    </div>
   
<?php }?>
<?php echo '<script'; ?>
 src="../apps/js/tablesort.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>

$(function(){
    
      $(".chosen").chosen({ search_contains: true });
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
