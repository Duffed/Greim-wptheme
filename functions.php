<?php
	//Ohne articles in search results
	add_action( 'pre_get_posts', 'mts_only_articles_in_search' );
	function mts_only_articles_in_search( $query ) {
		
		if( $query->is_main_query() && !is_admin() && $query->is_search() ) {
			$query->set('post_type', 'post');
		}

	}

	//Register Right Sidebar
	register_sidebar(array(
		"name" => __("Right Sidebar"),
		"id" => "Right-Sidebar",
		"before_widget" => "<div class='sidebar_widget'>",
		"after_widget" => "</div>"
	));

	//Register Footer Widgets
	register_sidebar(array(
		"name" => __("Footer Widgets"),
		"id" => "Footer-Widgets",
		"before_widget" => "<div class='footer_widget'>",
		"after_widget" => "</div>"
	));

	//Register Header Menu
	function register_my_menu() {
		register_nav_menu('header-menu',__( 'Header Menu' ));
	}
	add_action( 'init', 'register_my_menu' );

	//Remove Website Field
	/*
	add_filter('comment_form_default_fields', 'url_filtered');
	function url_filtered($fields)
	{
		if(isset($fields['url']))
			unset($fields['url']);
		return $fields;
	}
	*/

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

	//Shortcodes

		//[Rezept]
		function recipe_shortcode( $atts, $content = null ) {
			return '<div class="recipe">' . do_shortcode($content) . '</div>';
		}

		//<3
		function heart_icon_shortcode() {
			return '<i class="icon icon-heart"></i>';
		}
		//Star
		function star_icon_shortcode() {
			return '<i class="icon icon-star"></i>';
		}

	add_shortcode( 'rezept', 'recipe_shortcode' );
	add_shortcode( 'herz', 'heart_icon_shortcode');
	add_shortcode( 'stern', 'star_icon_shortcode');


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

?>

