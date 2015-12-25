<?php 
 session_start();
  if(!isset($_SESSION['user_authorized'])) header("Location:index.php");

    include('_include/configuration.php');
  include('_classes/conectar.php');
  include('_classes/crud.php');

  $con = new Coneccion($server,$user,$password,$dbname);
  $con->conectar();
  $crud = new Crud();
   
 ?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir='ltr' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
<head>
<link href='http://fonts.googleapis.com/css?family=Clicker+Script' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Oldenburg' rel='stylesheet' type='text/css'/>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<script type="text/javascript">(function() { (function(){function c(a){this.t={};this.tick=function(a,c,b){var d=void 0!=b?b:(new Date).getTime();this.t[a]=[d,c];if(void 0==b)try{window.console.timeStamp("CSI/"+a)}catch(e){}};this.tick("start",null,a)}var a;window.performance&&(a=window.performance.timing);var h=a?new c(a.responseStart):new c;window.jstiming={Timer:c,load:h};if(a){var b=a.navigationStart,e=a.responseStart;0<b&&e>=b&&(window.jstiming.srt=e-b)}if(a){var d=window.jstiming.load;0<b&&e>=b&&(d.tick("_wtsrt",void 0,b),d.tick("wtsrt_",
"_wtsrt",e),d.tick("tbsd_","wtsrt_"))}try{a=null,window.chrome&&window.chrome.csi&&(a=Math.floor(window.chrome.csi().pageT),d&&0<b&&(d.tick("_tbnd",void 0,window.chrome.csi().startE),d.tick("tbnd_","_tbnd",b))),null==a&&window.gtbExternal&&(a=window.gtbExternal.pageT()),null==a&&window.external&&(a=window.external.pageT,d&&0<b&&(d.tick("_tbnd",void 0,window.external.startE),d.tick("tbnd_","_tbnd",b))),a&&(window.jstiming.pt=a)}catch(k){}})();window.tickAboveFold=function(c){var a=0;if(c.offsetParent){do a+=c.offsetTop;while(c=c.offsetParent)}c=a;750>=c&&window.jstiming.load.tick("aft")};var f=!1;function g(){f||(f=!0,window.jstiming.load.tick("firstScrollTime"))}window.addEventListener?window.addEventListener("scroll",g,!1):window.attachEvent("onscroll",g);
 })();</script>
<meta content='blogger' name='generator'/>
<link href='favicon.ico' rel='icon' type='image/x-icon'/>
<link href='http://kiddiezshop-btemplates.blogspot.com/' rel='canonical'/>
<link rel="alternate" type="application/atom+xml" title="Kiddiez Shop - Atom" href="http://kiddiezshop-btemplates.blogspot.com/feeds/posts/default" />
<link rel="alternate" type="application/rss+xml" title="Kiddiez Shop - RSS" href="http://kiddiezshop-btemplates.blogspot.com/feeds/posts/default?alt=rss" />
<link rel="service.post" type="application/atom+xml" title="Kiddiez Shop - Atom" href="https://www.blogger.com/feeds/6852192370751838918/posts/default" />
<link rel="me" href="https://www.blogger.com/profile/12349406774361643377" />
<link rel="openid.server" href="https://www.blogger.com/openid-server.g" />
<link rel="openid.delegate" href="http://kiddiezshop-btemplates.blogspot.com/" />
<!--[if IE]> <script> (function() { var html5 = ("abbr,article,aside,audio,canvas,datalist,details," + "figure,footer,header,hgroup,mark,menu,meter,nav,output," + "progress,section,time,video").split(','); for (var i = 0; i < html5.length; i++) { document.createElement(html5[i]); } try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {} })(); </script> <![endif]-->
<title>
Kiddiez Shop
</title>
<link type='text/css' rel='stylesheet' href='https://www.blogger.com/static/v1/widgets/537653047-widget_css_bundle.css' />
<link type='text/css' rel='stylesheet' href='https://www.blogger.com/dyn-css/authorization.css?targetBlogID=6852192370751838918&zx=7b04a788-0865-46f3-95bd-7f829e0d37ec' />
<link rel="stylesheet" type="text/css" href="screen.css">
<link rel="stylesheet" type="text/css" href="css/screen.css">
<link rel="stylesheet" type="text/css" href="css/screen2.css">
<link rel="stylesheet" type="text/css" href="css/screen3.css">
<link rel="stylesheet" type="text/css" href="css/screen4.css">
<link rel="stylesheet" type="text/css" href="css/screen5.css">






<script type='text/javascript'>
summary_noimg = 300;
summary_img = 200;
img_thumb_height = 180;
img_thumb_width = 190;
</script>
<script type='text/javascript'>
//<![CDATA[

function removeHtmlTag(strx,chop){ 
  if(strx.indexOf("<")!=-1)
  {
    var s = strx.split("<"); 
    for(var i=0;i<s.length;i++){ 
      if(s[i].indexOf(">")!=-1){ 
        s[i] = s[i].substring(s[i].indexOf(">")+1,s[i].length); 
      } 
    } 
    strx =  s.join(""); 
  }
  chop = (chop < strx.length-1) ? chop : strx.length-2; 
  while(strx.charAt(chop-1)!=' ' && strx.indexOf(' ',chop)!=-1) chop++; 
  strx = strx.substring(0,chop-1); 
  return strx+'...'; 
}

function createSummaryAndThumb(pID){
  var div = document.getElementById(pID);
  var imgtag = "";
  var img = div.getElementsByTagName("img");
  var summ = summary_noimg;
  if(img.length>=1) { 
    imgtag = '<span style="float:left; padding:0px 10px 5px 0px;"><img src="'+img[0].src+'" width="'+img_thumb_width+'px" height="'+img_thumb_height+'px"/></span>';
    summ = summary_img;
  }
  
  var summary = imgtag + '<div>' + removeHtmlTag(div.innerHTML,summ) + '</div>';
  div.innerHTML = summary;
}



//]]>
</script>
<!--[if IE]> <style type="text/css"> #menu li { position:static; } </style> <![endif]-->
<!--Internet Explorer Trancparency fix-->
<!--[if lt IE 8]> <script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE8.js" type="text/javascript"></script> <![endif]-->
<script type="text/javascript">var a="&m=1",d="(^|&)m=",e="?",f="?m=1";function g(){var b=window.location.href,c=b.split(e);switch(c.length){case 1:return b+f;case 2:return 0<=c[1].search(d)?null:b+a;default:return null}}var h=navigator.userAgent;if(-1!=h.indexOf("Mobile")&&-1!=h.indexOf("WebKit")&&-1==h.indexOf("iPad")||-1!=h.indexOf("Opera Mini")||-1!=h.indexOf("IEMobile")){var k=g();k&&window.location.replace(k)};
</script><script type="text/javascript">
if (window.jstiming) window.jstiming.load.tick('headEnd');
</script></head>
<body>
<div id='header-outer' style="background:url('imagenes/home.jpg') no-repeat center">
  <?php include('template/header-outer.php'); ?>  
</div>
<div id='NavbarMenu'>
<div class='navbarleft'>
<div class='nav section' id='nav'><div class='widget PageList' id='PageList1'>
<h2>Pages</h2>
<div class='widget-content'>
<ul>
<?php
 include("template/menuprincipal.php");
?>
</ul>
<div class='clear'></div>
<span class='widget-item-control'>
<span class='item-control blog-admin'>
<a class='quickedit' href='http://www.blogger.com/rearrange?blogID=6852192370751838918&widgetType=PageList&widgetId=PageList1&action=editWidget&sectionId=nav' onclick='return _WidgetManager._PopupConfig(document.getElementById("PageList1"));' target='configPageList1' title='Edit'>
<img alt='' height='18' src='http://img1.blogblog.com/img/icon18_wrench_allbkg.png' width='18'/>
</a>
</span>
</span>
<div class='clear'></div>
</div>
</div></div>
</div>
</div>
<div id='wrap'>
<div id='wrap-inner'>
<div id='outer-wrapper'><div id='wrap2'>
<div id='content-wrapper'>
<div id='crosscol-wrapper' style='text-align:center'>
<div class='crosscol section' id='crosscol'></div>
</div>
<div id='main-wrapper'>
<div class='main section' id='main'><div class='widget Blog' id='Blog1'>
<div class='blog-posts hfeed'>

  <div class="date-outer">

    <h2 class='date-header'><span>Wednesday, November 18, 2015</span></h2>

    <div class="date-posts">


      <div class='post-outer'>
                    <h2 style="padding-left:39%">LA INSTITUCIÓN </h2>
      <!-- Carrusel 1 -->
      <div id="slidebox">

      <div class="next"></div>
      <div class="previous"></div>
      <div class="thumbs">
      <a href="#" onClick="" class="1 thumbActive">1</a> 
      <a href="#" onClick="" class="2">2</a> 
         <a href="#" onClick="" class="3">3</a> 
            <a href="#" onClick="" class="4">4</a> 
               <a href="#" onClick="" class="5">5</a> 
      
      </div>
        <ul>
            <li><img src="img/imagen4.jpg" alt="img1" /></li>
            <li><img src="img/imagen7.jpg" alt="img2" /></li>
            <li><img src="img/imagen.jpg" alt="img1" /></li>
            <li><img src="img/imagen1.jpg" alt="img2" /></li>
            <li><img src="img/imagen3.jpg" alt="img1" /></li>
            
      
        </ul>
      </div>

      <!-- fin Carrusel 1 -->

          <h2 style="padding-left:30%">PROGRAMA DE PÁRVULO </h2>
      <!-- Carrusel 2 -->
      <div id="slidebox2">

      <div class="next2"></div>
      <div class="previous2"></div>
      <div class="thumbs">
      <a href="#" onClick="" class="1 thumbActive">1</a> 
      <a href="#" onClick="" class="2">2</a> 
      <a href="#" onClick="" class="3 ">3</a> 
      <a href="#" onClick="" class="4">4</a> 
       <a href="#" onClick="" class="5">5</a>
      </div>
        <ul>
            <li><img src="img/parv1.jpg" alt="img1" /></li>
            <li><img src="img/parv2.jpg" alt="img2" /></li>
            <li><img src="img/parv3.jpg" alt="img3" /></li>
            <li><img src="img/parv4.jpg" alt="img4" /></li>
            <li><img src="img/parv5.jpg" alt="img5" /></li>
        </ul>
      </div>

      <!-- fin Carrusel 2 -->
      <h2 style="padding-left:29%">PROGRAMA DE PRE-JARDÍN </h2>
      <!-- Carrusel 3 -->
      <div id="slidebox3">

      <div class="next3"></div>
      <div class="previous3"></div>
      <div class="thumbs">
      <a href="#" onClick="" class="1 thumbActive">1</a> 
      <a href="#" onClick="" class="2">2</a> 
      <a href="#" onClick="" class="3 ">3</a> 
      <a href="#" onClick="" class="4">4</a> 
       <a href="#" onClick="" class="5 ">5</a> 
      <a href="#" onClick="" class="6">6</a> 
      </div>
        <ul>
            <li><img src="img/prej1.jpg" alt="img1" /></li>
            <li><img src="img/prej2.jpg" alt="img2" /></li>
            <li><img src="img/prej3.jpg" alt="img3" /></li>
            <li><img src="img/prej4.jpg" alt="img4" /></li>
            <li><img src="img/prej5.jpg" alt="img5" /></li>
            <li><img src="img/prej6.jpg" alt="img6" /></li>
        </ul>
      </div>

      <!-- fin Carrusel 3 -->
    <h2 style="padding-left:32%">PROGRAMA DE JARDÍN </h2>
       <!-- Carrusel 4 -->
      <div id="slidebox4">

      <div class="next4"></div>
      <div class="previous4"></div>
      <div class="thumbs">
      <a href="#" onClick="" class="1 thumbActive">1</a> 
      <a href="#" onClick="" class="2">2</a> 
      <a href="#" onClick="" class="3 ">3</a> 
      <a href="#" onClick="" class="4">4</a> 
   
      </div>
        <ul>
            <li><img src="img/jar1.jpg" alt="img1" /></li>
            <li><img src="img/jar2.jpg" alt="img2" /></li>
            <li><img src="img/jar3.jpg" alt="img3" /></li>
            <li><img src="img/jar4.jpg" alt="img4" /></li>
         
        </ul>
      </div>

      <!-- fin Carrusel 4 -->
       <h2 style="padding-left:29%">PROGRAMA DE TRANSICIÓN </h2>
       <!-- Carrusel 5 -->
      <div id="slidebox5">

      <div class="next5"></div>
      <div class="previous5"></div>
      <div class="thumbs">
      <a href="#" onClick="" class="1 thumbActive">1</a> 
      <a href="#" onClick="" class="2">2</a> 
      <a href="#" onClick="" class="3 ">3</a> 
      <a href="#" onClick="" class="4">4</a> 
      <a href="#" onClick="" class="5">5</a>
   
      </div>
        <ul>
            <li><img src="img/tran1.jpg" alt="img1" /></li>
            <li><img src="img/tran2.jpg" alt="img2" /></li>
            <li><img src="img/tran3.jpg" alt="img3" /></li>
            <li><img src="img/tran4.jpg" alt="img4" /></li>
            <li><img src="img/tran5.jpg" alt="img5" /></li>
         
        </ul>
      </div>

      <!-- fin Carrusel 5 -->

      </div>


    </div>
  </div>
      
</div>
<div class='blog-pager' id='blog-pager'>
<a class='home-link' href='index.html'>Home</a>
</div>
<div class='clear'></div>
<div class='blog-feeds'>
<div class='feed-links'>
Subscribe to:
<a class='feed-link' href='http://kiddiezshop-btemplates.blogspot.com/feeds/posts/default' target='_blank' type='application/atom+xml'>Posts (Atom)</a>
</div>
</div>
<script type="text/javascript">window.___gcfg = {'lang': 'en'};</script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/coordenadas.js"></script>
<script type="text/javascript" src="js/deal_index.js"></script>
<script src="js/jcarousellite_1.0.1c5.js" type="text/javascript"></script>
<script type="text/javascript">

$(function() {
  $("#slidebox").jCarouselLite({
    vertical: false,
    hoverPause:true,
    btnPrev: ".previous",
    btnNext: ".next",
    visible: 1,
    start: 0,
    scroll: 1,
    circular: true,
    auto:1000,
    speed:500,        
    btnGo:
        [".1", ".2",
        ".3", ".4",".5",".6",".7"],
    
    afterEnd: function(a, to, btnGo) {
        if(btnGo.length <= to){
          to = 0;
        }
        $(".thumbActive").removeClass("thumbActive");
        $(btnGo[to]).addClass("thumbActive");
        }
  });
  /*carrusel2*/
   $("#slidebox2").jCarouselLite({
    vertical: false,
    hoverPause:true,
    btnPrev: ".previous2",
    btnNext: ".next2",
    visible: 1,
    start: 0,
    scroll: 1,
    circular: true,
    auto:1000,
    speed:500,        
    btnGo:
        [".1", ".2",
        ".3", ".4",".5"],
    
    afterEnd: function(a, to, btnGo) {
        if(btnGo.length <= to){
          to = 0;
        }
        $(".thumbActive").removeClass("thumbActive");
        $(btnGo[to]).addClass("thumbActive");
        }
  });
  /*fin carrusel 2*/
    /*carrusel3*/
   $("#slidebox3").jCarouselLite({
    vertical: false,
    hoverPause:true,
    btnPrev: ".previous3",
    btnNext: ".next3",
    visible: 1,
    start: 0,
    scroll: 1,
    circular: true,
    auto:1000,
    speed:500,        
    btnGo:
        [".1", ".2",
        ".3", ".4",".5",".6",".7"],
    
    afterEnd: function(a, to, btnGo) {
        if(btnGo.length <= to){
          to = 0;
        }
        $(".thumbActive").removeClass("thumbActive");
        $(btnGo[to]).addClass("thumbActive");
        }
  });
  /*fin carrusel 3*/
      /*carrusel4*/
   $("#slidebox4").jCarouselLite({
    vertical: false,
    hoverPause:true,
    btnPrev: ".previous4",
    btnNext: ".next4",
    visible: 1,
    start: 0,
    scroll: 1,
    circular: true,
    auto:1000,
    speed:500,        
    btnGo:
        [".1", ".2",
        ".3", ".4",".5",".6",".7"],
    
    afterEnd: function(a, to, btnGo) {
        if(btnGo.length <= to){
          to = 0;
        }
        $(".thumbActive").removeClass("thumbActive");
        $(btnGo[to]).addClass("thumbActive");
        }
  });
  /*fin carrusel 4*/
     /*carrusel5*/
   $("#slidebox5").jCarouselLite({
    vertical: false,
    hoverPause:true,
    btnPrev: ".previous5",
    btnNext: ".next5",
    visible: 1,
    start: 0,
    scroll: 1,
    circular: true,
    auto:1000,
    speed:500,        
    btnGo:
        [".1", ".2",
        ".3", ".4",".5",".6",".7"],
    
    afterEnd: function(a, to, btnGo) {
        if(btnGo.length <= to){
          to = 0;
        }
        $(".thumbActive").removeClass("thumbActive");
        $(btnGo[to]).addClass("thumbActive");
        }
  });
  /*fin carrusel 5*/
});
</script>
</div></div>
</div>
<!-- Sidebar -->
<div id='sidebar-wrapper-right'>
<div class='sidebar2 section' id='sidebar2'><div class='widget PopularPosts' id='PopularPosts1'>
<h2>Panel de Control</h2>
 <?php
    $bienvenido='';
    if($_SESSION['tipo']=='2')
    {
      $bienvenido =' Padre/Madre de familia ';
    }
    else
    {
        if($_SESSION['tipo']=='3')
        {
               $bienvenido =' Profesor(a) '; 
        }
    
    }
 ?>


    <h3>Bienvenido(a)  <?php echo $bienvenido.$_SESSION['nombre'].' '.$_SESSION['apellido'] ?></h3>
        <a href="destroy.php">Salir</a>

</div></div>
</div>
<!-- spacer for skins that want sidebar and main to be the same height-->
<!-- PQR!-->
<div id='sidebar-wrapper-right'>
    <div class='sidebar2 section' id='sidebar3'>
        <div class='widget PopularPosts' id='PopularPosts2'>
            <h2>Menú Principal</h2>
            <div class='widget-content popular-posts'>
                <ul>
                    <?php
                      if($_SESSION['tipo']==1)
                      {


                    ?>
                    <li><a href="ingreso_usuarios.php">Ingreso de usuarios</a></li>
                    <li><a href="multi-upload/index.php">Subir Archivos  Administrativos</a></li>
                    <?php
                      }
                    ?>
                    <?php
                      if($_SESSION['tipo']==1 || ($_SESSION['tipo']!=1 && $_SESSION['perfil']==1) )
                      {
                    ?>
                    <li><a href="p_jardin.php?prog=1">Jardín</a></li>
                    <?php
                      }
                    ?>
                      <?php
                      if($_SESSION['tipo']==1 || ($_SESSION['tipo']!=1 && $_SESSION['perfil']==2) )
                      {
                    ?>
                    <li><a href="p_prejardin.php?prog=2">Pre-Jardín</a></li>
                     <?php
                      }
                    ?>
                       <?php
                      if($_SESSION['tipo']==1 || ($_SESSION['tipo']!=1 && $_SESSION['perfil']==3) )
                      {
                    ?>
                    <li><a href="p_parvulo.php?prog=3">Párvulo</a></li>
                    <?php
                      }
                    ?>
                        <?php
                      if($_SESSION['tipo']==1 || ($_SESSION['tipo']!=1 && $_SESSION['perfil']==4) )
                      {
                    ?>
                    <li><a href="p_transicion.php?prog=4">Transición</a></li>
                     <?php
                      }
                    ?>
                </ul>


            </div>
        </div>
    </div>
</div>
<!-- PQR!-->
<div class='clear'>&#160;</div>
</div>
<!-- end content-wrapper -->
</div></div>
<!-- end outer-wrapper -->
</div>
</div>
<div id='credit-wrapper'>
<div id='credit'>
<a href='index.html'>Corporacón Politécnico de Magangué Nit: N° 900.170.599-2 Resolución: N° 4052(Dic 15-210) </a> 
</div></div>

<script type="text/javascript">
if (window.jstiming) window.jstiming.load.tick('widgetJsBefore');
</script><script type="text/javascript" src="https://www.blogger.com/static/v1/widgets/2759014865-widgets.js"></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<script type='text/javascript'>
if (typeof(BLOG_attachCsiOnload) != 'undefined' && BLOG_attachCsiOnload != null) { window['blogger_templates_experiment_id'] = "templatesV1";window['blogger_blog_id'] = '6852192370751838918';BLOG_attachCsiOnload(''); }_WidgetManager._Init('//www.blogger.com/rearrange?blogID\x3d6852192370751838918','//kiddiezshop-btemplates.blogspot.com.co/','6852192370751838918');
_WidgetManager._SetDataContext([{'name': 'blog', 'data': {'blogId': '6852192370751838918', 'bloggerUrl': 'https://www.blogger.com', 'title': 'Kiddiez Shop', 'pageType': 'index', 'url': 'http://kiddiezshop-btemplates.blogspot.com.co/', 'canonicalUrl': 'http://kiddiezshop-btemplates.blogspot.com/', 'homepageUrl': 'http://kiddiezshop-btemplates.blogspot.com.co/', 'canonicalHomepageUrl': 'http://kiddiezshop-btemplates.blogspot.com/', 'blogspotFaviconUrl': 'favicon.ico', 'enabledCommentProfileImages': true, 'adultContent': false, 'disableAdSenseWidget': false, 'analyticsAccountNumber': '', 'useUniversalAnalytics': false, 'pageName': '', 'pageTitle': 'Kiddiez Shop', 'encoding': 'UTF-8', 'locale': 'en', 'localeUnderscoreDelimited': 'en', 'isPrivate': false, 'isMobile': false, 'isMobileRequest': false, 'mobileClass': '', 'isPrivateBlog': false, 'languageDirection': 'ltr', 'feedLinks': '\74link rel\75\42alternate\42 type\75\42application/atom+xml\42 title\75\42Kiddiez Shop - Atom\42 href\75\42http://kiddiezshop-btemplates.blogspot.com/feeds/posts/default\42 /\76\n\74link rel\75\42alternate\42 type\75\42application/rss+xml\42 title\75\42Kiddiez Shop - RSS\42 href\75\42http://kiddiezshop-btemplates.blogspot.com/feeds/posts/default?alt\75rss\42 /\76\n\74link rel\75\42service.post\42 type\75\42application/atom+xml\42 title\75\42Kiddiez Shop - Atom\42 href\75\42https://www.blogger.com/feeds/6852192370751838918/posts/default\42 /\76\n', 'meTag': '\74link rel\75\42me\42 href\75\42https://www.blogger.com/profile/12349406774361643377\42 /\76\n', 'openIdOpTag': '\74link rel\75\42openid.server\42 href\75\42https://www.blogger.com/openid-server.g\42 /\76\n\74link rel\75\42openid.delegate\42 href\75\42http://kiddiezshop-btemplates.blogspot.com/\42 /\76\n', 'latencyHeadScript': '\74script type\75\42text/javascript\42\76(function() { (function(){function c(a){this.t\75{};this.tick\75function(a,c,b){var d\75void 0!\75b?b:(new Date).getTime();this.t[a]\75[d,c];if(void 0\75\75b)try{window.console.timeStamp(\42CSI/\42+a)}catch(e){}};this.tick(\42start\42,null,a)}var a;window.performance\46\46(a\75window.performance.timing);var h\75a?new c(a.responseStart):new c;window.jstiming\75{Timer:c,load:h};if(a){var b\75a.navigationStart,e\75a.responseStart;0\74b\46\46e\76\75b\46\46(window.jstiming.srt\75e-b)}if(a){var d\75window.jstiming.load;0\74b\46\46e\76\75b\46\46(d.tick(\42_wtsrt\42,void 0,b),d.tick(\42wtsrt_\42,\n\42_wtsrt\42,e),d.tick(\42tbsd_\42,\42wtsrt_\42))}try{a\75null,window.chrome\46\46window.chrome.csi\46\46(a\75Math.floor(window.chrome.csi().pageT),d\46\0460\74b\46\46(d.tick(\42_tbnd\42,void 0,window.chrome.csi().startE),d.tick(\42tbnd_\42,\42_tbnd\42,b))),null\75\75a\46\46window.gtbExternal\46\46(a\75window.gtbExternal.pageT()),null\75\75a\46\46window.external\46\46(a\75window.external.pageT,d\46\0460\74b\46\46(d.tick(\42_tbnd\42,void 0,window.external.startE),d.tick(\42tbnd_\42,\42_tbnd\42,b))),a\46\46(window.jstiming.pt\75a)}catch(k){}})();window.tickAboveFold\75function(c){var a\0750;if(c.offsetParent){do a+\75c.offsetTop;while(c\75c.offsetParent)}c\75a;750\76\75c\46\46window.jstiming.load.tick(\42aft\42)};var f\75!1;function g(){f||(f\75!0,window.jstiming.load.tick(\42firstScrollTime\42))}window.addEventListener?window.addEventListener(\42scroll\42,g,!1):window.attachEvent(\42onscroll\42,g);\n })();\74/script\076', 'mobileHeadScript': '', 'view': '', 'dynamicViewsCommentsSrc': '//www.blogblog.com/dynamicviews/4224c15c4e7c9321/js/comments.js', 'dynamicViewsScriptSrc': '//www.blogblog.com/dynamicviews/f01787774e22c89a', 'plusOneApiSrc': 'https://apis.google.com/js/plusone.js', 'sf': 'n'}}, {'name': 'messages', 'data': {'archive': 'Archive', 'deleteBacklink': 'Delete Backlink', 'deleteComment': 'Delete Comment', 'keepReading': 'Keep reading', 'labels': 'Labels', 'loading': 'Loading...', 'myBlogList': 'My Blog List', 'myFavoriteSites': 'My favorite sites', 'newer': 'Newer', 'newest': 'Newest', 'noTitle': 'No title', 'older': 'Older', 'oldest': 'Oldest', 'popularPosts': 'Popular Posts', 'popularPostsFromThisBlog': 'Popular posts from this blog', 'postAComment': 'Post a Comment', 'reportAbuse': 'Report Abuse', 'search': 'Search', 'share': 'Share', 'showAll': 'Show all', 'subscribe': 'Subscribe', 'subscribeToThisBlog': 'Subscribe to this blog', 'onlyTeamMembersCanComment': 'Note: Only a member of this blog may post a comment.'}}, {'name': 'skin', 'data': {'vars': {}, 'override': ''}}, {'name': 'view', 'data': {'classic': {'name': 'classic', 'url': '?view\75classic'}, 'flipcard': {'name': 'flipcard', 'url': '?view\75flipcard'}, 'magazine': {'name': 'magazine', 'url': '?view\75magazine'}, 'mosaic': {'name': 'mosaic', 'url': '?view\75mosaic'}, 'sidebar': {'name': 'sidebar', 'url': '?view\75sidebar'}, 'snapshot': {'name': 'snapshot', 'url': '?view\75snapshot'}, 'timeslide': {'name': 'timeslide', 'url': '?view\75timeslide'}}}]);
_WidgetManager._RegisterWidget('_HeaderView', new _WidgetInfo('Header1', 'header', null, document.getElementById('Header1'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_PageListView', new _WidgetInfo('PageList1', 'nav', null, document.getElementById('PageList1'), {'title': 'Pages', 'links': [{'href': 'http://btemplates.com/tag/kids/', 'title': 'Kids Blogger templates', 'isCurrentPage': false}, {'href': 'http://kiddiezshop-btemplates.blogspot.com.co/', 'title': 'Home', 'isCurrentPage': true}, {'href': 'p/about.html', 'title': 'About', 'isCurrentPage': false, 'id': '6762982778811014991'}, {'href': 'p/contact.html', 'title': 'Contact', 'isCurrentPage': false, 'id': '7516724079117576998'}], 'mobile': false}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_BlogView', new _WidgetInfo('Blog1', 'main', null, document.getElementById('Blog1'), {'cmtInteractionsEnabled': false, 'lightboxEnabled': true, 'lightboxModuleUrl': 'https://www.blogger.com/static/v1/jsbin/68035727-lbx.js', 'lightboxCssUrl': 'https://www.blogger.com/static/v1/v-css/1185134592-lightbox_bundle.css'}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_PopularPostsView', new _WidgetInfo('PopularPosts1', 'sidebar2', null, document.getElementById('PopularPosts1'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML3', 'sidebar2', null, document.getElementById('HTML3'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML2', 'sidebar2', null, document.getElementById('HTML2'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML1', 'sidebar2', null, document.getElementById('HTML1'), {}, 'displayModeFull'));
</script>
</body>
</html>
