<?php get_header(); ?>

<?php 
	if(is_front_page()) : 
		$args = array(
			'type' => 'post',
			'posts_per_page' => 10,
		);
	
		$query = new WP_Query( $args ); ?>
		<div class="row">
			<div class="col-xs-12 slider">
				<?php the_post(); the_content(); ?>
			</div>
		</div>
		<div class="top"></div>
		
		<div class="row m-t-30">
			<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
				<div class="col-xs-12 col-sm-4 post-item-home">
					<div class="wrapper">
						<a href="<?php echo get_permalink(); ?>">
							<div class="img" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>); "></div>
						</a>
						<h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
						<?php the_content(); ?>
					</div>
				</div>
			<?php endwhile;
			endif ?>
		</div>

<?php else : ?>

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

<?php endif ?>

<?php get_footer(); ?>