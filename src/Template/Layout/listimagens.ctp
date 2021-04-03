<!-- Custom CSS -->
    <!-- <link href="../dist/css/sb-admin-2.css" rel="stylesheet"> -->

    <!-- Custom Fonts -->
    <!-- <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="utf-8" />
		<title>GERENCIADOR</title> <!-- Smarty - Multipurpose + Admin -->
		<meta name="description" content="Portal Sistema Abylius" />
		<meta name="author" content="Osmar Abílio de Carvalho junior" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />
		
        <!-- CORE CSS -->
		<!-- <link href="=$this->Html->url('/assets/plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" /> -->
         <?= $this->Html->css('assets/plugins/bootstrap/css/bootstrap.min.css') ?>
		<!-- <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet"> -->
        <?= $this->Html->css('vendor/metisMenu/metisMenu.min.css') ?>
       <!-- DataTables CSS -->
       <!--  <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet"> -->
        <?= $this->Html->css('vendor/datatables-plugins/dataTables.bootstrap.css') ?>
       <!-- DataTables Responsive CSS -->
        <!-- <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet"> -->
        <?= $this->Html->css('vendor/datatables-responsive/dataTables.responsive.css') ?>
         <!-- <link href="../dist/css/sb-admin-2.css" rel="stylesheet"> -->
         <?= $this->Html->css('sb-admin-2.css') ?>
         
		<?= $this->Html->css('assets/plugins/slider.swiper/dist/css/swiper.min.css') ?>
		<!-- THEME CSS -->
		<!-- <link href="=$this->Html->url('/assets/css/essentials.css')?>" rel="stylesheet" type="text/css" /> -->
		<!-- <link href="=$this->Html->url('/assets/css/layout.css')?>" rel="stylesheet" type="text/css" /> -->
		<?= $this->Html->css('assets/css/essentials.css') ?>
        <?= $this->Html->css('assets/css/layout.css') ?>

		<!-- PAGE LEVEL SCRIPTS -->
		<!-- <link href="=$this->Html->url('/assets/css/header-1.css')?>" rel="stylesheet" type="text/css" /> -->
		<!-- <link href="=$this->Html->url('/assets/css/color_scheme/green.css')?>" rel="stylesheet" type="text/css" id="color_scheme" /> -->
	
        <?= $this->Html->css('assets/css/header-1.css') ?>
        <?= $this->Html->css('assets/css/color_scheme/green.css',['id' => 'color_scheme']) ?>
        
        
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>

        
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-101912660-1', 'auto');
          ga('send', 'pageview');

        </script>

	</head>

	<!--
		AVAILABLE BODY CLASSES:
		
		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background
		
		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click
		
		BACKGROUND IMAGE [together with .boxed class]
		data-background="assets/images/_smarty/boxed_background/1.jpg"
	-->
	<body class="smoothscroll enable-animation">

<!-- wrapper -->
		<div id="wrapper">

			<!-- Top Bar -->
			<div id="topBar">

				<div class="container">

					<!-- right -->
					<ul class="top-links list-inline pull-right">
						<li class="text-welcome hidden-xs" style="text-transform: uppercase">Bem-vindo(a) <strong><?= h($user['username'])?></strong></li>
						<li>
							<!--<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><i class="fa fa-user hidden-xs"></i>--> <?= $this->Html->link('SAIR', ['controller' => 'users', 'action' => 'logout'], ['class' => 'dropdown-toggle no-text-underline','escape'=>false]) ?>
							<!--<ul class="dropdown-menu pull-right">
								<li><a tabindex="-1" href="#"><i class="fa fa-history"></i> ORDER HISTORY</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="#"><i class="fa fa-bookmark"></i> MY WISHLIST</a></li>
								<li><a tabindex="-1" href="#"><i class="fa fa-edit"></i> MY REVIEWS</a></li>
								<li><a tabindex="-1" href="#"><i class="fa fa-cog"></i> MY SETTINGS</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="#"><i class="glyphicon glyphicon-off"></i> LOGOUT</a></li>
							</ul>-->
						</li>
					</ul>

					<!-- left -->
					
				</div>
                    
				

			</div>
			<!-- /Top Bar -->


			<!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->
			<div id="header" class="sticky shadow-after-3 clearfix">

				<!-- TOP NAV -->
				<header id="topNav">
					<?php include_once(WWW_ROOT . DS . "files" . DS . "header_admin.php") ?>
				</header>
				<!-- /Top Nav -->

			</div>

		
			<?= $this->Flash->render() ?>
            <?= $this->fetch('content')?>
			
		
			<!-- FOOTER -->
			<footer id="footer">
				
             <!-- <php include_once(WWW_ROOT . DS . "files" . DS . "footer_portal.php") ?> -->
				
			</footer>
			<!-- /FOOTER -->

		</div>
		<!-- wrapper////////////////////////////////////// -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


		<!-- JAVASCRIPT FILES -->
		
       <script type="text/javascript">var plugin_path = 'js/plugins/';</script>
	   
       
      <!--  <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script> -->
		
        <?= $this->Html->script('https://code.jquery.com/jquery-2.2.3.min.js', ['integrity'=>'sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=','crossorigin' => 'anonymous' ]) ?>
		<?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js') ?>
        <?= $this->Html->script('plugins/jquery/jquery-2.2.3.min.js') ?>
		<?= $this->Html->script('scripts.js') ?>
         <!-- SWIPER SLIDER -->
		<?= $this->Html->script('plugins/slider.swiper/dist/js/swiper.min.js') ?>
		<?= $this->Html->script('view/demo.swiper_slider.js') ?>
		<!-- jQuery -->
	    <!-- <script src="../vendor/jquery/jquery.min.js"></script> -->

	    <!-- Bootstrap Core JavaScript -->
	   <!--  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script> -->
        <?= $this->Html->script('vendor/bootstrap/js/bootstrap.min.js') ?>
	    <!-- Metis Menu Plugin JavaScript -->
	    <!-- <script src="../vendor/metisMenu/metisMenu.min.js"></script> -->
        <?= $this->Html->script('vendor/metisMenu/metisMenu.min.js') ?>
	    <!-- DataTables JavaScript -->
	    <!-- <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script> -->
	    <?= $this->Html->script('vendor/datatables/js/jquery.dataTables.min.js') ?>
	    <!-- <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script> -->
	    <?= $this->Html->script('vendor/datatables-plugins/dataTables.bootstrap.min.js') ?>
	    <!-- <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script> -->
	    <?= $this->Html->script('vendor/datatables-responsive/dataTables.responsive.js') ?>

	    <!-- Custom Theme JavaScript -->
	    <!-- <script src="../dist/js/sb-admin-2.js"></script> -->
		<script>
		    $(document).ready(function() {
		        $('#dataTables-example').DataTable({
		            responsive: true
		        });
		    });
	    </script>

		
	</body>
</html>