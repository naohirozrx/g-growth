<?php get_header( ); ?>
<section id="top-image">
	<div class="top-images">
		<div class="carousel-cell">	<h2>明日を支える人がいる</h2></div>
		<div class="carousel-cell">	<h2>明日を支える人がいる</h2></div>
		<div class="carousel-cell">	<h2>明日を支える人がいる</h2></div>
	</div>
	<script>
		$('.top-images').flickity({
		  // options
		  cellAlign: 'left',
		  contain: true,
		  autoPlay: true,
		  wrapAround: true,
		  selectedAttraction: 0.2,
		  friction: 0.8
		});
	</script>
	</div>
</section>

<section id="top-contents">
	<div>
		<h2 class="h2_n">About G-GROWTH<span>G-GROWTHについて</span></h2>
		<div class="top-about clearfix">
			<div>
				<img src="<?php echo get_template_directory_uri();?>/images/service-img-box.jpg" alt="service-img-box" width="760" height="760" />
				<div>
					<h3><a href="<?php echo home_url( "/" ); ?>service/">Technology & Service<span>技術とサービス</span></a></h3>
					<ul>
						<li><a href="<?php echo home_url( "/" ); ?>airconditioning">空気調和設備事業</a></li>
						<li><a href="<?php echo home_url( "/" ); ?>plumbing">給排水衛生事業</a></li>
						<li><a href="<?php echo home_url( "/" ); ?>maintenance/">保守メンテナンス事業</a></li>
						<li><a href="<?php echo home_url( "/" ); ?>design/">各種設備設計事業</a></li>
					</ul>
				</div>
			</div><!--1box END-->
			<div>
				<img src="<?php echo get_template_directory_uri();?>/images/corp-img-box.jpg" alt="service-img-box" width="760" height="760" />
				<div>
					<h3><a href="<?php echo home_url( "/" ); ?>company/">Company<span>企業情報</span></a></h3>
					<ul class="clearfix">
						<li><a href="<?php echo home_url( "/" ); ?>management/">経営理念・代表挨拶</a></li>
						<li><a href="<?php echo home_url( "/" ); ?>corp/">会社概要</a></li>
						<li><a href="<?php echo home_url( "/" ); ?>company/corp/#profile-history">沿革</a></li>
						<li><a href="<?php echo home_url( "/" ); ?>management/#policy-content">経営方針</a></li>
					</ul>
				</div>
			</div><!--2box END-->
			<div>
				<img src="<?php echo get_template_directory_uri();?>/images/recruit-img-box.jpg" alt="service-img-box" width="760" height="760" />
				<div>
					<h3><a href="<?php echo home_url( "/" ); ?>recruit">Recruit<span>採用情報</span></a></h3>
					<ul>
						<li><a href="<?php echo home_url( "/" ); ?>">G-GROWTHで働くメリット</a></li>
						<li><a href="<?php echo home_url( "/" ); ?>">仕事内容</a></li>
						<li><a href="<?php echo home_url( "/" ); ?>">職場環境</a></li>
						<li><a href="<?php echo home_url( "/" ); ?>">先輩スタッフの声</a></li>
					</ul>
				</div>
			</div><!--3box END-->
		</div>
	</div>	
</section>
<section id="top-news">
	<h2 class="h2_n">NEWS & TOPICS<span>新着情報</span></h2>
	<ul>
		<li class="clearfix"><a href="https://employment.en-japan.com/desc_860826/?arearoute=2&aroute=3&PK=FE1029" target="_blank">2017.02.15<span>トピックス</span>エン・ジャパンに求人情報を掲載しました。<span>READ MORE</span></a></li>
		<li class="clearfix"><a href="">2017.02.01<span>トピックス</span>サイト更新いたしました。<span>READ MORE</span></a></li>
		<li class="clearfix"><a href="">2017.09.18<span>トピックス</span>ホームページリニューアルしました<span>READ MORE</span></a></li>
	</ul>
</section>
<?php if( $_SESSION["count"] == 1):?>
<div id="movie">
	<video id="video" poster="" width="800" height="450" src="<?php echo get_template_directory_uri();?>/images/logo.mp4">
    </video>
    <output></output>
    <div id="hoge"></div>
</div>
<?php endif; ?>
<?php get_footer( ); ?>