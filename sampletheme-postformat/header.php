<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sample Theme</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(array()); ?>>
	<?php wp_nav_menu(array('theme_location'=>'primary')); 
	//var_dump(get_custom_header()); ?>
	<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

