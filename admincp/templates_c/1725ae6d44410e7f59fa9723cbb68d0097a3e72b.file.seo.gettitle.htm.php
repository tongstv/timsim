<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-08-04 12:03:16
         compiled from "/usr/local/lib/php/app/adm/templates/seo.gettitle.htm" */ ?>
<?php /*%%SmartyHeaderCode:20408505175b653394741fc5-49989047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1725ae6d44410e7f59fa9723cbb68d0097a3e72b' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/seo.gettitle.htm',
      1 => 1530780173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20408505175b653394741fc5-49989047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5b6533947b0e94_55125402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6533947b0e94_55125402')) {function content_5b6533947b0e94_55125402($_smarty_tpl) {?><link href="/apps/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="/apps/css/bootstrap-theme.min.css">
<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Lấy thông tin seo từ website khác</h2>
  </div>
  <div class="panel-body">
  <form method="POST">
  
    <div class="form-group">
    
    <label class="control-label col-md-4">Tên miền cần lấy</label>
    <div class="col-md-7">
    
    <input class="form-control" name="url" placeholder="http://domain.com" />
    </div>
    </div>
    
      <div class="form-group">
      
      <label class="control-label col-md-4">Tên miền của bạn:</label>
      <div class="col-md-7">
      
      <input class="form-control" name="url2" placeholder="Tên miền bạn cần seo" />
      </div>
      </div>
      
      <div class="row"><button class="btn btn-success center-block" name="submit">Lấy thông tin</button></div>

  </form>
  
  <?php if (isset($_smarty_tpl->tpl_vars['alert']->value)) {
echo $_smarty_tpl->tpl_vars['alert']->value;
}?>
  </div>
</div><?php }} ?>
