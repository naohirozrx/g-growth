<?php if(is_home()):?>
<?php endif; ?>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title('｜',true,'right'); ?><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo ('stylesheet_url'); ?>" type="text/css" />
	<script src="https://use.typekit.net/mcr6xrc.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.matchHeight-min.js"></script>
  <link href="<?php echo get_template_directory_uri(); ?>/fontawesome/css/all.min.css" rel="stylesheet">
</head>
<body <?php body_class(); ?>>

	<div id="loader-bg">
	  <div id="loader">
	    <div class="boxLoading">
      </div>
	  </div>
	</div>
	<script>
  	$(window).on('load', function() {
      $('#loader-bg').delay(900).fadeOut(800); //$('#loader-bg').fadeOut(800);でも可
      $('#loader').delay(600).fadeOut(300); //$('#loader').fadeOut(300);でも可
    });
		$(function(){
			$(".smp_toggle").on("click",function(){
				$(this).toggleClass("menu_close");
				$("#header-nav").toggleClass("on_menu");
			});
		});
	</script>
	<header id="header" class="clearfix">
		<h1><a href="<?php echo home_url( "/" ); ?>">株式会社G-GROWTH</a></h1>
		<div class="smp_toggle"><span></span></div>
		<nav id="header-nav">
			<ul class="clearfix">
				<li><a href="<?php echo home_url('/')?>service/">Technology & Service<span>技術とサービス</span></a></li>
				<li><a href="<?php echo home_url( "/" ); ?>work/">Works<span>実績紹介</span></a></li>
				<li><a href="<?php echo home_url( "/" ); ?>company/">Company<span>会社概要</span></a></li>
				<li><a href="<?php echo home_url( "/" ); ?>recruit/">Recruit<span>採用情報</span></a></li>
				<li><a href="tel:03-6890-3310"><i class="fas fa-phone-square"></i> 03-6384-5830</a></li>
				<li><a href="mailto:s-growth@uek.co.jp"><i class="fas fa-envelope-square"></i></a></li>
			</ul>
		</nav>
	</header>

