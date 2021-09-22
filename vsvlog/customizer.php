<?php

function theme_customizer_function($wp_customize) {
    $wp_customize->add_panel('landing_panel', array(
        'title' => 'Front Page',
        'priority' => 10,
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_section('landing_page_home_hero_section', array(
        'title' => "Hero Section",
        'description' => __("Home Section Customizer"),
        'panel' => 'landing_panel'
    ));
    // first heading n description 
    $wp_customize->add_setting('landing_small_header1', array(
        'default' => __('Rethink your life')
    ));
    $wp_customize->add_control('landing_small_header1', array( 
        'label' => 'Small Heading',
        'section' => 'landing_page_home_hero_section',
        'priority' => 1
    ));
    $wp_customize->add_setting('landing_textarea1', array(
        'default' => __('There are only two ways to live your life. One is as though nothing is a miracle. The other is as though everything is a miracle.')
    ));
    $wp_customize->add_control('landing_textarea1', array(
        'label' => 'Description',
        'section' => 'landing_page_home_hero_section',
        'priority' => 2,
        'type' => 'textarea'
    ));
    // ends here

    // second 
    $wp_customize->add_setting('landing_small_header2', array(
        'default' => __('Push to the limits.')
    ));
    $wp_customize->add_control('landing_small_header2', array( 
        'label' => 'Small Heading',
        'section' => 'landing_page_home_hero_section',
        'priority' => 3
    ));
    $wp_customize->add_setting('landing_textarea2', array(
        'default' => __('Darkness cannot drive out darkness: only light can do that. Hate cannot drive out hate: only love can do that.')
    ));
    $wp_customize->add_control('landing_textarea2', array(
        'label' => 'Description',
        'section' => 'landing_page_home_hero_section',
        'priority' => 4,
        'type' => 'textarea'
    ));
    // ends here

    // third
    $wp_customize->add_setting('landing_small_header3', array(
        'default' => __('Be what you are.')
    ));
    $wp_customize->add_control('landing_small_header3', array( 
        'label' => 'Small Heading',
        'section' => 'landing_page_home_hero_section',
        'priority' => 5
    ));
    $wp_customize->add_setting('landing_textarea3', array(
        'default' => __('I am enough of an artist to draw freely upon my imagination. Imagination is more important than knowledge. Knowledge is limited. Imagination encircles the world.')
    ));
    $wp_customize->add_control('landing_textarea3', array(
        'label' => 'Description',
        'section' => 'landing_page_home_hero_section',
        'priority' => 6,
        'type' => 'textarea'
    ));
    // ends here

    // App Section 
    $wp_customize->add_section('home_app_section', array(
        'title' => "App Section",
        'description' => __("App Section Customizer"),
        'panel' => 'landing_panel'
    ));

    $wp_customize->add_setting('app_section_header', array(
        'default' => __('New app available')
    ));
    $wp_customize->add_control('app_section_header', array( 
        'label' => 'Header',
        'section' => 'home_app_section',
        'priority' => 1
    ));

    $wp_customize->add_setting('app_section_textarea1', array(
        'default' => __('Expedita sed, sint facere minus quis velit neque reiciendis, error omnis, voluptatibus culpa nobis quibusdam, ex officiis.')
    ));
    $wp_customize->add_control('app_section_textarea1', array(
        'label' => 'Description', 
        'section' => 'home_app_section',
        'priority' => 2,
        'type' => 'textarea'
    ));

    $wp_customize->add_setting('app_section_text1', array(
        'default' => __('Highly optimized')
    ));
    $wp_customize->add_control('app_section_text1', array( 
        'label' => 'App Text',
        'section' => 'home_app_section',
        'priority' => 3
    ));

    $wp_customize->add_setting('app_section_text2', array(
        'default' => __('Instant feedback')
    ));
    $wp_customize->add_control('app_section_text2', array( 
        'label' => 'App Text',
        'section' => 'home_app_section',
        'priority' => 4
    ));

    $wp_customize->add_setting('app_section_text3', array(
        'default' => __('Handy features')
    ));
    $wp_customize->add_control('app_section_text3', array( 
        'label' => 'App Text',
        'section' => 'home_app_section',
        'priority' => 5
    ));

    $wp_customize->add_setting('app_section_text4', array(
        'default' => __('Awesome support')
    ));
    $wp_customize->add_control('app_section_text4', array( 
        'label' => 'App Text',
        'section' => 'home_app_section',
        'priority' => 6
    ));

    $wp_customize->add_setting('app_section_ios', array(
        'default' => __('for IOS')
    ));
    $wp_customize->add_control('app_section_ios', array( 
        'label' => 'Text IOS',
        'section' => 'home_app_section',
        'priority' => 7
    ));

    $wp_customize->add_setting('app_section_android', array(
        'default' => __('for Android')
    ));
    $wp_customize->add_control('app_section_android', array( 
        'label' => 'Text Android',
        'section' => 'home_app_section',
        'priority' => 8
    ));

    // downloads & followers 
    $wp_customize->add_setting('app_section_mobile_downloads_heading', array(
        'default' => __('Mobile app downloads')
    )); 
    $wp_customize->add_control('app_section_mobile_downloads_heading', array( 
        'label' => 'Mobile Downloads',
        'section' => 'home_app_section',
        'priority' => 9
    ));

    $wp_customize->add_setting('app_section_insta_followers_heading', array(
        'default' => __('Instagram followers')
    )); 
    $wp_customize->add_control('app_section_insta_followers_heading', array( 
        'label' => 'Instagram Followers',
        'section' => 'home_app_section',
        'priority' => 10
    ));

    $wp_customize->add_setting('app_section_youtube_followers_heading', array(
        'default' => __('Youtube followers')
    )); 
    $wp_customize->add_control('app_section_youtube_followers_heading', array( 
        'label' => 'Youtube Followers',
        'section' => 'home_app_section',
        'priority' => 11
    ));

    $wp_customize->add_setting('app_section_facebook_followers_heading', array(
        'default' => __('Facebook followers')
    )); 
    $wp_customize->add_control('app_section_facebook_followers_heading', array( 
        'label' => 'Facebook Followers',
        'section' => 'home_app_section',
        'priority' => 12
    ));

    // About me

    $wp_customize->add_panel('about_panel', array(
        'title' => 'About Page',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_section('about_page_hero_section', array(
        'title' => 'About Page',
        'description' => __("About Section Customizer"),
        'panel' => 'about_panel'  
    ));

    $wp_customize->add_setting('about_page_header', array(
        'default' => __('About Me')
    ));

    $wp_customize->add_control('about_page_header', array(
        'label' => 'Header',
        'section' => 'about_page_hero_section',
        'priority' => 1
    ));   
    
    // textarea 
    $wp_customize->add_setting('about_page_textarea1', array(
        'default' => __('I\'m a 20 year old metalhead, web design student that desperately wants concerts to be allowed so he can see his favorite bands on stage.')
    ));
    $wp_customize->add_control('about_page_textarea1', array(
        'label' => 'Description',
        'section' => 'about_page_hero_section',
        'priority' => 2,
        'type' => 'textarea'
    )); 

    $wp_customize->add_setting('about_page_textarea2', array(
        'default' => __('Labore quam nulla in harum debitis reiciendis consectetur voluptatem alias cupiditate, impedit quidem soluta ipsa consequuntur, aut totam dolorem eaque maxime repellat porro non accusantium iure? Pariatur earum, deleniti nostrum suscipit, possimus repudiandae a neque libero odit fugit blanditiis laudantium corporis, debitis culpa dolorum iusto sed! Odio vero natus obcaecati possimus dignissimos.')
    ));
    $wp_customize->add_control('about_page_textarea2', array(
        'label' => 'Description',
        'section' => 'about_page_hero_section',
        'priority' => 3,
        'type' => 'textarea'
    )); 


    // hero section
    $wp_customize->add_section('about_hero_section', array(
        'title' => 'About Hero Section',
        'description' => __("About Hero"),
        'panel' => 'about_panel'
    ));

    $wp_customize->add_setting('about_hero_image', array(
        'default' => 'echo get_template_directory_uri() .  /assets/img/common/backgrounds/about.jpg '
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_hero_image', array(
        'label' => 'Background Image',
        'section' => 'about_hero_section',
        'setting' => 'about_hero_image'
    )));
    
    // socials

    $wp_customize->add_section('about_page_hero_socials', array(
        'title' => 'About Page Socials',
        'description' => __("About Section Customizer"),
        'panel' => 'about_panel'  
    ));

    $wp_customize->add_setting('about_page_youtube', array(
        'default' => __('YOUTUBE')
    ));

    $wp_customize->add_control('about_page_youtube', array(
        'label' => 'Youtube',
        'section' => 'about_page_hero_socials',
        'priority' => 1
    ));   

    $wp_customize->add_setting('about_page_facebook', array(
        'default' => __('FACEBOOK')
    ));

    $wp_customize->add_control('about_page_facebook', array(
        'label' => 'Facebook',
        'section' => 'about_page_hero_socials',
        'priority' => 2
    ));  

    $wp_customize->add_setting('about_page_instagram', array(
        'default' => __('INSTAGRAM')
    ));

    $wp_customize->add_control('about_page_instagram', array(
        'label' => 'Instagram',
        'section' => 'about_page_hero_socials',
        'priority' => 3
    ));  

    $wp_customize->add_setting('about_page_twitter', array(
        'default' => __('TWITTER')
    ));

    $wp_customize->add_control('about_page_twitter', array(
        'label' => 'Twitter',
        'section' => 'about_page_hero_socials',
        'priority' => 4
    ));  

    // Blog Page

    $wp_customize->add_panel('blog_panel', array(
        'title' => 'Blog Page',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_section('blog_page_section', array(
        'title' => 'Blog Page',
        'description' => __("Blog Section Customizer"),
        'panel' => 'blog_panel'  
    ));

    $wp_customize->add_setting('blog_page_youtube', array(
        'default' => __('Read More')
    ));

    $wp_customize->add_control('blog_page_youtube', array(
        'label' => 'Read More Button',
        'section' => 'blog_page_section',
        'priority' => 1
    ));


    // Contact Page

    $wp_customize->add_panel('contact_panel', array(
        'title' => 'Contact Page',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_section('contact_page_section', array(
        'title' => 'Contact Page',
        'description' => __("Contact Section Customizer"),
        'panel' => 'contact_panel'  
    ));

    $wp_customize->add_setting('contact_page_name_header', array(
        'default' => __('Zachary Stone')
    ));

    $wp_customize->add_control('contact_page_name_header', array(
        'label' => 'Name',
        'section' => 'contact_page_section',
        'priority' => 1
    ));

    $wp_customize->add_setting('contact_page_thing1', array(
        'default' => __('General')
    ));

    $wp_customize->add_control('contact_page_thing1', array(
        'label' => 'Thing',
        'section' => 'contact_page_section',
        'priority' => 2
    ));

    $wp_customize->add_setting('contact_page_thing1_description', array(
        'default' => __('Asperiores earum fugiat soluta ut ratione corporis id rerum inventore qui dolore.')
    ));

    $wp_customize->add_control('contact_page_thing1_description', array(
        'label' => 'Description',
        'section' => 'contact_page_section',
        'priority' => 3
    ));

    $wp_customize->add_setting('contact_page_thing2', array(
        'default' => __('Fun Mail')
    ));

    $wp_customize->add_control('contact_page_thing2', array(
        'label' => 'Thing',
        'section' => 'contact_page_section',
        'priority' => 4
    ));

    $wp_customize->add_setting('contact_page_thing2_description', array(
        'default' => __('Necessitatibus consectetur voluptates expedita possimus unde minima nihil ipsum numquam, adipisci labore?')
    ));

    $wp_customize->add_control('contact_page_thing2_description', array(
        'label' => 'Description',
        'section' => 'contact_page_section',
        'priority' => 5
    ));

    $wp_customize->add_setting('contact_page_thing3', array(
        'default' => __('Business')
    ));

    $wp_customize->add_control('contact_page_thing3', array(
        'label' => 'Thing',
        'section' => 'contact_page_section',
        'priority' => 6
    ));

    $wp_customize->add_setting('contact_page_thing3_description', array(
        'default' => __('Eum placeat quia itaque repellendus, illum cupiditate provident! Molestiae aspernatur quis, dolore!')
    ));

    $wp_customize->add_control('contact_page_thing3_description', array(
        'label' => 'Description',
        'section' => 'contact_page_section',
        'priority' => 7
    ));

    // FOOTER 

    $wp_customize->add_panel('footer_panel', array(
        'title' => 'Footer Page',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_section('footer_page_section', array(
        'title' => 'Footer Page',
        'description' => __("Footer Section Customizer"),
        'panel' => 'footer_panel'  
    ));

    $wp_customize->add_setting('footer_page_name_header', array(
        'default' => __('Subscribe to newsletter')
    ));

    $wp_customize->add_control('footer_page_name_header', array(
        'label' => 'Name',
        'section' => 'footer_page_section',
        'priority' => 1
    ));

    $wp_customize->add_setting('footer_page_name_header2', array(
        'default' => __('VSArt, all rights reserved. 2016 ©')
    ));

    $wp_customize->add_control('footer_page_name_header2', array(
        'label' => 'Name',
        'section' => 'footer_page_section',
        'priority' => 2
    ));
    
}

add_action( 'customize_register', 'theme_customizer_function' );
