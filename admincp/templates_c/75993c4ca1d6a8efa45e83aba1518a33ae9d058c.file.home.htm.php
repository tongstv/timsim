<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-09 13:49:12
         compiled from "/usr/local/lib/php/app/adm/templates/home.htm" */ ?>
<?php /*%%SmartyHeaderCode:10040898825ac2f071eeba24-21012819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75993c4ca1d6a8efa45e83aba1518a33ae9d058c' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/home.htm',
      1 => 1530780170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10040898825ac2f071eeba24-21012819',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ac2f071f28e01_37145828',
  'variables' => 
  array (
    'tong' => 0,
    'tongsim' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac2f071f28e01_37145828')) {function content_5ac2f071f28e01_37145828($_smarty_tpl) {?><div class="container">
<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Thống kê</h2>
  </div>
  <div class="panel-body">
    Tổng số sim đã đăng lên admin để check dữ liệu đại lý: <strong><?php echo number_format($_smarty_tpl->tpl_vars['tong']->value);?>
</strong> Sim
    <br />
      Sau khi loại bỏ trùng lập đã đưa ra trang chủ: <strong><?php echo number_format($_smarty_tpl->tpl_vars['tongsim']->value);?>
</strong> Sim
    
    <div class="pull-right"><strong><a href="https://www.youtube.com/channel/UCpK1GXaNj1dYccpdoT41YgA" target="_blank">HƯỚNG DẪN SỬ DỤNG BẰNG VIDEO TRÊN YOUTUBE</a></strong></div>
 
 <br />
  <br />
 
  </div>
</div>

<div class="">
<strong style="color: red;">STV Thông báo</strong>

<br />

Chức năng Dataviettel ( Đăng số tự động đã được nâng cấp)

<br />
Nếu quý khách sử dụng vui lòng truy cập menu => dataviettel và bật On

</div>


<div class="panel panel-success hidden" >
  <div class="panel-heading">
    <h2 class="panel-title">TRANG TRÍ HIỆU ỨNG TẾT CHO WEBSITE CỦA BẠN</h2>
  </div>
  <div class="panel-body">
<blockquote>
Hiệu ứng hoa mai rơi trên web
<br />
&lt;script type="text/javascript" src="/apps/share/hieuungtet/hoa-mai-roi.js"&gt;&lt;/script&gt;
<br />
Hiệu ứng hoa đào rơi trên web
<br />
 &lt;script type="text/javascript" src="/apps/share/hieuungtet/hoa-dao-roi.js"&gt;&lt;/script&gt;
 </blockquote>
 
 
 <blockquote>
 Thêm thanh menu có nền là cành đào như nganhangsimsodep.com
 <br />
 
 &lt;style&gt;.panel-heading { background: #DA1F30 url(/apps/share/hieuungtet/canhdao1.png) no-repeat right bottom !important; } .panel-heading &gt; .panel-title { color: gold !important; }&lt;/style&gt;
 </blockquote>
background: #DA1F30 -> #DA1F30 mầu nền
 <br />
 color: gold  -> gold Là mầu chữ
 <br />
 <br />
 Copy đoạn mã trên rồi vào <a href="index.php?do=config">nhúng mã theo dõi</a> paste vào vị trí body và lưu lại
 <br />
 Sao đó sang menu <a href="index.php?do=cachemanager">quản lý Cache</a> xóa cache page
</code>


  </div>
</div>





<div class="panel panel-info" style="display: none;">
  <div class="panel-heading">
    <h2 class="panel-title">Tiện ích mở rộng ++ Trả phí</h2>
  </div>
  <div class="panel-body">
    <table class="table table-bordered">

    <thead>
    <tr>
    <th class="active text-center">STT</th>
    <th class="active">Tên tiện ích</th>
    <th class="active">Chức năng & Công việc</th>
    <th class="active">Giá tiền</th>
    <th class="active"></th>
    </tr>
    </thead>    
    
    <tr>
    <td class="text-center">1</td>
    <td>Đăng số tự động</td>
    <td>1. Cập nhập danh sách đại lý > 400 ĐL + Hoa hồng<br />2. Đăng số tự động hàng ngày</td>
    <td>3tr/Năm</td>
    <td><a href="index.php?do=dataviettel">Xem</a></td>
    </tr>
    
        <tr class="hidden">
    <td class="text-center">2</td>
    <td>SMS PLUS</td>
    <td>1. Chuyển tiếp tin nhắn đến ứng dụng web hoặc số điện thoại khác theo từ khóa
    <br />
     2. Nhắn tin thông báo cho khách hàng khi đặt hàng thành công!
     <br />
     3. Tạo tin nhắn bán số trùng từ danh sách số của bạn cần bán và nhắn tin
     <br />
     4. Tìm kiếm số gần giống khách đặt sim không còn nhắn tin chào khách
    </td>
    <td>2tr/ Năm</td>
    <td><a href="index.php?do=dataviettel"></a></td>
    </tr>
    </table>
  </div>
</div>
</div>
<?php }} ?>
