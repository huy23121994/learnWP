<h3><?php the_title(); ?></h3>
<div class="thumb-img"><?php the_post_thumbnail('thumbnail'); ?></div>
<small>Posted on: <?php the_time('F j, Y' ); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
<hr>