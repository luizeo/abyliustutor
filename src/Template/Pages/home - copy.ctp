<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
// * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
//use Cake\Cache\Cache;
//use Cake\Core\Plugin;
//use Cake\Datasource\ConnectionManager;
//use Cake\Error\Debugger;
//use Cake\Network\Exception\NotFoundException;

//$this->layout = false;

// if (!Configure::read('debug')) :
//     throw new NotFoundException(
//         'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
//     );
// endif;

// $cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>SISTEMA ABYLIUS</title> <!-- Smarty - Multipurpose + Admin -->
        <meta name="description" content="" />
        <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

        <!-- mobile settings -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

        <!-- WEB FONTS : use %7C instead of | (pipe) -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

        <!-- CORE CSS -->
        
        <link href="<?= $this->Html->url('/assets/plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />

        <!-- SWIPER SLIDER -->
        <link href="<?= $this->Html->url('/assets/plugins/slider.swiper/dist/css/swiper.min.css')?>" rel="stylesheet" type="text/css" />

        <!-- THEME CSS -->
        <link href="<?= $this->Html->url('/assets/css/essentials.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?= $this->Html->url('/assets/css/layout.css')?>" rel="stylesheet" type="text/css" />

        <!-- PAGE LEVEL SCRIPTS -->
        <link href="<?= $this->Html->url('assets/css/header-1.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?= $this->Html->url('/assets/css/color_scheme/green.css')?>" rel="stylesheet" type="text/css" id="color_scheme" />

        <script>
         /* (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-101912660-1', 'auto');
          ga('send', 'pageview');*/
        </script>

</head>
 <!-- SLIDE TOP========================================================================== -->
 <!-- SLIDE TOP========================================================================== -->
 <!-- SLIDE TOP========================================================================== -->
 <!-- SLIDE TOP========================================================================== -->
 <!-- SLIDE TOP========================================================================== -->

<body class="smoothscroll enable-animation">

        <!-- SLIDE TOP -->
        <div id="slidetop">

            <div class="container">
                
                <div class="row">

                    <div class="col-md-4">
                        <h6><i class="fa fa-map"></i> O QUE É ABYLIUS?</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. </p>
                    </div>

                    <!-- <div class="col-md-4">
                        <h6><i class="fa fa-check"></i> RECENTLY VISITED</h6>
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> This is a very long text, very very very very very very very very very very very very </a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Dolor sit amet,consectetur adipiscing elit amet</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet,consectetur adipiscing elit</a></li>
                        </ul>
                    </div> -->

                    <div class="col-md-4">
                        <h6><i class="icon-envelope"></i> CONTATO</h6>
                        <ul class="list-unstyled">
                            <li><b>Endereço:</b> PO Box 21132, Here Weare St, <br /> Melbourne, Vivas 2355 Australia</li>
                            <li><b>Telefone:</b> 1-800-565-2390</li>
                            <li><b>E-mail:</b> <a href="mailto:renatofg@unb.br">renatofg@unb.br</a></li>
                        </ul>
                    </div>

                </div>

            </div>

            <a class="slidetop-toggle" href="#"><!-- toggle button --></a>

        </div>
        <!-- /SLIDE TOP -->


        <!-- wrapper -->
        <div id="wrapper">

            <!-- Top Bar -->
            <div id="topBar">

                <div class="container">

                    <!-- right -->
                    <ul class="top-links list-inline pull-right">
                        <!-- <li class="text-welcome hidden-xs">Welcome to Smarty, <strong>John Doe</strong></li>
                        <li>
                            <a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#">MY ACCOUNT</a>
                            <ul class="dropdown-menu pull-right">
                                <li><a tabindex="-1" href="#"><i class="fa fa-history"></i> ORDER HISTORY</a></li>
                                <li class="divider"></li>
                                <li><a tabindex="-1" href="#"><i class="fa fa-bookmark"></i> WISHLIST</a></li>
                                <li><a tabindex="-1" href="#"><i class="fa fa-cog"></i> SETTINGS</a></li>
                                <li class="divider"></li>
                                <li><a tabindex="-1" href="#"><i class="glyphicon glyphicon-off"></i> LOGOUT</a></li>
                            </ul>
                        
                        </li> -->
                        <li class="hidden-xs"><a href="page-login-1.html">ADMIN</a></li>
                        <!-- <li class="hidden-xs"><a href="page-login-1.html">LOGIN</a></li> -->
                        <!-- <li class="hidden-xs"><a href="page-register-1.html">REGISTER</a></li> -->
                    </ul>

                    <!-- left -->
                    <ul class="top-links list-inline">
                        <!-- <li class="hidden-xs"><a href="page-faq-1.html">FAQ</a></li> -->
                        <li>
                            <a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><img class="flag-lang" src="assets/images/_smarty/flags/br.png" width="16" height="11" alt="lang" /> PORTUGUESE</a>
                            <ul class="dropdown-langs dropdown-menu pull-right">
                                <li><a tabindex="-1" href="#"><img class="flag-lang" src="assets/images/_smarty/flags/br.png" width="16" height="11" alt="lang" /> PORTUGUESE</a></li>
                                <li class="divider"></li>
                                <li><a tabindex="-1" href="#"><img class="flag-lang" src="assets/images/_smarty/flags/us.png" width="16" height="11" alt="lang" /> ENGLISH</a></li>
                                <!-- <li><a tabindex="-1" href="#"><img class="flag-lang" src="assets/images/_smarty/flags/ru.png" width="16" height="11" alt="lang" /> RUSSIAN</a></li>
                                <li><a tabindex="-1" href="#"><img class="flag-lang" src="assets/images/_smarty/flags/it.png" width="16" height="11" alt="lang" /> ITALIAN</a></li> -->
                            </ul>
                        
                        </li>
                    </ul>
                </div>


                <div class="border-top block clearfix">
                    <div class="container">

                        <!-- Logo -->
                        <a class="logo has-banner pull-left text-center-md" href="index.html">
                            <img src="assets/images/_smarty/logo_dark.png" alt="" />
                        </a>

                        <!-- <a class="banner pull-right hidden-sm hidden-xs" href="#">
                            <img src="demo_files/images/720x90.png" alt="banner" />
                        </a> -->
                    </div>
                </div>

            </div>
            <!-- /Top Bar -->


            <!-- 
                AVAILABLE HEADER CLASSES

                Default nav height: 96px
                .header-md      = 70px nav height
                .header-sm      = 60px nav height

                .noborder       = remove bottom border (only with transparent use)
                .transparent    = transparent header
                .translucent    = translucent header
                .sticky         = sticky header
                .static         = static header
                .dark           = dark header
                .bottom         = header on bottom
                
                shadow-before-1 = shadow 1 header top
                shadow-after-1  = shadow 1 header bottom
                shadow-before-2 = shadow 2 header top
                shadow-after-2  = shadow 2 header bottom
                shadow-before-3 = shadow 3 header top
                shadow-after-3  = shadow 3 header bottom

                .clearfix       = required for mobile menu, do not remove!

                Example Usage:  class="clearfix sticky header-sm transparent noborder"
            -->
            <div id="header" class="sticky header-sm clearfix">

                <!-- SEARCH HEADER -->
                <div class="search-box over-header">
                    <a id="closeSearch" href="#" class="glyphicon glyphicon-remove"></a>

                    <form action="page-search-result-1.html" method="get">
                        <input type="text" class="form-control" placeholder="BUSCA" />
                    </form>
                </div> 
                <!-- /SEARCH HEADER -->

                <!-- TOP NAV -->
                <header id="topNav">
                    <div class="container">

                        <!-- Mobile Menu Button -->
                        <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- BUTTONS -->
                        <ul class="pull-right nav nav-pills nav-second-main">

                            <!-- SEARCH -->
                            <li class="search">
                                <a href="javascript:;">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                            <!-- /SEARCH -->


                            <!-- QUICK SHOP CART -->
                            <!-- <li class="quick-cart">
                                <a href="#">
                                    <span class="badge badge-aqua btn-xs badge-corner">2</span>
                                    <i class="fa fa-shopping-cart"></i> 
                                </a>
                                <div class="quick-cart-box">
                                    <h4>Shop Cart</h4>

                                    <div class="quick-cart-wrapper">

                                        <a href="#"> cart item
                                            <img src="demo_files/images/people/300x300/4-min.jpg" width="45" height="45" alt="" />
                                            <h6><span>2x</span> RED BAG WITH HUGE POCKETS</h6>
                                            <small>$37.21</small>
                                        </a> /cart item

                                        <a href="#"> cart item
                                            <img src="demo_files/images/people/300x300/5-min.jpg" width="45" height="45" alt="" />
                                            <h6><span>2x</span> THIS IS A VERY LONG TEXT AND WILL BE TRUNCATED</h6>
                                            <small>$17.18</small>
                                        </a>/cart item

                                         cart no items example 
                                        
                                        <a class="text-center" href="#">
                                            <h6>0 ITEMS ON YOUR CART</h6>
                                        </a>
                                        

                                    </div>

                                     quick cart footer 
                                    <div class="quick-cart-footer clearfix">
                                        <a href="shop-cart.html" class="btn btn-primary btn-xs pull-right">VIEW CART</a>
                                        <span class="pull-left"><strong>TOTAL:</strong> $54.39</span>
                                    </div>
                                     /quick cart footer

                                </div>
                            </li> -->
                            <!-- /QUICK SHOP CART -->

                        </ul>
                        <!-- /BUTTONS -->

                        <!-- 
                            Top Nav 
                            
                            AVAILABLE CLASSES:
                            submenu-dark = dark sub menu
                        -->
                        <div class="navbar-collapse pull-left nav-main-collapse collapse nopadding-left nopadding-right">
                            <nav class="nav-main">

                                <!--
                                    NOTE
                                    
                                    For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
                                    Direct Link Example: 

                                    <li>
                                        <a href="#">HOME</a>
                                    </li>
                                -->
                                <ul id="topMain" class="nav nav-pills nav-main">
                                    <li ><!--class="active" dropdown HOME -->
                                        <a  href="#"><!-- class="dropdown-toggle" HOME -->
                                            INÍCIO
                                        </a>                        
                                    </li>
                                    <li ><!-- class="dropdown" PAGES -->
                                        <a  href="page-about-us-5.html"> <!-- class="dropdown-toggle" PAGES -->
                                            ABYLIUS
                                        </a>
                                    </li>
                                    <li ><!-- class="dropdown" FEATURES -->
                                        <a  href="tutorial/"> <!-- class="dropdown-toggle" -->
                                            TUTORIAL
                                        </a>
                                        <!-- <ul class="dropdown-menu"> -->
                                            <!-- <li> --><!-- class="dropdown" -->
                                                <!-- <a  href="#"> --><!-- class="dropdown-toggle" -->
                                                     <!-- LIGAÇÃO DE JANELAS --> <!-- <i class="et-browser"></i>-->
                                                <!-- </a> -->
                                                <!--<ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-toggle" href="#">REVOLUTION SLIDER 4.x</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="feature-slider-revolution-fullscreen.html">FULLSCREEN</a></li>
                                                            <li><a href="feature-slider-revolution-fullwidth.html">FULL WIDTH</a></li>
                                                            <li><a href="feature-slider-revolution-fixedwidth.html">FIXED WIDTH</a></li>
                                                            <li><a href="feature-slider-revolution-kenburns.html">KENBURNS EFFECT</a></li>
                                                            <li><a href="feature-slider-revolution-videobg.html">HTML5 VIDEO</a></li>
                                                            <li><a href="feature-slider-revolution-captions.html">CAPTIONS</a></li>
                                                            <li><a href="feature-slider-revolution-smthumb.html">THUMB SMALL</a></li>
                                                            <li><a href="feature-slider-revolution-lgthumb.html">THUMB LARGE</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="feature-slider-revolution-prev1.html">NAV PREVIEW 1</a></li>
                                                            <li><a href="feature-slider-revolution-prev2.html">NAV PREVIEW 2</a></li>
                                                            <li><a href="feature-slider-revolution-prev3.html">NAV PREVIEW 3</a></li>
                                                            <li><a href="feature-slider-revolution-prev4.html">NAV PREVIEW 4</a></li>
                                                            <li><a href="feature-slider-revolution-prev0.html">NAV THEME DEFAULT</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-toggle" href="#">LAYER SLIDER</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="feature-slider-layer-fullwidth.html">FULLWIDTH</a></li>
                                                            <li><a href="feature-slider-layer-fixed.html">FIXED WIDTH</a></li>
                                                            <li><a href="feature-slider-layer-captions.html">CAPTIONS</a></li>
                                                            <li><a href="feature-slider-layer-carousel.html">CAROUSEL</a></li>
                                                            <li><a href="feature-slider-layer-2d3d.html">2D &amp; 3D TRANSITIONS</a></li>
                                                            <li><a href="feature-slider-layer-thumb.html">THUMB NAV</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="start.html#layerslider6"><span class="label label-success pull-right">new</span> LAYER SLIDER 6</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-toggle" href="#">FLEX SLIDER</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="feature-slider-flexslider-fullwidth.html">FULL WIDTH</a></li>
                                                            <li><a href="feature-slider-flexslider-content.html">CONTENT</a></li>
                                                            <li><a href="feature-slider-flexslider-thumbs.html">WITH THUMBS</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-toggle" href="#">OWL SLIDER</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="feature-slider-owl-fullwidth.html">FULL WIDTH</a></li>
                                                            <li><a href="feature-slider-owl-fixed.html">FIXED WIDTH</a></li>
                                                            <li><a href="feature-slider-owl-fixed+progress.html">FIXED + PROGRESS</a></li>
                                                            <li><a href="feature-slider-owl-carousel.html">BASIC CAROUSEL</a></li>
                                                            <li><a href="feature-slider-owl-fade.html">EFFECT - FADE</a></li>
                                                            <li><a href="feature-slider-owl-backslide.html">EFFECT - BACKSLIDE</a></li>
                                                            <li><a href="feature-slider-owl-godown.html">EFFECT - GODOWN</a></li>
                                                            <li><a href="feature-slider-owl-fadeup.html">EFFECT - FADE UP</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-toggle" href="#">SWIPE SLIDER</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="feature-slider-swipe-full.html">FULLSCREEN</a></li>
                                                            <li><a href="feature-slider-swipe-fixed-height.html">FIXED HEIGHT</a></li>
                                                            <li><a href="feature-slider-swipe-autoplay.html">AUTOPLAY</a></li>
                                                            <li><a href="feature-slider-swipe-fade.html">FADE TRANSITION</a></li>
                                                            <li><a href="feature-slider-swipe-slide.html">SLIDE TRANSITION</a></li>
                                                            <li><a href="feature-slider-swipe-coverflow.html">COVERFLOW TRANSITION</a></li>
                                                            <li><a href="feature-slider-swipe-html5-video.html">HTML5 VIDEO</a></li>
                                                            <li><a href="feature-slider-swipe-3columns.html">3 COLUMNS</a></li>
                                                            <li><a href="feature-slider-swipe-4columns.html">4 COLUMNS</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="feature-slider-nivo.html">NIVO SLIDER</a></li>
                                                    <li><a href="feature-slider-camera.html">CAMERA SLIDER</a></li>
                                                    <li><a href="feature-slider-elastic.html">ELASTIC SLIDER</a></li>
                                                    <li><a href="feature-slider-backstretch.html">BACKSTRETCH SLIDER</a></li>
                                                </ul>-->
                                            <!-- </li> -->
                                            <!-- <li > --> <!-- class="dropdown" -->
                                                <!-- <a href="#"> --> <!-- class="dropdown-toggle" -->
                                                    <!--  JUNTAR IMAGENS --><!-- <i class="et-hotairballoon"></i> -->
                                                <!-- </a> -->
                                                <!--<ul class="dropdown-menu">
                                                    <li><a href="feature-header-light.html">HEADER - LIGHT</a></li>
                                                    <li><a href="feature-header-dark.html">HEADER - DARK</a></li>
                                                    <li>
                                                        <a class="dropdown-toggle" href="#">HEADER - HEIGHT</a>
                                                        <ul class="dropdown-menu">
                                                        <li><a href="feature-header-large.html">LARGE (96px)</a></li>
                                                        <li><a href="feature-header-medium.html">MEDIUM (70px)</a></li>
                                                        <li><a href="feature-header-small.html">SMALL (60px)</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-toggle" href="#">HEADER - SHADOW</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="feature-header-shadow-after-1.html">SHADOW 1 - AFTER</a></li>
                                                            <li><a href="feature-header-shadow-before-1.html">SHADOW 1 - BEFORE</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="feature-header-shadow-after-2.html">SHADOW 2 - AFTER</a></li>
                                                            <li><a href="feature-header-shadow-before-2.html">SHADOW 2 - BEFORE</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="feature-header-shadow-after-3.html">SHADOW 3 - AFTER</a></li>
                                                            <li><a href="feature-header-shadow-before-3.html">SHADOW 3 - BEFORE</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="feature-header-shadow-dark-1.html">SHADOW - DARK PAGE EXAMPLE</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="feature-header-transparent.html">HEADER - TRANSPARENT</a></li>
                                                    <li><a href="feature-header-transparent-line.html">HEADER - TRANSP+LINE</a></li>
                                                    <li><a href="feature-header-translucent.html">HEADER - TRANSLUCENT</a></li>
                                                    <li>
                                                        <a class="dropdown-toggle" href="#">HEADER - BOTTOM</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="feature-header-bottom-light.html">BOTTOM LIGHT</a></li>
                                                            <li><a href="feature-header-bottom-dark.html">BOTTOM DARK</a></li>
                                                            <li><a href="feature-header-bottom-transp.html">BOTTOM TRANSPARENT</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-toggle" href="#">HEADER - LEFT SIDE</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="feature-header-side-left-1.html">FIXED</a></li>
                                                            <li><a href="feature-header-side-left-2.html">OPEN ON CLICK</a></li>
                                                            <li><a href="feature-header-side-left-3.html">DARK</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-toggle" href="#">HEADER - RIGHT SIDE</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="feature-header-side-right-1.html">FIXED</a></li>
                                                            <li><a href="feature-header-side-right-2.html">OPEN ON CLICK</a></li>
                                                            <li><a href="feature-header-side-right-3.html">DARK</a></li>
                                                        </ul>
                                                    </li>                                                   <li>
                                                        <a class="dropdown-toggle" href="#">HEADER - STATIC</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="feature-header-static-top-light.html">STATIC TOP - LIGHT</a></li>
                                                            <li><a href="feature-header-static-top-dark.html">STATIC TOP - DARK</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="feature-header-static-bottom-light.html">STATIC BOTTOM - LIGHT</a></li>
                                                            <li><a href="feature-header-static-bottom-dark.html">STATIC BOTTOM - DARK</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="feature-header-nosticky.html">HEADER - NO STICKY</a></li>
                                                </ul>-->
                                            <!-- </li> -->
                                            <!-- <li class="divider"></li> -->
                                            <!-- <li class="dropdown" > --> <!-- class="dropdown" -->
                                                <!-- <a class="dropdown-toggle" href="#"> --><!-- class="dropdown-toggle" -->
                                                     <!-- ESTATÍSTICA  --><!-- <i class="et-anchor"></i> -->
                                                <!-- </a> -->
                                                <!-- <ul class="dropdown-menu">
                                                    <li><a href="feature-footer-1.html#footer">GRÁFICO DE DISPERSÃO</a></li>
                                                    <li><a href="feature-footer-2.html#footer">REGRESSÃO</a></li>
                                                    <li><a href="feature-footer-3.html#footer">ESTIMATIVA</a></li>
                                                    <li><a href="feature-footer-4.html#footer">COMPUTAR ESTATÍSTICAS</a></li>
                                                    <li><a href="feature-footer-5.html#footer">CONSULTAR ESTATÍSTICAS</a></li>
                                                    <li><a href="feature-footer-6.html#footer">CARREGAR IMAGEM</a></li>
                                                    <li><a href="feature-footer-7.html#footer">ESTATÍSTICAS DE CLASSES</a></li>
                                                    <li><a href="feature-footer-8.html#footer">ESTATÍSTICAS DE PIXELS</a></li>
                                                    <li><a href="feature-footer-0.html#footer">ESTATÍSTICA INTERANUAL</a></li>
                                                    <li><a href="feature-footer-0.html#footer">ESTATÍSTICA INTRAANUAL</a></li>
                                                </ul>
                                            </li> -->
                                            <!-- <li class="dropdown">
                                                <a class="dropdown-toggle" href="#"> -->
                                                    <!-- <i class="et-circle-compass"></i> --> <!-- MÁSCARAS
                                                </a> -->
                                                <!-- <ul class="dropdown-menu">
                                                    <li><a href="feature-menu-0.html">GERAR</a></li>
                                                    <li><a href="feature-menu-1.html">ANÁLISE</a></li> -->
                                                    <!--<li><a href="feature-menu-2.html">MENU - STYLE 2</a></li>
                                                    <li><a href="feature-menu-3.html">MENU - STYLE 3</a></li>
                                                    <li><a href="feature-menu-4.html">MENU - STYLE 4</a></li>
                                                    <li><a href="feature-menu-5.html">MENU - STYLE 5</a></li>
                                                    <li><a href="feature-menu-6.html">MENU - STYLE 6</a></li>
                                                    <li><a href="feature-menu-7.html">MENU - STYLE 7</a></li>
                                                    <li><a href="feature-menu-8.html">MENU - STYLE 8</a></li>
                                                    <li><a href="feature-menu-9.html">MENU - STYLE 9</a></li>
                                                    <li><a href="feature-menu-10.html">MENU - STYLE 10</a></li>
                                                    <li><a href="feature-menu-11.html">MENU - STYLE 11 (BULLET NAV)</a></li>
                                                    <li><a href="feature-menu-12.html">MENU - STYLE 12</a></li>-->
                                                <!-- </ul>
                                            </li> -->
                                            <!-- <li > --><!-- class="dropdown" -->
                                                <!-- <a  href="#"> --> <!-- class="dropdown-toggle" -->
                                                    <!-- <i class="et-genius"></i> --> <!-- CALCULADORA DE IMAGENS
                                                </a> -->
                                                <!-- <ul class="dropdown-menu">
                                                    <li><a href="feature-menu-dd-light.html">DROPDOWN - LIGHT</a></li>
                                                    <li><a href="feature-menu-dd-dark.html">DROPDOWN - DARK</a></li>
                                                    <li><a href="feature-menu-dd-color.html">DROPDOWN - COLOR</a></li>
                                                    <li><a href="feature-menu-dd-effects.html">DROPDOWN - EFFECTS</a></li>
                                                </ul> -->
                                            <!-- </li>
                                            <li class="divider"></li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" href="#"> -->
                                                    <!-- <i class="et-beaker"></i> --> <!-- CONVERSÃO DE DADOS
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="feature-title-left.html">ALIGN LEFT</a></li>
                                                    <li><a href="feature-title-right.html">ALIGN RIGHT</a></li>
                                                    <li><a href="feature-title-center.html">ALIGN CENTER</a></li>
                                                    <li><a href="feature-title-light.html">LIGHT</a></li>
                                                    <li><a href="feature-title-dark.html">DARK</a></li>
                                                    <li><a href="feature-title-tabs.html">WITH TABS</a></li>
                                                    <li><a href="feature-title-breadcrumbs.html">BREADCRUMBS ONLY</a></li>
                                                    <li>
                                                        <a class="dropdown-toggle" href="#">PARALLAX</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="feature-title-parallax-small.html">PARALLAX SMALL</a></li>
                                                            <li><a href="feature-title-parallax-medium.html">PARALLAX MEDIUM</a></li>
                                                            <li><a href="feature-title-parallax-large.html">PARALLAX LARGE</a></li>
                                                            <li><a href="feature-title-parallax-2xlarge.html">PARALLAX 2x LARGE</a></li>
                                                            <li><a href="feature-title-parallax-transp.html">TRANSPARENT HEADER</a></li>
                                                            <li><a href="feature-title-parallax-transp-large.html">TRANSPARENT HEADER - LARGE</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="feature-title-short-height.html">SHORT HEIGHT</a></li>
                                                    <li><a href="feature-title-rotative-text.html">ROTATIVE TEXT</a></li>
                                                </ul>
                                            </li>
                                            <li > --> <!-- class="dropdown" -->
                                                <!-- <a  href="#"> --> <!-- class="dropdown-toggle" -->
                                                    <!-- <i class="et-layers"></i> --> <!-- RECLASSIFICAÇÃO
                                                </a> -->
                                                <!-- <ul class="dropdown-menu">
                                                    <li><a href="feature-page-submenu-light.html">PAGE SUBMENU - LIGHT</a></li>
                                                    <li><a href="feature-page-submenu-dark.html">PAGE SUBMENU - DARK</a></li>
                                                    <li><a href="feature-page-submenu-color.html">PAGE SUBMENU - COLOR</a></li>
                                                    <li><a href="feature-page-submenu-transparent.html">PAGE SUBMENU - TRANSPARENT</a></li>
                                                    <li><a href="feature-page-submenu-below-title.html">PAGE SUBMENU - BELOW PAGE TITLE</a></li>
                                                    <li><a href="feature-page-submenu-scrollto.html">PAGE SUBMENU - SCROLLTO</a></li>
                                                </ul> -->
                                            <!-- </li>
                                            <li class="divider"></li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" href="#"> -->
                                                    <!-- <i class="et-trophy"></i> --> <!-- ANÁLISE DE ACURÂNCIA
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="feature-icons-fontawesome.html">FONTAWESOME</a></li>
                                                    <li><a href="feature-icons-glyphicons.html">GLYPHICONS</a></li>
                                                    <li><a href="feature-icons-etline.html">ET LINE</a></li>
                                                    <li><a href="shortcode-material-design-icons.html">MATERIAL ICONS</a></li>
                                                    <li><a href="feature-icons-flags.html">FLAGS</a></li>
                                                </ul>
                                            </li>
                                            <li class="divider"></li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" href="#"> -->
                                                    <!-- <i class="et-flag"></i> --> <!-- PROCESSAM. EM TABELAS
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="feature-content-bg-grey.html">CONTENT - SIMPLE GREY</a></li>
                                                    <li><a href="feature-content-bg-ggrey.html">CONTENT - GRAIN GREY</a></li>
                                                    <li><a href="feature-content-bg-gblue.html">CONTENT - GRAIN BLUE</a></li>
                                                    <li><a href="feature-content-bg-ggreen.html">CONTENT - GRAIN GREEN</a></li>
                                                    <li><a href="feature-content-bg-gorange.html">CONTENT - GRAIN ORANGE</a></li>
                                                    <li><a href="feature-content-bg-gyellow.html">CONTENT - GRAIN YELLOW</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" href="#"> -->
                                                    <!-- <i class="et-magnifying-glass"></i> --> <!-- REDIMENSIONAR IMAGEM
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="feature-search-default.html">SEARCH - DEFAULT</a></li>
                                                    <li><a href="feature-search-fullscreen-light.html">SEARCH - FULLSCREEN LIGHT</a></li>
                                                    <li><a href="feature-search-fullscreen-dark.html">SEARCH - FULLSCREEN DARK</a></li>
                                                    <li><a href="feature-search-header-light.html">SEARCH - HEADER LIGHT</a></li>
                                                    <li><a href="feature-search-header-dark.html">SEARCH - HEADER DARK</a></li>
                                                </ul>
                                            </li>

                                            <li><a href="shortcode-animations.html"> --><!-- <i class="et-expand"></i> --> <!-- GERAR MÁSCARA ORDENADA</a></li>
                                            <li class="divider"></li>
                                            <li><a href="feature-grid.html"> --><!-- <i class="et-grid"></i> --> <!-- TIFF JUNTAR IMAGEM</a></li>
                                            <li class="divider"></li> -->
                                            <!-- <li><a href="feature-essentials.html"><i class="et-heart"></i> ESSENTIALS</a></li>
                                            <li><a href="page-changelog.html"><i class="et-alarmclock"></i> CHANGELOG</a></li> -->
                                            <!-- <li class="dropdown">
                                                <a class="dropdown-toggle" href="#"> -->
                                                    <!-- <i class="et-newspaper"></i> --> <!-- QUALIDADE DE IMAGEM
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="feature-sidepanel-dark-right.html">SIDE PANEL - DARK - RIGHT</a></li>
                                                    <li><a href="feature-sidepanel-dark-left.html">SIDE PANEL - DARK - LEFT</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="feature-sidepanel-light-right.html">SIDE PANEL - LIGHT - RIGHT</a></li>
                                                    <li><a href="feature-sidepanel-light-left.html">SIDE PANEL - LIGHT - LEFT</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="feature-sidepanel-color-right.html">SIDE PANEL - COLOR - RIGHT</a></li>
                                                    <li><a href="feature-sidepanel-color-left.html">SIDE PANEL - COLOR - LEFT</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="feature-grid.html"> --><!-- <i class="et-grid"></i> --> <!-- TESTE SVM</a></li>
                                            <li class="divider"></li>
                                            <li><a href="feature-grid.html"> --><!-- <i class="et-grid"></i> --> <!-- FILTRO DE NAN</a></li> -->
                                            <!-- <li><a target="_blank" href="../Admin/Admin_BS3/"><span class="label label-success pull-right">BONUS</span><i class="et-gears"></i> ADMIN PANEL</a></li> -->
                                        <!-- </ul> -->
                                    </li>
                                    
                                    <li ><!-- class="dropdown mega-menu" SHORTCODES -->
                                        <a  href="dev/"> <!-- class="dropdown-toggle" -->
                                            DESENVOLVEDOR
                                        </a>
                                    </li>

                                </ul>

                            </nav>
                        </div>

                    </div>
                </header>
                <!-- /Top Nav -->

            </div>

            <!-- -->
            <section>
                <div class="container">

                    <div class="row">

                        <!-- LEFT -->
                        <div class="col-sm-9">

                            <!-- 
                                controlls-over      = navigation buttons over the image 
                                buttons-autohide    = navigation buttons visible on mouse hover only
                                
                                data-plugin-options:
                                    "singleItem": true
                                    "autoPlay": true (or ms. eg: 4000)
                                    "navigation": true
                                    "pagination": true
                                    "transitionStyle":"fadeUp" (fade,backSlide,goDown,fadeUp)
                            -->
                            <div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"singleItem": true, "autoPlay": true, "navigation": true, "pagination": true, "transitionStyle":"fade"}'>
                                <a href="#">
                                    <img class="img-responsive" src="demo_files/images/magazine/1-min.jpg" alt="">
                                </a>
                                <a href="#">
                                    <img class="img-responsive" src="demo_files/images/magazine/2-min.jpg" alt="">
                                </a>
                                <a href="#">
                                    <img class="img-responsive" src="demo_files/images/magazine/3-min.jpg" alt="">
                                </a>
                            </div>

                            <!-- breaking news -->
                            <div class="alert alert-mini alert-primary margin-bottom-30"><!-- DANGER -->
                                <strong>ÚLTIMAS NOTÍCIAS:</strong>
                                <div class="owl-carousel controlls-over nomargin" data-plugin-options='{"autoPlay":3000, "stopOnHover":true, "items": 1, "singleItem": true, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
                                    <div class="text-left size-14">
                                        <a href="#">1/3 Potential for the contamination of forensic DNA evidence has been highlighted by the Meredith Kercher murder trial.</a>
                                    </div>
                                    <div class="text-left size-14">
                                        <a href="#">2/3 Australia thrash England to win T20 series in Melbourne</a>
                                    </div>
                                    <div class="text-left size-14">
                                        <a href="#">3/3 China's bulldozer mayor kicked out of party, handed to prosecutors</a>
                                    </div>
                                </div>
                            </div><!-- /breaking news -->

                            <!-- TWO COLUMNS -->
                            <div class="row">

                                <!-- first column -->
                                <div class="col-md-8">

                                    <h3 class="page-header weight-300">
                                        <a href="#" data-toggle="tooltip" title="view more"><i class="fa fa-plus-square-o"></i></a>
                                        <!-- <strong>Recent</strong> --> Notícias
                                    </h3>

                                    <!-- article summary -->
                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                            <!-- carousel -->
                                            <div class="owl-carousel controlls-over nomargin" data-plugin-options='{"items": 1, "singleItem": true, "navigation": false, "pagination": true, "transitionStyle":"fadeUp", "itemsScaleUp":true}'>
                                                <div>
                                                    <img alt="" class="img-responsive" src="demo_files/images/magazine/thumbs/thumb_1-min.jpg" />
                                                </div>
                                                <div>
                                                    <img alt="" class="img-responsive" src="demo_files/images/magazine/thumbs/thumb_2-min.jpg" />
                                                </div>
                                                <div>
                                                    <img alt="" class="img-responsive" src="demo_files/images/magazine/thumbs/thumb_3-min.jpg" />
                                                </div>
                                            </div>
                                            <!-- /carousel -->
                                            <!-- rating -->
                                            <div class="rating rating-4 size-13 margin-top-10 width-100"><!-- rating-0 ... rating-5 --></div>
                                            <!-- /rating -->
                                        </div>
                                        <div class="col-md-8">
                                            <h4><a href="#">Boulder smashes through Italian farm</a></h4>
                                            <p>
                                                Dramatic pictures are released showing the destruction wrought by a huge boulder that smashed through a farm in northern Italy after being dislodged by a landslide.
                                                <small class="block">29 June 2014, 9:55</small>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /article summary -->


                                    <hr /><!-- separator -->


                                    <!-- article summary -->
                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                            <img alt="" class="img-responsive" src="demo_files/images/magazine/thumbs/thumb_6-min.jpg" />
                                            <!-- rating -->
                                            <div class="rating rating-4 size-13 margin-top-10 width-100"><!-- rating-0 ... rating-5 --></div>
                                            <!-- /rating -->
                                        </div>
                                        <div class="col-md-8">
                                            <h4><a href="#">Fall in eurozone inflation rate fuels deflation concerns</a></h4>
                                            <p>
                                                Calls for European Central Bank action to help protect the eurozone's fragile recovery have grown after the release of inflation and jobless data.
                                                <small class="block">29 June 2014, 9:55</small>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /article summary -->


                                    <hr /><!-- separator -->


                                    <!-- article summary -->
                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                            <img alt="" class="img-responsive" src="demo_files/images/magazine/thumbs/thumb_7-min.jpg" />
                                            <!-- rating -->
                                            <div class="rating rating-4 size-13 margin-top-10 width-100"><!-- rating-0 ... rating-5 --></div>
                                            <!-- /rating -->
                                        </div>
                                        <div class="col-md-8">
                                            <h4><a href="#">Australia to dump dredged sand in Great Barrier Reef Park</a></h4>
                                            <p>
                                                Australia's government approves plan to dump millions of tons of spoil at the Great Barrier Reef.
                                                <small class="block">29 June 2014, 9:55</small>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /article summary -->

                                </div>

                                <!-- second column -->
                                <div class="col-md-4">

                                    <h3 class="page-header weight-300">
                                        <a href="#" data-toggle="tooltip" title="view more"><i class="fa fa-plus-square-o"></i></a> 
                                         Artigos<!-- <strong>Artigos</strong>  --> 
                                    </h3>

                                    <h4><a href="#">Chinese New Year by the numbers</a></h4>
                                    <p>
                                        Billions of people travel in China during Lunar New Year. Check out the mind-boggling figures.
                                        <small class="block">29 June 2014, 9:55</small>
                                    </p>

                                    <hr class="half-margins" /><!-- separator -->

                                    <h4><a href="#">Chinese New Year by the numbers</a></h4>
                                    <p>
                                        Billions of people travel in China during Lunar New Year. Check out the mind-boggling figures.
                                        <small class="block">29 June 2014, 9:55</small>
                                    </p>

                                    <hr class="half-margins" /><!-- separator -->

                                    <h4><a href="#">Chinese New Year by the numbers</a></h4>
                                    <p>
                                        Billions of people travel in China during Lunar New Year. Check out the mind-boggling figures.
                                        <small class="block">29 June 2014, 9:55</small>
                                    </p>
                                </div>

                            </div>
                            <!-- /TWO COLUMNS -->




                            <!-- <h3 class="page-header weight-300 margin-top-100">
                                <a href="#" data-toggle="tooltip" title="view more"><i class="fa fa-plus-square-o"></i></a> 
                                The <strong>Future</strong> 
                            </h3> -->


                            <!-- THREE COLUMNS -->
                            <!-- <div class="row"> -->

                                <!-- <div class="col-md-4"> -->

                                    <!-- article item -->
                                    <!-- <div class="item-box">
                                        <figure>
                                            <a class="item-hover" href="#">
                                                <span class="overlay color2"></span>
                                                <span class="inner">
                                                    <span class="block fa fa-plus fsize20"></span>
                                                    <strong>READ</strong> ARTICLE
                                                </span>
                                            </a>
                                            <img alt="" class="img-responsive" src="demo_files/images/magazine/thumbs/thumb_1-min.jpg" width="263" height="147" />
                                        </figure>
                                        <div class="item-box-desc">
                                            <h4>Chinese New Year by the numbers</h4>
                                            <small>29 June 2014, 9:55</small>
                                            <p>Billions of people travel in China during Lunar New Year. Check out the mind-boggling figures.</p>
                                        </div>
                                    </div> -->
                                    <!-- /article item -->

                                <!-- </div> -->


                                <!-- <div class="col-md-4"> -->

                                    <!-- article item -->
                                    <!-- <div class="item-box">
                                        <figure>
                                            <a class="item-hover" href="#">
                                                <span class="overlay color2"></span>
                                                <span class="inner">
                                                    <span class="block fa fa-plus fsize20"></span>
                                                    <strong>READ</strong> ARTICLE
                                                </span>
                                            </a>
                                            <img alt="" class="img-responsive" src="demo_files/images/magazine/thumbs/thumb_2-min.jpg" width="263" height="147" />
                                        </figure>
                                        <div class="item-box-desc">
                                            <h4>Chinese New Year by the numbers</h4>
                                            <small>29 June 2014, 9:55</small>
                                            <p>Billions of people travel in China during Lunar New Year. Check out the mind-boggling figures.</p>
                                        </div>
                                    </div> -->
                                    <!-- /article item -->

                                <!-- </div> -->

                                <!-- <div class="col-md-4"> -->

                                    <!-- article item -->
                                <!--    <div class="item-box">
                                        <figure>
                                            <a class="item-hover" href="#">
                                                <span class="overlay color2"></span>
                                                <span class="inner">
                                                    <span class="block fa fa-plus fsize20"></span>
                                                    <strong>READ</strong> ARTICLE
                                                </span>
                                            </a>
                                            <img alt="" class="img-responsive" src="demo_files/images/magazine/thumbs/thumb_3-min.jpg" width="263" height="147" />
                                        </figure>
                                        <div class="item-box-desc">
                                            <h4>Chinese New Year by the numbers</h4>
                                            <small>29 June 2014, 9:55</small>
                                            <p>Billions of people travel in China during Lunar New Year. Check out the mind-boggling figures.</p>
                                        </div>
                                    </div> -->
                                    <!-- /article item -->

                                <!-- </div> -->

                                <!-- /article item -->
                            <!-- </div> -->
                            <!-- /THREE COLUMNS -->



                        </div>
                        <!-- /LEFT -->

                        <!-- RIGHT -->
                        <div class="col-sm-3">

                            <!-- HOT -->
                            <h3 class="page-header nomargin-top weight-300">
                            DICAS   <!-- Today's <span>Hot</span> -->
                            </h3>

                            <!-- No #1 Hot -->
                            <div class="item-box nomargin-top">
                                <figure>
                                    <a class="item-hover" href="#">
                                        <span class="overlay color2"></span>
                                        <span class="inner">
                                            <span class="block fa fa-plus fsize20"></span>
                                            <strong>READ</strong> ARTICLE
                                        </span>
                                    </a>
                                    <img alt="" class="img-responsive" src="demo_files/images/magazine/thumbs/thumb_4-min.jpg" />
                                </figure>
                                <div class="item-box-desc padding-10">
                                    <small>29 June 2014, 08:33</small>
                                    <h4><a href="#">World's most polluted...</a></h4>
                                </div>
                            </div>
                            <!-- /No #1 Hot -->



                            <!-- video -->
                            <div class="embed-responsive embed-responsive-16by9 margin-top-30">
                                <iframe class="embed-responsive-item" src="http://player.vimeo.com/video/8408210" width="800" height="450"></iframe>
                            </div>
                            <!-- <h5 class="weight-300 padding-top-10 size-13">
                                <i class="fa fa-comments"></i> <a href="#">Comment this video</a> 
                                <small class="pull-right margin-top-3">(0 comments)</small>
                            </h5> -->
                            <!-- /video -->



                            <!-- small articles -->
                            <div class="row margin-top-30">
                                <div class="col-xs-6 col-md-6">
                                    <a href="#">
                                        <img alt="" class="img-responsive" src="demo_files/images/magazine/thumbs/thumb_3-min.jpg" />
                                        <h6 class="fsize12 font300 padding6">Horses hypnotized by the sea</h6>
                                    </a>                            
                                </div>
                                <div class="col-xs-6 col-md-6">
                                    <a href="#">
                                        <img alt="" class="img-responsive" src="demo_files/images/magazine/thumbs/thumb_4-min.jpg" />
                                        <h6 class="fsize12 font300 padding6">Sochi protesters fight to be heard</h6>
                                    </a>                            
                                </div>
                            </div>
                            <!-- /small articles -->



                            <!-- LATEST -->
                            <h3 class="page-header weight-300 margin-top-60">
                                Leia <span>Isso</span>, Assista <span>Aquilo</span><!-- Read <span>this</span>, Watch <span>that</span> -->
                            </h3>

                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                <i class="fa fa-heart-o"></i>
                                                Mais Lidos<!-- Most readed -->
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="accordion-body collapse in">
                                        <div class="panel-body">
                                            <ul class="list-unstyled list-icons margin-bottom-10">
                                                <li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Boulder smashes through Italian farm</a></li>
                                                <li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Fall in eurozone inflation rate fuels deflation concerns</a></li>
                                                <li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Australia to dump dredged sand in Great Barrier Reef Park</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                <i class="fa fa-star"></i>
                                                Most Rated
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="accordion-body collapse">
                                        <div class="panel-body">
                                            <ul class="list-unstyled list-icons margin-bottom-10">
                                                <li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Boulder smashes through Italian farm</a></li>
                                                <li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Fall in eurozone inflation rate fuels deflation concerns</a></li>
                                                <li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Australia to dump dredged sand in Great Barrier Reef Park</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                <i class="fa fa-comment"></i>
                                                Mais Comentados<!-- Most Commented -->
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="accordion-body collapse">
                                        <div class="panel-body">
                                            <ul class="list-unstyled list-icons margin-bottom-10">
                                                <li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Boulder smashes through Italian farm</a></li>
                                                <li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Fall in eurozone inflation rate fuels deflation concerns</a></li>
                                                <li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Australia to dump dredged sand in Great Barrier Reef Park</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- TWEETS -->
                            <!-- <h3 class="page-header weight-300 margin-top-60">
                                <i class="fa fa-twitter"></i> 
                                Latest <span>Tweets</span> 
                            </h3> -->

                            <!--
                                data-php="php/twitter/tweet.php"        - widget php path
                                data-username="stepofweb"           - twitter username
                                data-limit="3"                  - maximum twwts to load
                                
                                PLEASE NOTE!
                                php/_cache/ - folder should be writable by the webserver!
                                        - it's used to cache tweets
                            -->
                            <!-- <ul class="widget-twitter" data-php="php/twitter/tweet.php" data-username="stepofweb" data-limit="3">
                                <li></li>
                            </ul> -->



                            <!-- FOLLOW -->
                            <!-- <h3 class="page-header weight-300 margin-top-60">
                                <i class="fa fa-twitter"></i> 
                                Foolow <span>Us</span> 
                            </h3> -->

                            <!-- Social Icons -->
                            <!-- <div class="margin-top-20 clearfix">
                                <a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>

                                <a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>

                                <a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>

                                <a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
                                    <i class="icon-linkedin"></i>
                                    <i class="icon-linkedin"></i>
                                </a>

                                <a href="#" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
                                    <i class="icon-rss"></i>
                                    <i class="icon-rss"></i>
                                </a>
                    
                            </div> -->
                            <!-- /Social Icons -->

                        </div>
                        <!-- /RIGHT -->

                    </div>

                </div>
            </section>
            <!-- / -->


            <!-- Subscribe -->
<!--            <section class="alternate padding-xxs">
                <div class="container">

                    <div class="row text-center">
                        <div class="col-lg-4 col-sm-8 col-lg-offset-4 col-md-offset-2 col-sm-offset-2">

                            <p class="size-12 text-muted nomargin">Please note: we never sell your email address!</p>
                            <h5 class="letter-spacing-1">SUBSCRIBE TO SMARTY NEWSLETTER</h5>
                            <div class="input-group">
                                <input id="newsletter_subscribe_email" type="text" class="form-control" placeholder="Type your email...">
                                <span class="input-group-btn">
                                    <button id="newsletter_subscribe_btn" class="btn btn-primary" type="button">SUBSCRIBE</button>
                                </span>
                            </div> /input-group

                        </div>

                    </div>

                </div>
            </section> -->
            <!-- /Subscribe -->



            <!-- FOOTER -->
            <footer id="footer">
                <!-- <div class="container">

                    <div class="row">
                        
                        <div class="col-md-3"> -->
                            <!-- Footer Logo -->
                            <!-- <img class="footer-logo" src="assets/images/_smarty/logo-footer.png" alt="" /> -->

                            <!-- Small Description -->
                            <!-- <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p> -->

                            <!-- Contact Address -->
                            <!-- <address>
                                <ul class="list-unstyled">
                                    <li class="footer-sprite address">
                                        PO Box 21132<br>
                                        Here Weare St, Melbourne<br>
                                        Vivas 2355 Australia<br>
                                    </li>
                                    <li class="footer-sprite phone">
                                        Phone: 1-800-565-2390
                                    </li>
                                    <li class="footer-sprite email">
                                        <a href="mailto:support@yourname.com">support@yourname.com</a>
                                    </li>
                                </ul>
                            </address> -->
                            <!-- /Contact Address -->

                        <!-- </div>

                        <div class="col-md-3">
 -->
                            <!-- Latest Blog Post -->
                            <!-- <h4 class="letter-spacing-1">LATEST NEWS</h4>
                            <ul class="footer-posts list-unstyled">
                                <li>
                                    <a href="#">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue</a>
                                    <small>29 June 2017</small>
                                </li>
                                <li>
                                    <a href="#">Nullam id dolor id nibh ultricies</a>
                                    <small>29 June 2017</small>
                                </li>
                                <li>
                                    <a href="#">Duis mollis, est non commodo luctus</a>
                                    <small>29 June 2017</small>
                                </li>
                            </ul> -->
                            <!-- /Latest Blog Post -->

                        <!-- </div>

                        <div class="col-md-2">
 -->
                            <!-- Links -->
                            <!-- <h4 class="letter-spacing-1">EXPLORE SMARTY</h4>
                            <ul class="footer-links list-unstyled">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Our Clients</a></li>
                                <li><a href="#">Our Pricing</a></li>
                                <li><a href="#">Smarty Tour</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul> -->
                            <!-- /Links -->

                        <!-- </div>

                        <div class="col-md-4"> -->

                            <!-- Newsletter Form -->
                            <!-- <h4 class="letter-spacing-1">KEEP IN TOUCH</h4>
                            <p>Subscribe to Our Newsletter to get Important News &amp; Offers</p>

                            <form class="validate" action="php/newsletter.php" method="post" data-success="Subscribed! Thank you!" data-toastr-position="bottom-right">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="email" id="email" name="email" class="form-control required" placeholder="Enter your Email">
                                    <span class="input-group-btn">
                                        <button class="btn btn-success" type="submit">Subscribe</button>
                                    </span>
                                </div>
                            </form> -->
                            <!-- /Newsletter Form -->

                            <!-- Social Icons -->
                            <!-- <div class="margin-top-20">
                                <a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>

                                <a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>

                                <a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>

                                <a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
                                    <i class="icon-linkedin"></i>
                                    <i class="icon-linkedin"></i>
                                </a>

                                <a href="#" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
                                    <i class="icon-rss"></i>
                                    <i class="icon-rss"></i>
                                </a>
                    
                            </div> -->
                            <!-- /Social Icons -->

                        <!-- </div>

                    </div>

                </div> -->

                <div class="copyright">
                    <div class="container">
                        <ul class="pull-right nomargin list-inline mobile-block">
                            <li><a href="#">Termos &amp; Condições</a></li>
                            <li>&bull;</li>
                            <li><a href="#">Privacidade</a></li>
                        </ul>
                        &copy; All Rights Reserved, Abilius
                    </div>
                </div>
            </footer>
            <!-- /FOOTER -->

        </div>
        <!-- /wrapper -->


        <!-- SCROLL TO TOP -->
        <a href="#" id="toTop"></a>


        <!-- PRELOADER -->
        <div id="preloader">
            <div class="inner">
                <span class="loader"></span>
            </div>
        </div><!-- /PRELOADER -->


        <!-- JAVASCRIPT FILES -->
        <script type="text/javascript">var plugin_path = '/assets/plugins/';</script>
        <script type="text/javascript" src="<?= $this->Html->url('assets/plugins/jquery/jquery-2.2.3.min.js')?>"></script>

        <script type="text/javascript" src="<?= $this->Html->url('/assets/js/scripts.js')?>"></script>
        
        <!-- STYLESWITCHER - REMOVE -->
        <script async type="text/javascript" src="<?= $this->Html->url('/demo_files/styleswitcher/styleswitcher.js')?>"></script>

        <!-- SWIPER SLIDER -->
        <script type="text/javascript" src="<?= $this->Html->url('/assets/plugins/slider.swiper/dist/js/swiper.min.js')?>"></script>
        <script type="text/javascript" src="<?= $this->Html->url('/assets/js/view/demo.swiper_slider.js')?>"></script>
    </body>
</html>