<?php
	/** Template Name: magazines */
	$r = get_template_directory_uri();
	query_posts(array('post_type'=>'magazine','posts_per_page'=>'-1','paged'=>$paged));
	get_header();
?>

	<section id="magazine">
		<div class="container" style="padding-top:50px;padding-bottom:65px;">

			<h2 class="l-text" style="margin-bottom:40px;">雑誌等掲載一覧</h2>

			<div class="row" style="margin-bottom:48px;">

			<?php $i=1; while ( have_posts() ) : the_post(); ?>

				<?php if ( has_post_thumbnail() ) {
					$image_id = get_post_thumbnail_id ();
					$image_url = wp_get_attachment_image_src ($image_id, true);
				} else {
						$image_url[0] = $r . '/images/thumbnail.png';
				} ?>

				<div class="col-lg-4">
					<a href="<?php the_permalink(); ?>">
						<img src="<?=$image_url[0]?>" alt="雑誌掲載等">
						<div class="small-tag-seal">雑誌等掲載</div>
						<p style="font-size:16px;"><?php the_title(); ?></p>
					</a>
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
