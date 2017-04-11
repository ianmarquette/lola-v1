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
  			<div class="small-12 large-12 columns">
				<header class="entry-header">
					<h1 class="entry-title"><?php the_field('title'); ?> <span class="text--grey"><?php the_field('tagline'); ?></span></h1>
				</header><!-- .entry-header -->			
			</div>
		</div>
		<div class="row">
			<div class="small-12 large-5 columns">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lola-headshot.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/lola-headshot@2x.png 2x" alt="lola augustine brown head shot" class="hero-image"/>
			</div>
			<div class="small-12 large-7 columns">
				<div class="entry-content">
					<div><?php the_field('what_i_do'); ?></div>
				</div><!-- .entry-content -->
			</div>
		</div>			
	</div>
	<div class="bg--white">
		<div class="row">
			<div class="small-12 large-12 columns">
				<h3 class="text-center">Case Studies</h3>
			</div>	
			<div class="small-12 large-12 columns home-grid">
				<div class="row">
					<?php query_posts('cat=3'); while (have_posts()) : the_post(); ?>
						<div class="small-12 medium-6 columns container float-left">
							<?php the_post_thumbnail('full', array( 'class' => 'home-grid__img' )); ?>
								<div class="home-grid__overlay">
								<div class="home-grid__text">
									<a class="home-grid__title" href='<?php the_permalink() ?>'><?php the_title(); ?></a>
									<div class="home-grid__description"><?php the_excerpt(); ?></div>
								</div>
									
								</div>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
						<div class="small-12 medium-6 columns container float-left blank-grid__container">
							<div class="blank-grid__item"></div>
						</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bg--light-grey">
		<div class="row">
			<div class="small-12 large-6 columns">
				<h2>Writing</h2>
			</div>
			<div class="small-12 large-6 columns">
				<?php if( have_rows('writing_entry') ): ?>
 
				    <ul class="article-list text--red">
				 
				    <?php while( have_rows('writing_entry') ): the_row(); ?>
				 
				        <li><h5 class="text--blue"><?php the_sub_field('publication'); ?></h5>				        
					        <p><a href="<?php the_sub_field('article_link'); ?>"><?php the_sub_field('description'); ?></a></p>
				        </li>
				        
				    <?php endwhile; ?>
				 
				    </ul>
				 
				<?php endif; ?>
			</div>
		</div>
	</div>
</article><!-- #post-## -->