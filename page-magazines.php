<?php

// Template Name: magazines
$r = get_template_directory_uri();
query_posts([
  'post_type' => 'magazine',
  'posts_per_page' => '-1',
  'paged' => $paged
]);
get_header(); ?>

<section id="magazine">
  <div class="container">

    <h1>雑誌等掲載一覧</h1>

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
