<?php

// Template Name: magazines
$r = get_template_directory_uri();
query_posts([
  'post_type' => 'magazine',
  'posts_per_page' => '-1',
  'paged' => $paged
]);
get_header(); ?>

<section id="youtube">
  <div class="container" style="padding-top:90px;padding-bottom:60px;">

    <h2>MOVIE</h2>

    <div class="row">
      <div class="col-liq-4">
        <iframe width="100%" height="225" src="https://www.youtube.com/embed/bYH9j3rW8LE?si=v2Anm-FqjtA-R2Qq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <h4>企業CM「賃貸管理篇」</h4>
        <p style="text-align:right;">蕨市役所にて放映中</p>
      </div>
      <div class="col-liq-4">
        <iframe width="100%" height="225" src="https://www.youtube.com/embed/vHo7cSMV8VE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h4>S&Tグループ × SDGs</h4>
        <p style="text-align:right;">企画：蕨商⼯会議所</p>
      </div>
      <div class="col-liq-4">
        <iframe width="100%" height="225" src="https://www.youtube.com/embed/-G9x-TIlTlc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h4>『Gran Felicia』</h4>
        <p style="text-align:right;">企画：(株)エスアンドティモア</p>
      </div>
      <div class="col-liq-4">
        <iframe width="100%" height="225" src="https://www.youtube.com/embed/QYBjx8sHwcY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h4>『蕨のお店をご紹介』に取り上げられました</h4>
        <p style="text-align:right;">企画：蕨商⼯会議所</p>
      </div>
    </div>

  </div>
</section>

<section id="magazine">
  <div class="container">

    <h2>雑誌等掲載一覧</h2>

    <div class="row"> <?php
      while (have_posts()) {
        the_post();
        if (has_post_thumbnail()) {
          $image_id = get_post_thumbnail_id ();
          $image_url = wp_get_attachment_image_src ($image_id, true);
        } else {
            $image_url[0] = $r . '/images/thumbnail.png';
        } ?>
        <div class="col-liq-4">
          <a href="<?=the_permalink()?>">
            <img src="<?=$image_url[0]?>" alt="雑誌掲載等">
            <p style="margin:20px 0 10px 0;">
              <span class="seal-white" style="padding:0 10px;">雑誌等掲載</span>
            </p>
            <p style="font-size:16px;"><?=the_title()?></p>
          </a>
        </div> <?php
      } ?>
    </div>

  </div>
</section> <?php

get_footer();
