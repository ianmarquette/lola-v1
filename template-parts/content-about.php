<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gulp-wordpress
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="bg--pink">
		<div class="row">
  			<div class="small-12 large-4 columns">
				<header class="entry-header">
					<h1 class="entry-title title--side">About Me</h1>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lola-travel-shot.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/lola-travel-shot@2x.png 2x" alt="lola augustine brown travel shot" class="hero-image--small"/>
				</header><!-- .entry-header -->			
			</div>
			<div class="small-12 large-8 columns">
				<div class="entry-content--high">
					<div><?php the_content(); ?></div>
				</div><!-- .entry-content -->
			</div>
		</div>	
	</div>
</article><!-- #post-## -->