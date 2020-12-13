<?php

/** Register Menu Support */

function myCarnewsMenu(){
	if (function_exists('register_nav_menu')) {
		register_nav_menu('header_top_menu', __( 'Header Menu','carnews') );

		register_nav_menu('footer_menu', __( 'Footer Menu','carnews') );

	}
}

add_action('init','myCarnewsMenu');


add_theme_support('post-thumbnails', array('post','page'));
set_post_thumbnail_size(200,200,true);
add_image_size('myFituresImage',300,300,true); 