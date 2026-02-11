<?php
	/** Template Name: contact */
	$r = get_template_directory_uri();
	get_header();
?>

	<section id="contact">
		<div class="container" style="padding-top:75px;padding-bottom:60px;">

				<p class="l-standard-p" style="text-align:center;margin-bottom:5px;">お問い合わせ</p>
				<h2 class="l-text" style="margin-bottom:26px;">CONTACT</h2>

				<?php echo do_shortcode('[contact-form-7 id="28" title="お問い合わせ"]') ?>

		</div>
	</section>

<?php get_footer(); ?>
