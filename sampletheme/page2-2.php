<?php get_header(); ?>

<div class="row">
	<div class="col-xs-12">
		<?php
		$args=array(
				'type'=>'post',
				'posts_per_page'=>3,
				'category__in'=> array(8,9,10)
				
		);

		$lastBlog=new WP_Query($args);
			if( $lastBlog->have_posts() ):
			
			while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
				
				<?php get_template_part('content','featured'); ?>
			
			<?php endwhile;
			
		endif;
		wp_reset_postdata();

		?>
	</div>
	<div class="col-xs-12 col-sm-8">

		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<?php get_template_part('content',get_post_format()); ?>
			
			<?php endwhile;
			
		endif;
		//print other posts not the first one
		/*$args=array(
				'type'=>'post',
				'posts_per_page'=>2,
				'offset'=>1,

		);
		$lastBlog=new WP_Query($args);
			if( $lastBlog->have_posts() ):
			
			while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
				
				<?php get_template_part('content',get_post_format()); ?>
			
			<?php endwhile;
			
		endif;
		wp_reset_postdata();
				*/
		?>
	<hr>
	<?php 
	//print only news
	/*$lastBlog=new WP_Query('type=post&posts_per_page=-1&category_name=news'); //cat=8 instead of catergory_name
			if( $lastBlog->have_posts() ):
			
			while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
				
				<?php get_template_part('content',get_post_format()); ?>
			
			<?php endwhile;
			
		endif;
		wp_reset_postdata();*/
		?>
<hr>
	
	</div>
	
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
	
</div>

<?php get_footer(); ?>