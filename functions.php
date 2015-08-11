<?php
	add_theme_support('post-thumbnails');
	//Ohne articles in search results
	add_action( 'pre_get_posts', 'mts_only_articles_in_search' );
	function mts_only_articles_in_search( $query ) {
		
		if( $query->is_main_query() && !is_admin() && $query->is_search() ) {
			$query->set('post_type', 'post');
		}

	}

	//Register Header Menu
	function register_my_menu() {
		register_nav_menu('header-menu',__( 'Header Menu' ));
	}
	add_action( 'init', 'register_my_menu' );


	//Remove "You may use these tags.." in comment-form
	function mytheme_init() {
		add_filter('comment_form_defaults','mytheme_comments_form_defaults');
	}
	add_action('after_setup_theme','mytheme_init');

	function mytheme_comments_form_defaults($default) {
		unset($default['comment_notes_after']);
		return $default;
	}

	//Remove "read more" link
	function remove_more_link($link) {
		$offset = strpos($link, '#more-');
		if ($offset) {
			$end = strpos($link, '"',$offset);
		}
		if ($end) {
			$link = substr_replace($link, '', $offset, $end-$offset);
		}
		return $link;
	}
	add_filter('the_content_more_link', 'remove_more_link');



	//Add thumbnail support
	add_theme_support( 'post-thumbnails' ); 

	//Function to limit content
	function excerpt($limit) {
		$excerpt = explode(' ', get_the_excerpt(), $limit);
		if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
		} else {
		$excerpt = implode(" ",$excerpt);
		}	
		$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
		return $excerpt;
	}

	function content($limit) {
		$content = explode(' ', get_the_content(), $limit);
		if (count($content)>=$limit) {
		array_pop($content);
		$content = implode(" ",$content).'...';
		} else {
		$content = implode(" ",$content);
		}	
		$content = preg_replace('/\[.+\]/','', $content);
		$content = apply_filters('the_content', $content); 
		$content = str_replace(']]>', ']]&gt;', $content);
		return $content;
	}

	//Projekte Post-Type
	// Register Custom Post Type
	function custom_post_type() {

		$labels = array(
			'name'                => _x( 'Projekte', 'Projekte', 'text_domain' ),
			'singular_name'       => _x( 'Projekt', 'Projekt', 'text_domain' ),
			'menu_name'           => __( 'Projekte', 'text_domain' ),
			'name_admin_bar'      => __( 'Projekte', 'text_domain' ),
			'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
			'all_items'           => __( 'Alle Projekte', 'text_domain' ),
			'add_new_item'        => __( 'Add New Item', 'text_domain' ),
			'add_new'             => __( 'Erstellen', 'text_domain' ),
			'new_item'            => __( 'New Item', 'text_domain' ),
			'edit_item'           => __( 'Edit Item', 'text_domain' ),
			'update_item'         => __( 'Update Item', 'text_domain' ),
			'view_item'           => __( 'View Item', 'text_domain' ),
			'search_items'        => __( 'Search Item', 'text_domain' ),
			'not_found'           => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
		);
		$args = array(
			'label'               => __( 'projekte_post_type', 'text_domain' ),
			'description'         => __( 'Projekte Post Type Description', 'text_domain' ),
			'labels'              => $labels,
			'supports'            => array( ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,		
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
			'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'post-thumbnails' ),
		);
		register_post_type( 'projekte', $args );

		//Taxonomy
		register_taxonomy( 'kategorie', 'projekte',
	        array(
	             'hierarchical' => true,
	             'label' => __('Kategorien'),
	             'query_var' => 'kategorie',
	             'rewrite' => array('slug' => 'kategorie' )
        ));
		set_post_thumbnail_size( 50, 50, true );

	}

	// Hook into the 'init' action
	add_action( 'init', 'custom_post_type', 0 );	

?>

