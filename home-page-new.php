<?php get_header(); ?>

<h1>Test this again..</h1>
	<!--sidebar on the right hand side-->

<div class="row">

	<div class="col-xs-12"> <!--wp-query structure - create variable last blog-->

		<?php  

			$lastBlog = new WP_Query('type=post&posts_per_page=1');

			if( have_posts() ): 

			while( have_posts() ): the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>
			
		<?php endwhile;

		endif;

		?>

	</div><!-- / wp-query structure-->

	<div class="col-xs-12 col-sm-8">
	<?php 

	if( have_posts() ): 

		while( have_posts() ): the_post(); ?>

			 <h3><?php the_title(); ?></h3>

			 <!--the following makez post thumbnailz work and change thumbnail size (insert thumbnail for small)-->

			<div class="thumbnail-img"><?php the_post_thumbnail( 'medium' ); ?></div>

			<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> in <?php the_category(); ?> </small>
			
			<p><?php the_content(); ?></p>

			<hr>
			
		<?php endwhile;

		endif;

	?>
	</div>	<!-- / col-xs-12 col-sm-8-->
	
		<div class="col-xs-12 col-sm-4">

		<?php get_sidebar(); ?>
		
		</div>	<!-- / col-xs-12 col-sm-4-->
	

</div> <!--/row-->


<?php get_footer(); ?>

