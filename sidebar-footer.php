<?php
/**
 * The Footer widget areas.
 *
 * @package WordPress
 * @subpackage Yasuni
 * @since Yasuni 1.0
 */
?>

<?php
	/* The footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'sidebar-3'  )
		&& ! is_active_sidebar( 'sidebar-4' )
		&& ! is_active_sidebar( 'sidebar-5'  )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>
<div id="supplementary" <?php yasuni_footer_sidebar_class(); ?>>
    <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
	<div id="sponsors" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div><!-- #first .widget-area -->
	<?php endif; ?>
	<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
	<div id="third" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-5' ); ?>
	</div><!-- #third .widget-area -->
	<?php endif; ?>
	<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
    
	<div id="contact-info" class="widget-area" role="complementary">
	    <a id="ama-la-vida" href="http://www.mtop.gob.ec/img/b_enlaces/ecuador_ama_la_vida.png"><img src="http://www.mtop.gob.ec/img/b_enlaces/ecuador_ama_la_vida.png"></a>
        <a id="presidencia" href="http://www.presidencia.gov.ec/"><img src="http://www.think-thanks.com/demos/yasuni/wp-content/themes/yasuni/images/logos/bn_gobierno.png" ></a>
		<?php dynamic_sidebar( 'sidebar-4' ); ?>
	</div><!-- #second .widget-area -->
	<?php endif; ?>
	
</div><!-- #supplementary -->