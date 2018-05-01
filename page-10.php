<?php get_header(); ?>

<div class="row">
	<div class="col-xs-12 col-sm-8">

		<?php 
		$args=array(
					'type'=>'post',
					'posts_per_page'=>3,
					'category__in'=>array(6,7,8)

		);
		$lastBlog=new WP_Query($args);
		
		if( $lastBlog->have_posts()):
			
			while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
				
				<?php get_template_part('content',get_post_format()); ?>
			
			<?php endwhile;
			
		endif;
				
		?>
	
	</div>
	<div class="col-xs-12 col-sm-8">

		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<?php get_template_part('content',get_post_format()); ?>
			
			<?php endwhile;
			
		endif;
				
		?>
	
	</div>
	
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
	
</div>

<?php get_footer(); ?>