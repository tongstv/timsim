<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-10-03 23:13:41
         compiled from "/usr/local/lib/php/app/adm/templates/menu.htm" */ ?>
<?php /*%%SmartyHeaderCode:14756379095ad1ef360b4940-95406039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cbf59dbb46801f508ca602808c64df8300f952e' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/menu.htm',
      1 => 1530780174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14756379095ad1ef360b4940-95406039',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ad1ef36123292_06294864',
  'variables' => 
  array (
    'menu' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad1ef36123292_06294864')) {function content_5ad1ef36123292_06294864($_smarty_tpl) {?><div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Quản lý menu</h2>
  </div>
  <div class="panel-body">
   

<link rel="stylesheet" href="/apps/css/easymenu/style.css">
<!--[if lte IE 8]>
<?php echo '<script'; ?>
 type="text/javascript" src="/apps/js/easymenu/html5.js"><?php echo '</script'; ?>
>
<![endif]-->
<?php echo '<script'; ?>
>
var _BASE_URL = '';
var current_group_id = <?php echo $_smarty_tpl->tpl_vars['menu']->value['group_id'];?>
;
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/js/easymenu/jquery.1.4.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/js/easymenu/interface-1.2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/js/easymenu/inestedsortable.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/js/easymenu/menu.js"><?php echo '</script'; ?>
>

</head>
<body>
	<section>

		<article>
			<section>
				<ul id="menu-group">
					
                    
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['d'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menu']->value['menu_groups']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <?php $_smarty_tpl->tpl_vars['row'] = new Smarty_variable($_smarty_tpl->tpl_vars['menu']->value['menu_groups'][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']], null, 0);?>
                 
                 	<li id="group-<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
						<a href="index.php?do=menu&amp;group_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
						<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>

						</a>
					</li>
                    
                    <?php endfor; endif; ?>
				
				
					<li id="add-group"><a href="index.php?ajax=menu_group.add" title="Add Menu Group">+</a></li>
				</ul>
				<div class="clear"></div>

				<form method="post" id="form-menu" action="index.php?ajax=menu.save_position">
					<div class="ns-row" id="ns-header">
						<div class="ns-actions">Actions</div>
						<div class="ns-class">Class</div>
						<div class="ns-url">URL</div>
						<div class="ns-title">Title</div>
					</div>
					<?php echo $_smarty_tpl->tpl_vars['menu']->value['menu_ul'];?>

					<div id="ns-footer">
						<button type="submit" class="btn btn-sm btn-success" id="btn-save-menu">Cập nhật menu</button>
					</div>
				</form>
			</section>
			<aside>
			
				<div class="box">
					<h2>Nhóm menu hiện tại</h2>
					<section>
						<span id="edit-group-input"><?php echo $_smarty_tpl->tpl_vars['menu']->value['group_title']['title'];?>
</span>
						(ID: <b><?php echo $_smarty_tpl->tpl_vars['menu']->value['group_id'];?>
</b>)
						<div>
							<a id="edit-group" href="#">Sửa</a>
							<?php if ($_smarty_tpl->tpl_vars['menu']->value['group_id']>1) {?>
							&middot; <a id="delete-group" href="#">Xóa</a>
						<?php }?>
						</div>
					</section>
				</div>
				<div class="box">
					<h2>Thêm menu</h2>
					<section>
						<form id="form-add-menu" method="post" action="index.php?ajax=menu.add">
							<p>
								<label for="menu-title">Title</label>
								<input type="text" name="title" id="menu-title">
							</p>
							<p>
								<label for="menu-url">URL</label>
								<input type="text" name="url" id="menu-url">
                                <a href="index.php?ajax=page.find"  class="find btn btn-sm btn-default">Chọn liên kết trong bài viết</a>
							</p>
							<p>
								<label for="menu-class">Class</label>
								<input type="text" name="class" id="menu-class">
							</p>
							<p class="buttons">
								<input type="hidden" name="group_id" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['group_id'];?>
">
								<button id="add-menu" type="submit" class="btn btn-sm btn-success">Thêm menu</button>
							</p>
						</form>
					</section>
				</div>
			</aside>
			<div class="clear"></div>
		</article>
	
	</section>
	<div id="loading">
		<img src="/apps/css/easymenu/images/ajax-loader.gif" alt="Loading">
		Processing...
	</div>
</body>

</div>
</div><?php }} ?>
