<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-24 22:25:59
         compiled from "/usr/local/lib/php/app/adm/templates/pagegroup.edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:13665211645b574507a10fe4-34048755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfc17bc04563ef55bc6a4687a06126f0c0fbe3aa' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/pagegroup.edit.htm',
      1 => 1530780176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13665211645b574507a10fe4-34048755',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'groupname' => 0,
    'groupcode' => 0,
    'pos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5b574507ab07d1_22154727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b574507ab07d1_22154727')) {function content_5b574507ab07d1_22154727($_smarty_tpl) {?>      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <input name="submit" value="true" type="hidden" />
       <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="id" />
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Sửa nhóm tin</h4>
      </div>
      <div class="modal-body">
     
       <div class="form-group form-group-sm">
       <label class="control-label col-md-4">Sửa nhóm</label>
       <div class="col-md-6">
       <input name="groupname" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['groupname']->value;?>
" />
       </div>
       </div>

       <div class="form-group form-group-sm">
        <label class="control-label col-md-4">Mã nhóm</label>
        <div class="col-md-6">
        <input name="groupcode" value="<?php echo $_smarty_tpl->tpl_vars['groupcode']->value;?>
" class="form-control" />
        </div>
        </div>
        
        
         <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Thứ tự</label>
     <div class="col-md-6">
     <input name="pos" value="<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
" class="form-control" />
     </div>
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" type="submit">Sửa nhóm</button>
      </div>
    </div>
      </form><?php }} ?>
