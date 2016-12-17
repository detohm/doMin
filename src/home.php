<?php get_header(); ?>
<div class="do-home">
<div class="articles">
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="article">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
				<div class="title"><? the_title(); ?></div>
				<div class="content"><? the_content('', true); ?></div>
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
		<div class="title">About Me</div>
		<div class="gravatar">
			<?php 
				echo get_avatar( get_option('admin_email'), 100 ); 
			?>
		</div>
		<div class="author-name"><?=AUTHOR_NAME ?></div>
		<div class="author-sub-name"><?=AUTHOR_SUB_NAME ?></div>
		<div class="author-detail"><?=AUTHOR_DETAIL ?></div>
		<div class="social-icons">
			<a href="https://github.com/detohm" target="_blank" ><img src="<?=THEME_URI."/img/social-icons/github.svg"; ?>" /></a>
			<a href="https://www.instagram.com/detohm" target="_blank" ><img src="<?=THEME_URI."/img/social-icons/instagram.svg"; ?>" /></a>
			<a href="https://www.facebook.com/detohm" target="_blank" ><img src="<?=THEME_URI."/img/social-icons/facebook.svg"; ?>" /></a>
			<a href="https://soundcloud.com/detohm" target="_blank" ><img src="<?=THEME_URI."/img/social-icons/soundcloud.svg"; ?>" /></a>
			<a href="https://www.linkedin.com/in/attaphong" target="_blank" ><img src="<?=THEME_URI."/img/social-icons/linkedin.svg"; ?>" /></a>
			<a href="https://twitter.com/detohm" target="_blank" ><img src="<?=THEME_URI."/img/social-icons/twitter.svg"; ?>" /></a>
		</div>
	</div>
</div>
</div>
<div class="clear"></div>
<?php get_footer(); ?>