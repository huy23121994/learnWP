<?php get_header(); ?>

<div class="row">
	<div class="col-sm-9">
		<?php
			$thiscat = get_category( get_query_var( 'cat' ) );
			$catid = $thiscat->cat_ID;
			$parent = get_cat_name($catid);

			echo "<h3>$parent</h3>";
		?>
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