<?php

// Template Name: newslist
$r = get_template_directory_uri();
get_header(); ?>

<div id="new-top">

  <section id="information">
    <div class="container" style="">

      <h1>NEWS</h1>

      <?php $postslist = get_posts(array('post_type'=>'post','posts_per_page'=>'-1','paged'=>$paged)); ?>

      <table>
        <?php foreach ($postslist as $post) : setup_postdata($post); ?>
          <tr>
            <td>
              <span style="font-size:14px;font-weight:bold;"><?php echo get_the_date('Y.m.d');?></span>
            </td>
            <td>
              <span class="seal-white"><?php the_field('アイコン'); ?></span>
            </td>
            <td>
              <a href="<?php the_permalink(); ?>">
                <svg width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                  <polygon points="0,0 12,6 0,12" fill="#EB5C01"/>
                </svg>
                <span style="font-size:16px;font-weight:bold;">
                  <?php the_title(); ?>
                </span>
              </a>
            </td>
          </tr>
        <?php endforeach; wp_reset_postdata();?>
      </table>

    </div>
  </section>

</div> <?php

get_footer();
