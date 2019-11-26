<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-08-16 12:24:36
         compiled from "/usr/local/lib/php/app/adm/templates/seo.htm" */ ?>
<?php /*%%SmartyHeaderCode:7659244175accacfe720cc2-21355053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b27a7e13ae1c5ca131295bba1d3ee05bce06ca4c' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/seo.htm',
      1 => 1534396871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7659244175accacfe720cc2-21355053',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5accacfe7b5285_03108394',
  'variables' => 
  array (
    'error' => 0,
    'alert' => 0,
    'data' => 0,
    'row' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5accacfe7b5285_03108394')) {function content_5accacfe7b5285_03108394($_smarty_tpl) {?><div class="panel panel-success">
    <div class="panel-heading">
        <h2 class="panel-title">Seo website</h2>
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
        <div>
            <div class="pull-left">
                <form class="form-inline" action="index.php">
                    <div class="form-group">
                        <input type="hidden" name="do" value="<?php echo $_GET['do'];?>
" />
                        <input name="keyword" class="form-control input-sm" placeholder="Nội dung cần tìm!" />
                        <button class="btn btn-warning btn-sm"> <i class="glyphicon glyphicon-search"></i> Tìm kiếm</button>
                    </div>
                </form>
            </div>
            <form method="POST">
                <div class="btn-group pull-right">
                    <a class="btn btn-sm btn-default ajax" title="Thay link" href="index.php?ajax=<?php echo $_GET['do'];?>
.replace">Thay nội dung</a>
                    <a class="btn btn-sm btn-success frame" title="Thêm mẫu" href="index.php?ajax=<?php echo $_GET['do'];?>
.addtheme">Thêm mẫu mặc định</a>
                    <a class="btn btn-sm btn-warning frame" title="Lấy từ website khác" href="index.php?ajax=<?php echo $_GET['do'];?>
.gettitle">Lấy từ web khác</a>
                    <a class="btn btn-sm btn-danger" href="index.php?do=<?php echo $_GET['do'];?>
&delelecache=true">Xóa Cache</a>
                    
                         <a class="btn btn-sm btn-success" href="index.php?do=<?php echo $_GET['do'];?>
.csv">Inport csv</a>
                    <a class="btn btn-sm btn-info ajax" href="index.php?ajax=<?php echo $_GET['do'];?>
.add">Thêm mới</a>
                    <button class="btn btn-sm btn-danger" name="delselect">Xóa</button>
                </div>
            </div>
            <table class="table table-hover table-condensed" id="tablesort">
                <thead>
                    <tr>
                        <th class="active center"></th>
                        <th class="active">URL</th>
                        <th class="active">Tiêu đề</th>
                        
                        <th class="active">Mô tả</th>
                        <th class="active">Từ khóa</th>
                        <th class="noSort active"></th>
                        <th class="noSort active"></th>
                        <th class="noSort active"><input type="checkbox" class="checkall" /></th>
                    </tr>
                </thead>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['stt'];?>
</td>
                    <td class="editable" data-name="seo|url|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
</td>
                    <td class="editable" data-name="seo|title|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</td>
                    <td class="editable editable-pre-wrapped editable-click" data-type="textarea"  data-name="seo|des|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['des'];?>
</td>
                    <td class="editable" data-name="seo|keyword|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['keyword'];?>
</td>
                    <td class="col-md-1"><a href="index.php?ajax=<?php echo $_GET['do'];?>
.edit&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="ajax btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i>Sửa</a></td>
                    
                    <td class="col-md-1"> <a href="index.php?ajax=<?php echo $_GET['do'];?>
.del&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="confirm btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i>Xóa</a></td>
                    <td> <input type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="check" /></td>
                </tr>
                <?php endfor; endif; ?>
            </table>
            <div class="pull-right"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</div>
        </div>
    </div>
</form>
<?php echo '<script'; ?>
 src="/apps/js/tablesort.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(function(){
<?php if ($_smarty_tpl->tpl_vars['row']->value['stt']) {?>
var theHeaders = {}
$(this).find('th.noSort').each(function(i,el){
theHeaders[$(this).index()] = { sorter: false };
});
$("#tablesort").tablesorter({

headers: theHeaders

});
<?php }?>
});
<?php echo '</script'; ?>
><?php }} ?>
