<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-08-29 19:00:30
         compiled from "/usr/local/lib/php/app/adm/templates/page.view.htm" */ ?>
<?php /*%%SmartyHeaderCode:16490119205b868ade76c6c9-91715847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a64f1e222cc6042825cbdb42c163eabc9136d8ee' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/page.view.htm',
      1 => 1530780180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16490119205b868ade76c6c9-91715847',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'page_des' => 0,
    'page_detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5b868ade82ae79_96641987',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b868ade82ae79_96641987')) {function content_5b868ade82ae79_96641987($_smarty_tpl) {?>      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <input name="submit" value="true" type="hidden" />
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h4>
      </div>
      <div class="modal-body">
      <?php echo $_smarty_tpl->tpl_vars['page_des']->value;?>

      <hr />
     <?php echo $_smarty_tpl->tpl_vars['page_detail']->value;?>

       

     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
      </form><?php }} ?>
