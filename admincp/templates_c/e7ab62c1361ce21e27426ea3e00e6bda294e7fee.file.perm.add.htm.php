<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-08-03 10:31:57
         compiled from "/usr/local/lib/php/app/adm/templates/perm.add.htm" */ ?>
<?php /*%%SmartyHeaderCode:21212667195b63ccad9150c5-48989270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7ab62c1361ce21e27426ea3e00e6bda294e7fee' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/perm.add.htm',
      1 => 1530780175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21212667195b63ccad9150c5-48989270',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mod' => 0,
    'mod_select' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5b63ccad998779_46787366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63ccad998779_46787366')) {function content_5b63ccad998779_46787366($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/local/lib/php/app/lib/libs/plugins/function.html_options.php';
?>      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <input name="submit" value="true" type="hidden" />
      
<!--- EDIT--->

<input name="uid" value="<?php echo $_GET['id'];?>
" type="hidden" />
<!------> 


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Cấp quyền cho tài khoản</h4>
      </div>
      <div class="modal-body">
     
  
  
  
  
   <select name="per[]" multiple="" class="form-control" style="height: 400px;">
      
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['mod']->value,'selected'=>$_smarty_tpl->tpl_vars['mod_select']->value),$_smarty_tpl);?>
 
      
      </select>
  
  

<br />
CTR+click để chọn nhiều quyền
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button  class="btn btn-primary">Submit</button>
      </div>
    </div>
      </form>
      
 <?php }} ?>
