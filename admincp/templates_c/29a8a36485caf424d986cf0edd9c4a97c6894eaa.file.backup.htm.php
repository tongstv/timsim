<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-10-18 18:05:05
         compiled from "/usr/local/lib/php/app/adm/templates/backup.htm" */ ?>
<?php /*%%SmartyHeaderCode:17460262345bc868e17665a6-37970425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29a8a36485caf424d986cf0edd9c4a97c6894eaa' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/backup.htm',
      1 => 1530780175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17460262345bc868e17665a6-37970425',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'alert' => 0,
    'data' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bc868e184b148_66171785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc868e184b148_66171785')) {function content_5bc868e184b148_66171785($_smarty_tpl) {?><div class="container">
<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Backup dữ liệu</h2>
  </div>
  <div class="panel-body">
  
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
    
    <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
    <?php }?>
    
    <?php if (isset($_smarty_tpl->tpl_vars['alert']->value)) {?>
    
    <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</div>
    <?php }?>
   <form class="form-horizontal" method="POST" action="index.php?ajax=backup" id="form">
   
   <div class="form-group">
   
   <select name="tables[]" multiple="" class="form-control" style="height: 200px;">
   
   <option value="congno" selected="">Dữ liệu công nợ</option>
   <option value="daily" selected="">Dữ liệu đại lý</option>
   <option value="hh" selected="">Dữ liệu HH đại lý</option>
   <option value="tg" selected="">Dữ liệu tăng giá</option>
    <option value="cod" selected="">Dữ liệu cod</option>
    <option value="orders" selected="">Đơn hàng</option>
    <option value="seo">Dữ liệu seo</option>
      <option value="pagegroup">Dữ liệu nhóm bài viết</option>
    <option value="page">Dữ bài viết</option>
    
       <option value="menu" selected="">Menu</option>
           <option value="menu_group" selected="">Menu group</option>
   </select>
   </div>
   
     <div class="form-group">
  
  <label class="control-label">Email:</label>
  <input name="email" id="to" placeholder="Email nhận dữ liệu" class="form-control" />
  </div>
   <div class="form-group">
   
   <button class="btn btn-success" type="submit" name="backup">Backup & Tải về máy</button>
    <button type="button" class="btn btn-info" id="email">Backup & Gửi tới email</button>
        <button  class="btn btn-warning"  name="hostting" id="hostting">Backup & Lưu vào host</button>
    
   </div>
   

   </form>

  </div>
</div>
</div>
<div class="container">
 <table class="table table-bordered">
    <thead>
    <tr>
    <th class="active text-center">STT</th>
     <th class="active">Tên file</th>
      <th class="active">Size</th>
       <th class="active">Thời gian</th>
        <th class="active">Hành động</th>
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
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['file'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['size'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
</td>
      <td><a class="btn btn-sm btn-success">Retore</a></td>
   </tr>
   <?php endfor; endif; ?>
    </tbody>
    <tfoot></tfoot>
    
    </table>
    </div>
<?php echo '<script'; ?>
>
$(function(){
    
    $("#hostting").click(function(){
       
       $("#form").attr('action','index.php?do=backup');
    });
    $("#email").click(function(){
        
        var to= $("#to").val();
        
        if(!to)
        {
            alert('Bạn chưa nhập email');
            $("#to").focus();
            return false;
        }
        $.ajax({
            type: 'POST',
            url: 'index.php?ajax=backup',
            data:$("#form").serialize(),
            beforeSend:function()
            {
                $("#email").attr('disabled',true);
            },
            success:function(data)
            {
                $("#email").after(data);
                $("#email").attr('disabled',false);
            }
        })
        
    });
});
<?php echo '</script'; ?>
>
<?php }} ?>
