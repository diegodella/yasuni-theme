<?php
/**
 * Custom template
 *
   Template Name: Page List Andes
 * @package WordPress
 * @subpackage Yasuni
 * @since Yasuni 1.0
 */

get_header(); ?>

<?php get_sidebar('default-andes');?>

<div id="column-right">


<?php 
	// hacer thisCategory dinamico
	$thisCategory = single_cat_title("", false);//'Quito and Surroundings Tours';
	$loop = new WP_Query( array( 'post_type' => 'Andes', 'category_name' => $thisCategory, 'posts_per_page' => 10 ) ); ?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

	<div class="post">
		<h1>
			<?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>
		</h1>
		<div class="thumbnails">
			<?php the_post_thumbnail(); ?>
		</div>	
		<?php the_content(); ?>
	</div>
<?php endwhile; ?>
</div>

<?php get_footer(); ?>