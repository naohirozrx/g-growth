<?php get_header( ); ?>
<script>
  jQuery(function($) {
  	$('#company-image').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
  		if(isInView){
  			$('#company-image .top-inview').stop().addClass('inview');
  			$('#header').stop().removeClass('other');
  		} else {
        $('#header').stop().addClass('other');
  		}
  	});

  	$('#top-vision').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
  		if(isInView){
  			$('#top-vision .vision-over').stop().addClass('inview');
  		}
  	});
	});
</script>
<section id="company-image">
	<h2>Company<span>会社概要</span></h2>
	<div class="top-inview"></div>
</section>
<section id="company-contents" class="clearfix">
	<div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/corp-menu-img01.jpg" alt="corp-menu-img01" width="760" height="538" />
		<div>
			<h3><a href="<?php echo home_url( "/" ); ?>/company/management/#management-content">Corporate philosophy<span>企業理念</span></a></h3>
			<span><a href="<?php echo home_url( "/" ); ?>/company/management/#management-content">詳細を見る</a></span>
		</div>
	</div><!--1box END-->
	<div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/corp-menu-img02.jpg" alt="corp-menu-img02" width="760" height="538" />
		<div>
			<h3><a href="<?php echo home_url( "/" ); ?>/company/greeting/">Greeting<span>社長挨拶</span></a></h3>
			<span><a href="<?php echo home_url( "/" ); ?>/company/greeting/">詳細を見る</a></span>
		</div>
	</div><!--1box END-->
	<div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/corp-menu-img03.jpg" alt="corp-menu-img03" width="760" height="538" />
		<div>
			<h3><a href="<?php echo home_url( "/" ); ?>/company/corp/#profile-history">History<span>沿革</span></a></h3>
			<span><a href="<?php echo home_url( "/" ); ?>/company/corp/#profile-history">詳細を見る</a></span>
		</div>
	</div><!--1box END-->
	<div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/corp-menu-img04.jpg" alt="corp-menu-img04" width="760" height="538" />
		<div>
			<h3><a href="<?php echo home_url( "/" ); ?>/company/corp/">Company profile<span>会社概要</span></a></h3>
			<span><a href="<?php echo home_url( "/" ); ?>/company/corp/">詳細を見る</a></span>
		</div>
	</div><!--1box END-->
	<div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/corp-menu-img05.jpg" alt="corp-menu-img05" width="760" height="538" />
		<div>
			<h3><a href="<?php echo home_url( "/" ); ?>/company/management/#policy-content">Management policy<span>経営方針</span></a></h3>
			<span><a href="<?php echo home_url( "/" ); ?>/company/management/#policy-content">詳細を見る</a></span>
		</div>
	</div><!--1box END-->
	<div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/corp-menu-img06.jpg" alt="corp-menu-img06" width="760" height="538" />
		<div>
			<h3><a href="">Recruit<span>採用情報</span></a></h3>
			<span><a href="">詳細を見る</a></span>
		</div>
	</div><!--1box END-->
</section>
<?php get_footer( ); ?>