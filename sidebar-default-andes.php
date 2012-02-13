<?php
/**
 * Template Name: Sidebar Default Andes
 * Description: 
 *
 * @package WordPress
 * @subpackage Yasuni
 * @since Yasuni 1.0
 */

?>
<div id="column-left">
<?php
	// crear menu dinamico
 	$args = array( 'show_option_all' => "Show All Categories" );
	wp_dropdown_categories($args);
?>
</div>