<?php get_header( ); ?>
<script>
jQuery(function($) {
	$('#maintenance-content').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
});
jQuery(function($) {
	$('#maintenance-contents').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
});
jQuery(function($) {
	$('#maintenance-jirei').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
});


</script>
<section id="maintenance-image">
</section>
<section id="maintenance-content" class="clearfix">
	<h2>Maintenance<span>保守メンテナンス事業</span></h2>
</section>

<section id="maintenance-contents">
	<h3>安心していただける保守メンテナンスサービス</h3>
	<p></p>
</section>
<section id="maintenance-jirei">
	<h3>保守メンテナンスサービス事例</h3>
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