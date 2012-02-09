<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Yasuni
 * @since Yasuni 1.0
 */

get_header(); /*?>

<?php $loop = new WP_Query( array( 'post_type' => 'Andes', 'posts_per_page' => 10 ) ); ?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

	<?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>
<?php endwhile; ?>

<?php */get_footer(); ?>
