<?php get_header(); ?>

<h1>Main Heading - home page</h1>
	<!--sidebar on the right hand side-->

<div class="row">

	<div class="col-xs-12"> <!-- fix slider container -->
		
	<!-- carousel -->
		<div id="first_Theme_Carousel" class="carousel slide" data-ride="carousel">
			
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">

				<?php 
					
					$args_cat = array(
						'include' => '13, 12, 11'
					);
					
					$categories = get_categories($args_cat);
					$count = 0;
					$bullets = '';
					foreach($categories as $category):
						
						$args = array( 
							'type' => 'post',
							'posts_per_page' => 1,
							'category__in' => $category->term_id,
							'category__not_in' => array( 10 ), //this is to stop a 2nd category showing up in thumbnail
						);
						
					$lastBlog = new WP_Query( $args );
					
					if( $lastBlog->have_posts() ):

						while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
								
							<!-- <div class="col-xs-12 col-sm-4"> -->
								
								<div class="item <?php if ($count == 0): echo 'active'; endif; ?>">
									<?php the_post_thumbnail('full'); ?>
									<div class="carousel-caption">
									<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
					
									<small><?php the_category(' '); ?></small> <!-- the space in the arg takez away the bullet in the slider category -->
									</div>
									
								</div>

									<?php $bullets .= '<li data-target="#first_Theme_Carousel" data-slide-to="'.$count.'" class="'; ?>

										<?php if ($count == 0): $bullets .= 'active'; endif; ?>

										<?php $bullets .= '"></li>' ;?> 
									
							
							<?php  endwhile;
							
					endif;
						
					//this iz important to reset data, so wpQuery function can be used again without affecting it
					wp_reset_postdata(); 

					$count++;
						
					endforeach;
				?>

				<!-- Indicators -->
			<ol class="carousel-indicators">
			<?php echo $bullets; ?>
			</ol>


				
				<!-- </div> -->
				
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#first_Theme_Carousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#first_Theme_Carousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<!-- / carousel  -->

	</div><!-- / fix slider container -->
	
</div><!-- / row / wp-query structure-->

<div class="row">

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

