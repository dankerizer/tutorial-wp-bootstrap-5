<?php
/**
 * Created by PhpStorm.
 * User: dankerizer
 * Date: 28/05/2015
 * Time: 00:35
 */

add_action('wp_enqueue_scripts','nambah_style');
function nambah_style(){
    global $wp_styles;
    wp_enqueue_style('boostrap',get_template_directory_uri().'/css/bootstrap.css',array(),'3.3.4');
    wp_enqueue_style('main',get_stylesheet_uri());
    wp_enqueue_script('google-font','//fonts.googleapis.com/css?family=Open+Sans',array(),'1');

    if(!is_admin()){
        wp_deregister_script('jquery');
        wp_register_script('jquery','//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js',false,'2.1.4',true);
        wp_enqueue_script('jquery');
    }
    wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/js/bootstrap.min.js',array(),'3.3.4',true);

}
