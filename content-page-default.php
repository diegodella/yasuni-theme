<?php
/**
 * The template used for displaying page content in page-default.php
 *
 * @package WordPress
 * @subpackage Yasuni
 * @since Yasuni 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" class="page-post">
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
<div id="sidebar-menu-page">
	<?php
	  if($post->post_parent)
	  	$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
	  else
	  	$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
	  if ($children) { ?>
	  	<ol>
	  		<?php echo $children; ?>
	  	</ol>
	<?php } ?>
	<?php dynamic_sidebar( 'sidebar-menu-page' ) ?>
</div>