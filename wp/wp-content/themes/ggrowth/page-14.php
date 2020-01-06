<?php get_header( ); ?>
<script>
jQuery(function($) {
	$('#management-content').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
});
jQuery(function($) {
	$('#greeting-content').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
});
jQuery(function($) {
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

<section id="greeting-content" class="clearfix">
	<h2>Greeting<span>社長挨拶</span></h2>
	<div>
		<div><p>　弊社は創業以来、主に給排水衛生設備の職人会社として工事に携わり、一歩ずつ歩みを進め、お客様との信頼関係を築き上げながら、施工以外にも保守や施工管理を含めた会社へと成長してきております。<br />
　毎年の様に、お客様が満足する価値の提供レベルは少しずつ高くなり、これまでのやり方だけではなく、変化に対応すべく、社員自ら考え自ら新しいやり方等、創意工夫を生み出す力を養い、安心してご依頼いただける技術をご提供させていただいております。</p>

<p>　今日から未来へと確実に実績を積み重ね、新たな一歩を踏み出し、グローバルの名を冠した社名でさらに発展していき、いずれ一流企業と言われるその日を目標に、お客様とのつながりを大切にし、共に成長する（GROWTH）会社でありたいと考えております。</p>
			<div>代表取締役　<span>上原 賢一</span></div>
		</div>
		<div>
			<img src="<?php echo get_template_directory_uri(); ?>/images/president-img.jpg" alt="president-img" width="380" height="380" />
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