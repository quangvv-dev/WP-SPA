<?php


/**
 * Twenty Fifteen only works in WordPress 4.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'royalspa_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Twenty Fifteen 1.0
 */
function royalspa_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on royalspa, use a find and replace
	 * to change 'royalspa' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'royalspa', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'royalspa' ),
		'social'  => __( 'Social Links Menu', 'royalspa' ),
		'menufooter'=>__('Menu footer', 'royalspa'),
	) );
	// This theme uses wp_nav_menu() in two locations.
	
}
endif; // royalspa_setup
add_action( 'after_setup_theme', 'royalspa_setup' );

/**
 * Register widget area.
 *
 * @since Twenty Fifteen 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function royalspa_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar Left', 'royalspa' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'royalspa' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'royalspa_init' );

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'homepage-thumb', 200, 200, true ); // (cropped)
    add_image_size( 'thumbnail-sidebar', 170, 177, true ); // (cropped)
    add_image_size( 'thumbnail-sidebar1', 160, 100, true ); // (cropped)
    add_image_size( 'thumbnail-feedback', 200, 200, true ); // (cropped)
    add_image_size( 'thumbnail-question', 300, 250, true ); // (cropped)
    add_image_size( 'thumbnail-cam_nhan', 150, 150, true ); // (cropped)
}

include('inc/hook.php');
include('inc/service.php');
include('inc/custom-field.php');

function question_posts_query( $query ) {

	if ( !empty($query->query) && ( $query->query['category_name'] == 'spa-cong-nghe-cao' || $query->query['category_name'] == 'phun-xam-tham-my' ) ) {
        $query->set( 'post_type', 'service' );
        $query->set( 'posts_per_page', 10);
    }
    
     return $query;
}
add_filter( 'pre_get_posts', 'question_posts_query' );

function textFormShortcode( ) {
		$khachHangTitle = ot_get_option('khach_hang_title', 'ROYAL SPA');
		$khachHangAddress = ot_get_option('khach_hang_address', 'Royal Spa - CS1: Số 38 ngõ 12 Láng Hạ - Ba Đình - Hà Nội; CS2: Số 8 ngõ 1 Tôn Thất Tùng - Đống Đa - Hà Nội');
		$khachHangContact = ot_get_option('khach_hang_contact', 'Tel: 0982.966.663 ; 0982.898.663 / Email: royalspa.hanoi@gmail.com');
	?>
	<h3><?php echo $khachHangTitle ?></h3>
	<p><?php echo $khachHangAddress ?></p>
	<p><?php echo $khachHangContact ?></p>
	<?php
}
add_shortcode( 'text-form', 'textFormShortcode' );

//kích hoạt khung soạn thảo đầy đủ cho WordPress
if ( ! function_exists( 'devvn_ilc_mce_buttons' ) ) {
    function devvn_ilc_mce_buttons($buttons){
        array_push($buttons,
             "alignjustify",
             "subscript",
             "superscript"
        );
        return $buttons;
    }
    add_filter("mce_buttons", "devvn_ilc_mce_buttons");
}
if ( ! function_exists( 'devvn_ilc_mce_buttons_2' ) ) {
    function devvn_ilc_mce_buttons_2($buttons){
        array_push($buttons,
             "backcolor",
             "anchor",
             "fontselect",
             "fontsizeselect",
             "cleanup"
        );
        return $buttons;
    }
    add_filter("mce_buttons_2", "devvn_ilc_mce_buttons_2");
}
// Customize mce editor font sizes
if ( ! function_exists( 'devvn_mce_text_sizes' ) ) {
   function devvn_mce_text_sizes( $initArray ){
      $initArray['fontsize_formats'] = "9px 10px 12px 13px 14px 16px 17px 18px 19px 20px 21px 24px 28px 32px 36px";
      return $initArray;
   }
   add_filter( 'tiny_mce_before_init', 'devvn_mce_text_sizes' );
}

/**
 * Hooks the WP cpt_post_types filter 
 *
 * @param array $post_types An array of post type names that the templates be used by
 * @return array The array of post type names that the templates be used by
 **/
function my_cpt_post_types( $post_types ) {
    $post_types[] = 'service';
    return $post_types;
}
add_filter( 'cpt_post_types', 'my_cpt_post_types' );