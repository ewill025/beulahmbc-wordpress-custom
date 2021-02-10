<?php 
    function bmbc_menus(){
        register_nav_menus(array(
            'main-menu' => 'Main Menu', 
        ));
    }
    // Hook
    add_action('init', 'bmbc_menus');

    function bmbc_scripts(){
        wp_enqueue_style('bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css");
        wp_enqueue_style('normalize',get_template_directory_uri() . '/css/normalize.css',array(),'8.0.1');
        wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&family=Staatliches&display=swap', array(), '1.0.0');
        wp_enqueue_style('style', get_stylesheet_uri(),array('normalize','googlefont'),'1.0.0');
        
        wp_enqueue_script('jquery');
        /*JS Files*/
        wp_enqueue_script('bootsrapjs', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js",array('jquery'),'4.5.0' ,true);
  

    }
    add_action('wp_enqueue_scripts', 'bmbc_scripts');
    function bmbc_setup(){
        add_image_size( 'square', 350, 350,true);
        add_image_size( 'potrait', 350, 724, true );
        add_image_size( 'box', 400, 375, true );
        add_image_size( 'mediumsize', 700, 400, true );
        add_image_size( 'blog', 966, 644, true );
        add_image_size( 'landscape', 1400, 800, true );
        add_image_size( 'header', 1175,250 ,true );


        add_theme_support( 'post-thumbnails');
    }
    add_action('after_setup_theme', 'bmbc_setup');

    /**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
    //Creates Widget Zone
    function bmbc_widgets(){
        register_sidebar( array(
            'name' => 'Sidebar',
            'id' => 'sidebar',
            'before_widget' => '<div class="widget">',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
        register_sidebar(array(
            'name' => 'Image',
            'id' => 'image',
            'before_widget' => '<div class="widget">',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
        register_sidebar(array(
            'name' => 'Image-2',
            'id' => 'image2',
            'before_widget' => '<div class="widget">',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
        register_sidebar(array(
            'name' => 'Image-3',
            'id' => 'image3',
            'before_widget' => '<div class="widget">',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
    }
    add_action( 'widgets_init', 'bmbc_widgets' );
?>