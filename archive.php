<?php get_header(); ?>

<h1>Test this sidebar</h1>
	<!--sidebar on the right hand side-->


<div class="row">

	<div class="col-xs-12 col-sm-8">


		<div class="row text-center no-margin">

				<?php 

				if( have_posts() ): ?>

				<header class="page-header">

				<?php 

					the_archive_title('<h1 class="page-title">','</h1>' );
					the_archive_description('<div class="taxonomy-description">','</div>' );

				 ?>

				 </header>

				<?php while( have_posts() ): the_post(); ?>

						<?php get_template_part('content','archive') ?>												
					
					<?php endwhile; ?>

					<div class="col-xs-12 text-center">
						<?php the_posts_navigation(); ?>
					</div> <!-- / col-xs-12 -->

		<?php endif;

		?>

		</div>	<!-- / row text-center-->

	</div>	<!-- / col-xs-12 col-sm-8-->
		
		<div class="col-xs-12 col-sm-4">

		<?php get_sidebar(); ?>
	
		</div>	<!-- / col-xs-12 col-sm-4-->
	

</div> <!--/row-->


<?php get_footer(); ?>

