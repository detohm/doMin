<?php get_header(); ?>
<div class="do-home">
<div class="articles">
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="article">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<div class="post-thumbnail" style="background-image:url(<?php the_post_thumbnail_url(); ?>)"></div>
			</a>
		</div>

	<?php endwhile; ?>

	<div id="pagination" class="clearfix">
		<div class="past-page"><?php previous_posts_link( '&raquo;' ); ?></div>
		<div class="next-page"><?php next_posts_link( ' &laquo;' ); ?></div>
	</div>

	<?php else : ?>

<?php endif; ?>
</div>
<div class="sidebar">
	<div class="inner">
		<div class="title">ABOUT ME</div>
		<div class="gravatar">
			<?php 
				echo get_avatar( get_option('admin_email'), 100 ); 
			?>
		</div>
		<div class="author-detail"><? the_author_meta( 'description' ); ?></div>
	</div>
</div>
</div>
<div class="clear"></div>
<?php get_footer(); ?>