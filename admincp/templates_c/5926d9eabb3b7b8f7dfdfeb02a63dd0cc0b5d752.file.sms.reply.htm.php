<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-04-14 09:18:18
         compiled from "/usr/local/lib/php/app/adm/templates/sms.reply.htm" */ ?>
<?php /*%%SmartyHeaderCode:11622766125ad164ea8ff8c9-73352800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5926d9eabb3b7b8f7dfdfeb02a63dd0cc0b5d752' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/sms.reply.htm',
      1 => 1425020704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11622766125ad164ea8ff8c9-73352800',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ad164ea967943_88843814',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad164ea967943_88843814')) {function content_5ad164ea967943_88843814($_smarty_tpl) {?>      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <input name="submit" value="true" type="hidden" />
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Trả lời người gửi: <?php if (isset($_GET['to'])) {
echo $_GET['to'];
}?></h4>
      </div>
      <div class="modal-body">
     
       <div class="form-group form-group-sm">
       <label class="control-label col-md-4">Người nhận:</label>
       <div class="col-md-6">
       <input name="to" class="form-control" value="<?php if (isset($_GET['to'])) {
echo $_GET['to'];
}?>" />
       </div>
       </div>

        <div class="form-group form-group-sm">
        <label class="control-label col-md-4">Nội dung</label>
        <div class="col-md-6">
        <textarea name="msg" rows="10" cols="40"></textarea>
        </div>
        </div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Gửi tin nhắn</button>
      </div>
    </div>
      </form>
      
                  <?php }} ?>
