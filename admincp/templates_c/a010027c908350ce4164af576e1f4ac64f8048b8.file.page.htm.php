<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-11 23:37:43
         compiled from "/usr/local/lib/php/app/adm/templates/page.htm" */ ?>
<?php /*%%SmartyHeaderCode:741486055ac2f2100a06e4-44439276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a010027c908350ce4164af576e1f4ac64f8048b8' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/page.htm',
      1 => 1530780174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '741486055ac2f2100a06e4-44439276',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ac2f21012d532_76378516',
  'variables' => 
  array (
    'value' => 0,
    'options' => 0,
    'selected' => 0,
    'data' => 0,
    'row' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac2f21012d532_76378516')) {function content_5ac2f21012d532_76378516($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/local/lib/php/app/lib/libs/plugins/function.html_options.php';
?><div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Quản lý tin</h2>
  </div>
  <div class="panel-body">
   
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
<a class="btn btn-sm btn-warning ajax" href="index.php?ajax=<?php echo $_GET['do'];?>
.replace">Thay nội dung</a>
<a class="btn btn-sm btn-success" href="index.php?do=<?php echo $_GET['do'];?>
.addseo">Thêm bằng từ khóa</a>
<a class="btn btn-sm btn-info" href="index.php?do=<?php echo $_GET['do'];?>
.add">Thêm mới</a>
<button name="delselect" class="btn btn-sm btn-danger">Xóa lựa chọn</button>
</div>
<div class="col-md-2 pull-right">
<select class="form-control input-sm">
<option value="0">Nhóm cần hiển thị</option>
<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['value']->value,'output'=>$_smarty_tpl->tpl_vars['options']->value,'selected'=>$_smarty_tpl->tpl_vars['selected']->value),$_smarty_tpl);?>

</select>
</div>




</div>

<table class="table table-hover table-condensed" id="tablesort">
<thead>
    <tr>
        <th class="active col-md-1 text-center">STT</th>
        <th class="active">Tiêu đề</th>
          
         <th class="active col-md-1">Mã trang</th>
        
         <th class="active col-md-1">Thứ tự</th>
           <th class="noSort active col-md-1">#</th>
         <th class="noSort active col-md-1">Trang thái</th>
         <th class="noSort active">#</th>
         <th class="noSort active">#</th>
         
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
        <td class="text-center"> <?php echo $_smarty_tpl->tpl_vars['row']->value['stt'];?>
</td>
        <td class="editable" data-name="page|page_title|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['page_title'];?>
</td>
     
      <td class="editable" data-name="page|page_code|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['page_code'];?>
</td>
        
        <td class="editable" data-name="page|page_pos|id" data-pk="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['page_pos'];?>
</td>
       
        <td class="col-md-1"><a class="ajax btn btn-sm btn-default" href="index.php?ajax=page.view&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">Xem</a></td>
        <td>
        
        <?php if ($_smarty_tpl->tpl_vars['row']->value['page_status']==1) {?>
         <button data-data="page|page_status|Khóa|Hiển Thị|<?php echo $_smarty_tpl->tpl_vars['row']->value['page_status'];?>
|<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="status btn btn-sm btn-success">Hiển Thị</button>
       
        <?php } else { ?>
        <button data-data="page|page_status|Khóa|Hiển Thị|<?php echo $_smarty_tpl->tpl_vars['row']->value['page_status'];?>
|<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="status btn btn-sm btn-danger">Khóa</button>
        <?php }?>
        
        </td>
         <td class="col-md-1"><a href="index.php?do=<?php echo $_GET['do'];?>
.edit&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-sm btn-info"> <i class="glyphicon glyphicon-edit"></i> Sửa</a></td>
         
        <td class="col-md-1"> <a href="index.php?ajax=<?php echo $_GET['do'];?>
.del&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="confirm btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> Xóa</a></td>
        <td class="col-md-1"> <input type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="check" /></td>
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
       $("select").change(function(){
        
        indexvalue=$(this).find("option:selected").val();
        $.ajax({
            type:'GET',
            url: 'index.php?ajax=page&groupid='+indexvalue,
            success:function()
            {
                window.location='index.php?do=page&groupid='+indexvalue;
            }
        })
    })
    var theHeaders = {}
    $(this).find('th.noSort').each(function(i,el){
        theHeaders[$(this).index()] = { sorter: false };
    });

$("#tablesort").tablesorter({
    
headers: theHeaders
    
});
 
})

<?php echo '</script'; ?>
>
<?php }} ?>
