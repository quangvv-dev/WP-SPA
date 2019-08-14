<?php 


add_action( 'init', 'create_slide_posttype' );
function create_slide_posttype() {
    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
		'label' => 'Dịch vụ',
        'name' => 'Dịch vụ',
        'singular_name' => 'Dịch vụ' ,
		'menu_name'          => _x( 'Dịch vụ', 'admin menu', '' ),
		'name_admin_bar'     => _x( 'Dịch vụ', 'add new on admin bar', '' ),
		'add_new'            => _x( 'Thêm mới', 'Dịch vụ', '' ),
		'add_new_item'       => __( 'Thêm mới Dịch vụ', '' ),
		'new_item'           => __( 'Thêm mới Dịch vụ', '' ),
		'edit_item'          => __( 'Sửa Dịch vụ', '' ),
		'view_item'          => __( 'Xem Dịch vụ', '' ),
		'all_items'          => __( 'Danh sách Dịch vụ', '' ),
		'search_items'       => __( 'Tìm Dịch vụ', '' ),
		'parent_item_colon'  => __( 'Dịch vụ cha:', '' ),
		'not_found'          => __( 'Khong tìm thấy Dịch vụ.', '' ),
		'not_found_in_trash' => __( 'Không có Dịch vụ trong thùng rác.', '' )
	);
 
    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, 
        'description' => 'Post type Dịch vụ',
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ),
        'rewrite' => array('slug' => 'dich-vu'),
        'hierarchical' => false, 
        'taxonomies'=> array('category','post_tag'),
        'public' => true,
        'show_ui' => true,
        'add_new' => true, 
        'show_in_menu' => true, 
        'show_in_nav_menus' => true, 
        'show_in_admin_bar' => true, 
        'menu_position' => 5, 
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post' //
    );
 
    register_post_type('service', $args); 
 
}


?>