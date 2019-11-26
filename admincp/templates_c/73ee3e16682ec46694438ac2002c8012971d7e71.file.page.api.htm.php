<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-08-21 23:08:32
         compiled from "/usr/local/lib/php/app/adm/templates/page.api.htm" */ ?>
<?php /*%%SmartyHeaderCode:651976295b7c39002becb5-37903942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73ee3e16682ec46694438ac2002c8012971d7e71' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/page.api.htm',
      1 => 1530780180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '651976295b7c39002becb5-37903942',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5b7c390034ef95_75333587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b7c390034ef95_75333587')) {function content_5b7c390034ef95_75333587($_smarty_tpl) {?>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h2 class="panel-title">API -- Nhấn nút chọn API sẽ được thêm vào vị trí chuột</h2>
  </div>
  <div class="panel-body">
    
    <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Chức năng</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Giao diện</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Nâng cao</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">khác</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
    
        <table class="table table-bordered">
    
    <thead>
    <tr>
    
   <th class="active">Tên</th>
    <th class="active">Công dụng</th>
      <th class="active">#</th>
    </tr>
    </thead>
    <tbody>
    
    <tr>
    
    <td>{{panel:donhang}}</td>
    <td>Hiển thị đơn hàng</td>
    
     <td><button data-html="{{panel:donhang}}" class="select btn btn-sm btn-info">Chọn</button></td>
    </tr>
    
    
    
    
    <tr>
    
    <td>{{panel:tintuc}}</td>
    <td>Hiển thị danh sách tin tức</td>
    
     <td><button data-html="{{panel:tintuc}}" class="select btn btn-sm btn-info">Chọn</button></td>
    </tr>
    
    
     <tr>
    
    <td>{{panel:timtheodau}}</td>
    <td>Hiển thị chức năng tìm theo đầu số</td>
    
     <td><button data-html="{{panel:timtheodau}}" class="select btn btn-sm btn-info">Chọn</button></td>
    </tr>
    
    
    
     <tr>
    
    <td>{{panel:timtheogia}}</td>
    <td>Hiển thị chức năng tìm theo giá</td>
    
     <td><button data-html="{{panel:timtheogia}}" class="select btn btn-sm btn-info">Chọn</button></td>
    </tr>
    


 
     <tr>
    
    <td>{{panel:theloaisim}}</td>
    <td>Hiển thị chức năng tìm theo loại</td>
    
     <td><button data-html="{{panel:theloaisim}}" class="select btn btn-sm btn-info">Chọn</button></td>
    </tr>
    
    
    
       <tr>
    
    <td>{{panel:timsimnamsinh}}</td>
    <td>Hiển thị chức năng tìm theo năm sinh</td>
    
     <td><button data-html="{{panel:timsimnamsinh}}" class="select btn btn-sm btn-info">Chọn</button></td>
    </tr>
    
    
        <tr>
    
    <td>{{panel:timsimphongthuy}}</td>
    <td>Hiển thị chức năng tìm kiếm theo phong thủy</td>
    
     <td><button data-html="{{panel:timsimphongthuy}}" class="select btn btn-sm btn-info">Chọn</button></td>
    </tr>
    
    
       <tr>
    
    <td>{{panel:timsimtuquy}}</td>
    <td>Hiển thị chức năng tìm sim tứ quý</td>
    
     <td><button data-html="{{panel:timsimtuquy}}" class="select btn btn-sm btn-info">Chọn</button></td>
    </tr>
    
    
     <tr>
    
    <td>{{panel:timsimtamhoa}}</td>
    <td>Hiển thị chức năng tìm sim tam hoa</td>
    
     <td><button data-html="{{panel:timsimtamhoa}}" class="select btn btn-sm btn-info">Chọn</button></td>
    </tr>
    
      <tr>
    
    <td>{{panel:timsimtien}}</td>
    <td>Hiển thị chức năng tìm sim tiến</td>
    
     <td><button data-html="{{panel:timsimtien}}" class="select btn btn-sm btn-info">Chọn</button></td>
    </tr>
    
    
     <tr>
    
    <td>{{panel:menu-r}}</td>
    <td>Hiển thị menu mạng bên phải</td>
    
     <td><button data-html="{{panel:menu-r}}" class="select btn btn-sm btn-info">Chọn</button></td>
    </tr>
    
    
         <tr>
    
    <td>{{panel:menu-l}}</td>
    <td>Hiển thị menu mạng bên trái</td>
    
     <td><button data-html="{{panel:menu-l}}" class="select btn btn-sm btn-info">Chọn</button></td>
    </tr>
    
     <tr>
      <tr>
    
    <td>{{panel:menu-a}}</td>
    <td>Hiển thị menu mạng thả xuống</td>
    
     <td><button data-html="{{panel:menu-a}}" class="select btn btn-sm btn-info">Chọn</button></td>
    </tr>
    
    
    
     <tr>
     
     
           <tr>
    
    <td>{{menu:id}}</td>
    <td>Gọi menu id là mã nhóm menu</td>
    
     <td><button data-html="{{menu:#key#}}" data-option="Vui lòng nhập mã nhóm menu cần hiển thị" data-vidu="18" class="select btn btn-sm btn-info">Chọn</button></td>
    </tr>
    
    
               <tr>
    
    <td>{{tinkhuyenmai:1}}</td>
    <td>Hiển thị tin khuyến mại</td>
    
     <td><button data-html="{{tinkhuyenmai:1}}"  class="select btn btn-sm btn-info">Chọn</button></td>
    </tr>
    
    
                <tr>
    
    <td>{{tintuclink:tintuc-10}}</td>
    <td>Hiển thị nhóm tin tức 10 là số tin giới hạn</td>
    
     <td><button data-html="{{tintuclink:#key#}}" data-option="Nhập mã nhóm và số lượng vd: tintuc-20" data-vidu="tintuc-10"  class="select btn btn-sm btn-info">Chọn</button></td>
    </tr>
    
    
    
    
     <tr>
     
     
    
    <td>{{slide:slide1}} </td>
    <td>Hiển slide vào vị trí chọn / slide1  là mã nhóm tin</td>
    
     <td><button data-html="{{slide:#key#}}" data-option="Vui lòng nhập mã nhóm tin" data-vidu="slide1" class="select btn btn-sm btn-info">Chọn</button></td>
    </tr>
    
    
    
       <tr>
    
    <td>{{page:code}} </td>
    <td>Hiển 1 bài viết vào vị trí chọn</td>
    
     <td><button data-html="{{page:#key#}}" data-option="Vui lòng code bài viết" data-vidu="dienthoai" class="select btn btn-sm btn-info">Chọn</button></td>
    </tr>
    
    
    
    
       <tr>
    
    <td>{{import:bodem}} </td>
    <td>Nhúng bộ đếm người truy cập vào website</td>
    
     <td><button  class="select btn btn-sm btn-info">Chọn</button></td>
    </tr>
    
    
       <tr>
    
    <td>{{simgiamgia:250-10}} </td>
    <td>Hiện sim giảm giá 250 là mã đại lý 10 là giảm 10%</td>
    
     <td><button data-html="{{simgiamgia:#key#}}" data-option="Vui lòng nhập ID đại lý và số % cần giảm ví dụ: 250-10-DESC/ASC" data-vidu="250-10"  class="select btn btn-sm btn-info">Chọn</button></td>
    </tr>
    
    
    
    </tbody>
    
    </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
    
    
    
    <table class="table table-bordered">
    <thead>
    <tr>
    <th class="active">Tên</th>
     <th class="active">Công dụng</th>
      <th class="active"></th>
      
      
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>box</td>
    <td>Tạo một box</td>
    <td><button data-html='<div class="panel panel-#key#">
  <div class="panel-heading">
    <h2 class="panel-title">Tên box</h2>
  </div>
  <div class="panel-body">
    Nội dung box
  </div>
</div>' data-option="Chọn mầu sắc: primary, success, info, warning, danger" data-vidu="success" class="select btn btn-sm btn-info">Chọn</button></td>
            
    </tr>
  
  
      <tr>
    <td>div</td>
    <td>Tạo 1 div chia đôi </td>
    <td><button data-html='<div class="col-md-12 row">

<div class="col-md-6">Noi dung 1</div>
<div class="col-md-6">Noi dung 1</div>
</div>'  class="select btn btn-sm btn-info">Chọn</button></td>
            
    </tr>
    
    
    
   
    </tbody>
    <tfoot></tfoot>
    
    </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="messages">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
  </div>

</div>


  </div>
</div>
<?php }} ?>
