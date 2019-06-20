<?php
/**
 * Функции шаблона (function.php)
 * @package WordPress
 * @subpackage wmagnet theme
 */


function remove_gutenberg_styles() {
	wp_dequeue_style( 'wp-block-library' );
	wp_deregister_script( 'wp-embed' );
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');
}

add_action( 'wp_enqueue_scripts', 'remove_gutenberg_styles', 100 );






add_theme_support('title-tag');

register_nav_menus(array( 
	'main' => 'Главное меню', // Верхнее
	'footer' => 'Футер меню' // Внизу
));

add_theme_support('post-thumbnails'); 



add_action('wp_footer', 'add_scripts'); 
function add_scripts() { 
		if(is_admin()) return false;
		wp_deregister_script('jquery');
		wp_enqueue_script('libs',get_template_directory_uri().'/dist/js/libs.min.js','','',true);
		wp_enqueue_script('main', get_template_directory_uri().'/dist/js/main.js','','',true); 

}

add_action('wp_print_styles', 'add_styles'); 

	function add_styles() { 
		if(is_admin()) return false;
		wp_enqueue_style( 'main', get_template_directory_uri().'/style.css' ); 

}


?>
