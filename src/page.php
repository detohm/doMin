<?php get_header(); ?>
<div class="do-page">
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article class="page">
	
		<h1 class="title"><?php the_title() ?></h1>
		
		<div class="content">
			<?php the_content(); ?>
		</div>
		
	</article>

<?php endwhile; ?>
<?php else: endif; ?>

	<div class="about-me">
		<?php get_template_part( 'templates/about-me'); ?>
	</div>

</div>
<?php get_footer(); ?>