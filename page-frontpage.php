<?php

// Template Name: frontpage
$r = get_template_directory_uri();
get_header(); ?>

<section id="firstview">
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

<section id="about" class="shippori">
  <div class="container">

    <div class="circle-area">
      <div class="col-liq-5">
        <img src="<?=$r?>/images/top/circle_st.png" alt="S&T">
      </div>
      <div class="col-liq-2">
        <img src="<?=$r?>/images/top/icon_cross.png" alt="cross">
      </div>
      <div class="col-liq-5">
        <img src="<?=$r?>/images/top/circle_more.png" alt="S&T more">
      </div>
    </div>

    <img src="<?=$r?>/images/top/logo_top.svg" class="logo" alt="ロゴ">

    <p class="description">― 私たちの使命 ―</p>
    <h2 class="shippori">『不動産の収益と資産価値の最大化』</h2>
    <p class="description">オーナー様がご所有されている</p>
    <p class="description">アパートやマンションの賃貸経営のパートナーとして</p>
    <p class="description">必要不可欠な存在になることが</p>
    <p class="description">私たちの使命です。</p>

  </div>
</section>

<section id="information">
  <div class="container">

    <div class="title shippori">
      <div class="title-with-line">
        <h2 class="shippori">お知らせ</h2>
        <div>
          <hr class="hr-title">
          <p>Information</p>
        </div>
      </div>
      <p>
        <a href="/newslist/">
          一覧へ <img src="<?=$r?>/images/common/arrow.png" alt="矢印">
        </a>
      </p>
    </div> <?php

    $post_ids = get_posts([
      'post_type' => 'post',
      'posts_per_page' => 3,
      'oederby' => 'date',
      'oederby' => 'desc',
      'fields' => 'ids',
    ]); ?>

    <div style="max-width:810px;margin:0 0 0 auto;"> <?php
    foreach ($post_ids as $post_id) { ?>
      <a href="<?=get_the_permalink($post_id)?>">
        <span><?=get_the_date('Y.m.d', $post_id)?></span>
        <div class="row" style="gap:15px 0;">
          <div class="col-liq-3">
            <span class="seal-white"><?=get_field('アイコン', $post_id)?></span>
          </div>
          <div class="col-liq-9">
              <?=get_the_title($post_id);?>
          </div>
        </div>
      </a> <?php
    } ?>
    </div>

  </div>
</section>

<section id="topics">
  <div class="container">

    <div class="title shippori">
      <div class="title-with-line">
        <h2 class="shippori">トピックス</h2>
        <div>
          <hr class="hr-title">
          <p>Topics</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-liq-6">
        <div class="row">
          <div class="col-6">
            <a href="https://sandtmore.co.jp/" target="_blank">
              <div class="topics-wrap">
                <img src="<?=$r?>/images/top/topics_01.jpg" style="margin-bottom:15px;" alt="topics">
                <span>詳細はこちら</span>
              </div>
              <img src="<?=$r?>/images/top/logo_more.svg" style="margin-bottom:15px;" alt="S&T moreロゴ">
              <p>
                <span>建築プロデュース・<br class="sp-show">施設再⽣</span>
                <img src="<?=$r?>/images/common/arrow_fat_black.svg" alt="矢印アイコン">
              </p>
            </a>
          </div>
          <div class="col-6">
            <a href="/renovations/">
              <div class="topics-wrap">
                <img src="<?=$r?>/images/top/topics_02.jpg" style="margin-bottom:15px;" alt="topics">
                <span>詳細はこちら</span>
              </div>
              <img src="<?=$r?>/images/top/logo_suteki.svg" style="margin-bottom:7px;" alt="素敵賃貸ロゴ">
              <p>
                <span>リフォーム＆リノベ<br class="sp-show">事例</span>
                <img src="<?=$r?>/images/common/arrow_fat_black.svg" alt="矢印アイコン">
              </p>
            </a>
          </div>
        </div>
      </div>
      <div class="col-liq-6">
        <div class="row">
          <div class="col-6">
            <a href="/seto/">
              <div class="topics-wrap">
                <img src="<?=$r?>/images/top/topics_03.jpg" style="margin-bottom:15px;" alt="topics">
                <span>詳細はこちら</span>
              </div>
              <h3>地域活性化<br class="sp-show">プロデュース</h3>
              <p>
                <span>瀬⼾内Project</span>
                <img src="<?=$r?>/images/common/arrow_fat_black.svg" alt="矢印アイコン">
              </p>
            </a>
          </div>
          <div class="col-6">
            <a href="/magazines/">
              <div class="topics-wrap">
                <img src="<?=$r?>/images/top/topics_04.jpg" style="margin-bottom:15px;" alt="topics">
                <span>詳細はこちら</span>
              </div>
              <h3>メディア掲載<br class="sp-show">&nbsp;</h3>
              <p>
                <span>取材・You Tube</span>
                <img src="<?=$r?>/images/common/arrow_fat_black.svg" alt="矢印アイコン">
              </p>
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<section id="business">
  <div class="container">

    <div class="title shippori">
      <div class="title-with-line">
        <h2 class="shippori">事業一覧</h2>
        <div>
          <hr class="hr-title">
          <p>Business</p>
        </div>
      </div>
    </div>

    <a href="/service/#introduction">
      <img src="<?=$r?>/images/top/business_banner.jpg" style="width:100%;" alt="事業一覧">
      <h3 class="shippori" style="margin:15px 0;font-weight:bold !important;">
        賃貸不動産の管理・運営
        <img src="<?=$r?>/images/common/arrow_fat_black.svg" class="sp-hide" style="margin-left:40px;" alt="矢印アイコン">
      </h3>
    </a>
    <p style="margin-bottom:40px;line-height:2;">
      メイン事業である賃貸管理は、蕨市・さいたま市・川⼝市を中⼼にマンション・アパートの管理を⾏っております。賃貸管理に特化した社内体制と地域密着型管理だからこそ実現できる⼊居率の⾼さや充実したサービスでオーナー様の賃貸経営をサポート致します。
    </p>

    <div class="row">
      <div class="col-liq-6">
        <div class="row">
          <div class="col-6">
            <a href="/service/#broker">
              <img src="<?=$r?>/images/top/business_01.jpg" class="main-img" alt="topics">
              <div class="title">
                <h3 class="shippori" style="font-weight:bold !important;">不動産／売却・購入</h3>
                <img src="<?=$r?>/images/common/arrow_fat_black.svg" class="sp-hide" alt="矢印アイコン">
              </div>
            </a>
            <div class="row">
              <div class="col-liq-6">□不動産の購入</div>
              <div class="col-liq-6">□不動産の売却</div>
            </div>
          </div>
          <div class="col-6">
            <a href="/service/#rent">
              <img src="<?=$r?>/images/top/business_02.jpg" class="main-img" alt="topics">
              <div class="title">
                <h3 class="shippori" style="font-weight:bold !important;">店舗・テナント</h3>
                <img src="<?=$r?>/images/common/arrow_fat_black.svg" class="sp-hide" alt="矢印アイコン">
              </div>
            </a>
            <div class="row">
              <div class="col-liq-6">□店舗誘致</div>
              <div class="col-liq-8">□テナントリーシング</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-liq-6">
        <div class="row">
          <div class="col-6">
            <a href="/service/#howto">
              <img src="<?=$r?>/images/top/business_03.jpg" class="main-img" alt="topics">
              <div class="title">
                <h3 class="shippori" style="font-weight:bold !important;">土地活用</h3>
                <img src="<?=$r?>/images/common/arrow_fat_black.svg" class="sp-hide" alt="矢印アイコン">
              </div>
            </a>
            <div class="row">
              <div class="col-liq-6">□建築プロディース</div>
              <div class="col-liq-6">□空家活用</div>
              <div class="col-liq-6">□ロードサイド</div>
              <div class="col-liq-6">□医院施設</div>
            </div>
          </div>
          <div class="col-6">
            <a href="/service/#consulting">
              <img src="<?=$r?>/images/top/business_04.jpg" class="main-img" alt="topics">
              <div class="title">
                <h3 class="shippori" style="font-weight:bold !important;">不動産コンサルティング</h3>
                <img src="<?=$r?>/images/common/arrow_fat_black.svg" class="sp-hide" alt="矢印アイコン">
              </div>
            </a>
            <div class="row">
              <div class="col-liq-6">□相続対策</div>
              <div class="col-liq-6">□顧問サービス</div>
              <div class="col-liq-6">□調査分析</div>
              <div class="col-liq-6">□借地権・底地権</div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section> <?php

get_footer();
