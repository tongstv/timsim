<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-07-09 13:49:12
         compiled from "/usr/local/lib/php/app/adm/templates/footer.htm" */ ?>
<?php /*%%SmartyHeaderCode:6787083585ac2f0697325a7-48544478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '785838981549ea68354f229643af8b3b59aa0b9c' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/footer.htm',
      1 => 1530780179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6787083585ac2f0697325a7-48544478',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ac2f069762746_34732843',
  'variables' => 
  array (
    'hour' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac2f069762746_34732843')) {function content_5ac2f069762746_34732843($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/usr/local/lib/php/app/lib/libs/plugins/modifier.date_format.php';
?>

<?php echo '<script'; ?>
 src="/apps/admin/admin.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php if (isset($_COOKIE['perm'])) {?>

<div id="c-mask" class="c-mask"></div>

<?php }?>
<style>
.prepare-ripple {
        overflow: hidden;
        position: relative;
        outline:0;
      }
      .ripple {
        display: block; 
        position: absolute;
        background: rgba(255, 255, 255, .3);
        border-radius: 100%;
        transform: scale(0);
      }
      .ripple.on-animate {
        animation: ripple 0.65s linear;
      }
      @keyframes ripple {
        100% {
          opacity: 0; 
          transform: scale(2.5);
        }
      }

</style>
<?php $_smarty_tpl->tpl_vars['hour'] = new Smarty_variable(smarty_modifier_date_format(time(),'H'), null, 0);?>



<?php echo '<script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['hour']->value<19) {?>

var music=true;
<?php } else { ?>
var music=false;
<?php }?>


$(document).ready(function(){
    

})


function msg(){
  
 $("#limsg").empty();
  $.getJSON( "index.php?ajax=orders.ajaxload", function( data ) {
  $.each( data, function( key, val ) {
    //items.push( "<li id='" + key + "'>" + val + "</li>" );
    
    if(key=='newdh')
   
   $(".sodonhang").remove();
    if(val > 0)
    {
    $(".glyphicon-shopping-cart").after('<span class="label label-danger pull-right sodonhang">'+val+'</span>');
    
    
    
    if(window.music)
    {
     var audioElement = document.createElement('audio');
        audioElement.setAttribute('src', '/apps/sms.mp3');
        audioElement.setAttribute('autoplay', 'autoplay');
        //audioElement.load()

        $.get();
        
     
        audioElement.addEventListener("load", function() {
            audioElement.play();
        },true);
        
       }
        
        
        
   
    }
    if(key=='li')
    {
        
         var i=0;
        var li="";
        $.each(val , function(likey, lival){
            i++;
            if(lival!='')
            li += '<li><a href="index.php?do='+likey+'">'+lival+'</a></li>';
        })
        
        if(li)
        $("#limsg").append(li);
        if(i)
        {
            $("#msgbox").show('slow');
            $("#countsms").text(i);
        }
        
    }
  });
 
});
}
setTimeout(msg, 1000);

 var element = 'li a, button,input, .to-ripple',
      	   current, 
      	   ripple, 
      	   d, 
      	   x, 
      	   y;

      $(element).click(function (e) {

	current = $(this);

	// Cria o elemento .ripple caso ele não exista
	if (current.find(".ripple").length === 0) {

	  // Prepara o pai para receber o elemento .ripple
	  current.addClass('prepare-ripple');

	  // Insere o elemento .ripple no conteúdo
	  current.prepend("<span class='ripple'></span>");
	}

	// Define o .ripple criado em uma variável
	ripple = current.find(".ripple");

	// Em caso de cliques duplos rápidos, para a animação anterior
	ripple.removeClass("on-animate");

	// Define o tamanho do .ripple
	if (!ripple.height() && !ripple.width()) {

	  // Usa a largura ou a altura do pai 
	  // O que for maior para fazer um círculo que pode cobrir todo o elemento.
	  d = Math.max(current.outerWidth(), current.outerHeight());

	  ripple.css({
	    height: d,
	    width: d
	  });
	}

	// Coordenadas do clique
	// Lógica = Coordenadas em relação a página 
	// - Do pai, posição relativa para a página
	x = e.pageX - current.offset().left - ripple.width() / 2;
	y = e.pageY - current.offset().top - ripple.height() / 2;

	// Define a posição e adiciona a classe .on-animate
	ripple.css({
	  top: y + 'px',
	  left: x + 'px'
	}).addClass("on-animate");
      });

 var slideRight = new Menu({
    wrapper: 'body',
    type: 'slide-right',
    menuOpenerClass: '.countsms',
    maskId: '#c-mask'
  });

  var slideRightBtn = document.querySelector('.countsms');
  
  slideRightBtn.addEventListener('click', function(e) {
    e.preventDefault;
    slideRight.open();
  });
  
    var slideLeft = new Menu({
    wrapper: 'body',
    type: 'slide-left',
    menuOpenerClass: '.slideleft',
    maskId: '#c-mask'
  });

  var slideLeftBtn = document.querySelector('.slideleft');
  
  slideLeftBtn.addEventListener('click', function(e) {
    e.preventDefault;
    slideLeft.open();
  });
  

<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

<div id="c-mask" class="c-mask"></div>
</body>
</html><?php }} ?>
