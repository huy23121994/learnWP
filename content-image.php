<?php if(is_home() || is_category()) :?>

	<div class="media">
	  	<div class="media-left">
	    	<a href="<?php echo get_permalink(); ?>">
	      		<img class="media-object" src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>" width="200" height="120"/>
	    	</a>
	  	</div>
	  	<div class="media-body">
	    	<h4 class="media-heading"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
	    	<p><?php the_content('Xem thêm...'); ?></p>
	  	</div>
	</div>
	<hr>

<?php else : ?>

	<h3><?php the_title(); ?></h3>
	<p><?php the_content(); ?></p>

<?php endif ?>