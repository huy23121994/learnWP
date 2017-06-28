<?php get_header(); ?>

<div class="row">
	<div class="col-sm-9">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php get_template_part('content', get_post_format()); ?>
			<?php endwhile; ?>
		<?php endif ?>
	</div>
	<div class="col-sm-3">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>