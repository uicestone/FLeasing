<?php
register_nav_menu('primary', '主导航');
register_nav_menu('foot', '底部导航');

add_filter( 'excerpt_length', function(){
	return 300;
}, 20 );

add_image_size( 'home-focus-left', 425, 430, true );
add_image_size( 'home-focus-right', 535, 200, true );
add_image_size( 'headline', 283, 118, true );
add_image_size( 'category-main-thumb', 360, 360, true );
add_image_size( 'category-thumb', 215, 126, true );

add_theme_support('post-thumbnails');
?>
