<?php

// Template Name: kaiyaku
$r = get_template_directory_uri();
get_header();

echo do_shortcode('[contact-form-7 id="1083" title="解約申請WEBフォーム"]');

get_footer();
