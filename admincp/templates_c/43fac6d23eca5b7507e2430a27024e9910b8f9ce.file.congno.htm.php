<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-13 10:47:49
         compiled from "/usr/local/lib/php/app/adm/templates/congno.htm" */ ?>
<?php /*%%SmartyHeaderCode:17698901395ac2f26e5dea03-67610346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43fac6d23eca5b7507e2430a27024e9910b8f9ce' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/congno.htm',
      1 => 1530780178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17698901395ac2f26e5dea03-67610346',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ac2f26e724ac6_67312416',
  'variables' => 
  array (
    'paging' => 0,
    'options' => 0,
    'dlid' => 0,
    'opt' => 0,
    'data' => 0,
    'row' => 0,
    'tongtuthu' => 0,
    'tongdailythu' => 0,
    'tongphi' => 0,
    'tonglai' => 0,
    'tongphaitra' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac2f26e724ac6_67312416')) {function content_5ac2f26e724ac6_67312416($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/local/lib/php/app/lib/libs/plugins/function.html_options.php';
if (!is_callable('smarty_modifier_date_format')) include '/usr/local/lib/php/app/lib/libs/plugins/modifier.date_format.php';
?><div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Quản lý công nợ <a href="index.php?do=thanhtoan" class="pull-right"><strong style="color: white;">Thanh toán /  Nhận tiền</strong></a></h2>
  </div>
  <div class="panel-body">

  <div class="row"><div class="pull-right"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</div>

  </div>
    <div class="clearfix"></div>
    
    <div class="pull-right">
    <form class="form-inline" method="GET" id="congno">
    <input type="hidden" name="do" value="congno" />
    <input type="checkbox" name="tt" value="1" title="Tìm những giao dịch đã thanh toán" data-toggle="tooltip" data-placement="bottom" />GD TT
   
    <input name="keyword" class="form-control input-sm" placeholder="Tìm kiếm giao dịch" />
      <div class="form-group">
    <input name="sdate" value="<?php if (isset($_GET['sdate'])) {
echo $_GET['sdate'];
} else {
echo date(time(),'d/m/Y');
}?>" placeholder="Từ ngày" style="width: 70px;" class="form-control input-sm datepicker" data-date-format="dd/mm/yyyy" />
     <input name="edate" value="<?php if (isset($_GET['edate'])) {
echo $_GET['edate'];
} else {
echo date(time(),'d/m/Y');
}?>" placeholder="Đến ngày" style="width: 70px;" class="form-control input-sm datepicker" data-date-format="dd/mm/yyyy" />
    </div>
     
    <select class="form-control input-sm chosen" name="daily">
    <option value="0">Xem theo đại lý
    <?php if (isset($_GET['edate'])) {?> - Đến: <?php echo $_GET['edate'];
}?>
    </option>
    <?php if (isset($_GET['daily'])&&$_GET['keyword']=='') {?>
    <?php $_smarty_tpl->tpl_vars['dlid'] = new Smarty_variable($_GET['daily'], null, 0);?>
    <?php }?>
    <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['options']->value['id'],'output'=>$_smarty_tpl->tpl_vars['options']->value['name'],'selected'=>$_smarty_tpl->tpl_vars['dlid']->value),$_smarty_tpl);?>

    
    </select>
  <select name="giaodichvien" class="form-control input-sm">
  <option value="">Tìm theo gdv</option>
   <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['opt']->value['id'],'output'=>$_smarty_tpl->tpl_vars['opt']->value['name']),$_smarty_tpl);?>

  </select>
     <button class="btn btn-sm btn-warning"> <i class="glyphicon glyphicon-search"></i>Tìm kiếm </button>
  <a data-toggle="tooltip" data-placement="bottom" title="Để sử dụng chức năng nhắn tin xin mã cod phần ghi chú của giao dịch bạn cần gõ cod" class="ajax" href="index.php?ajax=congno.cod<?php if (isset($_GET['sdate'])) {?>&sdate=<?php echo $_GET['sdate'];
}
if (isset($_GET['sdate'])) {?>&edate=<?php echo $_GET['sdate'];
}?>">COD</a>
    <a href="?<?php echo $_SERVER['QUERY_STRING'];?>
&del=1" class="btn btn-sm btn-danger"> <i class="glyphicon"></i>GD đã xóa</a>
        <a href="?<?php echo $_SERVER['QUERY_STRING'];?>
&tt=1" class="btn btn-sm btn-info"> <i class="glyphicon glyphicon"></i>GD đã TT</a>

     <?php if (isset($_GET['daily'])&&$_GET['daily']!=0) {?>
    <a href="index.php?ajax=congno.sms&daily=<?php echo $_GET['daily'];
if (isset($_GET['sdate'])) {?>&sdate=<?php echo $_GET['sdate'];
}
if (isset($_GET['edate'])) {?>&edate=<?php echo $_GET['edate'];
}?>" class="ajax btn btn-sm btn-default">SMS</a>
    <?php }?>
    <a target="_blank" href="index.php?ajax=excel<?php if (isset($_GET['tt'])) {?>&tt=<?php echo $_GET['tt'];
}?>&daily=<?php if (isset($_GET['daily'])) {
echo $_GET['daily'];
}
if (isset($_GET['sdate'])) {?>&sdate=<?php echo $_GET['sdate'];
}
if (isset($_GET['edate'])) {?>&edate=<?php echo $_GET['edate'];
}?>" class="btn btn-sm btn-success">Xuất Excel</a>
    <?php if (isset($_GET['daily'])&&$_GET['daily']!=0) {?>
        <a title="Chốt công nợ"  class="frame btn btn-sm btn-info" href="index.php?ajax=congno.chot&daily=<?php echo $_GET['daily'];
if (isset($_GET['sdate'])) {?>&sdate=<?php echo $_GET['sdate'];
}
if (isset($_GET['edate'])) {?>&edate=<?php echo $_GET['edate'];
}?>" class="btn btn-sm btn-danger">Chốt công nợ</a>
        <?php }?>

    
    <div class="dropdown pull-right">
  <button class="btn btn-sm btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tools
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li>        <a title="Nhập thêm dữ liệu vào công nợ" href="index.php?ajax=congno.input&daily=<?php if (isset($_GET['daily'])) {
echo $_GET['daily'];
}?>" class="frame">Nhập thêm</a></li>
   <li class="divider"></li>
    <li><a href="index.php?do=congno.tools">Công cụ xuất hàng loạt</a></li>
    <li><a href="#"></a></li>
  </ul>
</div>
    </form>
    </div>
    <table class="table table-bordered table-hover table-condensed">
    
    <thead>
    	<tr>
    		<th class="active center">STT</th>
            	<th class="active">Ngày</th>
                    <th class="active">Giao dich Viên</th>
                	<th class="active">Khách hàng</th>
                    	<th class="active">Số sim</th>
                        <th class="active">Ghi chú</th>
                        <th class="active">Giá nhập</th>
                        
                        <th class="active">Giá bán</th>
                        <th class="active">HH</th>
                     <th class="active">Tự thu</th>
                     <th class="active">Đại lý thu</th>
                     <th class="active">Phí</th>
                     <th class="active">Lãi</th>
                     <th class="active">Phải trả</th>
                         <th class="active text-center">#</th>
                      <th class="active text-center">#</th>
                      <th class="active text-center">#</th>
                    
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
    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['row']->value['stt'];?>
</td>
    <td><a href="index.php?do=congno&sdate=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['ngay'],'d/m/Y');?>
&edate=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['ngay'],'d/m/Y');?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['ngay'],'d/m/y');?>
</a></td>
        <td style="width: 40px; overflow: hidden;"><?php echo $_smarty_tpl->tpl_vars['row']->value['user'];?>
</td>
        <td class="fullname editable" data-content="<div id='my_popover'></div>" data-name="congno|fullname|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['fullname'];?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['row']->value['status']==1) {?>
        <td style="color: red"><strong><?php echo $_smarty_tpl->tpl_vars['row']->value['sosim'];?>
</strong>[Đã Xóa]</td>
        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['status']==2) {?>
        
          <td class="text-info"><strong><?php echo $_smarty_tpl->tpl_vars['row']->value['sosim'];?>
</strong>[Đã TT]</td>
          <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['status']==3) {?>
        
          <td class=""><strong style="color: gray;"><?php echo $_smarty_tpl->tpl_vars['row']->value['sosim'];?>
</strong>[Bị Hoàn]</td>
        <?php } else { ?>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['sosim'];?>
</td>
        <?php }?>
     <td class="editable red" data-name="congno|note|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['note'];?>
</td>
    <td class="editable" data-name="congno|gianhap|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo number_format($_smarty_tpl->tpl_vars['row']->value['gianhap']);?>
</td>
    <td class="editable" data-name="congno|giaban|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo number_format($_smarty_tpl->tpl_vars['row']->value['giaban']);?>
</td>
    
    <td class="editable" data-name="congno|hh|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['hh'];?>
</td>
    
    <td class="editable" data-name="congno|tuthu|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo number_format($_smarty_tpl->tpl_vars['row']->value['tuthu']);?>
</td>
    
     <td><?php echo number_format($_smarty_tpl->tpl_vars['row']->value['dailythu']);?>
</td>
     <td class="editable" data-name="congno|chiphi|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo number_format($_smarty_tpl->tpl_vars['row']->value['chiphi']);?>
</td>
  
    
    <td><?php echo number_format($_smarty_tpl->tpl_vars['row']->value['lai']);?>
</td>

          <td><?php echo number_format($_smarty_tpl->tpl_vars['row']->value['phaitra']);?>
</td>
                  <td class="text-center"><div class="dropdown">
    <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Menu
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="index.php?do=congno&keyword=&daily=<?php echo $_smarty_tpl->tpl_vars['row']->value['daily'];?>
">Xem tất cả giao dịch của đại lý</a></li>
      <li class="divider"></li>
      <li><a class="hoan" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" href="#">Đánh dấu sim bị hoàn</a></li>
      <li class="divider"></li>
      <li><a href="#"></a></li>
    </ul>
  </div></td>
          <td class="text-center">
          <a href="index.php?ajax=congno.edit&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="ajax btn btn-sm btn-info"> <i class="glyphicon glyphicon-edit"></i>Sửa </a>
          </td>
        <td class="text-center"> <a href="index.php?ajax=<?php echo $_GET['do'];?>
.del&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="confirm btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> Xóa</a></td>

    </tr>
    <?php endfor; endif; ?>
    
        	<tr>
    	
            	<th class="active"></th>
                <th class="active"></th>
                <th class="active"></th>
                <th class="active"></th>
                <th class="active"></th>
                <th class="active"></th>
                <th class="active"></th>
                <th class="active"></th>
                <th class="active"></th>
                	
                     <th class="active"><?php echo number_format($_smarty_tpl->tpl_vars['tongtuthu']->value);?>
</th>
                     <th class="active"><?php echo number_format($_smarty_tpl->tpl_vars['tongdailythu']->value);?>
</th>
                     <th class="active"><?php echo number_format($_smarty_tpl->tpl_vars['tongphi']->value);?>
</th>
                     <th class="active"><?php echo number_format($_smarty_tpl->tpl_vars['tonglai']->value);?>
</th>
                     <th class="active"><?php echo number_format($_smarty_tpl->tpl_vars['tongphaitra']->value);?>
</th>
                
                       <th class="active"></th>
                       <th class="active"></th>
                    
    	</tr>
    </table>
    <div class="clearfix"></div>
    
  </div>
</div>


   <link rel="stylesheet" href="/apps/css/bootstrap-datepicker.min.css" />
      
    <?php echo '<script'; ?>
 src="/apps/js/bootstrap-datepicker.vi.min.js"><?php echo '</script'; ?>
>    
            
<link rel="stylesheet" href="/apps/css/chosen.css">
<?php echo '<script'; ?>
 src="/apps/js/chosen.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/js/bootbox.min.js"><?php echo '</script'; ?>
>
     
      <?php echo '<script'; ?>
>
      
      $(function(){
        
           $(document).on("click", ".hoan", function(e) {
            var id=$(this).data('id');
            bootbox.prompt("Nhập phí chuyển hoàn nếu có", function(phi) {
              

                if(phi)
                {
                $.post("index.php?ajax=congno.hoansim",{'id':id,'chiphi':phi}).done(function(){
                    window.location.reload();
                });
                }
            });
        });
        
        
        $("#congno").submit(function(){
        
        
        
           if($("input[name='sdate']").val()=='')
        {
            $("input[name='sdate']").val('01/01/1970');
        }   
          
        });
        
        $(".chosen").chosen({ search_contains: true, width: "300px" });
        $(".datef").datepicker({
                    format: "dd/mm/yyyy"
                }).on('changeDate', function(ev){

$("#congno").submit();
});
$("select[name='daily']").change(function(){
 $("#congno").submit();
});


$(document).ajaxComplete(function(){
    
    
       $(".chosen").chosen({ search_contains: true, width:"100%" });
       $(".chosen").trigger("liszt:updated");
       
       $('.date').datepicker({
        format: "dd/mm/yyyy"
});
       
       
       $("#link").click(function(e){
       $(this).attr('href','index.php?ajax=congno.sms&daily='+$("input[name='dlx']").val()+'&sdate='+$("input[name='sdate']").val()+'&edate='+$("input[name='edate']").val());
        
    });
    
   
    
})



              });
              
      <?php echo '</script'; ?>
>
      <?php }} ?>
