<?php get_header( ); ?>
<script>
jQuery(function($) {
	$('#plumbing-content').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
});
jQuery(function($) {
	$('#plumbing-contents').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
});
jQuery(function($) {
	$('#plumbing-jirei').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
});


</script>
<section id="plumbing-image">
</section>
<section id="plumbing-content" class="clearfix">
	<h2>Plumbing<span>給排水衛生事業</span></h2>
</section>

<section id="plumbing-contents">
	<h3>給水・給湯・排水・通気設備等の器具設置及び配管工事</h3>
	<p>水は人が生活する上で欠かせない大切な資源です。その水を建物内に循環させ、設計・施工致します。<br />
		衛生とは施設や建物を利用する人々の飲食・調理・排水などの生活活動が支障なく行われる環境をつくり且つ、良好な状態に保ち、健康を保持し、災害から守る設備の事。飲料水などの水を供給する為の給水（上水）設備と使った水やお湯を捨てる為の排水（下水）設備のことを言います。施設の規模や設備コスト、保守性などのさまざまな要素を考慮して、最適な方式にて施工致します。給水設備は衛生管理が極めて重要であり、排水設備は環境への汚染負荷を削減し利用した水をきれいにして自然界へ返すなど、建築物の中で大切な役割を担っています。<br />
		飲料水や給湯施設をはじめトイレなどの水回りの設備は、人の日常生活と密接な関係をもち、建物内の衛生的で安全な環境を保つ上で重要な設備です。</p>
</section>
<section id="plumbing-jirei">
	<h3>給排水衛生施工事例</h3>
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