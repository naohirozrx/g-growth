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
<section id="information">
  <h2 class="h2_n">NEWS & TOPICS<span>新着情報</span></h2>
  <?php if (have_posts()): ?>
  <?php while (have_posts()) : the_post(); ?>
  <div>
    <h3><?php the_title();?></h3>
    <span><?php the_time( 'Y.m.d' )?></span>
    <article>
      <?php the_content();?>
    </article>
    <a href="" onClick="history.back(); return false;" class="back">戻る</a>
  </div>
  <?php endwhile; ?>
  <?php else: ?>
  <?php endif; ?>
</section>
<?php get_footer( ); ?>