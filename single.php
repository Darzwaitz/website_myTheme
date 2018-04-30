<?php 

get_header(); ?>

<div class="row">
	<div class="col-xs-12 col-sm-8">

		<?php 

		if( have_posts() ): 

			while( have_posts() ): the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_title('<h1 class="entry-title">','</h1>' ); ?>
			
				<?php if ( has_post_thumbnail()) : ?>
				
					<div class="pull-right"><?php the_post_thumbnail('thumbnail'); ?></div>

				<?php endif; ?>

				<small><?php the_category(' '); ?>  || Tags:<?php the_tags(' '); ?> || <?php edit_post_link(); ?> </small>

				<?php the_content(); ?>

				<hr>
				<!-- the following iz to navigate to newer n older postz within a single blog post -->
				<div class="row">
					<div class="col-xs-6 text-left"><?php previous_post_link(); ?></div>
					<div class="col-xs-6 text-left"><?php next_post_link(); ?></div>
				</div> <!-- / row -->

				<hr>

				<?php if (comments_open()) { 
						comments_template(); 
					}else{
						echo '<h5 class="text-center">Sorry, nae commentz on this post!</5>';
					}
				?>
				
			
			</article>

		<?php endwhile;

		endif;

		?>

	</div>  <!-- / row -->


	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>

</div>  <!-- / col-xs-12 col-sm-8  -->

<?php get_footer();   ?>