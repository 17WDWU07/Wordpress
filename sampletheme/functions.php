<?php
function sampletheme_script_enqueue() {
	/*wp_enqueue_style( string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, string $media = 'all' )*/
	wp_enqueue_style('thamban', get_stylesheet_uri(), array(), '1.0.0', 'all');
	wp_enqueue_script('customjs',get_template_directory_uri().'/js/sampletheme.js',array(),'1.0.0',true);
}
/*add_action( string $tag, callable $function_to_add, int $priority = 10, int $accepted_args = 1 )*/
add_action('wp_enqueue_scripts', 'sampletheme_script_enqueue');

function sampletheme_theme_setup() {
add_theme_support('menus');
register_nav_menu('primary','Primary Header Navigation');
register_nav_menu('secondary','Footer Navigation');
}
add_action('init', 'sampletheme_theme_setup');//init or after_setup_theme
?>
