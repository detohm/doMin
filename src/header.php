<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<img src="<?=THEME_URI."/img/black-ribbon.png"; ?>" class="black-ribbon"/>
<header>
	<div class="container">
		
		<div class="head">
			<h1 class="title"><?php the_custom_logo(); ?></h1>
			<h3 class="tag-line"><?php echo get_bloginfo( 'description' ); ?></h3>
		</div>
	
		<nav role="navigation" class="nav">
			<?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
		</nav>
		
		<div class="clr"></div>
	</div>
		
</header>
