<?php 
/**
 * @package Shop Plugin
 */
/*
Plugin Name: Metal Shop Online Plugin
Plugin URI: https://google.com/
Description: 
Version: 1.0.0
Author: Stefan
Author URI: https://google.com
*/

if( !function_exists('metal_shop_online_plugin_activate') ) {
    function metal_shop_online_plugin_activate() {

        flush_rewrite_rules();

    } 
}

if( !function_exists( 'metal_shop_online_plugin_register_post_types') ) {
    function metal_shop_online_plugin_register_post_types() {

        $labels = array(
            'search_items' => __( 'Search Shop Items' ),
            'edit_item' => __( 'Edit Shop Items' ),
            'update_item' => __( 'Update Shop Items') ,
            'delete_item' => __( 'Delete Shop Items' ),
        );

        register_post_type('product', array( 
            'label' => 'Shop Items', 
            'labels' => $labels,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
            'capability_type' => 'post', 
                'capabilities' => array(
                    'edit_post'          => 'edit_product', 
                    'read_post'          => 'read_product', 
                    'delete_post'        => 'delete_product', 
                    'edit_posts'         => 'edit_products', 
                    'publish_posts'      => 'publish_products',     
                    // 'search_posts'       => 'search_events'
                    // 'create_posts'       => 'create_events', 
            ),
            'public' => true 
            ) 
        ); 
    }
}

add_action('init', 'metal_shop_online_plugin_register_post_types');


if( !function_exists( 'metal_shop_online_plugin_deactivate' ) ) {
    function metal_shop_online_plugin_deactivate() {
        unregister_post_type('product');
        flush_rewrite_rules();

    } 
}

if ( !function_exists( 'metal_shop_online_plugin_register_taxonomies' ) ) {
    function metal_shop_online_plugin_register_taxonomies() {
        
        $taxonomy_name = 'products'; 

        $label_items = array(
            'name' => _x( 'Types', 'Types of Products'),
            'singular_name' => _x( 'Type', 'Type of Product' ),
            'search_items' => __( 'Search Product' ),
            'parent_item' => __( 'Parent Product' ),
            'all_items' => __( 'All Products' ),
            'edit_item' => __(' Edit Product '), 
            'update_item' => __( 'Update Product') ,
            'delete_item' => __( 'Delete Product' ),
            'add_new_item' => __( 'Add New Shop Product' ),
            'new_item_name' => __( 'New Product Name' ), 
            'menu_name' => __( 'Shop Items' ),
        ); 

        $post_type_args = array(
            'label' => 'Shop',
            // 'has_archive' => 'awesome_events',
            'public' => true,
            'menu_icon' => 'dashicons-calendar-alt'
        );

        register_post_type('product', $post_type_args);

        register_taxonomy($taxonomy_name, array( 'product' ), array(
            'hierarchical' => true,
            'labels' => $label_items,
            'show_ui' => true,
            'query_var' => true,
            // 'rewrite' => array( 'slug' => 'item' )  
        ));
    }
}

add_action( 'init', 'metal_shop_online_plugin_register_taxonomies' ); 

register_activation_hook( __FILE__, 'metal_shop_online_plugin_activate' );
register_deactivation_hook( __FILE__ , 'metal_shop_online_plugin_deactivate' );

?> 