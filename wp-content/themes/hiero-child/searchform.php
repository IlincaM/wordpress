<?php
/**
 * The template for displaying search forms in aThemes
 *
 * @package aThemes
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label class="search-label-style">
		<input type="search" class="search-field search-field-style" placeholder="<?php echo esc_attr_x( 'Search by keyword', 'placeholder', 'athemes' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'athemes' ); ?>">
	
        </label>
	<input type="submit" class="search-submit search-submit-style" value="<?php echo esc_attr_x( '&#128270;', 'submit button', 'athemes' ); ?>">
</form>
