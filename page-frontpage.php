<?php

// Template Name: frontpage
$r = get_template_directory_uri();
get_header(); ?>

<section id="top-firstview">
  <div class="container">
    <img src="<?=$r?>/images/top/firstview_07.jpg" class="image-wrap-07 rellax" data-rellax-speed="-5" data-rellax-tablet-speed="0" data-rellax-xs-speed="-4" style="transform: translate3d(0px, 0px, 0px);" alt="">
    <img src="<?=$r?>/images/top/firstview_01.jpg" class="image-wrap-01 rellax" data-rellax-speed="-4" data-rellax-tablet-speed="0.5" data-rellax-xs-speed="-2" style="transform: translate3d(0px, 0px, 0px);" alt="">
    <img src="<?=$r?>/images/top/firstview_04.jpg" class="image-wrap-04 rellax" data-rellax-speed="4" data-rellax-xs-speed="2" style="transform: translate3d(0px, 0px, 0px);" alt="">
    <div class="rellax main-title shippori" data-rellax-speed="4" data-rellax-xs-speed="2" style="transform: translate3d(0px, 0px, 0px);" alt="">
      <h1 class="shippori">もっとステキに暮らす。</h1>
      <p>PLANNING &amp; MANAGEMENT</p>
    </div>
    <img src="<?=$r?>/images/top/firstview_10.jpg" class="image-wrap-10 rellax" data-rellax-speed="0" data-rellax-tablet-speed="1" style="transform: translate3d(0px, 0px, 0px);" alt="">
    <img src="<?=$r?>/images/top/firstview_02.jpg" class="image-wrap-02 rellax" data-rellax-speed="4" data-rellax-xs-speed="2" style="transform: translate3d(0px, 0px, 0px);" alt="">
    <img src="<?=$r?>/images/top/firstview_05.jpg" class="image-wrap-05 rellax" data-rellax-speed="-0.5" data-rellax-tablet-speed="1" data-rellax-xs-speed="-0.5" style="transform: translate3d(0px, 0px, 0px);" alt="">
    <img src="<?=$r?>/images/top/firstview_09.jpg" class="image-wrap-09 rellax" data-rellax-speed="5" data-rellax-xs-speed="3" style="transform: translate3d(0px, 0px, 0px);" alt="">
    <img src="<?=$r?>/images/top/firstview_03.jpg" class="image-wrap-03 rellax" data-rellax-speed="2" data-rellax-xs-speed="1" style="transform: translate3d(0px, 0px, 0px);" alt="">
    <img src="<?=$r?>/images/top/firstview_08.jpg" class="image-wrap-08 rellax" data-rellax-speed="1" style="transform: translate3d(0px, 0px, 0px);" alt="">
    <img src="<?=$r?>/images/top/firstview_06.jpg" class="image-wrap-06 rellax" data-rellax-speed="4.5" data-rellax-xs-speed="0.5" style="transform: translate3d(0px, 0px, 0px);" alt="">
  </div>
</section>

<div id="new-top">

  <section id="information" style="background:#F6F6F6;margin-top:-15px;">
    <div class="container" style="max-width:1000px;margin:0 auto;padding-top:60px;padding-bottom:75px;">

      <h2 style="display:inline-block;margin-bottom:45px;margin-left: 15px;">NEWS</h2>

      <?php $postslist = get_posts(array('post_type'=>'post','posts_per_page'=>'5','paged'=>$paged)); ?>

        <?php foreach ($postslist as $post) : setup_postdata($post); ?>
          <div class="row">
            <div class="col-lg-3">
              <span style="font-size:14px;font-weight:bold;"><?php echo get_the_date('Y.m.d');?></span>
              <span class="news-tag"><?php the_field('アイコン'); ?></span>
            </div>
            <div class="col-lg-9" style="margin:6px 0;">
              <a href="<?php the_permalink(); ?>">
                <span style="font-size:16px;font-weight:bold;"><i class="fa fa-play" aria-hidden="true" style="color:#EB5C01;"></i> <?php the_title(); ?></span>
              </a>
            </div>
          </div>
        <?php endforeach; wp_reset_postdata();?>

      <a href="/newslist/">
        <div class="white-c-button" style="border-radius:0;border:1px solid #707070;width:265px;margin-top:40px;min-height:37px;font-size:14px;display:flex;align-items:center;justify-content:center;padding:0;">一覧を見る</div>
      </a>

    </div>
  </section>

  <section id="recommend">
    <div class="container" style="margin:0 auto;padding-top:75px;padding-bottom:75px;">

      <h2>RECOMMEND</h2>

      <div class="row">
        <div class="col-lg-6">
          <a href="http://sandtmore.co.jp/" target="_blank">
            <div class="recommend-box recommend-right">
              <img src="<?=$r?>/images/recommend1.png" alt="recommend">
              <p style="font-size:12px;bottom:44px;">グループ会社</p>
              <img src="<?=$r?>/images/more_logo.svg" style="width:78px;bottom:20px;top:initial;transform:translateX(-50%);" alt="recommend">
            </div>
          </a>
          <a href="/magazines/">
            <div class="recommend-box recommend-left">
              <img src="<?=$r?>/images/recommend2.png" alt="recommend">
              <p>メディア掲載</p>
            </div>
          </a>
        </div>
        <div class="col-lg-6">
          <a href="/resident/">
            <div class="recommend-box recommend-right">
              <img src="<?=$r?>/images/recommend3.png" alt="recommend">
              <p>ご入居者様へ</p>
            </div>
          </a>
          <a href="http://sandtmore.co.jp/blog/" target="_blank">
            <div class="recommend-box recommend-left">
              <img src="<?=$r?>/images/recommend4.png" alt="recommend">
              <p>社長ブログ</p>
            </div>
          </a>
        </div>
      </div>

    </div>
  </section>

  <section id="renovation" style="background:#F6F6F6;">
    <div class="container" style="margin:0 auto;padding-top:60px;padding-bottom:75px;">

      <h2><img src="<?=$r?>/images/suteki_logo_b.png" style="margin:0 auto;" alt="recommend"></h2>

      <div class="row" style="margin-bottom:30px !important;">

      <?php query_posts(array('post_type'=>'renovation','posts_per_page'=>'4','paged'=>$paged)); ?>

      <?php $i=1; while ( have_posts() ) : the_post(); ?>

        <?php $image = get_field('メイン画像'); ?>
        <?php
          $diff = '';
          $day = new DateTime(get_the_date('Y-m-d'));
          $today = new DateTime('now');
          $diff = $day->diff($today);
        ?>

        <div class="col-lg-3" style="margin-bottom:20px;">
          <div style="border:1px solid #cccccc;height:260px;background:#ffffff;width:100%;margin:0 auto;">
          <a href="<?php the_permalink(); ?>">
            <div class="img_box" style="height:156px;overflow:hidden;">
              <img src="<?=$image['url']?>" alt="空室対策" style="width:100%;height:180px;object-fit:cover;object-position:bottom;">
            </div>
            <?php if (get_field('アイコン') == 'シングル') { ?>
              <div class="single-tag" style="margin-left:15px;">シングル</div>
            <?php } else if (get_field('アイコン') == 'ファミリー') { ?>
              <div class="family-tag" style="margin-left:15px;">ファミリー</div>
            <?php } else if (get_field('アイコン') == 'DINKS') { ?>
              <div class="dinks-tag" style="margin-left:15px;">DINKS</div>
            <?php } ?>

            <?php if ($diff->days < 14) { ?>
              <div class="new-tag">NEW</div>
            <?php } ?>

            <p style="font-size:14px;max-width:280px;font-weight:bold;line-height:1.6;margin-left:15px;margin-right:15px;margin-bottom:10px;"><?php the_title(); ?></p>
          </a>
          </div>
        </div>

      <?php endwhile; ?>

      </div>

      <a href="/renovations/">
        <div class="c-button">
          <span>more</span>
        </div>
      </a>

    </div>
  </section>

  <section id="philosophy" class="gray-area">
    <div class="container">

        <h2 class="white">Our Philosophy</h2>
        <p style="color:#ffffff;font-size:26px;text-align:center;margin:65px 0;line-height:1.5;">いつも全力で仕事に取り組む。人として正しい生き方を貫く。</p>

      <a href="" class="js-modal-open">
        <div class="c-button" style="color:#ffffff;border:1px solid #ffffff;background-color:transparent !important;">
          <span>more</span>
        </div>
      </a>

      <div class="modal js-modal">
        <div class="modal__bg js-modal-close"></div>
          <a class="js-modal-close batsu-con" href=""><span class="batsu"></span></a>
          <div class="modal__content">
            <p style="margin-bottom:20px;">私たちはいかなる状況でも一生懸命、真剣に仕事に取り組むこと</p>
            <p>損得ではなく人として正しいと思う判断をすることを何よりも大切にしています。</p>
          </div><!--modal__inner-->
      </div><!--modal-->

    </div>
  </section>

</div>

<?php get_footer(); ?>
