<?php get_header( ); ?>
<section id="top-image">
  <div class="grad">
    <div class="text-contents">
      <dl>
        <dt>GROUP</dt>
        <dd>グループ企業を目指します</dd>
      </dl>
      <dl>
        <dt>GREAT</dt>
        <dd>より良い仕事をします</dd>
      </dl>
      <dl>
        <dt>GROBAL</dt>
        <dd>世界を目指します</dd>
      </dl>

      <p>私たちは、常にお客様の視点に立ち、付加価値サービスの継続的な向上を図り、<br />
        皆様からの期待と信頼を寄せられる企業を目指しております。</p>
    </div>
    <img src="<?php echo get_template_directory_uri();?>/images/top-earth.svg" alt="top-earth" class="earth" />
  </div>
  <div class="scroll">
    <img src="<?php echo get_template_directory_uri();?>/images/scroll.svg" alt="scroll" />
    <div class="animation"></div>
  </div>
	<div class="top-images">
		<div class="carousel-cell"></div>
		<div class="carousel-cell"></div>
	</div>
	<script>
		$('.top-images').bxSlider({
  		mode: 'fade',
  		speed: 2000,
      auto: true,
      pause: 7000,
      autoControls: true,
      stopAutoOnClick: true,
      pager: true,
    });
	</script>
	</div>
	<div class="top-inview"></div>
</section>
<script>
$(window).on('load', function() {
jQuery(function($) {
	$('#top-image').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$('.top-inview').stop().addClass('inview');
			$('#header').stop().removeClass('other');
		} else {
      $('#header').stop().addClass('other');
		}
	});

	$('#top-vision').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$('#top-vision .vision-over').stop().addClass('inview');
		}
	});

	$('.japan a').matchHeight();

	$('.japan-over').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('inview');
		}
	});

	$('#top-company').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$('#top-company .vision-over').stop().addClass('inview');
		}
	});
});
});
</script>
<section id="top-vision">
  <div class="vision-title">
    <img src="<?php echo get_template_directory_uri();?>/images/top_ourvision.jpg" alt="top_ourvision" width="1800" height="700" />
    <h2>OUR VISION</h2>
    <div class="vision-over"></div>
  </div>
  <div class="vision-contents">
    <figure>
      <img src="<?php echo get_template_directory_uri();?>/images/management-img.png" alt="management-img" width="430" height="384" />
    </figure>
    <div class="vision-text">
      <p>３つのGの願いを込めた成長する企業、<br />
        それが私たちG-GROWTHです</p>
      <a href="<?php echo home_url( "/" ); ?>company/philosophy/">
        <span>MORE DETAIL<i class="fal fa-arrow-right"></i></span>
      </a>
    </div>
  </div>
</section>

<section id="top-service">
  <h2>SERVICE<span>事業内容</span></h2>
  <div class="japan">
    <h3>国<br />
      内<br />
      事<br />
      業</h3>
    <ul>
      <li>
        <a href="<?php echo home_url( "/" ); ?>service/">
          <figure>
            <img src="<?php echo get_template_directory_uri();?>/images/service-icon01.svg" alt="service-icon01" />
          </figure>
          <h4>衛生空調設備</h4>
          <p>ビル・商業施設などの空調システム、給水・給湯・排水・通気設備等の器具設置及び配管工事、及びその保守・メンテナンス事業</p>
        </a>
      </li>
      <li>
        <a href="https://www.reform-station.co.jp/" target="_blank">
          <figure>
            <img src="<?php echo get_template_directory_uri();?>/images/service-icon02.svg" alt="service-icon02" />
          </figure>
          <h4>リニューアル部門</h4>
          <p>個人宅リフォーム・ビル・施設などの建物内の改装まで屋内外内装業務を行なっております。</p>
        </a>
      </li>
    </ul>
    <figure>
      <img src="<?php echo get_template_directory_uri();?>/images/japan-image.svg" alt="japan-image" />
    </figure>
    <div class="japan-over"></div>
  </div>

  <div class="world">
    <h3>海<br />
      外<br />
      事<br />
      業</h3>
    <ul>
      <li>
        <a href="https://sentro.asia/" target="_blank">
          <figure>
            <img src="<?php echo get_template_directory_uri();?>/images/service-icon03.png" alt="service-icon03" />
          </figure>
          <h4>レンタルオフィス</h4>
          <p>マレーシア初 ! 日系サービスオフィス マレーシア進出 バーチャルオフィス 貸オフィス MSC 取得 を支援します。</p>
        </a>
      </li>
      <!--<li>
        <a href="">
          <figure>
            <img src="<?php echo get_template_directory_uri();?>/images/service-icon02.svg" alt="service-icon02" />
          </figure>
          <h4>リニューアル部門</h4>
          <p>個人宅リフォーム・ビル・施設などの建物内の改装まで屋内外内装業務を行なっております。</p>
        </a>
      </li>-->
    </ul>
    <figure>
      <img src="<?php echo get_template_directory_uri();?>/images/world-image.svg" alt="japan-image" />
    </figure>
    <div class="japan-over"></div>
  </div>
</section>

<section id="top-company">
  <img src="<?php echo get_template_directory_uri();?>/images/top-company-image.jpg" alt="top-company-image" width="1920" height="1280" />
  <div class="top-company-text">
    <h2>COMPANY<span>企業情報</span></h2>
    <p>弊社は創業以来、主に給排水衛生設備の職人会社として工事に携わり、一歩ずつ歩みを進め、お客様との信頼関係を築き上げながら、施工以外にも保守や施工管理を含めた会社へと成長してきております。</p>
    <a href="<?php echo home_url( "/" ); ?>company/">
        <span>MORE DETAIL<i class="fal fa-arrow-right"></i></span>
      </a>
  </div>
  <div class="vision-over"></div>
</section>

<section id="top-news">
	<h2 class="h2_n">NEWS & TOPICS<span>新着情報</span></h2>
	<ul>
    <?php $args = array(
      'post_type' => 'post',
      'posts_per_page' => 10,
    ); ?>
    <?php query_posts( $args ); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <li class="clearfix"><a href="<?php the_permalink(); ?>"><?php the_time( 'Y.m.d' );?><span>トピックス</span><?php the_title(); ?><span>READ MORE</span></a></li>
    <?php endwhile; else: endif; ?>
    <?php wp_reset_query(); ?>
	</ul>
</section>
<?php if( $_SESSION["count"] == 1):?>
<div id="movie">
	<video id="video" poster="" width="800" height="450" src="<?php echo get_template_directory_uri();?>/images/logo.mp4">
    </video>
    <output></output>
    <div id="hoge"></div>
</div>
<?php endif; ?>
<?php get_footer( ); ?>