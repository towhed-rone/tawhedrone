<?php

	/* Adding Latest jQuery from Wordpress */
	function towhed_latest_jquery() {
		wp_enqueue_script('jquery');
	}
	add_action('init', 'towhed_latest_jquery');
	
	
/*For Main menu*/

add_action('init', 'wpj_register_menu');
	function wpj_register_menu() {
		if (function_exists('register_nav_menu')) {
			register_nav_menu( 'wpj-main-menu', __( 'Main Menu', 'towhed-rone' ) );
		}
	}

function wpj_default_menu() {
		echo '<ul id="dropmenu">';
		if ('page' != get_option('show_on_front')) {
			echo '<li><a href="'. home_url() . '/">Home</a></li>';
		}
		wp_list_pages('title_li=');
		echo '</ul>';
	}
/*Coment option*/

function comment_scripts(){

   if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

}

add_action( 'wp_enqueue_scripts', 'comment_scripts' );
add_theme_support( 'post-thumbnails', array( 'post','slider-images','portfolio-images','gallery-images','welcome-message' ) ); // Add it for posts
	
	add_image_size( 'slider-thumbnail', 760, 350, true );
	add_image_size( 'portfolio-thumbnail', 180, 145, true );
	add_image_size( 'post-thumbnail', 150, 125, true );
	add_image_size( 'photo-thumbnail', 172, 140, true );
	add_image_size( 'my-thumbnail', 360, 280, true );
	add_image_size( 'sidebar-thumbnail', 100, 80, true );
	add_image_size( 'blog-thumbnail', 220, 180, true );
	add_image_size( 'home-thumbnail', 500, 400, true );

/*Slider Area*/

function create_post_type() {
		register_post_type( 'slider-images',
			array(
				'labels' => array(
					'name' => __( 'Slider-images' ),
					'singular_name' => __( 'slider-Image' ),
					'add_new' => __( 'Add New' ),
					'add_new_item' => __( 'Add New Slider-Image' ),
					'edit_item' => __( 'Edit Slider-Image' ),
					'new_item' => __( 'New Slider-Image' ),
					'view_item' => __( 'View Slider-Image' ),
					'not_found' => __( 'Sorry, we couldn\'t find the Slider you are looking for.' )
				),
			'public' => true,
			'publicly_queryable' => false,
			'exclude_from_search' => true,
//			'show_in_menu' => false,
			'menu_position' => 14,
			'has_archive' => false,
			'hierarchical' => false, 
			'capability_type' => 'page',
			'rewrite' => array( 'slug' => 'slider-image' ),
			'supports' => array( 'title', 'thumbnail','editor' )
			)
		);
		
				register_post_type( 'portfolio-images',
			array(
				'labels' => array(
					'name' => __( 'Portfolio' ),
					'singular_name' => __( 'Portfolio' ),
					'add_new' => __( 'Add New' ),
					'add_new_item' => __( 'Add New Portfolio' ),
					'edit_item' => __( 'Edit Portfolio' ),
					'new_item' => __( 'New Portfolio' ),
					'view_item' => __( 'View Portfolio' ),
					'not_found' => __( 'Sorry, we couldn\'t find the Portfolio you are looking for.' )
				),
			'public' => true,
			'publicly_queryable' => false,
			'exclude_from_search' => true,
//			'show_in_menu' => false,
			'menu_position' => 14,
			'has_archive' => false,
			'hierarchical' => false, 
			'capability_type' => 'page',
			'rewrite' => array( 'slug' => 'slider-image' ),
			'supports' => array( 'title', 'thumbnail','editor','custom-fields' )
			)
		);
		
			register_post_type( 'gallery-images',
			array(
				'labels' => array(
					'name' => __( 'Gallerys' ),
					'singular_name' => __( 'Gallery' ),
					'add_new' => __( 'Add New' ),
					'add_new_item' => __( 'Add New Gallery' ),
					'edit_item' => __( 'Edit Gallery' ),
					'new_item' => __( 'New Gallery' ),
					'view_item' => __( 'View Gallery' ),
					'not_found' => __( 'Sorry, we couldn\'t find the Gallery you are looking for.' )
				),
			'public' => true,
			'publicly_queryable' => false,
			'exclude_from_search' => true,
//			'show_in_menu' => false,
			'menu_position' => 14,
			'has_archive' => false,
			'hierarchical' => false, 
			'capability_type' => 'page',
			'rewrite' => array( 'slug' => 'gallery-image' ),
			'supports' => array( 'title', 'thumbnail','editor','custom-fields' )
			)
		);
			register_post_type( 'welcome-message',
			array(
				'labels' => array(
					'name' => __( 'About Me' ),
					'singular_name' => __( 'About Me' ),
					'add_new' => __( 'Add New' ),
					'add_new_item' => __( 'Add New About Me' ),
					'edit_item' => __( 'Edit About Me' ),
					'new_item' => __( 'New About Me' ),
					'view_item' => __( 'View About Me' ),
					'not_found' => __( 'Sorry, we couldn\'t find the Gallery you are looking for.' )
				),
			'public' => true,
			'publicly_queryable' => false,
			'exclude_from_search' => true,
//			'show_in_menu' => false,
			'menu_position' => 14,
			'has_archive' => false,
			'hierarchical' => false, 
			'capability_type' => 'page',
			'rewrite' => array( 'slug' => 'gallery-image' ),
			'supports' => array( 'title', 'thumbnail','editor','custom-fields' )
			)
		);
	}
	add_action( 'init', 'create_post_type' );
	
	/*For Widget Area*/
	
		function brightpage_widget_areas() {

		register_sidebar( array(
			'name' => __( 'Gallery widget', 'towhedrone' ),
			'id' => 'gallery-widget',
			'description' => __( 'An optional widget area for your welcome message area.', 'brightpage' ),
			'before_widget' => '<div class="big">',
			'after_widget' => '</div>',
			'before_title' => '',
			'after_title' => '',
		) );
		register_sidebar( array(
			'name' => __( 'About Me', 'towhedrone' ),
			'id' => 'about-widget',
			'description' => __( 'An optional widget area for your welcome message area.', 'brightpage' ),
			'before_widget' => '<div class="big">',
			'after_widget' => '</div>',
			'before_title' => '',
			'after_title' => '',
		) );
		register_sidebar( array(
			'name' => __( 'Right Sidebar', 'towhedrone' ),
			'id' => 'right_sidebar',
			'description' => __( 'An optional widget area for your welcome message area.', 'brightpage' ),
			'before_widget' => '<div class="single_sidebar">',
			'after_widget' => '</div>',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
		) );
		



	}
	add_action('widgets_init', 'brightpage_widget_areas');
	
	
	add_filter( 'widget_text', 'do_shortcode');
		/*For Short code use*/
	
	function blog_post_shortcode($atts){
	extract( shortcode_atts( array(
		'title' => '',
		'link' => '',
		
	), $atts, 'blog_post' ) );
	
    $q = new WP_Query(
        array(  'posts_per_page' => '3', 'post_type' => 'post')
        );
$list = '<div class="blog_post single floatright"><h2 class="blog_title">'.$title.'</h2><a href="'.$link.'" class="blog_more"  >More</a>';

while($q->have_posts()) : $q->the_post();
    //get the ID of your post in the loop
    $id = get_the_ID();

    $post_excerpt = get_post_meta($id, 'post_excerpt', true);  
	$post_thumbnail= get_the_post_thumbnail( $post->ID, 'gallery-thumbnail' );        
    $list .= '
	
	
					<div class="single_blog">
						<a href="'.get_permalink().'">'.$post_thumbnail.'</a>
						<a href="'.get_permalink().'">'.get_the_title().'</a>
						<p>'.get_the_excerpt('30').'</p>
					</div>
						
						
						
						
	';        
endwhile;
$list.= '</div>';
wp_reset_query();
return $list;
}

add_shortcode('blog_post', 'blog_post_shortcode');	


/*For Gallery Images*/


	
	function gallery_post_shortcode($atts){
	extract( shortcode_atts( array(
		'title' => '',
		'link' => '',
		
	), $atts, 'photo' ) );
	
    $q = new WP_Query(
        array(  'posts_per_page' => '4', 'post_type' => 'gallery-images')
        );
$list = '<div class="from_gallery"><h2 class="gallery_title">'.$title.'</h2><a href="'.$link.'" class="gallery_more">More</a>';

while($q->have_posts()) : $q->the_post();
    //get the ID of your post in the loop
    $id = get_the_ID();


	$post_thumbnail= get_the_post_thumbnail( $post->ID, 'photo-thumbnail' ); 
	$big_thumbnail= get_the_post_thumbnail( $post->ID, 'home-thumbnail' );        
    $list .= '
	
	    '.$post_thumbnail.'
						
						
	';        
endwhile;
$list.= '</div>';
wp_reset_query();
return $list;
}

add_shortcode('photo', 'gallery_post_shortcode');	
	
	/*For Welcome Image*/
	
		
	function welcome_post_shortcode($atts){
	extract( shortcode_atts( array(
		'title' => '',
		'link' => '',
		
	), $atts, 'about_me' ) );
	
    $q = new WP_Query(
        array(  'posts_per_page' => '1', 'post_type' => 'welcome-message')
        );
$list = '<div class="about_me single floatleft"><h2 class="about_me_title">'.$title.'</h2><a href="'.$link.'" class="me_more"  >More</a>';

while($q->have_posts()) : $q->the_post();
    //get the ID of your post in the loop
    $id = get_the_ID();


	$post_thumbnail= get_the_post_thumbnail( $post->ID, 'my-thumbnail' );        
    $list .= '
	
	'.$post_thumbnail.'
	<p>'.get_the_content().'</p>					
						
	';        
endwhile;
$list.= '</div>';
wp_reset_query();
return $list;
}

add_shortcode('about_me', 'welcome_post_shortcode');	
	
?>