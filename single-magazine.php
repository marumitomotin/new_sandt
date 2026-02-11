<?php
	/** Magazine Template */
	get_header(); 
?>

<section id="section1" style="padding-bottom:55px;">
	<div class="container" style="max-width:740px;padding-top:90px;">

		<h2 class="l-text" style="margin-bottom:12px;">雑誌等掲載</h2>

	<?php while ( have_posts() ) : the_post(); ?>
		<h3 style="font-size:32px;font-weight:normal;text-align:center;margin-bottom:55px;"><?php the_title(); ?></h3>
		<?php the_content(); ?>	
	<?php endwhile ?>

		<a href="/magazines/">
			<div class="white-c-button">
				メディア一覧へ戻る
			</div>
		</a>

	</div>
</section>

<?php get_footer(); ?>
