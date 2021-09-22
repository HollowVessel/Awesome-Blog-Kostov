<?php
/**
 * Theme Functions file
 * 
 * 
 */
?>
<?php

/**
 * Customizer
 */

 require_once 'customizer.php';

// Initial Thme Setup
if( !function_exists( 'vsvlog_theme_setup' ) ) {
    function vsvlog_theme_setup() {
        
        // Theme Features 
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'menus' );
        add_theme_support('title-tag');
        add_theme_support('widgets');

        // Register Navigation Menus
        register_nav_menus( array( 
            'primary' => 'Main Menu',
            'secondary' => 'Categories Menu',
            'third' => 'Shop Categories Menu'
        ) );
    } 
    add_action( 'after_setup_theme', 'vsvlog_theme_setup' );
}

if ( !function_exists( 'vsvlog_theme_sidebar_setup' ) ) {
    function vsvlog_theme_sidebar_setup() {
        // Register Sidebar 
        register_sidebar( array(
            'name' => 'Singe Post Sidebar',
            'id' => 'sidebar-1',
            'class' => 'sidebar', 
            'description' => 'This is our awesome sidebar',
            'before_widget' => '<aside class="widget">', 
            'after_widget' =>  '</aside>', 
            'before_title' => '<h3 class="widget__title">',
            'after-title' => '</h3>'
    ) );
    }
    add_action( 'widgets_init', 'vsvlog_theme_sidebar_setup');
}


if ( !function_exists( 'vsvlog_theme_stylesheet_setup') ) {
    function vsvlog_theme_stylesheet_setup() {
        wp_enqueue_style( 'vsvlog-custom-style', get_template_directory_uri() . "/assets/css/custom.css", array(), '1.0.0','all' );        
        wp_enqueue_style( 'vsvlog-style', get_template_directory_uri() . "/style.css", array(), '1.0.0','all' );
        wp_enqueue_style( 'vsvlog-my-custom-style', get_template_directory_uri() . "/assets/css/custom_styles.css", array(), '1.0.0','all' );
        // wp_enqueue_style( 'vsvlog-style-min', get_template_directory_uri() . "/assets/css/style.min.css", array(), '1.0.0','all' );
        wp_enqueue_style( 'simplelineiconseot', get_template_directory_uri() . "/vsvlog/assets/fonts/simple-line-icons/Simple-Line-Icons.eot", array(), '1.0.0', 'all' ); 
        wp_enqueue_style( 'simplelineiconssvg', get_template_directory_uri() . "/assets/fonts/simple-line-icons/Simple-Line-Icons.svg", array(), '1.0.0', 'all' );
        wp_enqueue_style( 'simplelineiconsttf', get_template_directory_uri() . "/assets/fonts/simple-line-icons/Simple-Line-Icons.ttf", array(), '1.0.0', 'all' );
        wp_enqueue_style( 'simplelineiconswoff', get_template_directory_uri() . "/assets/fonts/simple-line-icons/Simple-Line-Icons.woff", array(), '1.0.0', 'all' );
        wp_enqueue_style( 'simplelineiconswoff2', get_template_directory_uri() . "/assets/fonts/simple-line-icons/Simple-Line-Icons.woff2", array(), '1.0.0', 'all' );
    } 
    add_action('wp_enqueue_scripts', 'vsvlog_theme_stylesheet_setup');
}

if ( !function_exists( 'vsvlog_theme_scripts_setup') ) {
    function vsvlog_theme_scripts_setup() {
        wp_enqueue_script( 'modernizr-min', "https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js", array(), '2.8.3', false);
        wp_enqueue_script( 'scriptjs', get_template_directory_uri() . "/assets/js/script.js", array(), '1.0.0', true );
        wp_enqueue_script( 'fontawesome', "https://use.fontawesome.com/5b964bf81e.js", array(), '1.0.0', false);
    }

    add_action('wp_enqueue_scripts', 'vsvlog_theme_scripts_setup');
}

add_filter( 'comment_form_default_fields', 'wpse_62742_comment_placeholders' );

/**
 * Change default fields, add placeholder and change type attributes.
 *
 * @param  array $fields
 * @return array
 */
function wpse_62742_comment_placeholders( $fields )
{
    $fields['author'] = str_replace(
        '<input',
        '<input placeholder="'
        /* Replace 'theme_text_domain' with your theme’s text domain.
         * I use _x() here to make your translators life easier. :)
         * See http://codex.wordpress.org/Function_Reference/_x
         */
            . _x(
                'Name',
                'comment form placeholder',
                'theme_text_domain'
                )
            . '"',
        $fields['author']
    ); 
    $fields['email'] = str_replace(
        '<input id="email" name="email" type="text"',
        /* We use a proper type attribute to make use of the browser’s
         * validation, and to get the matching keyboard on smartphones.
         */
        '<input type="email" placeholder="contact@example.com"  id="email" name="email"',
        $fields['email']
    ); 
    $fields['url'] = str_replace(
        '<input id="url" name="url" type="text"',
        // Again: a better 'type' attribute value.
        '<input placeholder="http://example.com" id="url" name="url" type="url"',
        $fields['url']
    );

    return $fields;
}