<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-06-16 20:30:24
         compiled from "/usr/local/lib/php/app/adm/templates/checksim.sms.htm" */ ?>
<?php /*%%SmartyHeaderCode:20338796545b2510f0c31c55-43814053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3d75e503068706bb59465541ba9057414a070cd' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/checksim.sms.htm',
      1 => 1438053054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20338796545b2510f0c31c55-43814053',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sms' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5b2510f0ca53e2_18529065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2510f0ca53e2_18529065')) {function content_5b2510f0ca53e2_18529065($_smarty_tpl) {?>      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <input name="submit" value="true" type="hidden" />
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Nhắn tin tới: <?php echo $_GET['mobile'];?>
</h4>
      </div>
      <div class="modal-body">
     
     <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Người nhận:</label>
     <div class="col-md-6">
     <input name="to" value="<?php echo $_GET['mobile'];?>
" class="form-control" />
     </div>
     </div>

    <div class="form-group form-group-sm">
    <label class="control-label col-md-4">Nội dung:</label>
    <div class="col-md-6">
    <textarea name="msg" id="msg" cols="35" rows="6"></textarea>
    </div>
    </div>
    
    <div class="form-group form-group-sm">
    <label class="control-label col-md-4">Tin nhắn mẫu:</label>
    <div class="col-md-6">
    
      <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['s'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['s']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['name'] = 's';
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['sms']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
    <input class="smstemplate" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['sms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['msg'];?>
" name="mau" /><?php echo $_smarty_tpl->tpl_vars['sms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['title'];?>
<br />
     
    <?php endfor; endif; ?>
    </div>
    </div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Gửi tin nhắn</button>
      </div>
    </div>
      </form>
      
      <?php echo '<script'; ?>
>
      $(function(){
        var msg=$(".smstemplate").val();
        $("#msg").text(msg);
        $(".smstemplate").click(function(){
            
            msg=$(this).val();
           
            $("#msg").text(msg);
        })
      });
      <?php echo '</script'; ?>
><?php }} ?>
