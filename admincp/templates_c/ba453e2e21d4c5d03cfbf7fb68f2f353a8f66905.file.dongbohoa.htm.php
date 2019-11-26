<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-09-06 12:29:25
         compiled from "/usr/local/lib/php/app/adm/templates/dongbohoa.htm" */ ?>
<?php /*%%SmartyHeaderCode:13402969705b24e18e0f3076-48447310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba453e2e21d4c5d03cfbf7fb68f2f353a8f66905' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/dongbohoa.htm',
      1 => 1530780179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13402969705b24e18e0f3076-48447310',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5b24e18e148b10_33522519',
  'variables' => 
  array (
    '_search_txt' => 0,
    '_search' => 0,
    '_addnew' => 0,
    'error' => 0,
    'alert' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b24e18e148b10_33522519')) {function content_5b24e18e148b10_33522519($_smarty_tpl) {?><div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Đống bộ hóa dữ liệu admin và trang chủ</h2>
  </div>
  <div class="panel-body">
   

<div class="pull-left">
<form class="form-inline" action="index.php">
<div class="form-group">
<input type="hidden" name="do" value="<?php echo $_GET['do'];?>
" />
<input name="keyword" class="form-control input-sm" placeholder="<?php echo $_smarty_tpl->tpl_vars['_search_txt']->value;?>
" />
<button class="btn btn-warning btn-sm"> <i class="glyphicon glyphicon-search"></i><?php echo $_smarty_tpl->tpl_vars['_search']->value;?>
</button>
</div>
</form>

</div>
<form method="POST">
<div class="btn-group pull-right">

<a class="btn btn-sm btn-info ajax" href="index.php?ajax=<?php echo $_GET['do'];?>
.add"><?php echo $_smarty_tpl->tpl_vars['_addnew']->value;?>
</a>
<button name="delselect" class="btn btn-danger">Xóa</button>
</div>

</form>
<div class="clearfix"></div>

<div class="container">


  <strong style="color: red;"> Chắc năng này có thể làm đơ website của quý khách
   
   <br />

Quý khách cần chọn thời điển thích hợp để sử dụng</strong>


  <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
  
  <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
  <?php }?>
  
  <?php if (isset($_smarty_tpl->tpl_vars['alert']->value)) {?>
  
  <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</div>
  <?php }?>

<form method="POST" class="form-horizontal">

<div class="form-group">


<button class="btn btn-lg center-block btn-primary" name="search">Tìm sim và xóa sim dư thừa trong admin</button>
</div>



<div class="form-group">


<button class="btn btn-lg center-block btn-danger" name="del">Xóa toàn bộ sim ngoài trang chủ</button>
</div>



<div class="form-group">


<button class="btn btn-lg center-block btn-info" name="copy1">Copy sim từ admin ra trang chủ ưu tiên để lại số giá thấp nếu trùng</button>
</div>


<div class="form-group">


<button class="btn btn-lg center-block btn-warning" name="copy2">Copy sim từ admin ra trang chủ ưu tiên để lại số giá cao nếu trùng</button>
</div>
</form>

</div>
<div class="pull-right"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</div>
  </div>
</div>
<?php echo '<script'; ?>
 src="../js/tablesort.js"><?php echo '</script'; ?>
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
