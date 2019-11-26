<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-08-15 09:29:01
         compiled from "/usr/local/lib/php/app/adm/templates/daily.tg.htm" */ ?>
<?php /*%%SmartyHeaderCode:9129367085ad699d16c04c0-61215967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaf84b685996af8fa08827e3e456efa171cbfc8a' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/daily.tg.htm',
      1 => 1530780175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9129367085ad699d16c04c0-61215967',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ad699d1788073_58110477',
  'variables' => 
  array (
    'fullname' => 0,
    'error' => 0,
    'alert' => 0,
    'id' => 0,
    'data' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad699d1788073_58110477')) {function content_5ad699d1788073_58110477($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="vi, en" xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi, en">
	<head>
		<title>
		Quản lý hoa hồng
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="/apps/css/bootstrap.min.css" rel="stylesheet" media="screen" type="text/css" />
		<link rel="stylesheet" href="/apps/css/bootstrap-theme.min.css" type="text/css" />
		<link rel="stylesheet" href="/apps/css/style.css" type="text/css" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="tongstv" />
		<link href="/apps/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php echo '<script'; ?>
 src="/apps/js/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/apps/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/apps/js/jquery.confirm.min.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/apps/js/bootstrap-editable.min.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/apps/js/scriptlibs.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/apps/js/admin.js" type="text/javascript"><?php echo '</script'; ?>
>
		<div class="panel panel-success">
			<div class="panel-heading">
				<h2 class="panel-title">
                Thiết lập tăng giảm giá: <?php echo $_smarty_tpl->tpl_vars['fullname']->value;?>

				</h2>
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
                <div class="form-inline">
                <form class="form-inline" method="POST">
                <div class="input-group">
				<input type="hidden" name="dlid" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
				<input style="width: 30%;" placeholder="Gi&aacute; ti&#7873;n &gt; ho&#7863;c =" name="dk1" class="form-control price" />
				<input style="width: 30%;" placeholder="Gi&aacute; ti&#7873;n &lt;" name="dk2" class="form-control price" />
                <select style="width: 20%;" name="x" class="form-control input-sm">
                <option  selected="" value="+%">+%
											</option>
											<option value="-%">-%</option>
											<option value="-">-</option>
											<option value="+">+</option>
										
                </select>
				<input style="width: 20%;" name="pt" class="form-control price" />
                <span class="input-group-btn">
                <button class="btn btn-success" name="themkhoang">Thêm khoảng</button>
                </span>
              
                </div>
                  <button name="active" class="btn btn-danger pull-right">Thực hiện tăng giảm</button>
                </form>
				 
                     <div class="form-group">
                                 <a href="index.php?ajax=daily.dangsim&dlid=<?php echo $_REQUEST['id'];?>
" class=" pull-right btn btn-default"> <i class="glyphicon glyphicon-backward"></i>Quay lại đăng sim</a>
                </div>
				<table class="table table-hover table-condensed" id="tablesort">
					<thead>
						<tr>
							<th class="active col-sm-1">
							</th>
							<th class="active">
								Gi&aacute; &gt; =
							</th>
							<th class="active">
								Gi&aacute; &lt;
							</th>
                            <th class="active"></th>
							<th class="active">
								T/g
							</th>
                            <th class="noSort active col-sm-1"></th>
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
?> <?php $_smarty_tpl->tpl_vars['row'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']], null, 0);?>
					<tr>
						<th class="center">
							<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['d']['index']+1;?>

						</th>
						<td>
							<?php echo number_format($_smarty_tpl->tpl_vars['row']->value['dk1']);?>

						</td>
						<td>
							<?php echo number_format($_smarty_tpl->tpl_vars['row']->value['dk2']);?>

						</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['x'];?>
</td>
						<td>
                            <?php if ($_smarty_tpl->tpl_vars['row']->value['x']=='+') {?>
                            <?php echo number_format($_smarty_tpl->tpl_vars['row']->value['pt']);?>
 VNĐ
                            <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['x']=='-') {?>
                            <?php echo number_format($_smarty_tpl->tpl_vars['row']->value['pt']);?>
 VNĐ
                            <?php } else { ?>
                            
							<?php echo $_smarty_tpl->tpl_vars['row']->value['pt'];?>
%
                            <?php }?>
						</td>
                        <td>
                        <a href="index.php?ajax=<?php echo $_GET['ajax'];?>
&id=<?php echo $_GET['id'];?>
&delid=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> Xóa</a>
                        </td>
					</tr>
                    <?php endfor; endif; ?>
				</table>
                
                <form method="POST">
                	<input type="hidden" name="dlid" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
                <button name="all" class="btn btn-danger">ÁP dụng mẫu này cho tất cả các đại lý</button>
                </form>
			</div>
		</div>
       
		<?php echo '<script'; ?>
 src="/apps/js/tablesort.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
    var theHeaders = {}
    $(this).find('th.noSort').each(function(i,el){
        theHeaders[$(this).index()] = { sorter: false };
    });

    $("#tablesort").tablesorter({

    headers: theHeaders

    });
    });
	<?php echo '</script'; ?>
>
	</body>

</html><?php }} ?>
