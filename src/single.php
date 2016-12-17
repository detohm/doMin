<?php get_header(); ?>
<div class="do-post">
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article class="post">
	
		<h1 class="title"><?php the_title() ?></h1>
		
		<div class="content">
			<?php the_post_thumbnail(); ?>
			<?php the_content(); ?>
		</div>
		
	</article>

<?php endwhile; ?>
<?php else: endif; ?>
</div>
<?php get_footer(); ?>