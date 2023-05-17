<?php 
	

get_header(); 

?>

<div class="text-center mb-5 "><img class="img-fluid vw-100 vh-10" src="<?php echo get_template_directory_uri() ;?>/assets/images/baner.jpg "></div>

<div class="blog_content ">
	<div class="row ">

	<div class="col-lg-7 col-md-6 ms-5  ">

		<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
			$args = array(
				'posts_per_page' => 6,
				'paged' => $paged
				);
			query_posts($args);

			if( have_posts() ):

				while( have_posts() ): the_post(); 
					get_template_part('content', 'archive'); 
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

	<div class="ms-4 col-lg-4 col-md-4   ">
		
		<ul class="bg-secondar p-3 list_of">
			
			<p class="h5 m-3 ">Spis Treści:</p>
			<?php
				global $args;
				$recent_posts = get_posts( $args );

				foreach( $recent_posts as $post ) : setup_postdata( $post );
			?>

					<li>
						<a href="<?php the_permalink(); ?>" class="ms-5 btn btn-custom"><?php the_title(); ?></a>	
					</li>

			<?php endforeach; wp_reset_postdata(); ?>

		</ul>
	
	</div>
	</div>	
</div>
<script>

	</script>
<?php get_footer();?>