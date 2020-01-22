<?php get_header( ); ?>
<script>
jQuery(function($) {
  $('#header').addClass('other');
});
jQuery(function($) {
	$('#design-content').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
});
jQuery(function($) {
	$('#design-contents').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
});
jQuery(function($) {
	$('#design-jirei').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
});


</script>
<section id="design-image">
</section>
<section id="design-content" class="clearfix">
	<h2>Design<span>各種設備設計事業</span></h2>
</section>

<section id="design-contents">
	<h3>利用する側の立場を考えた設備設計をご提案いたします。</h3>
	<p>ビル、商業施設、保育園、学校等、アパートなどで将来の変化に対応できる設備、設備システムの変更が行いやすい等のフレキシブルな設備設計を心がけております。空調設備や給排水衛生設備を長く安全に機能維持のため定期的なメンテナンスは、機器システムの長寿命化を図り、機能停止を未然に防ぎます。</p>
	<p>お客様の「困った」の声に、迅速対応を心掛けています。高い技術を備えた技術者が、水やお湯のトラブル、空調機が止まったなど、 お客様の当たり前の生活にトラブルが生じた際に対応しています。お客様の立場に立った提案から見積もり、設計、施工を行い、確かな技術と実績で気持ちの良い居住空間を実現します。</p>
</section>
<section id="design-jirei">
	<h3>各種設備設計事例</h3>
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