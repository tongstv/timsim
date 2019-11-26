<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-14 12:22:30
         compiled from "template/menu.htm" */ ?>
<?php /*%%SmartyHeaderCode:8730941665dcce496eaebb5-39512437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a78779b4be033b26eed0edd775cf48afe154d3cb' => 
    array (
      0 => 'template/menu.htm',
      1 => 1543337590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8730941665dcce496eaebb5-39512437',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'thisdomain' => 0,
    'menu' => 0,
    'hottopr' => 0,
    'menu1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dcce496ebdbd0_70205296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dcce496ebdbd0_70205296')) {function content_5dcce496ebdbd0_70205296($_smarty_tpl) {?>

<nav class="navbar-default hidden-xs">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
         
           <button class="bt123"  type="button" class="pull-right visible-xs" data-toggle="collapse" data-target=".navbar-menubuilder">
         <i  class="glyphicon glyphicon-list icoin123" ></i>
         <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
       
            </button>
          <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
">
         
  <div id="logo">
          
              
          </div></a>
        </div>
         <div class="collapse navbar-collapse navbar-menubuilder hidden-xs">
         
            <ul class="nav navbar-nav navbar-left">

           
                           <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

            </ul>
             <div class="hottopr hidden-xs" id="ht1">
       
        <?php if (isset($_smarty_tpl->tpl_vars['hottopr']->value)) {
echo $_smarty_tpl->tpl_vars['hottopr']->value['detail'];
}?>
        
       
        
        </div>

        </div>
     
      </div>
    </nav>
   
   </nav>
   
   <div class="visible-xs">
 
 <header id="luxbar" class="luxbar-fixed">
    <input type="checkbox" class="luxbar-checkbox" id="luxbar-checkbox"/>
    <div class="luxbar-menu luxbar-menu-right luxbar-menu-material-cyan">
        <ul class="luxbar-navigation">
            <li class="luxbar-header">
              <a  href="<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
"><div id="logo"></div></a>
                <label class="luxbar-hamburger luxbar-hamburger-doublespin" 
                id="luxbar-hamburger" for="luxbar-checkbox"> <span></span> </label>
                
               
            </li>
         
        </ul>
         <?php echo $_smarty_tpl->tpl_vars['menu1']->value;?>

         <div class="row">
         <div class="col-xs-6">
         
         <ul class="nav nav-divider">
         <li><a href="/p/huong-dan-mua-hang">Hướng dẫn mua hàng</a></li>
         <li><a href="/p/thanh-toan">Thanh toán</a></li>
           <li><a href="/p/cam-ket-ban-hang">Cam kết bán hàng</a></li>
                    <li><a href="/p/lien-he">Liên hệ</a></li>
         </ul>
         </div>
         
         
          <div class="col-xs-6">
          
           <ul class="nav nav-divider">
         <li><a href="/p/cau-hoi-thuong-gap">Câu hỏi thường gặp</a></li>
         <li><a href="/p/dang-ky-thong-tin">Đăng ký thông tin</a></li>
           <li><a href="/p/cam-ket-ban-hang">Cam kết bán hàng</a></li>
                    <li><a href="/p/tong-dai-nha-mang">Tổng đài nhà mạng</a></li>
         </ul>
          </div>
         </div>
    </div>
</header>





    </div><?php }} ?>
