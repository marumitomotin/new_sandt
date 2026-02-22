<?php

/*************************************************
 ルーティング
**************************************************/

function custom_rewrite_rule() {
  /***** SDGS *****/
  add_rewrite_rule('^sustainable/?$','index.php?page_sustainable=1','top');
}
add_action('init', 'custom_rewrite_rule', 10, 0);

function custom_query_vars($vars){
  $vars[] = 'page_sustainable';
  return $vars;
}
add_filter('query_vars', 'custom_query_vars');

/***** テンプレート *****/
add_filter('template_include', function($template) {
  // 固定ページ
  if (get_query_var('page_sustainable')) {
    $new_template = locate_template('page-sustainable.php');
    if ($new_template) return $new_template;
  }
  return $template;
});

/*
// リライトルールデバッグ
add_action('template_redirect', function() {
  global $wp, $wp_rewrite;
  $rules = $wp_rewrite->wp_rewrite_rules();
  if ( !empty($rules) ) {
    foreach ($rules as $regex => $query) {
      if (preg_match('#^' . $regex . '#', $wp->request, $matches)) {
        echo '<pre>';
        echo "Matched rule: " . esc_html($regex) . "\n";
        echo "Query: " . esc_html($query) . "\n";
        echo "Request: " . esc_html($wp->request) . "\n";
        echo "Matches:\n";
        print_r($matches);
        echo '</pre>';
        exit;
      }
    }
  }
});

/*************************************************
 必要なオリジナル関数
**************************************************/

/***** デバッガ *****/

function my_debug ($target) {
  echo '<pre>';
  var_dump($target);
  echo '</pre>';
  die();
}

/*************************************************
 Wordpressのカスタム設定
**************************************************/

/***** Gutenbergの無効化 *****/

add_filter('use_block_editor_for_post', '__return_false', 10);
function remove_block_library_style(){
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('wp-block-library-theme');
}
add_action('wp_enqueue_scripts', 'remove_block_library_style');

/***** Feedの無効化 *****/

remove_action('do_feed_rdf', 'do_feed_rdf');
remove_action('do_feed_rss', 'do_feed_rss');
remove_action('do_feed_rss2', 'do_feed_rss2');
remove_action('do_feed_atom', 'do_feed_atom');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);

add_action( 'init', 'create_post_type' );
function create_post_type() {

  register_post_type( 'chintaikanri',
    array(
      'labels' => array(
        'name' => __( '不動産賃貸管理業' ),
        'singular_name' => __( '不動産賃貸管理業' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' =>5, 
       'supports' => array('title','editor','thumbnail',
      'custom-fields','excerpt','author','trackbacks',
      'comments','revisions','page-attributes')
     )
   );

  register_post_type( 'chintai',
    array(
      'labels' => array(
        'name' => __( '不動産賃貸業' ),
        'singular_name' => __( '不動産賃貸業' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' =>5, 
       'supports' => array('title','editor','thumbnail',
      'custom-fields','excerpt','author','trackbacks',
      'comments','revisions','page-attributes')
     )
   );

  register_post_type( 'tochi',
    array(
      'labels' => array(
        'name' => __( '土地活用' ),
        'singular_name' => __( '土地活用' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' =>5,
       'supports' => array('title','editor','thumbnail',
      'custom-fields','excerpt','author','trackbacks',
      'comments','revisions','page-attributes')
     )
   );

  register_post_type( 'renovation',
    array(
      'labels' => array(
        'name' => __( '空室対策' ),
        'singular_name' => __( '空室対策' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' =>5,
       'supports' => array('title','editor','thumbnail',
      'custom-fields','excerpt','author','trackbacks',
      'comments','revisions','page-attributes')
     )
   );

  register_post_type( 'magazine',
    array(
      'labels' => array(
        'name' => __( '雑誌等掲載' ),
        'singular_name' => __( '雑誌等掲載' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' =>5, 
       'supports' => array('title','editor','thumbnail',
      'custom-fields','excerpt','author','trackbacks',
      'comments','revisions','page-attributes')
     )
   );

  register_post_type( 'slick_slider',
    array(
      'labels' => array(
        'name' => __( 'スライダー' ),
        'singular_name' => __( 'スライダー' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' =>5, 
       'supports' => array('title','editor','thumbnail',
      'custom-fields','excerpt','author','trackbacks',
      'comments','revisions','page-attributes')
     )
   );

  register_post_type( 'slick_slider_sp',
    array(
      'labels' => array(
        'name' => __( 'スライダー（スマホ）' ),
        'singular_name' => __( 'スライダー（スマホ）' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' =>5, 
       'supports' => array('title','editor','thumbnail',
      'custom-fields','excerpt','author','trackbacks',
      'comments','revisions','page-attributes')
     )
   );
}

add_filter( 'image_send_to_editor', 'remove_image_attribute', 10 );
add_filter( 'post_thumbnail_html', 'remove_image_attribute', 10 );
