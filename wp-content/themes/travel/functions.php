<?php
    if (function_exists('register_sidebar'))
        register_sidebar(array('name'=>'Sidebar'));//register sidebar
    add_theme_support('post-thumbnails');// add mini_img
    set_post_thumbnail_size(192,144,true);  
   
if( !is_admin()){
   wp_deregister_script('jquery');
   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"), false, '1.3.2');
   wp_enqueue_script('jquery');
   }
function true_include_myscript_dep_jquery() {
 	wp_enqueue_script( 'myscript', get_stylesheet_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery') );
}
 
add_action( 'wp_enqueue_scripts', 'true_include_myscript_dep_jquery' );


?>