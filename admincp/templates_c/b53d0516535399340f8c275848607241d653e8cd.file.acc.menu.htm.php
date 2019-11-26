<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-19 16:00:29
         compiled from "/usr/local/lib/php/app/adm/templates/acc.menu.htm" */ ?>
<?php /*%%SmartyHeaderCode:567171535bf27bad95b631-61018537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b53d0516535399340f8c275848607241d653e8cd' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/acc.menu.htm',
      1 => 1530780177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '567171535bf27bad95b631-61018537',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bf27bad971452_26055020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf27bad971452_26055020')) {function content_5bf27bad971452_26055020($_smarty_tpl) {?><div class="btn-group">




<div class="btn btn-default">
  <a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <span class="glyphicon glyphicon glyphicon-user"></span>
     Tài khoản
  
  </a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="index.php?do=acc">  <span class="glyphicon glyphicon glyphicon-user"></span> Đanh sách tài khoản</a></li>
     <li role="separator" class="divider"></li>
    <li><a class="ajax" href="index.php?ajax=acc.add"><span class="glyphicon glyphicon-plus"></span> Thêm tài khoản </a></li>
    
  <li role="separator" class="divider"></li>
    <li><a href="index.php?do=accgroup"><span class="glyphicon glyphicon glyphicon-user"></span><span class="glyphicon glyphicon glyphicon-user"></span> Nhóm Tài khoản</a></li>

     <li role="separator" class="divider"></li>
    <li><a class="ajax" href="index.php?ajax=accgroup.add"><span class="glyphicon glyphicon-plus"></span> Thêm nhóm tài khoản </a></li>
  </ul>
</div>

<div class="btn btn-default">
  <a class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <span class="glyphicon glyphicon-star"></span>
     UID Facebook
  
  </a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a href="index.php?do=accuid">  <span class="glyphicon glyphicon glyphicon-user"></span> Đanh sách UID</a></li>

  <li role="separator" class="divider"></li>
    <li><a href="index.php?do=accgroupuid"><span class="glyphicon glyphicon glyphicon-user"></span><span class="glyphicon glyphicon glyphicon-user"></span> Nhóm UID</a></li>

     <li role="separator" class="divider"></li>
    <li><a class="ajax" href="index.php?ajax=accgroupuid.add"><span class="glyphicon glyphicon-plus"></span>  Thêm nhóm UID</a></li>
  </ul>
</div>


<a class="btn btn-default" href="index.php?do=accevent"><span class="glyphicon glyphicon glyphicon-calendar"></span> Lịch tự động</a>
<a class="btn btn-default" href="index.php?do=acclogs"><span class="	glyphicon glyphicon-pencil"></span> Nhật ký</a>

</div><?php }} ?>
