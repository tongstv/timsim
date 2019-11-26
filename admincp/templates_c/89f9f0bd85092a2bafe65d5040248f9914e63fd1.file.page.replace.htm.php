<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-11 23:38:24
         compiled from "/usr/local/lib/php/app/adm/templates/page.replace.htm" */ ?>
<?php /*%%SmartyHeaderCode:11451468055ac42192d315a5-28503789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89f9f0bd85092a2bafe65d5040248f9914e63fd1' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/page.replace.htm',
      1 => 1530780177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11451468055ac42192d315a5-28503789',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ac42192d88268_19863902',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42192d88268_19863902')) {function content_5ac42192d88268_19863902($_smarty_tpl) {?>      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <input name="submit" value="true" type="hidden" />
      


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Công Cụ Tìm và thay thế nội dung</h4>
      </div>
      <div class="modal-body">
     
  
  
  
  <div class="form-group">
  <label class="col-sm-3 control-label text-right">Nội dung cũ</label>
  <div class="col-sm-9"><input type="text" name="txt1" class="form-control"></div>
  </div>
  
  <div class="form-group">
  <label class="col-sm-3 control-label text-right">Nội dung mới</label>
  <div class="col-sm-9"><input type="text" name="txt2" class="form-control"></div>
  </div>
  
  
  
  


     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Tìm kiếm và thay thế</button>
      </div>
    </div>
      </form>
      
                  <?php }} ?>
