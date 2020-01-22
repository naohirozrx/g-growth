<?php get_header( ); ?>
<script>
jQuery(function($) {
  $('#header').addClass('other');
});
jQuery(function($) {
	$('#management-content').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
	$('#greeting-content').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
	$('#policy-content').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
});
</script>
<section id="management-image">
</section>
<section id="management-content" class="clearfix">
	<h2>Corporate philosophy<span>企業理念</span></h2>
	<div>私たちは、常にお客様の視点に立ち、付加価値サービスの継続的な向上を図り、
		皆様からの期待と信頼を寄せられる企業を目指しております。</div>
	<div class="clearfix">
		<div>
			<img src="<?php echo get_template_directory_uri(); ?>/images/management-img.png" alt="management-img" width="430" height="384" />
		</div>
		<div>
			<h3>３つのGの願いを込めた成長する企業、
				それが私たちG-GROWTHです</h3>
			<p><b>真（<span>G</span>enuine）</b>の<b>競争相手（<span>R</span>ival）</b>とチームを<b>編成・組織化（<span>O</span>rganize）</b>し、
仕事に対する<b>意思・決意（<span>W</span>ill）</b>を新たに<b>努力（<span>T</span>ry）</b>する。
そして<b>希望に満ちあふれた（<span>H</span>opeful）</b>企業を目指します。</p>
		</div>
	</div>
</section>

<section id="policy-content" class="clearfix">
	<h2>Management policy<span>経営方針</span></h2>
	<ol>
		<li>人と人の繋がりを大切し、感謝の気持ちと謙虚な姿勢で何事にも接する事。</li>
		<li>自己啓発と自己研鑽、二つの違いを理解し、職務に必要な知識・技術の工場に取り組む事。</li>
		<li>困難な事にも前向きな発想と、積極的な行動で果敢に挑戦し、達成し続ける事。</li>
	</ol>
</section>
<?php get_footer( ); ?>