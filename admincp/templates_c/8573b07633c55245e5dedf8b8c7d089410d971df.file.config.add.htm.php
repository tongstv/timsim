<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-23 23:10:04
         compiled from "/usr/local/lib/php/app/adm/templates/config.add.htm" */ ?>
<?php /*%%SmartyHeaderCode:15423652135adab3da9b80b2-99667328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8573b07633c55245e5dedf8b8c7d089410d971df' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/config.add.htm',
      1 => 1530780173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15423652135adab3da9b80b2-99667328',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5adab3da9f31b2_64974697',
  'variables' => 
  array (
    'domain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5adab3da9f31b2_64974697')) {function content_5adab3da9f31b2_64974697($_smarty_tpl) {?>	<meta http-equiv="content-type" content="text/html" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <input name="submit" value="true" type="hidden" />
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Thêm cấu hình</h4>
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
        <option value="header">Trong thẻ header</option>
         <option value="body">Trong thẻ body</option>
        </select>
        </div>
        </div>
        
        <div class="form-group form-group-sm">
        <label class="control-label col-md-4">Mã</label>
        <div class="col-md-6">
       <textarea name="code" rows="10" cols="50"></textarea>
        </div>
        </div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Thêm cấu hình</button>
      </div>
    </div>
      </form>
      
                  <?php }} ?>
