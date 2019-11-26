<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-25 15:43:12
         compiled from "/usr/local/lib/php/app/adm/templates/proxycache.add.htm" */ ?>
<?php /*%%SmartyHeaderCode:19367120075b5838204efe47-12230750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90b704816d228bfe2d559d156d0ca8c1c5db3d72' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/proxycache.add.htm',
      1 => 1530780176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19367120075b5838204efe47-12230750',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_addnew' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5b5838205980d9_24834379',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5838205980d9_24834379')) {function content_5b5838205980d9_24834379($_smarty_tpl) {?>      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <input name="submit" value="true" type="hidden" />
      


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Thêm tên miền vào máy chủ</h4>
      </div>
      <div class="modal-body">
     
  
  
  
  
  
  <div class="form-group">
  <label class="col-sm-3 control-label text-right">Máy chủ</label>
  <div class="col-sm-9">
  
  <select class="form-control" name="server">
  <option value="0">Chọn máy chủ</option>
  <option value="103.18.4.154">103.18.4.154 Load balancing + Cache + Firewall</option>
  <option value="125.212.224.37">125.212.224.37 Load balancing + Cache + Firewall</option>
   <option value="163.44.152.160">163.44.152.160 Load balancing + Cache + Firewall</option>
  </select>
  </div>
   </div>
  <div class="form-group">
  <label class="col-sm-3 control-label text-right">Tên miền</label>
  <div class="col-sm-9">  <input type="text" value="<?php if ($_GET['domain']) {
echo $_GET['domain'];
}?>" name="domain" class="form-control" placeholder="domain1.com">
  
  </div>
  

  </div>
  

 
  
 
  
  
  
  

    <div class="form-group">
  <label class="col-sm-3 control-label text-right">Máy chủ đích</label>
    <div class="col-sm-9"> 
<input type="text" name="ip" value="<?php echo $_SERVER['SERVER_ADDR'];?>
" class="form-control">
  </div>
  </div>
  


     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_addnew']->value;?>
</button>
      </div>
    </div>
      </form>
      
                  <?php }} ?>
