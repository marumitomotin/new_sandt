<?php
	/** Default single page*/
	$r = get_template_directory_uri();
	get_header(); 
?>

	<div class="container" style="padding:60px 20px 40px 20px;">

		<div class="content-area single-p" style="max-width:880px;float:left;">

			<section id="section1" style="padding-bottom:40px;">
				<?php while ( have_posts() ) : the_post(); ?>

					<h2 id="information" class="with-border" style="font-size:20px;text-align:left;padding-bottom:10px;margin-bottom:27px;">
            <table style="max-width:240px;margin-bottom:0;">
              <tr>
                <td style="padding:0;width:95px;font-size:20px;background:#ffffff;"><?php echo get_the_date('Y.n.j'); ?></td>
                <td style="padding:5px 0 0 0;width:120px;background:#ffffff;"><span class="news-tag" style="padding:0 7px"><?php the_field('アイコン'); ?></span></td>
              </tr>
            </table>
						<?php the_title() ?>
					</h2>
					
					<?php the_content(); ?>

				<?php endwhile; ?>
			</section>

		</div>

		<div class="right-sidebar">

			<p class="sidebar-title" style="margin-top:9px;font-size:18px;margin-bottom:16px !important;">一覧</p>


			<?php for ($i=2040; $i>1999; --$i) { ?>
				<?php query_posts(array('year'=>$i,'post_type'=>'post','paged'=>$paged)); ?>

				<?php if (have_posts()) { ?>
				<ul id="menu">	
					<li>
						<div class="main_menu">
							<img src="<?=$r?>/images/title-arrow.png" style="margin:0 3px 3px 0;display:initial;"> <?=$i?>
						</div>
						<ul class="sub_menu">
						<?php while ( have_posts() ) : the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>">
									<?php echo get_the_date('Y.m.d');?><br>
									<?php the_title(); ?>
								</a>
							</li> 
						<?php endwhile; ?>
						</ul>
					</li>
				</ul>
				<?php } ?>


				<?php wp_reset_query(); ?>
			<?php } ?>

		</div>

		<div class="clearfix"></div>

	</div>

	<?php get_footer(); ?>
