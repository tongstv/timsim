<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-09-04 09:08:33
         compiled from "/usr/local/lib/php/app/adm/templates/config.edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:6546041385aed3ce91640b3-02266251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb82300aeea464c16cdfc69cf825a4903a8614b1' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/config.edit.htm',
      1 => 1530780181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6546041385aed3ce91640b3-02266251',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5aed3ce91d8455_57805727',
  'variables' => 
  array (
    'id' => 0,
    'domain' => 0,
    'poss' => 0,
    'pos' => 0,
    'code' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aed3ce91d8455_57805727')) {function content_5aed3ce91d8455_57805727($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/local/lib/php/app/lib/libs/plugins/function.html_options.php';
?>      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <input name="submit" value="true" type="hidden" />
        <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" type="hidden"/>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Sửa cấu hình</h4>
      </div>
      <div class="modal-body">
     
       <div class="form-group form-group-sm">
       <label class="control-label col-md-4">Domain:</label>
       <div class="col-md-6">
       <input name="domain" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" />
       </div>
       </div>

        <div class="form-group form-group-sm">
        <label class="control-label col-md-4">Kiểu</label>
        <div class="col-md-6">
        <select name="pos">
        <option value="0">Chọn ví trí nhúng mã</option>
                
         <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['poss']->value,'output'=>$_smarty_tpl->tpl_vars['poss']->value,'selected'=>$_smarty_tpl->tpl_vars['pos']->value),$_smarty_tpl);?>
 
        </select>
        </div>
        </div>
        
        <div class="form-group form-group-sm">
        <label class="control-label col-md-4">Mã</label>
        <div class="col-md-6">
       <textarea name="code" rows="10" cols="50"><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
</textarea>
        </div>
        </div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Sửa cấu hình</button>
      </div>
    </div>
      </form>
      
                  <?php }} ?>
