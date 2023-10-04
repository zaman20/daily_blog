<?php 

function myStyle(){
    wp_enqueue_style('main_css',get_stylesheet_uri(),'','1.0.1');
    wp_enqueue_style('responsive_css',get_template_directory_uri().'/responsive.css','','1.0.0');
    wp_enqueue_style('bootstrap_css',"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css");
    wp_enqueue_style('fontawesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css");
}   
add_action('wp_enqueue_scripts','myStyle');




?>