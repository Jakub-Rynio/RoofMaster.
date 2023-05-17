<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="blog">

		<div class="row">

			<div class="col">
				<header class="entry-header">
					<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
					<small>

					
					</small>
				</header>




				<?php if( has_post_thumbnail() ): ?>

					<div class="aa">
						<div class="thumbnail"><?php the_post_thumbnail('medium'); ?></div>
					</div>
					<div class="aa">
						<?php the_content(); ?>
						
					</div>

				<?php else: ?>

					<div class="col-xs-12">
						<?php the_content(); ?>
						

					</div>

				<?php endif; ?>
			</div>


		</div>
	</div>

</article>