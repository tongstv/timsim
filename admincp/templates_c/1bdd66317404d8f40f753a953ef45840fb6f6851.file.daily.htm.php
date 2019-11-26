<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-09 13:50:12
         compiled from "/usr/local/lib/php/app/adm/templates/daily.htm" */ ?>
<?php /*%%SmartyHeaderCode:1933028165ac2f06968ddf2-54311994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bdd66317404d8f40f753a953ef45840fb6f6851' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/daily.htm',
      1 => 1530780173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1933028165ac2f06968ddf2-54311994',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ac2f069729582_16734103',
  'variables' => 
  array (
    'error' => 0,
    'alert' => 0,
    'data' => 0,
    'row' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac2f069729582_16734103')) {function content_5ac2f069729582_16734103($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/usr/local/lib/php/app/lib/libs/plugins/modifier.date_format.php';
?><style>

.table td, .table a
{
    font-size: 12px;
}
td .btn-sm
{
    padding: 2px 4px;
    border-radius: 1px;
}
</style>
<div class="panel panel-success">
<div class="panel-heading">
<h2 class="panel-title">Quản lý đại lý</h2>
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
  
   
<div>
<div class="pull-left">
<form class="form-inline" action="index.php">
<div class="form-group">
<input type="hidden" name="do" value="<?php echo $_GET['do'];?>
" />
<input name="keyword" class="form-control input-sm" placeholder="Nội dung cần tìm" data-toggle="tooltip" data-placement="bottom" title="Nhập nội dung tìm kiếm hoặc để chống nếu muốn tìm theo ngày đăng" />
  <div class="form-group">
    <input name="sdate" data-toggle="tooltip" data-placement="bottom" title="Chọn ngày đăng bắt đầu" placeholder="Từ ngày" style="width: 70px;" class="form-control input-sm datepicker" data-date-format="dd/mm/yyyy" />
     <input name="edate"  data-toggle="tooltip" data-placement="bottom" title="Chọn ngày đăng kết thúc" placeholder="Đến ngày" style="width: 70px;" class="form-control input-sm datepicker" data-date-format="dd/mm/yyyy" />
    </div>
<button class="btn btn-warning btn-sm"> <i class="glyphicon glyphicon-search"></i> Tìm kiếm</button>
</div>
</form>

</div>

<div class="btn-group pull-right">
<a class="btn btn-success btn-sm" href="index.php?do=daily">All</a>

<a class="btn btn-default btn-sm" href="index.php?do=daily&ac=6">6 tháng chưa gửi</a>
<a class="btn btn-default btn-sm" href="index.php?do=daily&ac=3">3 tháng chưa gửi</a>
<a class="btn btn-default btn-sm" href="index.php?do=daily&ac=no">Chưa có sim</a>
<a class="btn btn-default btn-sm" href="index.php?do=daily&ac=trung">Trùng > 20%</a>
<?php if (isset($_SESSION['tangall'])) {?>
<label class="label label-default">
<span class="glyphicon glyphicon glyphicon-time text-warning"></span>
Đang thực hiện tăng giảm
</label>
<?php } else { ?>
<a class="btn btn-sm btn-danger" href="index.php?do=<?php echo $_GET['do'];?>
&tangall=1">Tăng giảm giá đồng loạt</a>
<?php }?>

<a class="btn btn-sm btn-info ajax" href="index.php?ajax=<?php echo $_GET['do'];?>
.add">Thêm mới</a>

</div>


</div>
<form method="POST">
<table class="table table-hover table-condensed" id="tablesort">
<thead>
<tr>
<th class="active"></th>
<th class="active">Đại lý</th>
<th class="active">Điện Thoại</th>
<th class="active">Email</th>
<th class="active">S M</th>
<th class="active">Tổng sim</th>
<th class="active">Thành Phố</th>
<th class="active noSort">Cập nhật</th>
<th class="active">Thứ tự</th>
<th class="noSort active"></th>
<th class="noSort active"></th>
<th class="noSort active"></th>
<th class="noSort active"></th>
<th class="noSort active"></th>
<th class="noSort active">ID</th>
<th class="noSort active"><input type="checkbox" class="checkall" /></th>
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
<td class="editable col-md-3" data-name="daily|fullname|id" data-type="textarea" data-pk="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['fullname'];?>
</td>
<td class="editable" data-name="daily|mobile|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
</td>
<td class="editable" data-name="daily|email|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" style="max-width: 90px; overflow-y: auto;"><?php echo substr($_smarty_tpl->tpl_vars['row']->value['email'],0,8);?>
... </td>
<td><a data-toggle="tooltip" data-placement="bottom" title="Lưu bảng số của đại lý này về máy tính" target="_blank" href="index.php?ajax=daily.export&exportid=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">(S)</a>

<a data-toggle="tooltip" data-placement="bottom" title="Tìm kiếm bảng số của đại lý này trong gmail" target="_search" href="https://mail.google.com/mail/u/0/#advanced-search/from=<?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
&subset=all&within=1d&sizeoperator=s_sl&sizeunit=s_smb">(E)</a>

 <a class="ajax" href="index.php?ajax=checksim.top200&dlid=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" data-toggle="tooltip" data-placement="bottom" title="Xem top 200 sim của đại lý: <?php echo $_smarty_tpl->tpl_vars['row']->value['fullname'];?>
" >Top 200</a>
</td>
<td><?php if (isset($_smarty_tpl->tpl_vars['row']->value['total_sim'])) {?><span style="color: green;"><?php echo number_format($_smarty_tpl->tpl_vars['row']->value['total_sim']);?>
</span><?php }?>

</td>
<td><?php echo $_smarty_tpl->tpl_vars['row']->value['city'];?>
</td>
<td style="font-size: 11px;"><?php if (isset($_smarty_tpl->tpl_vars['row']->value['last_update'])&&$_smarty_tpl->tpl_vars['row']->value['last_update']>0) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['last_update'],'d/m/y: H:i');
} else { ?><span style="color: red;">Chưa gửi bảng</span> <?php }?></td>
<td class="editable center" data-name="daily|pos|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['pos'];?>
</td>
<td><a class="frame" data-width="60%" title="Thiết lập hoa hồng cho đại lý này" data-toggle="tooltip" data-placement="bottom" href="index.php?ajax=daily.hh&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">HH</a> | <a data-toggle="tooltip" data-placement="bottom" title="Thiết lập tăng giảm giá cho đại lý này" href="index.php?ajax=daily.tg&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="frame" data-width="60%">T/G</a></td>
<td><a href="index.php?ajax=daily.dangsim&dlid=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="frame btn btn-sm btn-warning" data-width="60%" data-height="400" title="Đăng sim"> <i class="glyphicon glyphicon-up"></i> Đăng sim</a></td>
<td><a href="index.php?ajax=<?php echo $_GET['do'];?>
.edit&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="ajax btn btn-sm btn-info"> <i class="glyphicon glyphicon-edit"></i> Sửa</a></td>

<td> <a href="index.php?ajax=<?php echo $_GET['do'];?>
.del&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="confirm btn btn-sm btn-danger"> <i class="glyphicon glyphicon-trash"></i> Xóa</a></td>
<td> <a href="index.php?ajax=<?php echo $_GET['do'];?>
.delsim&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="confirm btn btn-sm btn-danger"> <i class="glyphicon glyphicon-trash"></i> Xóa sim</a></td>
<td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
<td><input type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="check" /></td>
</tr>
<?php endfor; endif; ?>
<tr>
<td colspan="15" class="text-right">

<input type="radio" name="odau" value="1" checked="" /> Trang chủ

<input type="radio" name="odau" value="2" /> Admin Check

<input type="radio" name="odau" value="3" /> Cả Hai
<button name="delallsim" class="btn btn-danger">Xóa sim đại lý đã lựa chọn</button>

</td>
<td><input type="checkbox" class="checkall" /></td>
</tr>
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
<?php if ($_smarty_tpl->tpl_vars['row']->value['stt']) {?>
var theHeaders = {}
    $(this).find('th.noSort').each(function(i,el){
        theHeaders[$(this).index()] = { sorter: false };
    });

$("#tablesort").tablesorter({
    
headers: theHeaders
    
});

<?php }?>
        $(".datef").datepicker({
                    format: "dd/mm/yyyy",
                     startDate: '-3d'
                });
                $(document).ajaxComplete(function(){
       $(".chosen").chosen({ search_contains: true, width:"100%" });
       $(".chosen").trigger("liszt:updated");
})

});
<?php echo '</script'; ?>
>
<?php }} ?>
