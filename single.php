<?php

/** Default single page*/
$r = get_template_directory_uri();
get_header(); ?>

<div class="container">
  <div class="row">

    <div class="post-content-area single-p">
      <section style="padding-bottom:40px;"> <?php
        while (have_posts()) {
          the_post(); ?>
          <h2 id="information" class="with-border" style="font-size:20px;text-align:left;padding-bottom:10px;margin-bottom:27px;">
            <div class="above-title">
              <span><?=get_the_date('Y.n.j')?></span>
              <span class="seal-white" style="font-size:14px;"><?php the_field('アイコン'); ?></span>
            </div>
            <?=get_the_title()?>
          </h2> <?php
          the_content();
        } ?>
      </section>
    </div>

    <div class="post-right-sidebar">
      <p class="sidebar-title">一覧</p> <?php
      for ($i=2040; $i>1999; --$i) {
        query_posts(array('year'=>$i,'post_type'=>'post','paged'=>$paged));
        if (have_posts()) { ?>
          <ul id="menu">
            <li>
              <div class="main-menu">
                <img src="<?=$r?>/images/post/green-triangle.png" class="triangle">
                <span><?=$i?></span>
              </div>
              <ul class="sub-menu"> <?php
                while ( have_posts() ) {
                  the_post(); ?>
                  <li>
                    <a href="<?php the_permalink(); ?>">
                      <?php echo get_the_date('Y.m.d');?><br>
                      <?php the_title(); ?>
                    </a>
                  </li> <?php
                } ?>
              </ul>
            </li>
          </ul> <?php
        }
        wp_reset_query();
      } ?>
    </div>

  </div>
</div> <?php

get_footer();
