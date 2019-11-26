<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-14 12:22:30
         compiled from "template/table_body.htm" */ ?>
<?php /*%%SmartyHeaderCode:3416287385dcce49631a0e7-86407065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ee0e1580b4e029ac22fe4c7a8f7f6e11b481dee' => 
    array (
      0 => 'template/table_body.htm',
      1 => 1531319648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3416287385dcce49631a0e7-86407065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'row' => 0,
    'thisdomain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dcce4963551e9_97441736',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dcce4963551e9_97441736')) {function content_5dcce4963551e9_97441736($_smarty_tpl) {?><tbody>
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
<td class="center "><?php echo $_smarty_tpl->tpl_vars['row']->value['stt'];?>
</td>
<td class="text-center"><a href="<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['sim2'];?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
" ><strong class="font-16 sim text-center"><?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
</strong></a></td>
<td class="font-13 text-center" ><?php echo number_format(($_smarty_tpl->tpl_vars['row']->value['giaban']*1000000));?>
 đ</td>
<td  class="text-center center"><?php echo $_smarty_tpl->tpl_vars['row']->value['tong'];?>
</td>
<td  class="text-center"><span class="network n<?php echo $_smarty_tpl->tpl_vars['row']->value['mang'];?>
"></span></td>
<td  class="hidden"><label class="label"><?php echo $_smarty_tpl->tpl_vars['row']->value['nguhanh'];?>
</label><label > <strong><?php echo $_smarty_tpl->tpl_vars['row']->value['amduong']['menh'];?>
</strong></label><?php echo $_smarty_tpl->tpl_vars['row']->value['amduong']['soduong'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['amduong']['soam'];?>
 </td>
<td class="text-center center"><a href="<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['sim2'];?>
.html" class="btn btn-xs btn-primary">Đặt mua</a></td>
<td class="text-center center"><a  data-toggle="tooltip" title="Thêm <?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
 vào giỏ hàng" href="javascript://" class="bg-icon1" data-sim="<?php echo $_smarty_tpl->tpl_vars['row']->value['sim2'];?>
" data-gia="<?php echo $_smarty_tpl->tpl_vars['row']->value['giaban'];?>
">
</a></td>

</tr>

<?php endfor; endif; ?>
</tbody><?php }} ?>
