<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-09 14:14:42
         compiled from "/usr/local/lib/php/app/adm/templates/orders.view.htm" */ ?>
<?php /*%%SmartyHeaderCode:10500189435ac2f1ac8e8938-33297752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b1bb2f465fd5d743c34eb179f86ed182e42c3d9' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/orders.view.htm',
      1 => 1530780181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10500189435ac2f1ac8e8938-33297752',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ac2f1aca1cb85_87213418',
  'variables' => 
  array (
    'error' => 0,
    'alert' => 0,
    'notes' => 0,
    'sosim' => 0,
    'giatien' => 0,
    'fullname' => 0,
    'phone' => 0,
    'ulock' => 0,
    'id' => 0,
    'address' => 0,
    'citys' => 0,
    'city' => 0,
    'note' => 0,
    'dattruoc' => 0,
    'gianhap' => 0,
    'hh' => 0,
    'giathu' => 0,
    'dlfullname' => 0,
    'dladdress' => 0,
    'option_status' => 0,
    'status' => 0,
    'data' => 0,
    'row' => 0,
    'com_time' => 0,
    'date_order' => 0,
    'com_domain' => 0,
    'ip' => 0,
    'com_user' => 0,
    'com_url' => 0,
    'options' => 0,
    'dlid' => 0,
    'dlmobile' => 0,
    'sms' => 0,
    'smsk' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac2f1aca1cb85_87213418')) {function content_5ac2f1aca1cb85_87213418($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/usr/local/lib/php/app/lib/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_html_options')) include '/usr/local/lib/php/app/lib/libs/plugins/function.html_options.php';
?><!DOCTYPE html>
<html lang="vi, en">
   <head>
      <title>Đơn Hàng</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <?php echo '<script'; ?>
 src="../apps/js/jquery.min.js"><?php echo '</script'; ?>
>
      <link href="../apps/css/bootstrap.min.css" rel="stylesheet" media="screen">
      <link rel="stylesheet" href="../apps/css/bootstrap-theme.min.css">
      <link rel="stylesheet" href="../apps/css/style.css">
      <?php echo '<script'; ?>
 src="../apps/js/bootstrap.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="../apps/js/jquery.confirm.min.js"><?php echo '</script'; ?>
>
      <link href="../apps/css/bootstrap-editable.css" rel="stylesheet"/>
      <link href="../apps/css/style.css" rel="stylesheet"/>
      <?php echo '<script'; ?>
 src="../apps/js/bootstrap-editable.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="../apps/js/scriptlibs.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="../apps/js/admin.js"><?php echo '</script'; ?>
>
      <?php if (isset($_REQUEST['dlid'])) {?>
      <input type="hidden" name="dlid" value="<?php echo $_REQUEST['dlid'];?>
" />
      <?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
      <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
      <?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['alert']->value)) {?>
      <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</div>
      <?php }?>
      <div class="notes">
         <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['d'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['notes']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
         <div class="note" style="background-color: <?php echo $_smarty_tpl->tpl_vars['notes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['color'];?>
;">
            <a href="javascrip://" data-id="<?php echo $_smarty_tpl->tpl_vars['notes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id'];?>
" class="del pull-right glyphicon glyphicon-remove"></a>
            <?php echo $_smarty_tpl->tpl_vars['notes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['text'];?>

         </div>
         <?php endfor; endif; ?>
      </div>
      <div role="tabpanel">
         <!-- Nav tabs -->
         <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Lịch sử</a></li>
            <li role="presentation"><a href="#info" aria-controls="messages" role="tab" data-toggle="tab">Thông tin</a></li>
            <li role="presentation"><a href="#congno" aria-controls="messages" role="tab" data-toggle="tab">Lưu công nợ</a></li>
            <li role="presentation"><a href="#nhantin" aria-controls="messages" role="tab" data-toggle="tab">Nhắn tin</a></li>
            <li role="presentation"><a href="#note" aria-controls="messages" role="tab" data-toggle="tab">Ghi chú</a></li>
               <li role="presentation"><a href="#cod" aria-controls="messages" role="tab" data-toggle="tab">Cod <i class="glyphicon glyphicon-star"></i></a></li>
         </ul>
         <!-- Tab panes -->
         <div class="tab-content">
         <div role="tabpanel" class="tab-pane" id="cod">
         
         <br />
      <form class="ajax-form form-horizontal" action="index.php?ajax=cod.add">
      <input name="submit" value="true" type="hidden" />
    
     
       <div class="form-group form-group-sm">
       <label class="control-label col-sm-4">Ngày chuyển</label>
       <div class="col-sm-6">
       <input name="date_send" value="<?php echo smarty_modifier_date_format(time(),'d/m/Y');?>
" class="form-control" />
       </div>
       </div>

        <div class="form-group form-group-sm">
        <label class="control-label col-sm-4">Số sim:</label>
        <div class="col-sm-6">
        <input data-toggle="tooltip" data-placement="bottom" title="Chỉ cần nhập số sim và nhấn tìm dữ liệu khách hàng sẽ được lấy từ công nợ điền vào" name="simcard" value="<?php echo $_smarty_tpl->tpl_vars['sosim']->value;?>
" class="form-control" />
  
        </div>
        </div>
     
     <div class="form-group form-group-sm">
     <label class="control-label col-sm-4">Giá tiền:</label>
     <div class="col-sm-6">
     <input name="price" value="<?php echo $_smarty_tpl->tpl_vars['giatien']->value;?>
"  onkeyup="executeComma(event,this)" class="form-control" />
     </div>
     </div>
     
     
     <div class="form-group form-group-sm">
     <label class="control-label col-sm-4">Mã cod:</label>
     <div class="col-sm-6">
     <input name="code" class="form-control" />
     </div>
     </div>
     
     <div class="form-group form-group-sm">
     <label class="control-label col-sm-4">Họ tên:</label>
     <div class="col-sm-6">
     <input name="name" value="<?php echo $_smarty_tpl->tpl_vars['fullname']->value;?>
" class="form-control" />
     </div>
     </div>
     
     <div class="form-group form-group-sm">
     <label class="control-label col-sm-4">Điên thoại:</label>
     <div class="col-sm-6">
     <input name="phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" class="form-control" />
     </div>
     </div>
     
  
     

      <div class="text-center"><button class="btn btn-primary">Lưu</button></div>
  
      </form>
    
         </div>
            <div role="tabpanel" class="tab-pane" id="note">
               <form class="ajax-form" action="index.php?ajax=orders.note">
                  <input type="hidden" name="cid" value="<?php echo $_GET['id'];?>
" />
                  <br />
                  <div class="row text-center"><textarea name="text" cols="20" rows="10"></textarea></div>
                  <div class="row text-center">
                     Vàng <input type="radio" name="color" value="yellow" checked="" />
                     Xanh <input type="radio" name="color" value="blue" />
                     Đỏ <input type="radio" name="color" value="red" />
                  </div>
                  <div class="row text-center">
                     <input type="hidden" name="addnote" value="1" />
                     <button class="btn btn-success">Lưu gi chú</button>
                  </div>
               </form>
            </div>
            <div role="tabpanel" class="tab-pane active" id="home">
               <?php if ($_smarty_tpl->tpl_vars['ulock']->value!=''&&$_smarty_tpl->tpl_vars['ulock']->value!=$_COOKIE['email']) {?>
               <div class="text-center text-info" style="font-size: 20px;">
                  Đơn hàng đang được giao dịch bởi: <?php echo $_smarty_tpl->tpl_vars['ulock']->value;?>

                  <br />
                  Bạn vui lòng sử lý đơn hàng khác
               </div>
               <?php echo '</script'; ?>
>
               <?php } else { ?>
               <form method="POST" class= "form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
&id=<?php echo $_GET['id'];?>
">
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h2 class="panel-title">Thông tin khách hàng</h2>
                     </div>
                     <div class="panel-body">
                        <div class="form-group form-group">
                           <label class="control-label col-xs-2">Họ và tên:</label>
                           <div class="col-xs-4 editable" data-name="orders|fullname|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                              <?php echo $_smarty_tpl->tpl_vars['fullname']->value;?>

                           </div>
                        </div>
                        <div class="form-group form-group-sm">
                           <label class="control-label col-xs-2">Điện thoại:</label>
                           <div class="col-xs-4 editable" data-name="orders|phone|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                              <?php echo $_smarty_tpl->tpl_vars['phone']->value;?>

                           </div>
                        </div>
                        <div class="form-group form-group-sm">
                           <label class="control-label col-xs-2">Địa chỉ</label>
                           <div class="col-xs-7 editable" data-name="orders|address|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                              <?php echo $_smarty_tpl->tpl_vars['address']->value;?>

                           </div>
                           <div class="col-xs-3">
                              <select name="city" class="form-control input-sm col-xs-3">
                              <option value=""></option>
                              <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['citys']->value,'selected'=>$_smarty_tpl->tpl_vars['city']->value),$_smarty_tpl);?>

                              </select>
                           </div>
                        </div>
                        
                        
                          <div class="form-group">
                          
                          <label class="control-label col-md-4">Ghi chú:</label>
                          <div class="col-md-7">
                          <?php echo $_smarty_tpl->tpl_vars['note']->value;?>

                          </div>
                          </div>
                     </div>
                  </div>
                  <div class="col-xs-4 editable" data-name="orders|note|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"></div>
                  <div class="clearfix"></div>
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h2 class="panel-title">Thông tin đơn hàng</h2>
                     </div>
                     <div class="panel-body">
                        <table class="table table-hover table-condensed">
                           <thead>
                              <tr>
                                 <th class="active center">STT</th>
                                 <th class="active">Số Sim</th>
                                 <th class="active">Giá Tiền</th>
                                 <th class="active col-xs-3">Đặt trước</th>
                              </tr>
                           </thead>
                           <tr>
                              <td class="center">1</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['sosim']->value;?>
</td>
                              <td><?php echo number_format($_smarty_tpl->tpl_vars['giatien']->value);?>
 VNĐ</td>
                              <td>
                                 <div class="col-xs-10"> <input name="dattruoc" class="form-control price" value="<?php echo number_format($_smarty_tpl->tpl_vars['dattruoc']->value);?>
" /></div>
                                 VNĐ
                              </td>
                           </tr>
                           <tr>
                              <td colspan="4">
                                 Giá nhập: <?php echo number_format($_smarty_tpl->tpl_vars['gianhap']->value);?>
 VNĐ Hoa hồng: <?php echo $_smarty_tpl->tpl_vars['hh']->value;?>
% Giá thu về: <?php echo number_format($_smarty_tpl->tpl_vars['giathu']->value);?>
 VNĐ
                                 <div class="pull-right text-danger">Tổng: <?php echo number_format(($_smarty_tpl->tpl_vars['giatien']->value-$_smarty_tpl->tpl_vars['dattruoc']->value));?>
 VNĐ</div>
                              </td>
                           </tr>
                        </table>
                        <div class="row">
                           <div class="col-xs-4">
                              <?php echo $_smarty_tpl->tpl_vars['dlfullname']->value;?>
 
                              <hr>
                              <?php echo $_smarty_tpl->tpl_vars['dladdress']->value;?>

                           </div>
                           <div class="col-xs-8">
                              <div class="col-xs-5">
                                 <select name="status" class="center-block form-control input-sm col-xs-9">
                                 <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['option_status']->value,'selected'=>$_smarty_tpl->tpl_vars['status']->value),$_smarty_tpl);?>

                                 </select>
                              </div>
                              <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="id" />
                              <button class="btn btn-sm btn-success" name="save">Lựu thay đổi</button>
                              <a target="_blank" href="index.php?ajax=xprint&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-sm btn-danger">In phiếu thu</a>
                              <?php if ($_smarty_tpl->tpl_vars['ulock']->value) {?>
                              <a class="btn btn-sm btn-success" href="javascript://" onclick="$.get('index.php?ajax=orders.ulock&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
');$(this).toggleClass('btn-success btn-danger');"><i class="glyphicon glyphicon-lock"></i></a>
                              <?php } else { ?>
                              <a class="btn btn-sm btn-danger" href="javascript://" onclick="$.get('index.php?ajax=orders.ulock&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&lock=1');$(this).toggleClass('btn-success btn-danger');"><i class="glyphicon glyphicon-lock"></i></a>
                              <?php }?>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
               <?php }?>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h2 class="panel-title">Lịch sử xem và thay đổi dữ liệu</h2>
                  </div>
                  <div class="panel-body">
                     <table class="table table-hover table-condensed">
                        <thead>
                           <th class="active">Thành viên</th>
                           <th class="active">Thời gian</th>
                           <th class="active">IP</th>
                           <th class="active">Nội dung</th>
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
                           <td><?php echo $_smarty_tpl->tpl_vars['row']->value['user'];?>
</td>
                           <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['view_time'],'d/m/Y H:i:s');?>
</td>
                           <td><?php echo $_smarty_tpl->tpl_vars['row']->value['ip'];?>
</td>
                           <td><?php echo $_smarty_tpl->tpl_vars['row']->value['viewchange'];?>
</td>
                        </tr>
                        <?php endfor; endif; ?>
                     </table>
                  </div>
               </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="info">
               <table>
               </table>
               <div class="form-group form-group-sm">
                  <label class="control-label col-md-4">Ngày truy cập</label>
                  <div class="col-md-6">
                     <?php if ($_smarty_tpl->tpl_vars['com_time']->value>0) {?>
                     <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['com_time']->value,'d/m/Y H:i');?>

                     <?php }?>
                  </div>
               </div>
               <div class="form-group form-group-sm">
                  <label class="control-label col-md-4">Ngày đặt hàng</label>
                  <div class="col-md-6">
                     <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['date_order']->value,'d/m/Y H:i');?>

                  </div>
               </div>
               <div class="form-group form-group-sm">
                  <label class="control-label col-md-4">Tên miền:</label>
                  <div class="col-md-6">
                     <?php echo $_smarty_tpl->tpl_vars['com_domain']->value;?>

                  </div>
               </div>
               <div class="form-group form-group-sm">
                  <label class="control-label col-md-4">Địa chỉ ip:</label>
                  <div class="col-md-6">
                     <?php echo $_smarty_tpl->tpl_vars['ip']->value;?>

                  </div>
               </div>
               <div class="form-group form-group-sm">
                  <label class="control-label col-md-4">Trình duyệt</label>
                  <div class="col-md-6">
                     <?php echo $_smarty_tpl->tpl_vars['com_user']->value;?>

                  </div>
               </div>
               <div class="form-group form-group-sm">
                  <label class="control-label col-md-4">Nguồn truy cập</label>
                  <div class="col-xs-6">
                     <?php echo $_smarty_tpl->tpl_vars['com_url']->value;?>

                  </div>
               </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="congno">
               <div class="panel panel-success">
                  <div class="panel-heading">
                     <h2 class="panel-title">Lưu công nợ</h2>
                  </div>
                  <div class="panel-body">
                     <form class="form-horizontal" method="POST">
                        <div class="form-group">
                           <button type="submit" name="savecn" class="btn btn-sm btn-success pull-right">Lưu vào công nợ</button>
                        </div>
                        <div class="form-group form-group-sm">
                           <label class="control-label col-xs-4">Họ và tên</label>
                           <div class="col-xs-6">
                              <input name="fullname" value="<?php echo $_smarty_tpl->tpl_vars['fullname']->value;?>
" class="form-control" />
                           </div>
                        </div>
                        <div class="form-group form-group-sm">
                           <label class="control-label col-xs-4">Địa chỉ</label>
                           <div class="col-xs-6">
                              <input name="address" value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['city']->value;?>
" class="form-control" />
                           </div>
                        </div>
                        <div class="form-group form-group-sm">
                           <label class="control-label col-xs-4">Số sim</label>
                           <div class="col-xs-6">
                              <input name="sosim" value="<?php echo $_smarty_tpl->tpl_vars['sosim']->value;?>
" class="form-control" />
                           </div>
                        </div>
                        <div class="form-group form-group-sm">
                           <label class="control-label col-xs-4">Giá bán:</label>
                           <div class="col-xs-3">
                              <input name="giaban" value="<?php echo $_smarty_tpl->tpl_vars['giatien']->value/1000;?>
" class="form-control price" />
                           </div>
                           <div class="col-xs-3">
                              <input name="tuthu" class="form-control price" placeholder="Thự thu" />
                           </div>
                        </div>
                        <div class="form-group form-group-sm">
                           <label class="control-label col-xs-4">Giá nhập</label>
                           <div class="col-xs-6">
                              <input name="gianhap" value="<?php echo $_smarty_tpl->tpl_vars['gianhap']->value/1000;?>
" class="form-control price" />
                           </div>
                        </div>
                        <div class="form-group form-group-sm">
                           <label class="control-label col-xs-4">Hoa hồng</label>
                           <div class="col-xs-3">
                              <input name="hh" value="<?php echo $_smarty_tpl->tpl_vars['hh']->value;?>
" class="form-control" />
                           </div>
                           <div class="col-xs-3">
                              <input name="chiphi" class="form-control input-sm" placeholder="Chi phí" />
                           </div>
                        </div>
                        <div class="form-group form-group-sm">
                           <label class="control-label col-xs-4">Ngày</label>
                           <div class="col-xs-6">
                              <input name="ngay" class="form-control input-sm" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['date_order']->value,'d/m/Y');?>
" />
                           </div>
                        </div>
                        <div class="form-group form-group-sm">
                           <label class="control-label col-xs-4">Nhờ đại lý khác thu hộ</label>
                           <div class="col-xs-6">
                              <input type="checkbox" name="nhothu" value="1">
                           </div>
                        </div>
                        <div class="form-group form-group-sm">
                           <label class="control-label col-xs-4">Ghi chú:</label>
                           <div class="col-xs-6">
                              <input name="note" class="form-control input-sm" />
                           </div>
                        </div>
                        <input name="user" value="<?php echo $_COOKIE['email'];?>
" type="hidden" />
                        <select name="daily" class="form-control input-sm chosen">
                        <option value="">Chưa chọn đại lý</option>
                        <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['options']->value['id'],'output'=>$_smarty_tpl->tpl_vars['options']->value['name'],'selected'=>$_smarty_tpl->tpl_vars['dlid']->value),$_smarty_tpl);?>

                        </select>
                     </form>
                  </div>
               </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="nhantin">
               <form name="nhantin" method="POST" class="form-horizontal">
                  <div class="col-xs-6">
                     <div class="panel panel-success">
                        <div class="panel-heading">
                           <h2 class="panel-title">Nhắn cho đại lý</h2>
                        </div>
                        <div class="panel-body">
                           <div class="input-group">
                              <div class="input-group-addon">Đại lý nhận</div>
                              <input name="to" value="<?php echo $_smarty_tpl->tpl_vars['dlmobile']->value;?>
" class="form-control" />
                              
                           </div>
                           <div class="form-group form-group-sm">
                              <div class="col-xs-12 ">
                                 <textarea name="msg" id="msg" class="form-control" style="height: 130px;" cols="35" rows="6"></textarea>
                              </div>
                           </div>
                           <div class="row">
                              <button name="sendsms" class="center-block btn btn-success">Nhắn tin cho đại lý</button>
                           </div>
                           <div class="form-group form-group-sm">
                              <label class="control-label text-center">Tin mẫu</label>
                              <div class="col-xs-12">
                                 <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['s'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['s']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['name'] = 's';
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['sms']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                                 <input class="smstemplate" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['sms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['msg'];?>
" name="mau" /><?php echo $_smarty_tpl->tpl_vars['sms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['title'];?>
<br />
                                 <?php endfor; endif; ?> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-6">
                     <div class="panel panel-info">
                        <div class="panel-heading">
                           <h2 class="panel-title">Nhắn cho khách hàng</h2>
                        </div>
                        <div class="panel-body">
                           <div class="input-group">
                              <div class="input-group-addon">Người nhận</div>
                              <input name="khachhang" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" class="form-control" />
                           </div>
                           <div class="form-group">
                              <div class="col-md-12">
                                 <textarea rows="6" cols="35" name="msg2" style="height: 130px;" class="form-control" id="msgk"></textarea>
                              </div>
                           </div>
                           <div class="form-group">
                           <div class="text-center">
                           <input type="checkbox" name="delsim" /> Đồng thời xóa sim <strong><?php echo $_smarty_tpl->tpl_vars['sosim']->value;?>
</strong> trên web
                           <input name="sim" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['sosim']->value;?>
" />
                              </div>
                              <button class="btn btn-info center-block" name="smskhach">Nhắn cho khách hàng</button>
                           </div>
                           <div class="form-group">
                             <label class="control-label text-center">Tin mẫu</label>
                             <div class="col-xs-12">
                              <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['s'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['s']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['name'] = 's';
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['smsk']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                              <input class="smstemplatek" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['smsk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['msg'];?>
" name="mauk" /><?php echo $_smarty_tpl->tpl_vars['smsk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['title'];?>
<br />
                              <?php endfor; endif; ?> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <link rel="stylesheet" href="../apps/css/chosen.css">
      <?php echo '<script'; ?>
 src="../apps/js/chosen.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
>
         $(function(){
           $(".chosen").chosen({ search_contains: true, width: "100%" });
           var msg=$(".smstemplate").val();
           $("#msg").text(msg);
           
           var msgk=$(".smstemplatek").val();
           $("#msgk").text(msgk);
           
           $(".smstemplate").click(function(){
               
               msg=$(this).val();
              
               $("#msg").text(msg);
           })
           
           $(".smstemplatek").click(function(){
               
               msgk=$(this).val();
              
               $("#msgk").text(msgk);
           })
           
         });
         $('.editable').editable({
    url:"index.php?ajax=orders.editable",
    type:"text"
});

      <?php echo '</script'; ?>
>
   </body>
</html><?php }} ?>
