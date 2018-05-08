<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title> <?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<?php wp_head(); ?>
	</head>
	<?php 
		
		if( is_front_page() ):
			$sample_classes = array( 'sample-class', 'my-class' );
		else:
			$sample_classes = array( 'no-sample-class' );
		endif;
		
	?>
	
	<body <?php body_class( $sample_classes ); ?>>
		
		<div class="container">
		
			<div class="row">
				
				<div class="col-xs-12">
					
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand" href="#">Sample Theme</a>
					    </div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php 
								wp_nav_menu(array(
									'theme_location' => 'primary',
									'container' => false,
									'menu_class' => 'nav navbar-nav navbar-right',
									'walker'=> new Walker_Nav_Primary()
									)
								);
							?>
						</div>
					  </div><!-- /.container-fluid -->
					</nav>
				
				</div>
				
				<div class="search-form-container">
					<?php get_search_form(); ?>
				</div>
				
			</div>
			
			<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />