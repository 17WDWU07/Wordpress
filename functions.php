<?php
function sampletheme_script_enqueue() {
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all');
	wp_enqueue_style('thamban', get_stylesheet_uri().'/css/sample.css', array(), '1.0.0', 'all');
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true);
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
add_theme_support('custom-background');
add_theme_support('custom-header'); // to be called in header file with <img> tag 
add_theme_support('custom-thumbnails'); // to be called by the function in the post loop 
add_theme_support('post-formats', array('aside','image','video'));

//sidebar
function sampletheme_widget_setup() {
	register_sidebar(
					array(
						'name'=>'Sidebar',
						'id'=>'sidebar1',
						'class'=>'custom',
						'description'=>'Standard Sidebar',
						'before_widget'=>'<aside id="%1$s" class="widget %2$s">',
						'after_widget'=>'</aside>',
						'before_title'=>'<h1 class="widget-title">',
						'after_title'=>'</h1>'
					)
				);

}
add_action('widgets_init','sampletheme_widget_setup');

if (isset($_POST['submit'])) {
	global $wpdb;
	$data_array=array(
					'Username'=> $_POST['username'],
					'Email'=> $_POST['email'],
					'Password' => $_POST['password']
					);
	$table_name='wp_contactform_entry';
	$rowResult=$wpdb->insert($table_name,$data_array,$format=NULL);
	if ($rowResult==1) {
		echo "Form submitted successfully";
	} else {
		echo "Error in form submission";
	}

}

?>


