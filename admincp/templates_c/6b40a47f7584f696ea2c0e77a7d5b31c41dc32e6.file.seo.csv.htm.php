<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-08-16 12:57:52
         compiled from "/usr/local/lib/php/app/adm/templates/seo.csv.htm" */ ?>
<?php /*%%SmartyHeaderCode:12303194715b750a1a7ed917-16079489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b40a47f7584f696ea2c0e77a7d5b31c41dc32e6' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/seo.csv.htm',
      1 => 1534398977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12303194715b750a1a7ed917-16079489',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5b750a1a86ba87_10825117',
  'variables' => 
  array (
    'msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b750a1a86ba87_10825117')) {function content_5b750a1a86ba87_10825117($_smarty_tpl) {?><div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Nhập từ csv</h2>
  </div>
  <div class="panel-body">
   
   
   <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
   
   <div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>
   <?php }?>


<form method="POST">




  <div class="form-group" style="padding: 10px 100px;">
  
  
  <textarea class="form-control" rows="20" name="csv" placeholder="url|title|des|keyword"></textarea>
  </div>
  
  
  
  <div class="form-group">
  <button class="btn btn-lg center-block btn-success" name="submit">Nhập dữ liệu</button>
  
  </div>

</form>



  </div>
<?php }} ?>
