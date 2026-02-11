<?php
	/** Chintai Kanri Template */
	get_header(); 
?>

	<div class="container" style="padding:60px 20px 40px 15px;">

		<div class="content-area">

			<section id="section1" style="padding-bottom:20px;">
				<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', get_post_format() );
					endwhile;
				?>
			</section>

		</div>

		<div class="sidebar" style="padding: 0 18px 0 0;max-width:200px;position:initial;">

			<p class="sidebar-title" style="margin-top:9px;font-size:18px;">CONTENT</p>
			<?php get_sidebar(); ?>

		</div>

		<div class="clearfix"></div>
	</div>

	<?php get_footer(); ?>
