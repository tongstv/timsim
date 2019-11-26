<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-24 20:27:05
         compiled from "/usr/local/lib/php/app/adm/templates/sethome.htm" */ ?>
<?php /*%%SmartyHeaderCode:7507025475b323722a3ac41-86669986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '329b9b67030bc88fceb31ae0294fb08d9edff737' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/sethome.htm',
      1 => 1530780181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7507025475b323722a3ac41-86669986',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5b323722a8f7f7_19097409',
  'variables' => 
  array (
    'options' => 0,
    'daily' => 0,
    'DESC' => 0,
    'ASC' => 0,
    'random' => 0,
    'hot' => 0,
    'maxrow' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b323722a8f7f7_19097409')) {function content_5b323722a8f7f7_19097409($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/local/lib/php/app/lib/libs/plugins/function.html_options.php';
?><div class="container">
<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Lựa chọn bảng số lên trang chủ</h2>
  </div>
  <div class="panel-body">
   

<form method="POST" class="form-horizontal">



<div class="form-group">
<label class="col-sm-3 control-label text-right">Chọn 1 hoặc nhiều đại lý </label>
<div class="col-sm-9"> <select name="daily[]" data-placeholder="Gõ tên đại lý" style="width:350px;" multiple class="chosen-select-no-results" tabindex="11">
               <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['options']->value['id'],'output'=>$_smarty_tpl->tpl_vars['options']->value['name'],'selected'=>$_smarty_tpl->tpl_vars['daily']->value),$_smarty_tpl);?>

          </select></div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label text-right">Sắp xếp giá tiền</label>
<div class="col-sm-9"><input type="radio" name="sort" value="DESC" <?php if (isset($_smarty_tpl->tpl_vars['DESC']->value)) {?> checked="checked"<?php }?> />Từ cao -> Thấp | <input type="radio" name="sort" value="ASC" <?php if (isset($_smarty_tpl->tpl_vars['ASC']->value)) {?> checked="checked"<?php }?>  />Từ Thấp -> Cao

 | <input type="radio" name="sort" value="random" <?php if (isset($_smarty_tpl->tpl_vars['random']->value)) {?> checked="checked"<?php }?>  />Ngẫu nhiên
</div>
</div>

<div class="form-group hidden">
<label class="col-sm-3 control-label text-right">Thêm danh sách số sim hot nhất lên đầu trang</label>
<div class="col-sm-9"><textarea class="form-control" rows="10" name="hot"><?php echo $_smarty_tpl->tpl_vars['hot']->value;?>
</textarea></div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label text-right">Số lượng sim hiển thị ở trang chủ</label>
<div class="col-sm-9"><input style="width: 100px;" value="<?php echo $_smarty_tpl->tpl_vars['maxrow']->value;?>
" type="number" min="20" max="200" name="maxrow" class="form-control"></div>
</div>
<div class="form-group text-center">
<button class="btn btn-success" name="save" class="center-block">Lưu cấu hình</button>
<button class="btn btn-danger" name="reupdate" class="center-block">Nâng cấp lại</button>
</div>
</form>

  </div>
</div>

</div>

<?php echo '<script'; ?>
>
window.onload=function(){
    
     var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Không tìm thấy đại lý!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
    
}
<?php echo '</script'; ?>
>

<?php }} ?>
