<?php


    function load_script() {
        wp_enqueue_style('bootstrap-min-css', get_template_directory_uri(). '/css/bootstrap.min.css');
        wp_enqueue_style('fancybox-css', get_template_directory_uri(). '/css/jquery.fancybox.css');
        wp_enqueue_style('main-css', get_template_directory_uri(). '/css/main.css');
        wp_enqueue_style('responsive-css', get_template_directory_uri(). '/responsive.css');
        wp_enqueue_style('animate-css', get_template_directory_uri(). '/css/animate.min.css');
        wp_enqueue_style('font-awesome-css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
     
        wp_enqueue_script('jquery-min-js','https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',array(),'1.11.3',true);
        wp_enqueue_script('boostrap-min-js',get_template_directory_uri().'/js/bootstrap.min.js',array(),'null',true);
        wp_enqueue_script('jquery-fancybox-pack-js',get_template_directory_uri().'/js/jquery.fancybox.pack.js',array(),'null',true);
        wp_enqueue_script('jquery-waypoints-min-js',get_template_directory_uri().'/js/jquery.waypoints.min.js',array(),'null',true);
        wp_enqueue_script('retina-min-js',get_template_directory_uri().'/js/retina.min.js',array(),'null',true);
        wp_enqueue_script('modernizr-js',get_template_directory_uri().'/js/modernizr.js',array(),'null',true);
        wp_enqueue_script('main-js',get_template_directory_uri().'/js/main.js',array(),'null',true);
        
    }
    
    add_action('wp_enqueue_scripts', 'load_script');
    
        function minifolio_sidebars(){
        register_sidebar(
            array(
                'name' => 'Banner',
                'id' => 'banner',
                'description' => 'Type any text here',
                'before_widget' => '<div class"widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>'
            )
        );    
        register_sidebar(
            array(
                'name' => 'About Me',
                'id' => 'about-me',
                'description' => 'Type any text here',
                'before_widget' => '<div class"widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>'
            )
        );
        register_sidebar(
            array(
                'name' => 'About Me - Second Area',
                'id' => 'about-me2',
                'description' => 'Please drag your widgets here',
                'before_widget' => '<div class"widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>'
            )
        );
 
    }

    add_action('widgets_init','minifolio_sidebars');