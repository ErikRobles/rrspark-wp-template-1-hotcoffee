<?php get_header(); ?>
	<main role="main">
		<!-- section -->
		<section>
		The number you selected is: <?php echo get_theme_mod('advanced_range_setting'); ?>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
