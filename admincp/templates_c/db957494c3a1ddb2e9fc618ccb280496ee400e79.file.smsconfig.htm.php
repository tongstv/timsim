<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-18 11:12:29
         compiled from "/usr/local/lib/php/app/adm/templates/smsconfig.htm" */ ?>
<?php /*%%SmartyHeaderCode:19432601465ac4dea4d8f658-04656596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db957494c3a1ddb2e9fc618ccb280496ee400e79' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/smsconfig.htm',
      1 => 1530780177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19432601465ac4dea4d8f658-04656596',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ac4dea4e3caf1_59806072',
  'variables' => 
  array (
    'error' => 0,
    'alert' => 0,
    'appstatus' => 0,
    'smsxoadau' => 0,
    'smsdonhang' => 0,
    'smskhach' => 0,
    'smsdaily' => 0,
    'smsbaomat' => 0,
    'secret' => 0,
    'smsforward' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac4dea4e3caf1_59806072')) {function content_5ac4dea4e3caf1_59806072($_smarty_tpl) {?><div class="container">
<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title"><i class="glyphicon glyphicon-comment"></i> Cấu hình sms tự động</h2>
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


<form method="POST" class="form-horizontal">
<div class="text-center">
Trạng thái:
<?php if (isset($_smarty_tpl->tpl_vars['appstatus']->value)&&$_smarty_tpl->tpl_vars['appstatus']->value=='on') {?>
    <input type="checkbox" value="on" name="appstatus" class="status" checked=""/>
    <?php } else { ?>
    <input type="checkbox" name="appstatus" class="status" />
    <?php }?>
    <div class="pull-right"><button name="submit" class=" btn btn-success">Lưu cấu hình</button></div>
    </div>
<table class="table table-bordered">

<thead>
<tr>
<th class="active">Chức năng</th>
<th class="active">Cấu hình</th>
<th class="active col-md-1">Trạng thái</th>
</tr>



</thead>
<tbody>


<tr>
<td>Tự động xóa dấu</td>

<td>
Tự động loại bỏ dấu tin nhắn để tiếc kiệm tiền nhắn tin
</td>

<td><?php if (isset($_smarty_tpl->tpl_vars['smsxoadau']->value['status'])&&$_smarty_tpl->tpl_vars['smsxoadau']->value['status']=='on') {?>
    <input type="checkbox" value="on" name="smsxoadau[status]" class="status" checked=""/>
    <?php } else { ?>
    <input type="checkbox" name="smsxoadau[status]" class="status" />
    <?php }?></td>
</tr>



<tr>
<td>Nhắn tin đơn hàng</td>

<td><input name="smsdonhang[to]" placeholder="Số nhận tin" value="<?php echo $_smarty_tpl->tpl_vars['smsdonhang']->value['to'];?>
" />
Giờ nhận sms:<input name="smsdonhang[date]" placeholder="08,09,10,11,12,13,14,15,16,17,18,19,20,21" value="<?php echo $_smarty_tpl->tpl_vars['smsdonhang']->value['date'];?>
" />
 Để chống bằng full time
<br />
Nhắn tin khi có đơn hàng mới tới số điện thoại

</td>

<td><?php if (isset($_smarty_tpl->tpl_vars['smsdonhang']->value['status'])&&$_smarty_tpl->tpl_vars['smsdonhang']->value['status']=='on') {?>
    <input type="checkbox" value="on" name="smsdonhang[status]" class="status" checked=""/>
    <?php } else { ?>
    <input type="checkbox" name="smsdonhang[status]" class="status" />
    <?php }?></td>
</tr>
<tr>

<td>Nhắn tin cảm ơn khách hàng</td>

<td><textarea name="smskhach[sms]" cols="60" rows="6" placeholder="Cảm ơn #fullname# đã đặt mua sim tại #domain#, số sim #sosim#, giá #giatien# VNĐ"><?php echo $_smarty_tpl->tpl_vars['smskhach']->value['sms'];?>
</textarea>
<br />
 #sosim#,#giatien#, #fullname#, #domain#
</td>


<td><?php if (isset($_smarty_tpl->tpl_vars['smskhach']->value['status'])&&$_smarty_tpl->tpl_vars['smskhach']->value['status']=='on') {?>
    <input type="checkbox" value="on" name="smskhach[status]" class="status" checked=""/>
    <?php } else { ?>
    <input type="checkbox" name="smskhach[status]" class="status" />
    <?php }?>
</td>
</tr>


<tr>

<td>Nhắn tin kiểm tra và giữ sim</td>

<td><textarea name="smsdaily[sms]" cols="60" rows="6" placeholder="Nhờ A/C kiểm tra giúp em #sosim# giá #giatien# VNĐ, Nếu còn A/C giữ giúp em bên em đang có khách đặt , Xin cảm ơn, Ký tên #domain#"><?php echo $_smarty_tpl->tpl_vars['smsdaily']->value['sms'];?>
</textarea>
<br />

 
 Giờ gửi sms:<input name="smsdaily[date]" placeholder="08,09,10,11,12,13,14,15,16,17,18,19,20,21" value="<?php echo $_smarty_tpl->tpl_vars['smsdaily']->value['date'];?>
" />
 Để chống bằng full time
 <br />
  #sosim#,#giatien#, #domain#
 </td>
<td><?php if (isset($_smarty_tpl->tpl_vars['smsdaily']->value['status'])&&$_smarty_tpl->tpl_vars['smsdaily']->value['status']=='on') {?>
    <input type="checkbox" value="on" name="smsdaily[status]" class="status" checked=""/>
    <?php } else { ?>
    <input type="checkbox" name="smsdaily[status]" class="status" />
    <?php }?></td>

</tr>

<tr>

<td><strong>Bảo mật & chống spam sms</strong></td>

<td>
Từ một máy tính chỉ sms 1 lần trong vòng <input type="text" name="smsbaomat[time]" value="<?php echo $_smarty_tpl->tpl_vars['smsbaomat']->value['time'];?>
" /> Phút
 </td>
<td><?php if (isset($_smarty_tpl->tpl_vars['smsbaomat']->value['status'])&&$_smarty_tpl->tpl_vars['smsbaomat']->value['status']=='on') {?>
    <input type="checkbox" value="on" name="smsbaomat[status]" class="status" checked=""/>
    <?php } else { ?>
    <input type="checkbox" name="smsbaomat[status]" class="status" />
    <?php }?></td>

</tr>

<tr>

<td><strong>Khóa bí mật (secret) cho ứng dụng SMSsync</strong></td>

<td colspan="2">
 <input onclick="this.type='text'" type="password" name="secret" value="<?php echo $_smarty_tpl->tpl_vars['secret']->value;?>
" /> để chống = 123
 <br />
 Link api: <strong>http://<?php echo $_SERVER['HTTP_HOST'];?>
/index.php/sync</strong>
 <br />
 
 <a href="https://onedrive.live.com/redir?resid=FA81DF5047210D0B!194059&authkey=!ALsmnUcwvLH21LA&ithint=file%2capk" target="_blank">Tải ứng dụng SMSsync</a>
 </td>


</tr>


<tr>

<td ><strong>API gửi sms từ ứng dụng khác tới SMSsync </strong> <br />Dành cho nhiều web site sử dụng cùng 1 hệ thống sms
<br />
Hoặc nhiều ứng dụng sử dụng cùng 1 số nhắn tin
</td>
<td colspan="2">
$_POST =>  <strong>http://<?php echo $_SERVER['HTTP_HOST'];?>
/index.php/sync</strong>
<br />
$_POST['secret']=<?php if ($_smarty_tpl->tpl_vars['secret']->value) {
echo $_smarty_tpl->tpl_vars['secret']->value;
} else { ?>123<?php }?>
<br />
$_POST['from']="Tên APP";
<br />
$_POST['message']='Nội dung tin nhắn';
<br />
$_POST['sent_to']="Số người nhận";

<br />

<strong style="color: #5CB85C;">Nếu gửi thành công trả về json dạng</strong>

{"payload":{"success":true,"error":"NULL"}}

<br />
<strong class="text-danger">Nếu không thành công trả về json dạng</strong>

{"payload":{"success":false,"error":"Kh\u00f3a b\u1ecb m\u1eadt (secret) kh\u00f4ng h\u1ee3p l\u1ec7!"}}

<br />





</tr>

<tr>
<td colspan="3" class="text-center active"><i class="glyphicon glyphicon-star"></i><strong>CHUYỂN SMS TỪ WEB NÀY SANG WEBSITE KHÁC - SMS FORWARD</strong></td>
</tr>
<tr>
<td><input name="smsforward[secret]" type="password" class="form-control" placeholder="secret app" value="<?php echo $_smarty_tpl->tpl_vars['smsforward']->value['secret'];?>
" /></td>
<td><input name="smsforward[url]" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['smsforward']->value['url'];?>
" placeholder="http://domain.com/index.php/sync" /></td>
<td><?php if (isset($_smarty_tpl->tpl_vars['smsforward']->value['status'])&&$_smarty_tpl->tpl_vars['smsforward']->value['status']=='on') {?>
    <input type="checkbox" value="on" name="smsforward[status]" class="status" checked=""/>
    <?php } else { ?>
    <input type="checkbox" name="smsforward[status]" class="status" />
    <?php }?></td>
</tr>
</tbody>
</table>



</form>

</div>


</div>

<link href="/apps/css/bootstrap-switch.min.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="/apps/js/bootstrap-switch.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
$.fn.bootstrapSwitch.defaults.onColor = 'success';
$.fn.bootstrapSwitch.defaults.offColor = 'danger';
$.fn.bootstrapSwitch.defaults.onText = 'Bật';
$.fn.bootstrapSwitch.defaults.offText = 'Tắt';
$(document).ready(function(){
  $("textarea").parents('td').append($("h6"));
  
 $("textarea").keyup(function(){
   
    leng=$(this).html().length;
    
    $(this).parents('h6').append(leng);
  
   });

 $(".status").bootstrapSwitch();
})

<?php echo '</script'; ?>
>


<?php }} ?>
