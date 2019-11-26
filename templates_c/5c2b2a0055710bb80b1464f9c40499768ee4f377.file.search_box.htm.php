<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-14 12:22:30
         compiled from "template/search_box.htm" */ ?>
<?php /*%%SmartyHeaderCode:4940425305dcce496ebfc13-50072631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c2b2a0055710bb80b1464f9c40499768ee4f377' => 
    array (
      0 => 'template/search_box.htm',
      1 => 1544612648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4940425305dcce496ebfc13-50072631',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'thiskey' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dcce496ecb382_63836653',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dcce496ecb382_63836653')) {function content_5dcce496ecb382_63836653($_smarty_tpl) {?>   <form id="search" action="index.php" class="form-horizontal" >
   <input name="do" value="search" type="hidden">
  
      <input type="hidden" name="submit" value="true" />
    <div class="form-group" style="display: none;">

   <div class="col-md-4 col-xs-12 col-lg-4">

   <select name="network" class="form-control" style="font-size: 14px;">
   <option value="0">Chọn mạng di động</option>
    <option value="1">Viettel</option>
     <option value="2">Mobifone</option>
      <option value="3">Vinaphone</option>
       <option value="4">Vietnamobile</option>
       <option value="5">Gmobile</option>
   </select>
   </div>
   <div class="col-md-4 col-xs-6 col-lg-4 showgia ">
   
   <div class="input-group">
   <div class="input-group-addon font-12"> Giá từ:</div>
  
   
   <input type="tel"  name="giatu" class="form-control price" placeholder="100,000" />
   </div>
   </div>
   <div class="col-md-4 col-xs-6 col-lg-4 showgia">
      
   <div class="input-group">
   <div class="input-group-addon font-12">Đến:</div>
  
   
   <input type="tel"  name="den" class="form-control price" placeholder="1,000,000" />
   </div>

   </div>
 
 
 </div>
  
    

  <div class="form-group" style="padding: 10px 200px;">
  <div class="input-group">
     <input name="sim" id="sim" type="tel" value="<?php if (isset($_smarty_tpl->tpl_vars['thiskey']->value)) {
echo $_smarty_tpl->tpl_vars['thiskey']->value;
}?>" class="form-control input-lg pull-left popover-dismiss" placeholder="Nhập số sim bạn cần tìm" data-container="body" data-toggle="popover" data-placement="bottom" data-content=" - Sử dụng dấu <span class='red'>x</span> đại điện cho 1 số và dấu <span class='red'>*</span> đại điện cho một chuỗi số. <br /> + Để tìm sim bắt đầu bằng 098, quý khách nhập vào 098*<br /> + Để tìm sim kết thúc bằng 888, quý khách nhập vào *888<br /> + Để tìm sim bắt đầu bằng 098 và kết thúc bằng 888, nhập vào 098*888<br /> + Để tìm sim bên trong có số 888, nhập vào 888<br /> + Để tìm sim bắt đầu bằng 098 và kết thúc bằng 808, 818, 828, 838, 848, 858, 868, 878, 888, 898 nhập vào 098*8x8<br /> " title="Hướng dẫn tìm kiếm sim"  />
     <span class="input-group-btn"><button class="btn btn-warning strong btn-lg" id="timsimx">Tìm sim</button></span>
  
  </div>

  </div>

   


   
 
   

   <div class="form-group text-center">

   
   </div>

 
   
   <div class="form-group text-center fullsearch" >
   
   Dãy số không gồm:
				<input name="n[]" value="1" type="checkbox"><span> 1 </span>
				<input name="n[]" value="2" type="checkbox"><span> 2 </span>
				<input name="n[]" value="3" type="checkbox"><span> 3 </span>
				<input name="n[]" value="4" type="checkbox"><span> 4 </span>
			<input name="n[]" value="5" type="checkbox"><span> 5 </span>
				<input name="n[]" value="6" type="checkbox"><span> 6 </span>
				<input name="n[]" value="7" type="checkbox"><span> 7 </span>
				<input name="n[]" value="8" type="checkbox"><span> 8 </span>
				<input name="n[]" value="9" type="checkbox"><span> 9 </span>
   </div>
   
   
   <div class="form-group text-center fullsearch" style="padding-bottom: 0;" >
    <div class="col-md-4 col-md-offset-4">
                <div class="input-group">
                <div class="input-group-addon font-12">Tổng điểm của dãy số:</div>
                <input name="tongdiem" max="81" min="1" type="number" class="form-control " placeholder=" 68 " />
                </div>
                </div>
                
                
                
                  
                
   </div>



   </form>
   
   <style>
   
    @media only screen and (max-width: 768px) {

    #search
    {
        padding: 10px 50px;
        
    }
   }
   
   </style><?php }} ?>
