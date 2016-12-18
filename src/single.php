<?php get_header(); ?>
<div class="do-post">
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
	<article class="post">

		
	
		<h1 class="title"><?php the_title() ?></h1>
		
		<div class="content">
			<?php the_content(); ?>
		</div>
		<? if ( comments_open() || '0' != get_comments_number() ) : ?>
			<div class="post-comments"><?php comments_template( '', true ); ?></div>
	    <?php else: endif; ?>
		
	</article>
	
	

<?php endwhile; ?>
<?php else: endif; ?>

	<div class="about-me">
		<?php get_template_part( 'templates/about-me'); ?>
	</div>

</div>
<?php get_footer(); ?>