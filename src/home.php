<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article class="post">
		
			<h1 class="title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_title() ?>
				</a>
			</h1>
			
			<div class="content">
				<?php the_content(); ?>
			</div>
			
		</article>

	<?php endwhile; ?>

	<div id="pagination" class="clearfix">
		<div class="past-page"><?php previous_posts_link( '&raquo;' ); ?></div>
		<div class="next-page"><?php next_posts_link( ' &laquo;' ); ?></div>
	</div>

	<?php else : ?>

<?php endif; ?>
<?php get_footer(); ?>