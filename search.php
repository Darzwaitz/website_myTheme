<?php get_header(); ?>

<h1>Tesht dis search sheet</h1>
	
<div class="row">

	<div class="col-xs-12 col-sm-8">


		<div class="row">

				<?php 

				if( have_posts() ):

					while( have_posts() ): the_post(); ?>
					
						<?php get_template_part( 'content', 'search' ); ?>
			
			<?php endwhile;

			endif;

		?>

		</div>	<!-- / row text-center-->

	</div>	<!-- / col-xs-12 col-sm-8-->
		
		<div class="col-xs-12 col-sm-4">

		<?php get_sidebar(); ?>
	
		</div>	<!-- / col-xs-12 col-sm-4-->
	

</div> <!--/row-->


<?php get_footer(); ?>

