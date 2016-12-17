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