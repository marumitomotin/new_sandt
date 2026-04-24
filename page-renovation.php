<?php

// Template Name: renovation
$r = get_template_directory_uri();
query_posts([
  'post_type' => 'renovation',
  'posts_per_page' => '-1',
  'paged' => $paged]);
get_header(); ?>

<section id="renovation">
  <div class="container">

    <h2><img src="<?=$r?>/images/suteki/suteki_logo.png" alt="recommend"></h2>
    <h3>
      デザイン性が⾼く、住み⼼地の良い空間を賃貸住宅に。<br>
      住む⼈に喜んでもらえるお部屋、それは同時にオーナー様の賃貸不動産に<br>
      付加価値を与えることになります。<br>
      その想いをカタチにしたのがS&Tオリジナルブランドの『ステキ賃貸』です。
    </h3>

    <div class="row"> <?php
      while (have_posts()) {
        the_post();
        $image = get_field('メイン画像');
        $diff = '';
        $day = new DateTime(get_the_date('Y-m-d'));
        $today = new DateTime('now');
        $diff = $day->diff($today); ?>
        <div class="col-liq-4">
          <a href="<?php the_permalink(); ?>">
            <div class="box">
                <img src="<?=$image['url']?>" alt="空室対策"> <?php
                if (get_field('アイコン') == 'シングル') { ?>
                  <div class="single-tag" style="margin-left:25px;">シングル</div> <?php
                } else if (get_field('アイコン') == 'ファミリー') { ?>
                  <div class="family-tag" style="margin-left:25px;">ファミリー</div> <?php
                } else if (get_field('アイコン') == 'DINKS') { ?>
                  <div class="dinks-tag" style="margin-left:25px;">DINKS</div> <?php
                }
                if ($diff->days < 14) { ?>
                  <div class="new-tag">NEW</div> <?php
                } ?>
                <p><?=get_the_title()?></p>
                <p><?=get_field('住所')?></p>
            </div>
          </a>
        </div> <?php
      } ?>
    </div>

  </div>
</section> <?php

get_footer();
