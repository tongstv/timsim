<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-09 13:50:08
         compiled from "/usr/local/lib/php/app/adm/templates/daily.dangsim.htm" */ ?>
<?php /*%%SmartyHeaderCode:14150553265ac2f5932aecc5-34271801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5526aa15c190292d6afeeb63600f77736b81fa33' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/daily.dangsim.htm',
      1 => 1530780177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14150553265ac2f5932aecc5-34271801',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ac2f59331dd20_26524925',
  'variables' => 
  array (
    'error' => 0,
    'alert' => 0,
    'saigia' => 0,
    'hhh' => 0,
    'option_key' => 0,
    'option_name' => 0,
    'option_selected' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac2f59331dd20_26524925')) {function content_5ac2f59331dd20_26524925($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/usr/local/lib/php/app/lib/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_html_options')) include '/usr/local/lib/php/app/lib/libs/plugins/function.html_options.php';
?><!DOCTYPE html>
<html lang="vi, en">
   <head>
      <title>Đăng sim</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <?php echo '<script'; ?>
 src="/apps/js/jquery.min.js"><?php echo '</script'; ?>
>
      <link href="/apps/css/bootstrap.min.css" rel="stylesheet" media="screen">
         <link href="/apps/css/date/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
     
      <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
      <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
      <?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['alert']->value)) {?>
      <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</div>
      <?php }?>
      <form method="POST" class= "form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <?php if (isset($_REQUEST['dlid'])) {?>
      <input type="hidden" name="dlid" value="<?php echo $_REQUEST['dlid'];?>
" />
      <?php }?>
         <div class="row">
            <div class="col-xs-7">
               <textarea name="listsim" cols="50" rows="15"><?php if ($_smarty_tpl->tpl_vars['saigia']->value) {?>Những số đại lý gửi sai giá:
<?php echo $_smarty_tpl->tpl_vars['saigia']->value;?>
 <?php } else {
echo $_smarty_tpl->tpl_vars['hhh']->value;?>
 <?php }?></textarea>
            </div>
            <div class="col-xs-5 row">
            <div class="row"> 
            
            <div class="col-xs-9"> <div class="input-group date form_date" data-date-format="dd/mm/yyyy" data-link-field="dtp_input1">
                  <input size="16" type="text" name="last_update" class="form-control" value="" placeholder="<?php echo smarty_modifier_date_format(time(),'d/m/Y h:i');?>
" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
				<input type="hidden" id="dtp_input1" value="" /><br/></div>
  <div class="col-xs-3"> <button name="submit" class="btn btn-success pull-right pull-right">Đăng sim</button></div>
           
            
    
             

              </div>
           
               <br />
               <select class="chosen form-control" name="simdl">
                  <option value="0">Chọn đại lý</option>
                  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['option_key']->value,'output'=>$_smarty_tpl->tpl_vars['option_name']->value,'selected'=>$_smarty_tpl->tpl_vars['option_selected']->value),$_smarty_tpl);?>

               </select>
              
               <br />
               <fieldset>
                  <legend>Định dạng giá tiền</legend>
                  <input name="format" type="radio" value="1" checked="checked" />
                  1,000,000 =1tr
                  <br />
                  <input name="format" value="1000" type="radio" />
                  1,000 = 1tr
                  <br />
                  <input name="format" value="1000000" type="radio" />
                  1 = 1tr
               </fieldset>
               <fieldset>
                  <legend>Tùy chọn đăng</legend>
                  <?php if ($_smarty_tpl->tpl_vars['saigia']->value) {?>
                     <input type="checkbox" name="dangthem" checked="" value="1" /> Đăng Thêm số
                  <?php } else { ?>
                  
                  <input type="checkbox" name="dangthem" value="1" /> Đăng Thêm số
                  <?php }?>
               </fieldset>
            </div>
         </div>
      </form>
      <div class="col-md-12 col-xs-12 text-center">
      <a href="index.php?ajax=daily.hh&id=<?php echo $_REQUEST['dlid'];?>
" class="btn btn-info btn-sm">Thiết lập hoa hồng</a>
       <a href="index.php?ajax=daily.tg&id=<?php echo $_REQUEST['dlid'];?>
" class="btn btn-danger btn-sm">Thiết lập tăng giảm giá</a>
      </div>

   
   

       <?php echo '<script'; ?>
 type="text/javascript" src="/apps/css/date/bootstrap-datetimepicker.js" charset="UTF-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/apps/css/date/bootstrap-datetimepicker.fr.js" charset="UTF-8"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="/apps/css/chosen.css">
<?php echo '<script'; ?>
 src="/apps/js/chosen.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    
    $(document).ready(function(){
    
$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
           format: "dd/mm/yyyy",
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
    
    
    
 $('.form_datetime').datetimepicker({

        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
        format: "mm/dd/yyyy - hh:ii",
		forceParse: 0,
        showMeridian: 1
    });
        


    $(".chosen").chosen({ search_contains: true, width: "300px" });
      
       
      // $(".date").datepicker();
       
       
  
   
    
});



    <?php echo '</script'; ?>
>
   </body>
</html><?php }} ?>
