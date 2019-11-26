<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-04-03 14:28:43
         compiled from "/usr/local/lib/php/app/adm/templates/checksim.top200.htm" */ ?>
<?php /*%%SmartyHeaderCode:20829500945ac32d2b5c7319-16815421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca893cbfd2b15d92749f910019d02266b856d247' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/checksim.top200.htm',
      1 => 1450617312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20829500945ac32d2b5c7319-16815421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'data' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ac32d2b62af68_91848361',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac32d2b62af68_91848361')) {function content_5ac32d2b62af68_91848361($_smarty_tpl) {?>      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <input name="submit" value="true" type="hidden" />
      
<!--- EDIT--->

<input name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" type="hidden" />
<!------> 


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Top 200 Sim của đại lý</h4>
        
        <a class="ajax btn btn-success" href="index.php?ajax=checksim.top200&dlid=<?php echo $_GET['dlid'];?>
&sort=ASC">Xem giá thấp nhất</a>
        <a class="ajax btn btn-info" href="index.php?ajax=checksim.top200&dlid=<?php echo $_GET['dlid'];?>
&sort=DESC">Xem giá cao nhất</a>
      </div>
      <div class="modal-body">
     
  <div style="height: 400px; overflow: auto;">
  <table class="table table-striped">
  <thead>
  <tr>
  <th class="active">STT</th>
  <th class="active">Số sim</th>
  <th class="active">Giá bán</th>
  <th class="active">Giá nhập</th>
 </tr>
 </thead>
 
 <tbody>
 
 
 <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['d'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
 <?php $_smarty_tpl->tpl_vars['row'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']], null, 0);?>
 <tr>
 <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['row']->value['stt'];?>
</td>
 
 <td><?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
</td>
 <td><?php echo number_format(($_smarty_tpl->tpl_vars['row']->value['giaban']*1000000));?>
</td>
 <td><?php echo number_format(($_smarty_tpl->tpl_vars['row']->value['gianhap']*1000000));?>
</td>
 </tr>
 <?php endfor; endif; ?>
 </tbody>
  </table>
  
  
  </div>
  
  


     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary"></button>
      </div>
    </div>
      </form>
      
                  <?php }} ?>
