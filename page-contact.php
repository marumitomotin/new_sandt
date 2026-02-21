<?php

// Template Name: contact
$r = get_template_directory_uri();
get_header(); ?>

<section id="firstview">
  <div class="container">
    <h1 class="shippori">お問い合わせ</h1>
  </div>
</section>

<section id="content">
  <div class="container">

    <h2 class="shippori">Contact</h2>
    <h3 class="shippori">お問い合わせ</h3>

    <?php echo do_shortcode('[contact-form-7 id="28" title="お問い合わせ"]') ?>

  </div>
</section> <?php

get_footer();
