<?php 

//sort service items
function wpdocs_five_posts_on_homepage( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', 4 );
    }
}
add_action( 'pre_get_posts', 'wpdocs_five_posts_on_homepage' );

//support website thumbnails
add_theme_support( 'post-thumbnails' );

// Adding scripts
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'jquery_new_wp', get_template_directory_uri() . '/js/jquery.js' );
	wp_enqueue_script( 'boostrap_js', get_template_directory_uri() . '/js/bootstrap.js' );
	wp_enqueue_script( 'slick_js', get_template_directory_uri() . '/slick/slick.js' );
	wp_enqueue_style( 'bootstrap_css_new', get_template_directory_uri().'/css/bootstrap.css' );
	wp_enqueue_style( 'slick-theme_new', get_template_directory_uri().'/slick/slick-theme.css' );
	wp_enqueue_style( 'slick_new', get_template_directory_uri().'/slick/slick.css' );
}

// Adding scripts
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method(){
	wp_enqueue_script( 'jquery-custom', get_template_directory_uri() . '/js/jquery.js');
	wp_enqueue_script( 'custom-slick', get_template_directory_uri() . '/slick/slick.js');
	wp_enqueue_script( 'slider-adjust', get_template_directory_uri() . '/js/slider-adjust.js');
	wp_enqueue_script( 'custom-borders', get_template_directory_uri() . '/js/custom-borders.js');
}

//adding website title
add_theme_support( 'title-tag' );

// adding widgets
function header_logo() {
	register_sidebar(
		array(
			'id' => 'header-logo', 
			'name' => 'Header logo', 
			'description' => 'Header logo.', 
			'before_widget' => '<div id="%1$s" class="side widget %2$s">', 
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">', 
			'after_title' => '</h3>'
		)
	);
	register_sidebar(
		array(
			'id' => 'what-is', 
			'name' => 'what-is-widget', 
			'description' => 'what-is-widget', 
			'before_widget' => '', 
			'after_widget' => '',
			'before_title' => '', 
			'after_title' => ''
		)
	);
	register_sidebar(
		array(
			'id' => 'footer-contact', 
			'name' => 'footer-contact',
			'description' => 'footer-contact',
			'before_widget' => '', 
			'after_widget' => '',
			'before_title' => '', 
			'after_title' => ''
		)
	);
}
 
add_action( 'widgets_init', 'header_logo' );

//registering menus
register_nav_menus(
	array(
		'head_menu' => 'Head menu',
		'bottom_menu' => 'Bottom menu'
	)
);


add_action('init', 'create_portfolio_types');
function create_portfolio_types() {
	register_post_type('portfolio', 
		array(
			'labels' => array(
				'name'               => __('Portfolio'), 
				'singular_name'      =>  __('All portfolio slides'), 
				'add_new'            => __('Add new portfolio slide'), 
				'add_new_item'       => __('Add portfolio'),
				'edit'							 =>  __('Edit portfolio'),
				'edit_item'          => __('Editing portfolio'), 
				'new_item'           => __('New portfolio slide'), 
				'view'          		 => __('To see portfolio item'),
				'view_item'          => __('View portfolio item'), 
				'search_items'       => __('Search services'), 
				'not_found'          => __('No portfolio slides'), 
				'not_found_in_trash' => __(''), 
				'menu_name'          => __('Portfolio Slides'),
			),
			'description'         => 'Portfolio slides',
			'public'              => true,
			'publicly_queryable'  => true,
			'exclude_from_search' => false, 
			'show_ui'             => true, 
			'show_in_menu'        => true, 
			'show_in_nav_menus'   => true, 
			'menu_position'       => 20,
			'menu_icon'           => '', 
			'capability_type'   	=> 'post',
			'map_meta_cap'      	=> true,
			'hierarchical'        => false,
			'supports'            => array('title','editor','thumbnail'), 
			'taxonomies'          => array('', ''),
			'has_archive'         => true,
			'rewrite'             => true,
			'query_var'           => true,
			'can_export'          => true
		)
	);
}

add_action('init', 'create_services_types');
function create_services_types() {
	register_post_type('services', 
		array(
			'labels' => array(
				'name'               => __('Services'), 
				'singular_name'      =>  __('All services slides'), 
				'add_new'            => __('Add new service'), 
				'add_new_item'       => __('Adding new service item'),
				'edit'							 =>  __('Edit service item '),
				'edit_item'          => __('Editing service'),
				'new_item'           => __('New services'), 
				'view'          		 => __('To see services items'),
				'view_item'          => __('To see services items'), 
				'search_items'       => __('Search new service items'), 
				'not_found'          => __('No services items'), 
				'not_found_in_trash' => __('Not found services items in the trash'), 
				'menu_name'          => __('Services Slides'), 
			),
			'description'         => 'Portfolio slides',
			'public'              => true,
			'publicly_queryable'  => true, 
			'exclude_from_search' => false,
			'show_ui'             => true, 
			'show_in_menu'        => true, 
			'show_in_nav_menus'   => true,
			'menu_position'       => 20,
			'menu_icon'           => '', 
			'capability_type'   	=> 'post',
			'map_meta_cap'      	=> true,
			'hierarchical'        => false,
			'supports'            => array('title','editor','thumbnail'), 
			'taxonomies'          => array('category', 'post_tag'),
			'has_archive'         => true,
			'rewrite'             => true,
			'query_var'           => true,
			'can_export'          => true
		)
	);
}

