<?php get_header( ); ?>
<script>
jQuery(function($) {
	$('#service-content').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
});
jQuery(function($) {
	$('#airconditioning-induction').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
});
jQuery(function($) {
	$('#plumbing-induction').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
});
jQuery(function($) {
	$('#maintenance-induction').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
});
jQuery(function($) {
	$('#design-induction').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
});


</script>
<section id="service-image">

</section>
<section id="service-content" class="clearfix">
	<h2>Technology & Service<span>技術とサービス</span></h2>
</section>

<section id="airconditioning-induction" class="clearfix">
	<div>
		<h3>空気調和設備事業</h3>
		<p>現代、人が生活するためになくてはならない空調設備。<br />
建物の空間によって必要な空調環境は多種多様です、温度をはじめ、湿度や気流、空気清浄、高層階の圧力など快適な空間を実現するための環境をご提供致します。</p>
		<a href="<?php echo home_url('/')?>airconditioning"><span><img src="<?php echo get_template_directory_uri(); ?>/images/top-jigyou-icon01.png" />詳細を見る</span></a>

	</div>
	<div>
			<img src="<?php echo get_template_directory_uri(); ?>/images/airconditioning.jpg" alt="airconditioning-img" width="480" height="280" />
	</div>
</section>



<section id="plumbing-induction" class="clearfix">
	<div>
	<div>
		<h3>給排水衛生事業</h3>
		<p>飲用水や洗面で使用される水はきれいで良質でなければなりません。給水管・排水タンク・給水ポンプなど必要な給水システムをご提供致します。<br />
また、排水はトイレ・水回りなどから流れる汚水を適切に排出する排水システムをご提供致します。</p>
		<a href="<?php echo home_url('/')?>plumbing"><span><img src="<?php echo get_template_directory_uri(); ?>/images/top-jigyou-icon02.png" />詳細を見る</span></a>

	</div>
	<div>
			<img src="<?php echo get_template_directory_uri(); ?>/images/service-img-box.jpg" alt="service-img" width="480" height="280" />
	</div>
	</div>
</section>

<section id="maintenance-induction" class="clearfix">
	<div>
		<h3>保守メンテナンス事業</h3>
		<p>より長く安全に空調設備や給排水衛生設備を利用するには工事完了後の定期的なメンテナンス作業は必須です。弊社の長年の経験と実績で確かな保守・メンテンスのサービスをご提供いたします。</p>
		<a href="<?php echo home_url('/')?>maintenance"><span><img src="<?php echo get_template_directory_uri(); ?>/images/top-jigyou-icon03.png" />詳細を見る</span></a>

	</div>
	<div>
			<img src="<?php echo get_template_directory_uri(); ?>/images/maintenance.jpg" alt="maintenance-img" width="480" height="280" />
	</div>
</section>


<section id="design-induction" class="clearfix">
	<div>
	<div>
		<h3>各種設備設計事業</h3>
		<p>利用する人々の立場で考え、より快適で安全な環境を提供するために各種設備の設計施工を致します。</p>
		<a href="<?php echo home_url('/')?>design"><span><img src="<?php echo get_template_directory_uri(); ?>/images/top-jigyou-icon04.png" />詳細を見る</span></a>

	</div>
	<div>
			<img src="<?php echo get_template_directory_uri(); ?>/images/design.jpg" alt="design-img" width="480" height="280" />
	</div>
	</div>
</section>



<?php get_footer( ); ?>