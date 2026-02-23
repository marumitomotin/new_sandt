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

<section id="top-about" class="shippori">
  <div class="container">

    <div class="circle-area">
      <img src="<?=$r?>/images/top/circle_st.png" alt="S&T">
      <img src="<?=$r?>/images/top/icon_cross.png" alt="cross">
      <img src="<?=$r?>/images/top/circle_more.png" alt="S&T more">
    </div>

    <img src="<?=$r?>/images/top/logo_top.svg" class="logo" alt="ロゴ">

    <p style="margin-bottom:15px;">― 私たちの使命 ―</p>
    <h2 class="shippori">『不動産の収益と資産価値の最大化』</h2>
    <p class="description">オーナー様がご所有されている</p>
    <p class="description">アパートやマンションの賃貸経営のパートナーとして</p>
    <p class="description">必要不可欠な存在になることが</p>
    <p class="description">私たちの使命です。</p>

  </div>
</section>

<section id="top-city-photo">
  <img src="<?=$r?>/images/top/city_photo.jpg" alt="街の写真">
</section>

<section id="top-information">
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
          一覧へ <img src="<?=$r?>/images/top/arrow.png" alt="矢印">
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

    <table> <?php
      foreach ($post_ids as $post_id) { ?>
        <tr>
          <td colspan="2" style="padding-bottom:0;">
            <?=get_the_date('Y.m.d', $post_id)?>
          </td>
        </tr>
        <tr>
          <td style="border-bottom:1px solid #000000;width:20%;">
            <span class="seal-white"><?=get_field('アイコン', $post_id)?></span>
          </td>
          <td style="border-bottom:1px solid #000000;">
            <a href="<?=get_the_permalink($post_id)?>">
              <?=get_the_title($post_id);?>
            </a>
          </td>
        </tr> <?php
      } ?>
    </table>

  </div>
</section>

<section id="top-topics">
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
      <div class="col-liq-3">
        <a href="https://sandtmore.co.jp/" target="_blank">
          <div class="topics-wrap">
            <img src="<?=$r?>/images/top/topics_01.jpg" style="margin-bottom:15px;" alt="topics">
            <span>詳細はこちら</span>
          </div>
          <img src="<?=$r?>/images/top/logo_more.svg" style="margin-bottom:15px;" alt="S&T moreロゴ">
          <p>
            <span>建築プロデュース・施設再⽣</span>
            <img src="<?=$r?>/images/top/arrow_fat.svg" alt="矢印アイコン">
          </p>
        </a>
      </div>
      <div class="col-liq-3">
        <a href="/renovations/">
          <div class="topics-wrap">
            <img src="<?=$r?>/images/top/topics_02.jpg" style="margin-bottom:15px;" alt="topics">
            <span>詳細はこちら</span>
          </div>
          <img src="<?=$r?>/images/top/logo_suteki.svg" style="margin-bottom:7px;" alt="素敵賃貸ロゴ">
          <p>
            <span>リフォーム＆リノベ事例</span>
            <img src="<?=$r?>/images/top/arrow_fat.svg" alt="矢印アイコン">
          </p>
        </a>
      </div>
      <div class="col-liq-3">
        <a href="/seto/">
          <div class="topics-wrap">
            <img src="<?=$r?>/images/top/topics_03.jpg" style="margin-bottom:15px;" alt="topics">
            <span>詳細はこちら</span>
          </div>
          <h3 style="margin-bottom:15px;">地域活性化プロデュース</h3>
          <p>
            <span>瀬⼾内Project</span>
            <img src="<?=$r?>/images/top/arrow_fat.svg" alt="矢印アイコン">
          </p>
        </a>
      </div>
      <div class="col-liq-3">
        <a href="/magazines/">
          <div class="topics-wrap">
            <img src="<?=$r?>/images/top/topics_04.jpg" style="margin-bottom:15px;" alt="topics">
            <span>詳細はこちら</span>
          </div>
          <h3 style="margin-bottom:15px;">メディア掲載</h3>
          <p>
            <span>取材・You Tube</span>
            <img src="<?=$r?>/images/top/arrow_fat.svg" alt="矢印アイコン">
          </p>
        </a>
      </div>
    </div>

  </div>
</section>

<section id="top-business">
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

    <img src="<?=$r?>/images/top/business_banner.jpg" style="width:100%;" alt="事業一覧">
    <h3 class="shippori" style="margin:20px 0;">
      <a href="/service/#introduction">
        賃貸不動産の管理・運営
        <img src="<?=$r?>/images/top/arrow_fat.svg" style="margin-left:40px;" alt="矢印アイコン">
      </a>
    </h3>
    <p style="margin-bottom:40px;line-height:2;">
      メイン事業である賃貸管理は、蕨市・さいたま市・川⼝市を中⼼にマンション・アパートの管理を⾏っております。賃貸管理に特化した社内体制と地域密着型管理だからこそ実現できる⼊居率の⾼さや充実したサービスでオーナー様の賃貸経営をサポート致します。
    </p>

    <div class="row">
      <div class="col-liq-3">
        <img src="<?=$r?>/images/top/business_01.jpg" class="main-img" alt="topics">
        <a href="/service/#broker">
          <div class="title">
            <h3 class="shippori">不動産／売却・購入</h3>
            <img src="<?=$r?>/images/top/arrow_fat.svg" alt="矢印アイコン">
          </div>
        </a>
        <table>
          <tr>
            <td>□不動産の購入</td>
            <td>□不動産の売却</td>
          </tr>
        </table>
      </div>
      <div class="col-liq-3">
        <img src="<?=$r?>/images/top/business_02.jpg" class="main-img" alt="topics">
        <a href="/service/#rent">
          <div class="title">
            <h3 class="shippori">店舗・テナント</h3>
            <img src="<?=$r?>/images/top/arrow_fat.svg" alt="矢印アイコン">
          </div>
        </a>
        <table>
          <tr>
            <td>□店舗誘致</td>
          </tr>
          <tr>
            <td>□テナントリーシング</td>
          </tr>
        </table>
      </div>
      <div class="col-liq-3">
        <img src="<?=$r?>/images/top/business_03.jpg" class="main-img" alt="topics">
        <a href="/service/#howto">
          <div class="title">
            <h3 class="shippori">土地活用</h3>
            <img src="<?=$r?>/images/top/arrow_fat.svg" alt="矢印アイコン">
          </div>
        </a>
        <table>
          <tr>
            <td>□建築プロディース</td>
            <td>□空家活用</td>
          </tr>
          <tr>
            <td>□ロードサイド</td>
            <td>□医院施設</td>
          </tr>
        </table>
      </div>
      <div class="col-liq-3">
        <img src="<?=$r?>/images/top/business_04.jpg" class="main-img" alt="topics">
        <a href="/service/#consulting">
          <div class="title">
            <h3 class="shippori">不動産コンサルティング</h3>
            <img src="<?=$r?>/images/top/arrow_fat.svg" alt="矢印アイコン">
          </div>
        </a>
        <table>
          <tr>
            <td>□相続対策</td>
            <td>□顧問サービス</td>
          </tr>
          <tr>
            <td>□調査分析</td>
            <td>□借地権・底地権</td>
          </tr>
        </table>
      </div>
    </div>

  </div>
</section> <?php

get_footer();
