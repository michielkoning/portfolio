<div id="portfolio-content">
	<ul class="portfolio">

		<?php while ( have_posts() ) : the_post(); ?>

			<li>
				<?php the_post_thumbnail('medium'); ?>
				<div class="meta">
					<h2><?php the_title(); ?></h2>
					<?php the_tags( '<div class="tags">', ' &bull; ', '</div>' ); ?>
					<a href="<?php echo get_post_meta(get_the_ID(), 'url', true) ?>" class="btn-site" target="_blank" rel="nofollow">Bekijk <?php echo get_post_meta(get_the_ID(), 'url-title', true) ?></a>
				</div>
			</li>

		<?php endwhile; ?>

	</ul>
</div>