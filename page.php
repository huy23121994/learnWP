<?php get_header(); ?>

<div class="row">
	<div class="col-sm-9">
		<?php if (have_posts()) : the_post(); ?>
			<h3><?php the_title(); ?></h3>
			<p><?php the_content(); ?></p>
		<?php endif ?>
	</div>
	<div class="col-sm-3">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>