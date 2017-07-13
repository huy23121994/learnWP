<?php if(is_home() || is_category()) :?>

	<div class="media post-item">
	  	<div class="media-left">
	    	<a href="<?php echo get_permalink(); ?>">
	      		<img class="media-object" src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>" width="200"/>
	    	</a>
		  	<h4 class="media-heading"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
	  	</div>
	  	<div class="media-body">
	    	<h4 class="media-heading"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
	    	<?php the_content('Xem thêm...'); ?>
	  	</div>
	</div>
	<hr>

<?php else : ?>
	<div class="bread-crumb">
		<?php if ( function_exists('bread_crumb') ) { bread_crumb('type=string'); } ?>
	</div>
	
	<div class="post-content">
		<h3 class="title"><?php the_title(); ?></h3>
		<p><?php the_content(); ?></p>
	</div>

<?php endif ?>