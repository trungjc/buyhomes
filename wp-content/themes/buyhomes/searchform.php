<?php
/**
 * Template for displaying search forms in Twenty Sixteen
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentysixteen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'twentysixteen' ); ?>" />

	<button type="submit" class="search-submit"><span><i class="fa fa-search" aria-hidden="true"></i></span></button>
</form>
