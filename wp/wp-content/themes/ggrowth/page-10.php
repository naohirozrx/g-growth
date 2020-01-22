<?php get_header( ); ?>
<script>
jQuery(function($) {
  $('#header').addClass('other');
});
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
</script>
<section id="service-image">

</section>
<section id="service-content" class="clearfix">
	<h2>Recruit<span>採用情報</span></h2>
	<div style="margin: 50px auto; border: 1px solid #DFDFDF; padding: 24px; width: 300px;"><a href="https://employment.en-japan.com/desc_860826/?arearoute=2&aroute=3&PK=FE1029" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/en_japan.png" alt="en_japan" width="200" height="35" /></a></div>

</section>



<?php get_footer( ); ?>