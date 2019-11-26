<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-11 23:37:59
         compiled from "/usr/local/lib/php/app/adm/templates/edittool.htm" */ ?>
<?php /*%%SmartyHeaderCode:17230580485ac42163ed02e6-05221264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da1e3965bb21a59e267ed0ea8b653ec0fb44277e' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/edittool.htm',
      1 => 1530780170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17230580485ac42163ed02e6-05221264',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ac42163ed3e41_30806765',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac42163ed3e41_30806765')) {function content_5ac42163ed3e41_30806765($_smarty_tpl) {?>  
<?php echo '<script'; ?>
>

	
    function html()
    {
        var html = prompt("Paster mã html vào vị trí chuột", "");
        
        if(html)
        {
              CKEDITOR.instances['detail'].insertHtml(html);
        }
      
    }
    

    $(document).ready(function(){
       
       CKEDITOR.config.contentsCss = 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css';






       $(document).on('click','.select',function(){
        
        var html=$(this).data('html');
        
        var option=$(this).data('option');
        
        if(option)
        {
              var vidu=$(this).data('vidu');
             var html2 = prompt(option, vidu);
             
             html = html.replace('#key#',html2);
        }
        
        
        CKEDITOR.instances['detail'].insertHtml(html);
        
        $('#myModal').modal('hide');
       });
        
    });
<?php echo '</script'; ?>
>


  
<div class="btn-group">

<a href="#" onclick="html(); return false;" class="btn btn-sm btn-info">Nhúng html</a>

<a href="index.php?ajax=page.api" class="ajax btn btn-sm btn-success">API chức năng</a>
</div><?php }} ?>
