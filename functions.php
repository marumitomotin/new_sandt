<?php

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

}

add_filter( 'image_send_to_editor', 'remove_image_attribute', 10 );
add_filter( 'post_thumbnail_html', 'remove_image_attribute', 10 );
