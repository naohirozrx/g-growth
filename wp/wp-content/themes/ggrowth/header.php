<?php if(is_home()):?>
<?php
ini_set( 'session.gc_maxlifetime', 120 );
session_start();
if (isset($_SESSION["count"])) {
  $_SESSION["count"]++;
} else {
  $_SESSION["count"] = 1;
}
?>
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
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
	<script>

	jQuery(document).ready(function($) {
	//PC環境の場合
	if (window.matchMedia( '(min-width: 741px)' ).matches) {　//切り替える画面サイズ

	$(function() {
	  var h = $(window).height();
	  $('#loader-bg ,#loader').height(h).css('display','block');
	});

		$(window).load(function () { //全ての読み込みが完了したら実行
		  	$('#loader-bg').delay(900).fadeOut(800);
		  	$('#loader').delay(600).fadeOut(300);



		//10秒たったら強制的にロード画面を非表示
		$(function(){
		  setTimeout('stopload()',10000);
		});

		function stopload(){
		  $('#loader-bg').delay(900).fadeOut(800);
		  $('#loader').delay(600).fadeOut(300);
		};
		});

		setTimeout(function(){
			var video = document.getElementById("video");
			video.play();
			var videoObj = document.getElementsByTagName("video")[0];
				var ele = document.getElementsByTagName("output")[0];
				var movie = document.getElementById("movie");
				setTimeout(function(){
					if(videoObj.ended == true) {
						$('#movie').fadeOut(600);

					}
					setTimeout(arguments.callee, 250);
				}, 250);
		}, 1500);


	//モバイル環境の場合
	} else {


	};
});

	</script>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/flickity/flickity.css" type="text/css" />
	<script src="<?php echo get_template_directory_uri(); ?>/js/flickity/flickity.pkgd.min.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="loader-bg">
	  <div id="loader">
	    <img src="<?php echo get_template_directory_uri(); ?>/images/loader_img.gif" alt="loader_img" width="48" height="48" />
	    <p>G-GROWTH</p>
	  </div>
	</div>
	<script>
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

