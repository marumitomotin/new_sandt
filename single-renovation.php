<?php
  /** Chintai Kanri Template */
  get_header(); 
?>

  <div class="container" style="padding:42px 20px 150px 15px;">

    <section id="renovation" style="padding-bottom:20px;max-width:740px;margin:0 auto;">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php
          $diff = '';
          $day = new DateTime(get_the_date('Y-m-d'));
          $today = new DateTime('now');
          $diff = $day->diff($today);
        ?>

        <?php if (get_field('アイコン') == 'シングル') { ?>
          <div class="single-tag" style="margin-left:0;margin-bottom:30px;">シングル</div>
        <?php } else if (get_field('アイコン') == 'ファミリー') { ?>
          <div class="family-tag" style="margin-left:0;margin-bottom:30px;">ファミリー</div>
        <?php } else if (get_field('アイコン') == 'DINKS') { ?>
          <div class="dinks-tag" style="margin-left:0;margin-bottom:30px;">DINKS</div>
        <?php } ?>

        <?php if ($diff->days < 14) { ?>
          <div class="new-tag">NEW</div>
        <?php } ?>

        <h2 style="font-size:24px;font-weight:normal;margin-bottom:40px;"><?php the_title(); ?></h2>

        <?php $image = get_field('メイン画像'); ?>
        <?php $image1 = get_field('サブ画像１'); ?>
        <?php $image2 = get_field('サブ画像２'); ?>
        <?php $image3 = get_field('サブ画像３'); ?>
        <?php $image4 = get_field('サブ画像４'); ?>

        <img src="<?=$image['url']?>" style="margin:30px 0;" alt="空室対策">

        <div id="renovation-description">

          <?php the_content(); ?>

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

        <div class="row">
          <div class="col-lg-6">
            <?php if ($image1['url']) { ?>
              <img src="<?=$image1['url']?>" style="margin-top:30px;width:355px;height:266px;object-fit:cover;" alt="空室対策">
            <?php } ?>
          </div>
          <div class="col-lg-6">
            <?php if ($image2['url']) { ?>
              <img src="<?=$image2['url']?>" style="margin-top:30px;width:355px;height:266px;object-fit:cover;" alt="空室対策">
            <?php } ?>
          </div>
        </div>

        <div class="row" style="margin-bottom:60px !important;">
          <div class="col-lg-6">
            <?php if ($image3['url']) { ?>
              <img src="<?=$image3['url']?>" style="margin-top:30px;width:355px;height:266px;object-fit:cover;" alt="空室対策">
            <?php } ?>
          </div>
          <div class="col-lg-6">
            <?php if ($image4['url']) { ?>
              <img src="<?=$image4['url']?>" style="margin-top:30px;width:355px;height:266px;object-fit:cover;" alt="空室対策">
            <?php } ?>
          </div>
        </div>

        <a href="/renovations/">
          <div class="white-c-button">リフォーム＆リノベーション一覧へ戻る</div>
        </a>

      <?php endwhile; ?>

    </section>

  </div>

  <?php get_footer(); ?>
