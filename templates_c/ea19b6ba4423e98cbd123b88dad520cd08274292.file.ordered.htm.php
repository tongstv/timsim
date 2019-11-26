<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-14 12:22:39
         compiled from "template/ordered.htm" */ ?>
<?php /*%%SmartyHeaderCode:20598450055dcce49f30a499-30743653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea19b6ba4423e98cbd123b88dad520cd08274292' => 
    array (
      0 => 'template/ordered.htm',
      1 => 1543147722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20598450055dcce49f30a499-30743653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'title' => 0,
    'row' => 0,
    'mycart' => 0,
    'tt' => 0,
    'city' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dcce49f3a0057_40665521',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dcce49f3a0057_40665521')) {function content_5dcce49f3a0057_40665521($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/timsim/domains/timsim.com/public_html/app/lib/libs/plugins/function.html_options.php';
?><?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {?>

<div class="panel panel-primary">
  <div class="panel-heading hidden-xs">
    <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
  </div>
  <div class="panel-body">
      <form class="form-horizontal" method="POST" id="ordered" action="index.php?do=ordered.done" onsubmit="return checkorder()">
   <table class="table  table-condensed table-bordered" >
   <thead>
   <tr>
    <th class="active text-center col-md-1">STT</th>
     <th class="active text-center">Số sim</th>
    
      
      <th class="active">Giá tiền</th>
  
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
   
   <td class="center">
   
   <input type="hidden" name="simdlx[<?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['simdl'];?>
" />
   <input type="hidden" name="sim[<?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
]" value="<?php echo ($_smarty_tpl->tpl_vars['row']->value['giaban']*1000000);?>
" />
   <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['d']['index']+1;?>
</td>
   <td><div class="col-md-6 text-left"><strong style="color: red; font-size: 18px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
</strong><br>
 
  
   </div>
   
    </td>
    <td> <strong>Giá: <?php echo number_format(($_smarty_tpl->tpl_vars['row']->value['giaban']*1000000));?>
 </strong>VNĐ <br />(<?php echo $_smarty_tpl->tpl_vars['row']->value['doctien'];?>
)<br></td>

   <td class="text-center"><a href="javascript://" class="delcart" data-sim="<?php echo $_smarty_tpl->tpl_vars['row']->value['sim2'];?>
"> <i class="glyphicon glyphicon-trash text-danger"></i></a></td>
 
   </tr>
   <?php endfor; endif; ?>
   <?php if (isset($_smarty_tpl->tpl_vars['mycart']->value)) {?>
    <tr>
    <td colspan="4" class="active">
    <?php if (isset($_smarty_tpl->tpl_vars['tt']->value)) {?>
    <h5 class="pull-right">
    Tổng tiền: <span id="total"><?php echo number_format(($_smarty_tpl->tpl_vars['tt']->value*1000000));?>
</span> VNĐ
    </h5>
    <?php }?>
    </td>
    </tr>
    <?php }?>
   </table>
   

  

   
   <div class="form-group form-group-lg">
   <label class="control-label col-md-4">Họ và tên: <span class="red">(*)</span></label>
   <div class="col-md-7">
   <input name="fullname" class="form-control" />
   </div>
   </div>
   
      <div class="form-group form-group-lg">
   <label class="control-label col-md-4">Điện thoại: <span class="red">(*)</span></label>
   <div class="col-md-7">
   <input name="phone" type="tel" class="form-control" />
   </div>
   </div>
   
      <div class="form-group form-group-lg">
   <label class="control-label col-md-4">Tỉnh/TP: <span class="red">(*)</span></label>
   <div class="col-md-7">
  <input type="hidden" name="city" />
   <input type="hidden" name="qh" />
   <input type="hidden" name="px" />
    <select id="city" class="form-control city">
            <option value="0">Chọn Tỉnh/TP</option>

   <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['city']->value),$_smarty_tpl);?>

          </select>
   </div>
   </div>
   
         <div class="form-group form-group-lg">
   <label class="control-label col-md-4">Địa chỉ: <span class="red">(*)</span></label>
   
   <div class="col-md-7">


   <input name="address" class="form-control" />
   </div>
   </div>
   
   

   
      <div class="form-group hidden-xs">
   <label class="control-label col-md-4">Ghi chú:</label>
   <div class="col-md-7">
   <textarea class="form-control" name="note" style="height: 50px;"></textarea>
  
 
   </div>
   </div>
   
   
   <div class="form-group form-group-lg">
   <div class="col-md-12">
        <div class="text-center">
           <button name="submit" class="btn btn-lg btn-primary ">Đặt mua</button>  <button type="reset" class="btn btn-lg btn-default">Làm lại</button>
    </div>
   </div>
   </div>

   </form>
   </div>

   
  
   
    </div>   

 


<div id="simlienquan"></div>

<style>
@media(max-width:767px)
{
#search_top
{
    display: none;
}
#anhsim
{
    display: none;
}
#ordered .form-group:nth-child(1)
{
    
    display: none;
}
#ordered .form-group:nth-child(4)
{
    
    display: none;
}
}



#lienquan
{
    padding: 0;
    margin: 0;
}

#lienquan li

{
    width: 50%;
    float: left;
    list-style: none;
    border: 1px solid #cccccc;
    padding: 5px;
    border-bottom: 0px;
}
#lienquan li .sim
{
  font-size: 16px;
  margin-left: 15px;

}
.form-group-sm
{
  display: none;
}
#fountainTextG{
  width:234px;
  margin:auto;
}

.fountainTextG{
  color:rgb(0,0,0);
  font-family:Arial;
  font-size:24px;
  text-decoration:none;
  font-weight:normal;
  font-style:normal;
  float:left;
  animation-name:bounce_fountainTextG;
    -o-animation-name:bounce_fountainTextG;
    -ms-animation-name:bounce_fountainTextG;
    -webkit-animation-name:bounce_fountainTextG;
    -moz-animation-name:bounce_fountainTextG;
  animation-duration:2.09s;
    -o-animation-duration:2.09s;
    -ms-animation-duration:2.09s;
    -webkit-animation-duration:2.09s;
    -moz-animation-duration:2.09s;
  animation-iteration-count:infinite;
    -o-animation-iteration-count:infinite;
    -ms-animation-iteration-count:infinite;
    -webkit-animation-iteration-count:infinite;
    -moz-animation-iteration-count:infinite;
  animation-direction:normal;
    -o-animation-direction:normal;
    -ms-animation-direction:normal;
    -webkit-animation-direction:normal;
    -moz-animation-direction:normal;
  transform:scale(.5);
    -o-transform:scale(.5);
    -ms-transform:scale(.5);
    -webkit-transform:scale(.5);
    -moz-transform:scale(.5);
}#fountainTextG_1{
  animation-delay:0.75s;
    -o-animation-delay:0.75s;
    -ms-animation-delay:0.75s;
    -webkit-animation-delay:0.75s;
    -moz-animation-delay:0.75s;
}
#fountainTextG_2{
  animation-delay:0.9s;
    -o-animation-delay:0.9s;
    -ms-animation-delay:0.9s;
    -webkit-animation-delay:0.9s;
    -moz-animation-delay:0.9s;
}
#fountainTextG_3{
  animation-delay:1.05s;
    -o-animation-delay:1.05s;
    -ms-animation-delay:1.05s;
    -webkit-animation-delay:1.05s;
    -moz-animation-delay:1.05s;
}
#fountainTextG_4{
  animation-delay:1.2s;
    -o-animation-delay:1.2s;
    -ms-animation-delay:1.2s;
    -webkit-animation-delay:1.2s;
    -moz-animation-delay:1.2s;
}
#fountainTextG_5{
  animation-delay:1.35s;
    -o-animation-delay:1.35s;
    -ms-animation-delay:1.35s;
    -webkit-animation-delay:1.35s;
    -moz-animation-delay:1.35s;
}
#fountainTextG_6{
  animation-delay:1.5s;
    -o-animation-delay:1.5s;
    -ms-animation-delay:1.5s;
    -webkit-animation-delay:1.5s;
    -moz-animation-delay:1.5s;
}
#fountainTextG_7{
  animation-delay:1.64s;
    -o-animation-delay:1.64s;
    -ms-animation-delay:1.64s;
    -webkit-animation-delay:1.64s;
    -moz-animation-delay:1.64s;
}




@keyframes bounce_fountainTextG{
  0%{
    transform:scale(1);
    color:rgb(0,0,0);
  }

  100%{
    transform:scale(.5);
    color:rgb(255,255,255);
  }
}

@-o-keyframes bounce_fountainTextG{
  0%{
    -o-transform:scale(1);
    color:rgb(0,0,0);
  }

  100%{
    -o-transform:scale(.5);
    color:rgb(255,255,255);
  }
}

@-ms-keyframes bounce_fountainTextG{
  0%{
    -ms-transform:scale(1);
    color:rgb(0,0,0);
  }

  100%{
    -ms-transform:scale(.5);
    color:rgb(255,255,255);
  }
}

@-webkit-keyframes bounce_fountainTextG{
  0%{
    -webkit-transform:scale(1);
    color:rgb(0,0,0);
  }

  100%{
    -webkit-transform:scale(.5);
    color:rgb(255,255,255);
  }
}

@-moz-keyframes bounce_fountainTextG{
  0%{
    -moz-transform:scale(1);
    color:rgb(0,0,0);
  }

  100%{
    -moz-transform:scale(.5);
    color:rgb(255,255,255);
  }
}
</style>

        <?php echo '<script'; ?>
>
        document.addEventListener('DOMContentLoaded', function () {
               $.getScript( "/js/select2.min.js" )
  .done(function( script, textStatus ) {
    
	       document.getElementById('city').select2();

    
  });
  
            


  
  
  


                                                var load="";
load += "<div id=\"fountainTextG\"><div id=\"fountainTextG_1\" class=\"fountainTextG\">L<\/div><div id=\"fountainTextG_2\" class=\"fountainTextG\">o<\/div><div id=\"fountainTextG_3\" class=\"fountainTextG\">a<\/div><div id=\"fountainTextG_4\" class=\"fountainTextG\">d<\/div><div id=\"fountainTextG_5\" class=\"fountainTextG\">i<\/div><div id=\"fountainTextG_6\" class=\"fountainTextG\">n<\/div><div id=\"fountainTextG_7\" class=\"fountainTextG\">g<\/div><\/div>";

$("#simlienquan").html(load);
                                 $.get('/index.php?ajax=ordered.loadmore&sosim=<?php echo $_GET['sosim'];?>
').done(function(html){

                                  $("#simlienquan").html(html);
                                 });

              
        });
          

               <?php echo '</script'; ?>
>


               <?php } else { ?>
               
               
               <?php echo $_smarty_tpl->getSubTemplate ('nosim.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

               <?php }?>

<?php }} ?>
