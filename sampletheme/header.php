<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sample Theme</title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(array()); ?>>
	<?php wp_nav_menu(array('theme_location'=>'primary')); ?>

