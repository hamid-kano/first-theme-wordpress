<?php 
add_theme_support( 'post-thumbnails' );

function twentysixteen_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar-1'),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar.'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);  
	
	register_sidebar(
		array(
			'name'          => __( 'Recent Posts'),
			'id'            => 'Recent Posts',
			'description'   => __( 'Add widgets here to appear in your sidebar.'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
    );  
}
add_action( 'widgets_init', 'twentysixteen_widgets_init' );




// الاكثر قراءة

function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
// remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);







?>