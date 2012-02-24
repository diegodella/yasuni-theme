<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Yasuni
 * @since Yasuni 1.0
 */

$options = yasuni_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area" role="complementary">
			<aside id="contributions" class="column center">
				<a href="http://mdtf.undp.org/yasuni"><img src="http://think-thanks.com/demos/yasuni/wp-content/themes/yasuni/images/contributions.jpg" width="320px" height="204px" /></a>
			</aside>
            <aside id="latest-videos" class="column center">
                <h3>Multimedia</h3>
                <?php
                query_posts( 'category_name=Videos&showposts=1' );
                while (have_posts() ) : the_post();
                ?>
                <article>
                    <?php the_content(); ?>
                </article>
                <?php
                endwhile;
                wp_reset_query();
                ?>
            </aside>

			<?php dynamic_sidebar( 'sidebar-1' ) ?>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>