<?php get_header(); ?>

<div class="center">
	<section class="profile">
		<img src="<?php bloginfo('template_url'); ?>/img/profile.png" alt="Michiel Koning" class="profile-img">
		<div class="function">Senior Frontend Developer bij <a href="http://4net.com" title="4net Interactive" target="_blank" rel="nofollow">4net Interactive</a></div>
	</section>
</div>

<div class="center">

	<h1 class="hidden">Portfolio van Michiel Koning</h1>

	<ul class="categories">
		<li class="cat-item current-cat"><a href="/">Alle projecten</a></li>
		<?php  wp_list_categories(array('title_li' => '')); ?>
	</ul>

	<?php query_posts( 'post_type=portfolio&orderby=menu_order&order=DESC&posts_per_page=-1' ); ?>

	<?php get_template_part( 'content' ); ?>

</div>

<?php get_footer(); ?>