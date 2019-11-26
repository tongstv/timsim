<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-12 02:29:02
         compiled from "/usr/local/lib/php/app/adm/templates/sms.htm" */ ?>
<?php /*%%SmartyHeaderCode:19205998695ac2f077817173-79166813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab63a097d58f1d3f84d940f1afd34d0dc2b4b827' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/sms.htm',
      1 => 1530780182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19205998695ac2f077817173-79166813',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ac2f077887469_47766335',
  'variables' => 
  array (
    'data' => 0,
    'row' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac2f077887469_47766335')) {function content_5ac2f077887469_47766335($_smarty_tpl) {?><div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Tin nhắn<div class="pull-right"><a href="index.php?ajax=sms.huongdan" class="ajax">Hướng dẫn cấu hình</a></div></h2>
  </div>
  <div class="panel-body">
   
<div>
<div class="pull-left">
<form class="form-inline" action="index.php">
<div class="form-group">
<input type="hidden" name="do" value="<?php echo $_GET['do'];?>
" />
<input name="keyword" class="form-control input-sm" placeholder="Nội dung!" />
<button class="btn btn-warning btn-sm"> <i class="glyphicon glyphicon-search"></i> Tìm kiếm</button>
</div>
</form>

</div>
<form method="POST">
<div class="btn-group pull-right">
<a class="btn btn-sm btn-default ajax" title="Gửi tin nhắn tới danh sách" href="index.php?ajax=sms.sendlist">Send sms</a>
<a class="btn btn-sm btn-default frame" title="Tạo tin nhắn bán số trùng" href="index.php?ajax=sms.bansotrung">Tạo tin bán số trùng</a>
<a class="btn btn-sm btn-info" href="index.php?do=<?php echo $_GET['do'];?>
&status=2">Tin nhắn đến</a>
<a class="btn btn-sm btn-success" href="index.php?do=<?php echo $_GET['do'];?>
&status=1">Tin nhắn đi</a>


    <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Nhiều hơn
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a class="confirm" href="index.php?ajax=sms.removesms"><span class="glyphicon glyphicon-trash"></span> Xóa tin nhắn đến trùng nhau</a></li>
      <li><a class="confirm" href="index.php?ajax=sms.delsmsad"><span class="glyphicon glyphicon-trash"></span> Xóa tin nhắn từ đầu số quảng cáo</a></li>
      <li><a class="confirm" href="index.php?ajax=sms.delwait"><span class="glyphicon glyphicon-trash"></span> Xóa tin nhắn đang đợi gửi</a></li>
        <li><a class="confirm" href="index.php?ajax=sms.smsbansim"><span class="glyphicon glyphicon-trash"></span> Xóa tin đến có nội dung bán sim</a></li>
    </ul>


</div>


</div>

<table class="table table-hover table-condensed" id="tablesort">
<thead>
    <tr>
        <th class="active text-center">STT</th>
        <th class="active">Thời gian</th>
         <th class="active">Người gửi</th>
         
         <th class="active">Người nhận</th>
         <th class="active">Nội dung</th>
         <th class="active">Trạng thái</th>
         <th class="active noSort"></th>
     
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
        <td class="text-center"> <?php echo $_smarty_tpl->tpl_vars['row']->value['stt'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['sms_date'];?>
</td>
         <td><?php if ($_smarty_tpl->tpl_vars['row']->value['sms_staus']==2) {?><a  data-placement="bottom" title="click nếu muốn gửi tin nhắn tới số này" class="ajax" href="index.php?ajax=sms.reply&to=<?php echo $_smarty_tpl->tpl_vars['row']->value['sms_sender'];?>
"><?php }
echo $_smarty_tpl->tpl_vars['row']->value['sms_sender'];
if ($_smarty_tpl->tpl_vars['row']->value['sms_staus']==2) {?></a><?php }?></td>
           <td><a data-toggle="tooltip" data-placement="bottom" title="click nếu muốn gửi tin nhắn tới số này" class="ajax" href="index.php?ajax=sms.reply&to=<?php echo $_smarty_tpl->tpl_vars['row']->value['sms_to'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['sms_to'];?>
</a></td>
           <td title="Nội dung tin đã gửi tới: <?php echo $_smarty_tpl->tpl_vars['row']->value['sms_sender'];?>
" style="max-width: 400px; overflow:  auto;"  data-poload="index.php?ajax=sms.view" data-to="<?php echo $_smarty_tpl->tpl_vars['row']->value['sms_sender'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['sms_msg'];?>
</td>
            <td ><a onclick="a=confirm('Bạn muốn gửi lại tin này?'); if(a===false) return false;" href="index.php?do=sms&rid=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php if ($_smarty_tpl->tpl_vars['row']->value['sms_staus']==1) {?>
            
		<span style="color: #008000">Đã gửi </span>
        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['sms_staus']==3) {?>
        <span style="color:#99CC00">Chuyển tiếp </span>
		<?php } elseif ($_smarty_tpl->tpl_vars['row']->value['sms_staus']==2) {?>
		<span style="color: #FF0000; background-color: #FFFF00;">Tin đến</span>
		<?php } else { ?>
		<span style="color: #FF0000">Đợi gửi</span>
		<?php }?></a></td>
         

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
    <?php if ($_smarty_tpl->tpl_vars['row']->value['stt']) {?>
var theHeaders = {}
    $(this).find('th.noSort').each(function(i,el){
        theHeaders[$(this).index()] = { sorter: false };
    });

$("#tablesort").tablesorter({
    
headers: theHeaders
    
});

<?php }?>


$('[data-poload]').hover(
    function (event) {
        var el = $(this);

        // disable this event after first binding 
        el.off(event);

        // add initial popovers with LOADING text
        el.popover({
            content: "loading…", // maybe some loading animation like <img src='loading.gif />
            html: true,
            placement: "auto",
            container: 'body',
            trigger: 'hover'
        });
     
        el.popover('show');
  

        // requesting data from unsing url from data-poload attribute
          
        $.get(el.data('poload')+'&to='+el.data('to'), function (d) {
            // set new content to popover
            el.data('bs.popover').options.content = d;

            // reshow popover with new content
            el.popover('show');
        });
    },
    // Without this handler popover flashes on first mouseout
    function() {}
);




});
<?php echo '</script'; ?>
><?php }} ?>
