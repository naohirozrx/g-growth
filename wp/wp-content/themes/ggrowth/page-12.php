<?php get_header( ); ?>
<script>
jQuery(function($) {
  $('#header').addClass('other');
});
jQuery(function($) {
	$('#profile-content h2').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
	$('#profile-content dl').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
});
jQuery(function($) {
	$('#history-content h2').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
	$('#history-content dl').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mvcover');
		}
		else{
			$(this).stop().removeClass('mvcover');
		}
	});
});
</script>
<section id="company-image">
</section>
<section id="profile-content" class="clearfix">
	<h2>Company Profile<span>会社概要</span></h2>
	<dl class="clearfix">
		<dt>称号</dt>
		<dd>株式会社G-GROWTH</dd>
	</dl>
	<dl class="clearfix">
		<dt>設立</dt>
		<dd>昭和48年2月5日</dd>
	</dl>
	<dl class="clearfix">
		<dt>資本金</dt>
		<dd>1,000万円</dd>
	</dl>
	<dl class="clearfix">
		<dt>代表取締役</dt>
		<dd>上原賢一</dd>
	</dl>
	<dl class="clearfix">
		<dt>お問い合わせ</dt>
		<dd>お問い合わせは南青山事務所にお願いします。</dd>
	</dl>
	<dl class="clearfix">
	  <dt>南青山本社</dt>
	  <dd>〒107-0062<br />
	  東京都港区南青山一丁目12-3 LIFORK MINAMI AOYAMA 南棟 S216号室<br />
	  TEL:03-6384-5830<br />
	  FAX:03-6384-5832</dd>
	</dl>
	<dl class="clearfix">
		<dt>新宿営業所</dt>
		<dd>〒160-0023<br />
		東京都新宿区西新宿1-20-3 西新宿髙木ビル　8階<br />
		TEL：<a href="tel:03-6890-3310">03-6890-3310</a><br />
		FAX：03-6890-3410</dd>
	</dl>
	<dl class="clearfix">
		<dt>倉庫</dt>
		<dd>〒252-0226<br />
		神奈川県相模原市中央区陽光台1-6-12</dd>
	</dl>

	<dl class="clearfix">
		<dt>社員数</dt>
		<dd>7名</dd>
	</dl>
	<dl class="clearfix">
		<dt>事業内容</dt>
		<dd>
		<ol>
			<li>給排水衛生消火設備工事<br />
空気調和設備工事<br />
ビルサービス、保守点検業務他<br />
各種設備設計</li>
			<li>前項に付帯する関連工事に伴う資材の販売及び設置</li>
		</ol>
		</dd>
	</dl>
	<dl class="clearfix">
		<dt>主要取引先</dt>
		<dd>
		<ul>
			<li>株式会社ナカノフドー建設</li>
			<li>株式会社日立ビルシステム</li>
			<li>株式会社ビルシステムエンジニアリング</li>
			<li>株式会社関工ファシリティーズ</li>
			<li>株式会社セレコーポーレーション</li>
			<li>ユニオンキャピタル株式会社</li>
			<li>第一工業株式会社</li>
			<li>郡リース株式会社</li>
			<li>日管株式会社</li>
			<li>他数社（順不同・敬称略）</li>
		</ul>
		</dd>
	</dl>
	<dl class="clearfix">
		<dt>取引銀行</dt>
		<dd>
		<ul>
			<li>みずほ銀行　町田支店・相模原支店</li>
			<li>八千代銀行　上溝支店</li>
			<li>横浜銀行　上溝支店</li>
		</ul>
		</dd>
	</dl>
</section>

<section id="history-content" class="clearfix">
	<h2>History<span>沿革</span></h2>
	<dl class="clearfix">
		<dt>昭和48年02月</dt>
		<dd>神奈川県相模原市において、資本金300万円で有限会社上原工業所を設立</dd>
	</dl>
	<dl class="clearfix">
		<dt>平成07年06月</dt>
		<dd>社名を有限会社上原工業に改称</dd>
	</dl>
	<dl class="clearfix">
		<dt>平成26年06月</dt>
		<dd>新宿営業所を開設</dd>
	</dl>
	<dl class="clearfix">
		<dt>平成27年6月</dt>
		<dd>資本金1,000万円に増資</dd>
	</dl>
	<dl class="clearfix">
		<dt>平成27年7月</dt>
		<dd>社名を株式会社G-GROWTHに改称</dd>
	</dl>
	<dl class="clearfix">
		<dt>平成31年1月</dt>
		<dd>南青山事務所を開設</dd>
	</dl>
	<dl class="clearfix">
		<dt>令和元年11月26日</dt>
		<dd>マレーシアレンタルオフィスSENTRO（M&M ARC SDN. BHD.）を買収</dd>
	</dl>
	 11月26日
</section>
<?php get_footer( ); ?>