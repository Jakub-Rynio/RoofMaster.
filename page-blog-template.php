<?php 
	
/*
	Template Name: blog
*/

get_header(); 

?>

<div class="blog_content ">
	kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk
	<div class="row roz">

	<div class="col-lg-7 col-xl-7 col-md-7 col-sm-12 blog ">

		<?php

			if( have_posts() ):

				while( have_posts() ): the_post(); 
				the_title();
				endwhile;
		?>



		<div class="text-left mar" style="float:left">
			<?php previous_posts_link('« Nowsze Posty'); ?>
		</div>
		<div class="text-right mar2" style="float:left">
			<?php next_posts_link('Starsze Posty »'); ?>
		</div>
		<div class="" style="clear: both;"></div>
		<?php
			endif;
			wp_reset_query();
		?>

	</div>

	<div class=" col-lg-4 col-xl-4 col-md-5 col-sm-12 list_box">
		
		<ul class="blog_list ">
			
			</br>Spis Treści:</br> </br>

			<?php
				global $woma_args;
				$recent_posts = get_posts( $woma_args );

				foreach( $recent_posts as $post ) : setup_postdata( $post );
			?>

					<li>
						<a href="<?php the_permalink(); ?>" class="btn przy text-left"><?php the_title(); ?></a>	
					</li>

			<?php endforeach; wp_reset_postdata(); ?>

		</ul>
	
	</div>
	</div>	
</div>
<?php get_footer();?>