<?php
/**
 * Template part for displaying posts.
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
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header><!-- .entry-header -->		
			<p class="text--tag"><?php the_field('services'); ?></p>
		</div>
			<div class="small-12 large-8 columns">
				<div class="entry-content--inline">
					<p class="intro"><?php the_field('intro'); ?></p>
					<?php the_content(); ?>
					<blockquote><?php the_field('pullquote'); ?>
						<footer>— <?php the_field('pullquote_author'); ?></footer>
					</blockquote>
				</div><!-- .entry-content -->
			</div>
		</div>	
	</div>
</article><!-- #post-## -->
