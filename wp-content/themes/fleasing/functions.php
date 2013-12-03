<?php
register_nav_menu('primary', '主导航');
register_nav_menu('foot', '底部导航');

add_image_size( 'headline-background', 1200, 400, true );
add_image_size( 'home-features', 600, 300, true );

add_action( 'wp_enqueue_scripts', function(){
	wp_register_script('bootstrap', get_stylesheet_directory_uri().'/js/bootstrap.min.js', array('jquery'), '3.0.2');
	wp_enqueue_script('bootstrap');
	
	wp_register_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), '3.0.2');
	wp_register_style('bootstrap-theme', get_stylesheet_directory_uri() . '/css/bootstrap-theme.min.css', array('bootstrap'), '3.0.2');
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('bootstrap-theme');
});

function fleasing_get_img_src($img){
	$match = array();
	if(preg_match('/src="(.*?)"/', $img, $match)){
		return $match[1];
	}
	else{
		return false;
	}
}
?>
