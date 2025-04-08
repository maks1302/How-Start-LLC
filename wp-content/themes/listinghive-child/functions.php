<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'minireset','flexboxgrid','hivetheme-core-frontend','hivetheme-parent-frontend','hivetheme-parent-frontend' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );


function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');



/**
 * Add Learn More Link to Listing View Block
 */
add_filter(
	'hivepress/v1/templates/listing_view_block/blocks',
	function ($blocks, $template){
		$listing = $template->get_context('listing');
		
		if(!$listing){
			return $blocks;
		}
		
		$listing_id = $listing->get_id();
		
		if(!$listing_id){
			return $blocks;
		}
		
		return hivepress()->helper->merge_trees(
					[ 'blocks' => $blocks ],
					[
						'blocks' => [
							'listing_actions_primary' => [
								'blocks' => [
									'listing_page_link' => [
										'type'   => 'content',
										'content'  => '<a class="button-2" href="'.esc_url( hivepress()->router->get_url( 'listing_view_page', [ 'listing_id' => $listing->get_id() ] ) ).'">Learn More</a>',
										'_order' => 1,
									],
								],
							],
						],
				]
				)['blocks'];
	},
	1000,
	2
);
