<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-09-18 11:12:04
         compiled from "/usr/local/lib/php/app/adm/templates/header.htm" */ ?>
<?php /*%%SmartyHeaderCode:12402175935ac2f0695ff339-29388070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f46dd9d28d8105bda70906cb5abed8d1654245b3' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/header.htm',
      1 => 1537171830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12402175935ac2f0695ff339-29388070',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ac2f069674368_80481788',
  'variables' => 
  array (
    'setting' => 0,
    'menu' => 0,
    'fullname' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac2f069674368_80481788')) {function content_5ac2f069674368_80481788($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>

<?php if (isset($_smarty_tpl->tpl_vars['setting']->value['title'])) {?>
<title><?php echo $_smarty_tpl->tpl_vars['setting']->value['title'];?>
</title>
<?php } else { ?>
<title>adminCP</title>
<?php }?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/apps/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<link href="/apps/admin/css.php.css?app=admin&time=2&s=222" rel="stylesheet" media="screen">

<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="tongstv">
<?php if (isset($_smarty_tpl->tpl_vars['setting']->value['icon'])) {?>

<link rel=icon href="<?php echo $_smarty_tpl->tpl_vars['setting']->value['icon'];?>
" sizes="32x32" type="image/png">
<?php } else { ?>
<link rel=icon href=/data/admin_favicon.png sizes="16x16" type="image/png">
<?php }?>

<style>

<?php if (isset($_smarty_tpl->tpl_vars['setting']->value['menu'])) {?>

.navbar-default
{
    background: <?php echo $_smarty_tpl->tpl_vars['setting']->value['menu'];?>
 !important;
}
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['setting']->value['panel'])) {?>

.panel-heading
{
        background:<?php echo $_smarty_tpl->tpl_vars['setting']->value['menu'];?>
 !important;
        
    
}


<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['setting']->value['menutext'])) {?>
.navbar-default .navbar-nav>li>a {
    color: <?php echo $_smarty_tpl->tpl_vars['setting']->value['menutext'];?>
 !important;
}

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['setting']->value['paneltitle'])) {?>
.panel .panel-title {
    color: <?php echo $_smarty_tpl->tpl_vars['setting']->value['paneltitle'];?>
 !important;
}

<?php }?>
</style>

</head>

<body>
<?php echo '<script'; ?>
 src="/apps/admin/js2.js?time=1" type="text/javascript"><?php echo '</script'; ?>
>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
    </div>
  </div>
</div>
<?php if (isset($_COOKIE['perm'])) {?>
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">
      
      <span class="glyphicon glyphicon-home"></span>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

        <li><a title="Xem thêm ứng dụng tiện ích" class="slideleft"><span class="glyphicon glyphicon-list"></span></a></li>
      </ul>
   
      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
                  <li><a href="index.php?ajax=users.logout"><span class="glyphicon glyphicon-off text-danger"></span>Đăng xuất</a></li>
             <li class="divider"></li>
            <li><a class="ajax" href="index.php?ajax=users.changer">Thay đổi thông tin</a></li>
            

          </ul>
        </li>
        <li><a href="index.php?do=shop" style="color: #004040; font-weight: bold;"><span class="glyphicon glyphicon-briefcase"></span>Shop</a></li>
        <li><a style="color: #8000FF;" href="index.php?ajax=help&cid=<?php echo $_GET['do'];?>
" data-width="600" title="Trợ giúp" data-height="500" class="ajax">Help</a></li>
      <li class="dropdown">

  <a class="dropdown-toggle" type="button" data-toggle="dropdown">Tools
  <span class="caret"></span></a>
  <ul class="dropdown-menu">
    <li class="hidden"><a href="index.php?do=tools.tanggiamgia">Tăng giá/giảm nhanh</a></li>
    <li class="divider"></li>
    <li><a href="#">Làm sạch dữ liệu</a></li>
       <li class="divider"></li>
    <li><a href="index.php?do=syncsimso">Đồng bộ dữ liệu sim</a></li>
  </ul>

      </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="clearfix"></div>
Xin chào: <?php if (isset($_smarty_tpl->tpl_vars['fullname']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['fullname']->value;
}?>
<ul class="nav pull-right" style="display: none;" id="msgbox">

        <li>
          <a href="#" title="Thông báo" class="countsms"><span class="badge badge-info" id="countsms"></span></a>
   
        </li>
     </ul>
     
     <nav id="c-menu--slide-right" class="c-menu c-menu--slide-right">
  <button class="c-menu__close">Ẩn menu <span class="glyphicon glyphicon-arrow-right"></span></button>
       <ul class="nav nav-pills nav-stacked" id="limsg">

          </ul>
</nav>


     <nav id="c-menu--slide-left" class="c-menu c-menu--slide-left">
  <button class="c-menu__close"><span class="glyphicon glyphicon-arrow-left"></span> Ẩn menu </button>
       <ul class="nav nav-pills nav-stacked">
<li >
        <a href="index.php?do=doisim">Đổi sim 11 số về 10 số<span class="label label-danger pull-right">New</span></a>
        </li>
        
        
        
        

<li class="active">
        <a href="index.php?do=sethome">Đưa bảng số lên trang chủ <span class="label label-danger pull-right">New</span>(Thỏa thuận)</a>
        </li>
<li class="">
        <a href="index.php?do=smsconfig">SMS Tự động <span class="label label-danger pull-right">New</span></a>
        </li>
        
<li class="">
        <a href="index.php?do=fblivechat">Facebook Live chát <span class="label label-danger pull-right">New</span></a>
        </li>

        <li class="">
        <a href="index.php?do=googleaut">Bảo mật bằng mật khẩu động <span class="label label-danger pull-right">New</span></a>
        </li>
 
        
         <li>
        <a href="index.php?do=webdesign">Thay đổi mầu sắc web  <span class="label label-danger pull-right">New</span></a>
        </li>
        
        
           <li>
        <a href="index.php?do=domain">Quản lý tên miền  <span class="label label-danger pull-right">New</span></a>
        </li>
        
        
        
           <li>
        <a href="index.php?do=config">Nhúng mã theo dõi  <span class="label label-danger pull-right">New</span></a>
        </li>
        <li>
        
    
        <a href="index.php?do=processlist">Công việc   <span class="label label-danger pull-right">New</span></a>
        </li>
        
        
        
        
        
           <li>
        
    
        <a href="index.php?do=dongbohoa">Đồng bộ dữ liệu sim   <span class="label label-danger pull-right">New</span></a>
        </li>
        
        
        
               <li>
        <a href="index.php?do=setting">Cá nhân hóa trang admin  <span class="label label-danger pull-right">New</span></a>
        </li>
           
              <li>
        <a href="index.php?do=seo301">Seo 301 & 302  <span class="label label-danger pull-right">New</span></a>
        </li>
        <li>
        <a href="index.php?do=backup">Backup dữ liệu  <span class="label label-danger pull-right">New</span></a>
        </li>
            <li>
        <a target="_blank" href="/apps/lib/elfinder/ckfinder.html?type=Images&CKEditor=detail&CKEditorFuncNum=1&langCode=vi">Quản lý file & Hình ảnh<span class="label label-danger pull-right">New</span></a>
        </li>
        
        <li class="active">
        <a href="index.php?do=removesim">Loại bỏ dữ liệu sim</a> <span class="label label-danger pull-right">New</span></a>
        </li>
        </ul>
</nav>
     <div class="clearfix"></div>




<?php }?><?php }} ?>
