<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-19 15:57:19
         compiled from "/usr/local/lib/php/app/adm/templates/shop.htm" */ ?>
<?php /*%%SmartyHeaderCode:11493179205bf27aef441b00-31146557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba504000b35c1fbdd06a3cc5fe8f6a582a826531' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/shop.htm',
      1 => 1530780176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11493179205bf27aef441b00-31146557',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_search_txt' => 0,
    '_search' => 0,
    'paging' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bf27aef523e63_24434909',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf27aef523e63_24434909')) {function content_5bf27aef523e63_24434909($_smarty_tpl) {?><div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Shop ứng dụng trả phí của STV</h2>
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




<table class="table table-hover table-condensed" id="tablesort">
<thead>
    <tr>
        <th class="active text-center">STT</th>
        <th class="active"> Tên ứng dụng
        </th>
         <th class="active text-center noSort">Mô tả</th>
         
         <th class="active text-center noSort">Giá tiền</th>
         <th class="active text-center noSort">
       Đặt mua</th>
    </tr>
</thead>


    <tr>
        <td class="text-center col-md-1">1</td>
       
        <td>Ứng dụng auto seo onpage
        <br />
  
        </td>
         <td class="text-center">Giúp trang web của bạn tự động seo nhiều từ khóa lên trang nhất </td>
         
        <td class="col-md-1 text-center">1.500.000 đ / year </td>
   <td class="text-center"><a href="https://khachhang.stv.vn/cart.php?gid=17" target="_blank" class="btn btn-sm btn-success">Mua ngay</a></td>
    </tr>
    
        <tr>
        <td class="text-center col-md-1">2</td>
       
        <td>Ứng dụng tạo phân nhóm hỗ trợ seo
        <br />
              link : <a href="index.php?do=simnha.phannhom">index.php?do=simnha.phannhom</a>
        </td>
         <td class="text-center">Giúp tạo ra phân nhóm tùy chỉnh để khách hàng  dễ lựa chọn, tối ưu seo cho phân nhóm dễ lên top</td>
         
        <td class="col-md-1 text-center">1.500.000 đ / year </td>
   <td class="text-center"><a href="https://khachhang.stv.vn/cart.php?gid=17" target="_blank" class="btn btn-sm btn-success">Mua ngay</a></td>
    </tr>



        <tr style="display: none;">
        <td class="text-center col-md-1">3</td>
       
        <td>Quản lý sim trả góp
        <br />
              link : <a href="index.php?do=simtragop">index.php?do=simtragop</a>
        </td>
         <td class="text-center">Phiên bản dùng thử (beta) đang fix lỗi chưa bán</td>
         
        <td class="col-md-1 text-center">1.500.000 đ / year </td>
   <td class="text-center"><a href="https://khachhang.stv.vn/cart.php?gid=17" target="_blank" class="btn btn-sm btn-success">Mua ngay</a></td>
    </tr>


        <tr>
        <td class="text-center col-md-1">3</td>
       
        <td>Phần mềm auto fb
        <br />
              link : <a href="index.php?do=acc">index.php?do=acc</a>
        </td>
         <td class="text-center">Phiên bản miễn phí (beta)</td>
         
        <td class="col-md-1 text-center">Free </td>
   </tr>



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
>
<div class="text-center"><div id="video-placeholder"></div></div>


<?php echo '<script'; ?>
 src="https://www.youtube.com/iframe_api"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
var player;

function onYouTubeIframeAPIReady() {
    player = new YT.Player('video-placeholder', {
        width: 640,
        height: 360,
        videoId: 'qbCI6LuFD5E',
        playerVars: {
            color: 'white',
            playlist: 'FB5iZ8ZHk50,FB5iZ8ZHk50'
        },
        events: {
            onReady: playvideo
        }
    });
}
function playvideo(){
    player.playVideo();
}
<?php echo '</script'; ?>
><?php }} ?>
