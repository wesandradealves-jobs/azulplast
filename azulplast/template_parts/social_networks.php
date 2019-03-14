<?php if ( get_theme_mod('facebook') || get_theme_mod('twitter') || get_theme_mod('rss')) : ?>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<ul class="social-networks">
			<?php if ( get_theme_mod('facebook') ) : ?>
			<li>
					<a href="<?php echo get_theme_mod('facebook');  ?>" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
			</li>
			<?php endif; ?>
			<?php if ( get_theme_mod('twitter') ) : ?>
			<li>
					<a href="<?php echo get_theme_mod('twitter');  ?>" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
			</li>
			<?php endif; ?>
			<?php if ( get_theme_mod('rss') ) : ?>
			<li>
					<a href="<?php echo get_theme_mod('rss');  ?>" title="RSS" target="_blank"><i class="fas fa-rss"></i></a>
			</li>
			<?php endif; ?>
		</ul>
 <?php endif; ?>	