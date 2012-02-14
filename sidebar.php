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
            <aside id="latest-videos" class="column center">
                <h3>Videos</h3>
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

			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="archives" class="widget">
					<h3 class="widget-title"><?php _e( 'Archives', 'yasuni' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>
			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>
