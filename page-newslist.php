<?php
  /** Template Name: newslist */
  $r = get_template_directory_uri();
  get_header(2);
?>

<div id="new-top">

  <section id="information">
    <div class="container" style="max-width:1000px;margin:0 auto;padding-top:75px;padding-bottom:75px;">

      <h2 style="display:inline-block;margin-bottom:45px;margin-left: 15px;">NEWS</h2>

      <?php $postslist = get_posts(array('post_type'=>'post','posts_per_page'=>'-1','paged'=>$paged)); ?>

      <table>
        <?php foreach ($postslist as $post) : setup_postdata($post); ?>
          <tr>
            <td style="width:80px;background:#ffffff;">
              <span style="font-size:14px;font-weight:bold;"><?php echo get_the_date('Y.m.d');?></span>
            </td>
            <td style="background:#ffffff;">
              <span class="news-tag" style="padding:0 7px;"><?php the_field('アイコン'); ?></span>
            </td>
            <td style="padding-left:20px;background:#ffffff;">
              <a href="<?php the_permalink(); ?>">
                <span style="font-size:16px;font-weight:bold;"><i class="fa fa-play" aria-hidden="true" style="color:#EB5C01;"></i> <?php the_title(); ?></span>
              </a>
            </td>
          </tr>
        <?php endforeach; wp_reset_postdata();?>
      </table>

    </div>
  </section>

</div>

<?php get_footer(); ?>
