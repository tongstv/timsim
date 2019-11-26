<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-03-19 19:31:04
         compiled from "/usr/local/lib/php/app/adm/templates/accevent.htm" */ ?>
<?php /*%%SmartyHeaderCode:11557938585c90e108b803d1-01872448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c739a92ae8e9177803f34e1b550c4d5d1754f59' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/accevent.htm',
      1 => 1530780176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11557938585c90e108b803d1-01872448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_search_txt' => 0,
    '_search' => 0,
    '_addnew' => 0,
    'data' => 0,
    'row' => 0,
    '_edit' => 0,
    '_del' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c90e108ce1355_57305818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c90e108ce1355_57305818')) {function content_5c90e108ce1355_57305818($_smarty_tpl) {?><div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Lịch công việc</h2>
  </div>
  <div class="panel-body">
   

<div class="pull-left">
<form class="form-inline" action="index.php">
<div class="form-group">
<input type="hidden" name="do" value="<?php echo $_GET['do'];?>
" />
<input name="keyword" class="form-control input-sm" placeholder="<?php echo $_smarty_tpl->tpl_vars['_search_txt']->value;?>
" />
<button class="btn btn-warning btn-sm"> <i class="glyphicon glyphicon-search"></i><?php echo $_smarty_tpl->tpl_vars['_search']->value;?>
</button>
</div>
</form>

</div>
<form method="POST">
<div class="pull-left"><?php echo $_smarty_tpl->getSubTemplate ('acc.menu.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<div class="btn-group pull-right">

<a class="btn btn-info ajax" href="index.php?ajax=<?php echo $_GET['do'];?>
.add"><?php echo $_smarty_tpl->tpl_vars['_addnew']->value;?>
</a>
<button name="delselect" class="btn btn-danger">Xóa</button>
</div>




<table class="table table-hover table-condensed" id="tablesort">
<thead>
    <tr>
        <th class="active text-center">STT</th>
        <th class="active">Tên sự kiện</th>
         <th class="active text-center noSort">Thời gian</th>
              <th class="active text-center noSort">Công việc</th>
               <th class="active text-center noSort">Nhóm</th>
      
                 <th class="active text-center noSort">#</th>
         <th class="active text-center noSort">#</th>
         <th class="active text-center noSort">
         <input type="checkbox" class="checkall" /></th>
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
        <td class="text-center col-md-1"><?php echo $_smarty_tpl->tpl_vars['row']->value['stt'];?>
</td>
       
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value['time'];?>
/ lần</td>
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value['event'];?>
</td>
           <td><a href="index.php?do=acc&gid=<?php echo $_smarty_tpl->tpl_vars['row']->value['gid'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nhom'];?>
</a></td>
         
         <td class="col-md-1 text-center"><a href="index.php?ajax=<?php echo $_GET['do'];?>
.edit&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="ajax btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i><?php echo $_smarty_tpl->tpl_vars['_edit']->value;?>
</a></td>
         
        <td class="col-md-1 text-center"> <a href="index.php?ajax=<?php echo $_GET['do'];?>
.del&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="confirm btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i><?php echo $_smarty_tpl->tpl_vars['_del']->value;?>
</a></td>
   <td class="text-center"><input type="checkbox" class="check" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" /></td>
    </tr>
<?php endfor; endif; ?>    
</table>
</form>
<div class="pull-right"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</div>
  </div>
</div>
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
