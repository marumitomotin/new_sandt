<?php

get_header(); ?>

<div class="container">
  <section id="slideshow"> <?php
    while (have_posts()) {
      the_post(); ?>
      <article>
        <h2><?=get_the_title()?></h2>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article> <?php
     } ?>
  </section>
</div> <?php

get_footer();
