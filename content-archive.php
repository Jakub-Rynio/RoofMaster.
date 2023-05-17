<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="blog">

		<div class="row">

			<div class="col">
				<header class="entry-header">
					<?php the_title( sprintf('<h1 class="h3"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
					<hr>
					<small>

						
						
					</small>
				</header>




				<?php if( has_post_thumbnail() ): ?>

					<div class="">
						<div class="thumbnail"><?php the_post_thumbnail('medium'); ?></div>
					</div>
					<div class="">
						<?php the_excerpt(); ?>
						<p><a class="btn btn-primary" style="background-color: #283860;" href="<?php the_permalink(); ?>">Czytaj więcej</a></p>
					</div>

				<?php else: ?>

					<div id="czytaj" class="col-xs-12">
						<?php the_excerpt(); ?>
						<p><a class="btn btn-custom" href="<?php the_permalink(); ?>">Czytaj więcej</a></p>

					</div>

				<?php endif; ?>
			</div>


		</div>
	</div>

</article>