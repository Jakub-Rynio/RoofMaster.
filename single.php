<?php get_header(); ?>

<div class="text-center mb-5 "><img class="img-fluid vw-100 vh-10" src="<?php echo get_template_directory_uri() ;?>/assets/images/baner.jpg "></div>
<div class="blog_content">
	<div class="row roz">

		<div class="col-md-7 offset-md-1 ">
			<?php 
				if(have_posts() ):

					while(have_posts() ): the_post(); 
						get_template_part('content', 'singleBlog'); 
					endwhile;
			?>
					<div class="row linki">
						<div class="col-6 ">
							<button class="ms-5 mb-5 btn btn-single">
								<?php echo (empty(get_next_post())) ? 'Brak następnego wpisu' : next_post_link("<< %link"); ?>
							</button>
						</div>

						<div class="col-6 ">
							<button class="ms-5 mb-5 btn btn-single">
								<?php echo (empty(get_previous_post())) ? 'Brak następnego wpisu' : previous_post_link("%link >>"); ?>
							</button>
						</div>
					</div>
			<?php
				endif;
				wp_reset_postdata();
			?>
		</div>

		<div class="ms-5 col-md-3  ">

		<ul class="bg-secondar p-3 list_of">
			
			<p class="h5 m-3">Spis Treści:</p>
				<?php
					$args = array(
						'posts_per_page' => -1, 
						);
					$recent_posts = get_posts( $args );

					foreach( $recent_posts as $post ) : setup_postdata( $post );
				?>
					<li>
						<a href="<?php the_permalink(); ?>" class="my_btn ms-5 btn btn-custom"><?php the_title(); ?></a>	
					</li>
				<?php endforeach; wp_reset_postdata(); ?>
			</ul>
		</div>
	</div>
</div>
<?php get_footer(); ?>