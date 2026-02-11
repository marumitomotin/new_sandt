<?php
  /** Template Name: renovation */
  $r = get_template_directory_uri();
  query_posts(array('post_type'=>'renovation','posts_per_page'=>'-1','paged'=>$paged));
  get_header();
?>

  <section id="renovation">
    <div class="container" style="padding-top:68px;padding-bottom:95px;max-width:1160px;">

      <h2><img src="<?=$r?>/images/suteki_logo_a.png" alt="recommend"></h2>
      <p style="text-align:center;font-size:18px;font-weight:bold;line-height:2.2;margin-top:25px;margin-bottom:65px;color:#3e3e3e;">
        デザイン性が⾼く、住み⼼地の良い空間を賃貸住宅に。<br>
        住む⼈に喜んでもらえるお部屋、それは同時にオーナー様の賃貸不動産に<br>
        付加価値を与えることになります。<br>
        その想いをカタチにしたのがS&Tオリジナルブランドの『ステキ賃貸』です。
      </p>

      <div class="row" style="margin-bottom:48px;">

      <?php $i=1; while ( have_posts() ) : the_post(); ?>

        <?php $image = get_field('メイン画像'); ?>
        <?php
          $diff = '';
          $day = new DateTime(get_the_date('Y-m-d'));
          $today = new DateTime('now');
          $diff = $day->diff($today);
        ?>


        <div class="col-lg-4">
          <div style="border:1px solid #F0F0F0;padding-bottom:20px;max-width:366px;margin:0 auto;height:100%;">
          <a href="<?php the_permalink(); ?>">
            <img src="<?=$image['url']?>" alt="空室対策" style="width:355px;height:266px;object-fit:cover;">
            <?php if (get_field('アイコン') == 'シングル') { ?>
              <div class="single-tag" style="margin-left:25px;">シングル</div>
            <?php } else if (get_field('アイコン') == 'ファミリー') { ?>
              <div class="family-tag" style="margin-left:25px;">ファミリー</div>
            <?php } else if (get_field('アイコン') == 'DINKS') { ?>
              <div class="dinks-tag" style="margin-left:25px;">DINKS</div>
            <?php } ?>

            <?php if ($diff->days < 14) { ?>
              <div class="new-tag">NEW</div>
            <?php } ?>

            <p style="font-size:14px;max-width:280px;font-weight:bold;line-height:1.6;margin-left:25px;margin-bottom:10px;"><?php the_title(); ?></p>
            <p style="font-size:12px;color:#CCCCCC;margin-left:25px;"><?php the_field('住所'); ?></p>
          </a>
          </div>
        </div>

      <?php if ($i%3 == 0) { ?>
      </div>
      <div class="row" style="margin-bottom:48px;">
      <?php } ?>

        <?php $i++; ?>
      <?php endwhile; ?>

      </div>

    </div>
  </section>

<?php get_footer(); ?>
