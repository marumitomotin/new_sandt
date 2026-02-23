<?php

get_header(); ?>

<div class="container">
  <div class="content-area">
    <section id="slideshow"> <?php

      while (have_posts()) {
        the_post(); ?>
        <article>
          <h2><?=get_the_title()?></h2>
          <div class="entry-content">
            <?=the_content()?>
          </div>
        </article> <?php
       } ?>
    </section>
  </div>
  <div class="sidebar" style="padding: 0 18px 0 0;max-width:200px;position:initial;">
    <p class="sidebar-title" style="margin-top:9px;font-size:18px;">CONTENT</p>
    <?php get_sidebar(); ?>
  </div>
  <div class="clearfix"></div>
</div> <?php

get_footer();
