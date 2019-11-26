<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-14 12:23:56
         compiled from "template/page.view.htm" */ ?>
<?php /*%%SmartyHeaderCode:10296089245dcce4ec3887a1-94774133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e31d714a1a60ec96ca2e1a752abd861e1f339ab' => 
    array (
      0 => 'template/page.view.htm',
      1 => 1548954534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10296089245dcce4ec3887a1-94774133',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'page_detail' => 0,
    'seeding' => 0,
    'row' => 0,
    'more' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dcce4ec3ff442_30881013',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dcce4ec3ff442_30881013')) {function content_5dcce4ec3ff442_30881013($_smarty_tpl) {?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"><?php if (isset($_smarty_tpl->tpl_vars['page_title']->value)) {
echo $_smarty_tpl->tpl_vars['page_title']->value;
}?></h1>
  </div>
  <div class="panel-body">
  <div class="table-condensed">
   


    <?php echo $_smarty_tpl->tpl_vars['page_detail']->value;?>


      <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['s'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['s']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['name'] = 's';
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['seeding']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total']);
?>

      <div class="well" style="border-radius: 5px; box-shadow: #eee 2px 2px 2px">
      <?php if (isset($_smarty_tpl->tpl_vars['row'])) {$_smarty_tpl->tpl_vars['row'] = clone $_smarty_tpl->tpl_vars['row'];
$_smarty_tpl->tpl_vars['row']->value = $_smarty_tpl->tpl_vars['seeding']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]; $_smarty_tpl->tpl_vars['row']->nocache = null; $_smarty_tpl->tpl_vars['row']->scope = 0;
} else $_smarty_tpl->tpl_vars['row'] = new Smarty_variable($_smarty_tpl->tpl_vars['seeding']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']], null, 0);?>


            <b><?php echo $_smarty_tpl->tpl_vars['row']->value['fullname'];?>
</b>
          <br>
          <?php echo $_smarty_tpl->tpl_vars['row']->value['create_at'];?>


          <hr>
          <?php echo $_smarty_tpl->tpl_vars['row']->value['conment'];?>

          <hr>


      </div>

      <?php endfor; endif; ?>

   </div>
  </div>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['more']->value)) {?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h2 class="panel-title">Tin liên quan</h2>
  </div>
  <div class="panel-body">
   <ul style="max-height: 300px; overflow: auto;">
 
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['d'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['more']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total']);
?>
    <?php if (isset($_smarty_tpl->tpl_vars['row'])) {$_smarty_tpl->tpl_vars['row'] = clone $_smarty_tpl->tpl_vars['row'];
$_smarty_tpl->tpl_vars['row']->value = $_smarty_tpl->tpl_vars['more']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]; $_smarty_tpl->tpl_vars['row']->nocache = null; $_smarty_tpl->tpl_vars['row']->scope = 0;
} else $_smarty_tpl->tpl_vars['row'] = new Smarty_variable($_smarty_tpl->tpl_vars['more']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']], null, 0);?>
   <li>
    <a href="/p/<?php echo $_smarty_tpl->tpl_vars['row']->value['page_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['page_title'];?>
</a>
    </li>
    <?php endfor; endif; ?> 
   
 
    
  
    </ul>
  </div>
</div>
<?php }?><?php }} ?>
