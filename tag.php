<?php get_header(); ?>

<div class="center">

	<?php if ( have_posts() ) : ?>

		<h1 class="h-tag"><?php single_tag_title(); ?></h1>

		<?php if ( tag_description() ) :  ?>
			<div class="archive-meta"><?php echo tag_description(); ?></div>
		<?php endif; ?>

		<?php get_template_part( 'content' ); ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>

</div>

<?php get_footer(); ?>