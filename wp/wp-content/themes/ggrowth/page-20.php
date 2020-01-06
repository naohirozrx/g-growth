<?php get_header( ); ?>
<script>
jQuery(function($) {
	$('#airconditioning-content').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
});
jQuery(function($) {
	$('#airconditioning-contents').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
});
jQuery(function($) {
	$('#airconditioning-jirei').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
});


</script>
<section id="airconditioning-image">
</section>
<section id="airconditioning-content" class="clearfix">
	<h2>Air Conditioning<span>空気調和設備事業</span></h2>
</section>

<section id="airconditioning-contents">
	<h3>快適に生活するための空間を提供いたします。</h3>
	<p>快適な空間のためのエアコンや換気システムなどの空調換気設備をサポートいたします。<br />
		空調とは空気清浄・温度・湿度・気圧などを適切な状態に調節できる設備の事。空調、換気設備における配管工事（冷媒管、ドレン管、給排気ダクト、排煙ダクトなど）機器（空調機類、換気扇類）の吊込み、器具付け工事を行います。</p>
</section>
<section id="airconditioning-jirei">
	<h3>空調設備施工事例</h3>
	<div class="clearfix">
		<div>
			<dl>
				<dt>事例1</dt>
				<dd><img src="<?php echo get_template_directory_uri(); ?>/images/jirei-sample.png" alt="jirei-sample" width="560" height="346" /></dd>
			</dl>
		</div>
		<div>
			<dl>
				<dt>事例2</dt>
				<dd><img src="<?php echo get_template_directory_uri(); ?>/images/jirei-sample.png" alt="jirei-sample" width="560" height="346" /></dd>
			</dl>
		</div>
		<div>
			<dl>
				<dt>事例3</dt>
				<dd><img src="<?php echo get_template_directory_uri(); ?>/images/jirei-sample.png" alt="jirei-sample" width="560" height="346" /></dd>
			</dl>
		</div>
		<div>
			<dl>
				<dt>事例4</dt>
				<dd><img src="<?php echo get_template_directory_uri(); ?>/images/jirei-sample.png" alt="jirei-sample" width="560" height="346" /></dd>
			</dl>
		</div>
	</div>
</section>
<?php get_footer( ); ?>