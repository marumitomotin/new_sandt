<?php

$r = get_template_directory_uri();
get_header(); ?>

<div class="container">

  <section id="renovation" style="max-width:740px;margin:0 auto;"> <?php

    while (have_posts()) {
      the_post();
      $diff = '';
      $day = new DateTime(get_the_date('Y-m-d'));
      $today = new DateTime('now');
      $diff = $day->diff($today);
      if (get_field('アイコン') == 'シングル') { ?>
        <div class="single-tag" style="margin-left:0;margin-bottom:30px;">シングル</div> <?php
      } else if (get_field('アイコン') == 'ファミリー') { ?>
        <div class="family-tag" style="margin-left:0;margin-bottom:30px;">ファミリー</div> <?php
      } else if (get_field('アイコン') == 'DINKS') { ?>
        <div class="dinks-tag" style="margin-left:0;margin-bottom:30px;">DINKS</div> <?php
      }
      if ($diff->days < 14) {
        echo '<div class="new-tag">NEW</div>';
      } ?>
      <h1><?=get_the_title()?></h1> <?php
      $image = get_field('メイン画像');
      $image1 = get_field('サブ画像１');
      $image2 = get_field('サブ画像２');
      $image3 = get_field('サブ画像３');
      $image4 = get_field('サブ画像４'); ?>
      <img src="<?=$image['url']?>" style="margin:30px 0;" alt="空室対策">
      <div id="renovation-description">
        <p><?=get_the_content()?></p>
        <hr style="border:none;border-top:1px solid #b5b5b5;margin:30px 0;">
        <table>
          <tr>
            <td>住所</td>
            <td><?php the_field('住所'); ?></td>
          </tr>
          <tr>
            <td>間取り</td>
            <td><?php the_field('間取り'); ?></td>
          </tr>
          <tr>
            <td>賃料</td>
            <td><?php the_field('賃料'); ?></td>
          </tr>
        </table>
      </div>

      <div class="row" style="margin-bottom:40px;">
        <div class="col-liq-6">
          <?php if ($image1['url']) { ?>
            <img src="<?=$image1['url']?>" alt="空室対策">
          <?php } ?>
        </div>
        <div class="col-liq-6">
          <?php if ($image2['url']) { ?>
            <img src="<?=$image2['url']?>" alt="空室対策">
          <?php } ?>
        </div>
        <div class="col-liq-6">
          <?php if ($image3['url']) { ?>
            <img src="<?=$image3['url']?>" alt="空室対策">
          <?php } ?>
        </div>
        <div class="col-liq-6">
          <?php if ($image4['url']) { ?>
            <img src="<?=$image4['url']?>" alt="空室対策">
          <?php } ?>
        </div>
      </div> <?php

    } ?>

    <a href="/renovations/" class="btn-white">
      リフォーム＆リノベーション一覧へ戻る
      <img src="<?=$r?>/images/suteki/arrow_black.png" alt="矢印">
    </a>

  </section>

</div> <?php

get_footer();
