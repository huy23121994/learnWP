<!DOCTYPE html>
<html>
<head>
	<title>BaoHuy's Blog</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="all" />
</head>
<?php
	if (is_home()) :
		$carrot_classes = array('carrot-class', 'my-class');
	else :
		$carrot_classes = array('no-carrot-class');
	endif;
?>
<body <?php body_class($carrot_classes); ?>>
	<div class="banner white container-fluid text-center">
		<img src="<?php header_image(); ?>">
	</div>
	<div class="container-fluid" id="menu-primary">
		<div class="container">
			<nav class="navbar navbar-inverse">
				<div class="navbar-header">
			      	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span> 
			      	</button>
			      <a class="navbar-brand visible-xs-block" href="/">Trang chủ</a>
			    </div>
				<?php
					if ( has_nav_menu( 'primary' ) ) :
						$args = array(
							'theme_location' => 'primary',
							'container_class' => 'collapse navbar-collapse',
							'container_id' => 'myNavbar',
							'menu_class' => 'nav navbar-nav menu',
							'fallback_cb' => 'wp_page_menu',
						);
					
						wp_nav_menu( $args );
					endif; 
				?> 
			</nav>
		</div>
	</div>
	<section class="container">
		<div class="white content">