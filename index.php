<?php get_header(); ?>

<h1>Main Heading</h1>
	<!--sidebar on the right hand side-->


<div class="row">

	<div class="col-xs-12 col-sm-8">

		<div class="row text-center no-margin">

			<?php 

				if( have_posts() ): $i = 0;

					while( have_posts() ): the_post(); 
			?>

			<?php 
				if($i==0): $column = 12 ;
				elseif ($i > 0 && $i <=2) : $column = 6; $class = ' second-row-padding';
				elseif ($i > 2) : $column = 4; $class = ' third-row-padding';
				endif ;

			?>

			<div class="col-xs-<?php echo $column; echo $class; ?>">
				<?php if ( has_post_thumbnail()) : 
						$urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
						endif;
				?>
				<div class="blog-element" style="background-image: url(<?php echo $urlImg; ?>);" >

				<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); 
				?>
							
				<small><?php the_category(' '); 
				?></small>

				</div> <!-- / blog-element -->

			</div>	<!-- / col-xs-12 -->
			
			<?php $i++; endwhile; ?>

				<div class="col-xs-6 text-left">
					<?php next_posts_link( '<< Older Postz' ); ?>
				</div> <!-- / col-xs-6 -->

				<div class="col-xs-6 text-right">
					<?php previous_posts_link( 'Newer Postz >>' ); ?>
				</div> <!-- / col-xs-6 -->

		<?php endif;

		?>

		</div>	<!-- / row text-center-->

	</div>	<!-- / col-xs-12 col-sm-8-->
		
	<div class="col-xs-12 col-sm-4">

	<?php get_sidebar(); ?>

	</div>	<!-- / col-xs-12 col-sm-4-->

</div> <!--/row-->

<?php get_footer(); ?>

