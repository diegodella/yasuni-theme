<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Yasuni
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
			<?php 
            query_posts( 'category_name=Noticias&showposts=5' );
			if ( have_posts() ) : ?>
				<?php /* Start the Loop */ ?>
                <div id="news">
                <ul>
				<?php while ( have_posts() ) : the_post(); ?>
				<li>
                    <a class="thumb" href="#article-<?php the_ID(); ?>" >
	                    <?php the_post_thumbnail('mini'); ?>
                    </a>
                </li>
				<?php endwhile; ?>
				</ul>
				<?php while ( have_posts() ) : the_post(); ?>
                <article id="article-<?php the_ID(); ?>">
                    <h1><?php the_title(); ?></h1>
                    <?php the_excerpt(); ?>
                </article>
				<?php endwhile; ?>
                </div>
			<?php 
            endif;
            wp_reset_query();   
			?>
    		<?php 
            query_posts( 'category_name=Home&showposts=1' );
			if ( have_posts() ) : ?>

				<?php yasuni_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>

				<?php yasuni_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'yasuni' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'yasuni' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php 
			endif; 
            wp_reset_query();   
			?>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
