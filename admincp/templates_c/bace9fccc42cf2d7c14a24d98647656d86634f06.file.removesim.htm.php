<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-08-13 10:45:47
         compiled from "/usr/local/lib/php/app/adm/templates/removesim.htm" */ ?>
<?php /*%%SmartyHeaderCode:11158782125b136f0c10d495-45995346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bace9fccc42cf2d7c14a24d98647656d86634f06' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/removesim.htm',
      1 => 1530780170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11158782125b136f0c10d495-45995346',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5b136f0c15a817_72458552',
  'variables' => 
  array (
    'error' => 0,
    'alert' => 0,
    'option_key' => 0,
    'option_name' => 0,
    'option_selected' => 0,
    'num' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b136f0c15a817_72458552')) {function content_5b136f0c15a817_72458552($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/local/lib/php/app/lib/libs/plugins/function.html_options.php';
?><div class="container">

<div class="panel panel-primary">
  <div class="panel-heading">
    <h2 class="panel-title">Xóa bỏ sim lỗi khỏi website</h2>
  </div>
  <div class="panel-body">



<form class="form-horizontal" method="POST">

  <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
  
  <div class="alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
  <?php }?>
  
  <?php if (isset($_smarty_tpl->tpl_vars['alert']->value)) {?>
  
  <div class="alert-success"><?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</div>
  <?php }?>

<div class="form-group">
<label class="col-sm-6 control-label text-right">Xóa theo khoảng giá</label>
<div class="col-sm-3"><input type="text" name="gia1" placeholder="0" class="form-control"></div>
<div class="col-sm-3"><input type="text" name="gia2" placeholder="200,000" class="form-control price"></div>
</div>


<div class="form-group">
<label class="col-sm-6 control-label text-right">Xóa theo độ dài sim</label>
<div class="col-sm-3">
<div class="input-group">
<div class="input-group-addon">< </div>
 <input type="text" name="leng1" placeholder="9" class="form-control"> <div class="input-group-addon">ký tự</div></div>

</div>

<div class="col-sm-3">

<div class="input-group">

<div class="input-group-addon">></div>
<input type="text" name="leng2" placeholder="12" class="form-control"><div class="input-group-addon">Ký tự</div></div>

</div>

</div>


<div class="form-group">
<label class="col-sm-6 control-label text-right">Xóa theo đầu số</label>
<div class="col-sm-6"><input type="text" name="dau" placeholder="0120" class="form-control"></div>

</div>

<div class="form-group">
<label class="col-sm-6 control-label text-right">Đại lý</label>
<div class="col-sm-6"><select class="chosen form-control" name="simdl">
                  <option value="0">Chọn đại lý</option>
                  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['option_key']->value,'output'=>$_smarty_tpl->tpl_vars['option_name']->value,'selected'=>$_smarty_tpl->tpl_vars['option_selected']->value),$_smarty_tpl);?>

               </select></div>

</div>

<div class="form-group">
<label class="col-sm-6 control-label text-right">Xóa theo mạng</label>
<div class="col-sm-6"><select name="network" class="form-control strong"><option value="-1">Chọn mạng di động</option><option value="1">Viettel</option><option value="2">Mobifone</option><option value="3">Vinaphone</option><option value="4">Vietnamobile</option><option value="5">Gmobile</option><option value="0">Số Cố Định</option></select></div>
</div>


<div class="form-group text-center">

<button name="search" class="btn btn-info"> <i class="glyphicon glyphicon-search"></i>Tìm kiếm thử</button>
<?php if (isset($_smarty_tpl->tpl_vars['num']->value)) {?>
<button name="del" class="btn btn-danger"> <i class="glyphicon glyphicon-remove"></i> Xóa <?php echo $_smarty_tpl->tpl_vars['num']->value;?>
 sim tìm được</button>

<?php }?>
</div>
</form>

  </div>
</div>

</div>

    <link rel="stylesheet" href="/apps/css/chosen.css">
<?php echo '<script'; ?>
 src="/apps/js/chosen.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
    
    $(document).ready(function(){

    $(".chosen").chosen({ search_contains: true, width: "300px" });
      
       
      // $(".date").datepicker();
       
       
  
   
    
});



    <?php echo '</script'; ?>
><?php }} ?>
