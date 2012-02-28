<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Yasuni
 * @since Yasuni 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	// Print the <title> tag based on what is being viewed.
	global $page, $paged;
	wp_title( '|', true, 'right' );
	// Add the blog name.
	bloginfo( 'name' );
	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'yasuni' ), max( $paged, $page ) );
	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory')?>/images/favicon.ico" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/nivo.slider.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.js" type="text/javascript"></script>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
	<script>
		$(function(){
		    $('.header-slider').nivoSlider({
		        effect: 'fade'
                directionNav: false,
                directionNavHide: false,
                controlNav: false,
		    });
		})
	</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<header id="branding" role="banner">
        <?php do_action('icl_language_selector'); ?>
		<h1 id="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><span><?php bloginfo( 'name' ); ?></span></a></h1>
		<?php
			// Check to see if the header image has been removed
			$header_image = get_header_image();
			if ( ! empty( $header_image ) ) :
		?>
	    <?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
	    <?php dynamic_sidebar( 'sidebar-6' ); ?>
	    <?php endif; ?>

		<div id="parallax" <?php if ( !is_front_page() ) { echo 'class="inner"';};?>>
            <div id="header_image" class = "<?php if ( is_front_page() ) echo "home"; ?>">
                <div id="certificate">
		    <img src="http://think-thanks.com/demos/yasuni/wp-content/themes/yasuni/images/logo-certificate.png" width="" height="">
	        </div>
                <div class="mask"><img src="<?php echo get_template_directory_uri(); ?>/images/mask.png" /></div>
                <div class="header-slider-wrapper">
                <div class="header-slider">
                <?php
                // The header image
                // Check if this is a post or page, if it has a thumbnail, and if it's a big one
                if ( is_singular() &&
                        has_post_thumbnail( $post->ID ) &&
                        ( $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array( HEADER_IMAGE_WIDTH, HEADER_IMAGE_WIDTH ) ) ) &&
                        $image[1] >= HEADER_IMAGE_WIDTH ) :
                    // Houston, we have a new header image!
                    echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
                else : 
                    yasuni_build_header_slider();
                ?>
                <?php endif; // end check for featured image or standard header ?>
                </div>
                </div>
            </div>
            <img id="swash" src="<?php echo get_template_directory_uri(); ?>/images/swash.png" />
        	<img id="asset_tree_a"  src="<?php echo get_template_directory_uri(); ?>/images/asset_tree.png" />
        	<img id="asset_tree_1" src="<?php echo get_template_directory_uri(); ?>/images/asset_tree_1.png" />
        	<img id="asset_bird_1" src="<?php echo get_template_directory_uri(); ?>/images/asset_bird_1.png" />
            <?php if ( is_front_page() ) { ?>
        	<img id="asset_bird" src="<?php echo get_template_directory_uri(); ?>/images/asset_bird.png" />
			<?php } else { ?>
				<img id="asset_bird_blue" src="<?php echo get_template_directory_uri(); ?>/images/asset_bird_blue.png" />
			<?php } ?>
        </div>
        <?php endif; // end check for removed header image ?>

	</header><!-- #branding -->
	<nav id="access" role="navigation">
		<h3 class="assistive-text"><?php _e( 'Main menu', 'yasuni' ); ?></h3>
		<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
		<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'yasuni' ); ?>"><?php _e( 'Skip to primary content', 'yasuni' ); ?></a></div>
		<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'yasuni' ); ?>"><?php _e( 'Skip to secondary content', 'yasuni' ); ?></a></div>
		<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'depth' => 0 ) ); ?>
		<div id="search">
			<?php get_search_form( $echo ); ?>
		</div>
	</nav>

	<div id="main">
