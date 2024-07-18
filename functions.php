<?php
function fashion_assets(){
    wp_enqueue_style('fashion-style', get_template_directory_uri() . "/css/main.min.css", microtime());
    wp_enqueue_style('fashion-icons', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css", 1.0);
    wp_enqueue_script('fashion-script', get_template_directory_uri() . "/script/app.js", microtime(), [], true );
   

}
add_action('wp_enqueue_scripts', 'fashion_assets');

function fashion_theme_support(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'fashion_theme_support');