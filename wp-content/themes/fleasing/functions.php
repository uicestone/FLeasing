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
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('bootstrap-theme');
	wp_enqueue_style('style', get_stylesheet_uri());
});

/**
 * 没有找到WordPress有直接返回文章特色图片路径的函数
 * 此函数从img标签中取出src属性
 */
function fleasing_get_img_src($img){
	$match = array();
	if(preg_match('/src="(.*?)"/', $img, $match)){
		return $match[1];
	}
	else{
		return false;
	}
}

/**
 * 为当前活动的菜单项加上active类
 */
add_filter( 'nav_menu_css_class', 'additional_active_item_classes', 10, 2 );

function additional_active_item_classes($classes = array(), $menu_item = false){

    if(in_array('current-menu-item', $menu_item->classes) || in_array('current-post-ancestor', $menu_item->classes)){
        $classes[] = 'active';
    }

    return $classes;
}

function paginator() {
	global $wp_query;

	$paginator = '<div class="pagination pagination-centered">';

	$paginator .= paginate_links(array(
			'base' => str_replace( 99999, '%#%', esc_url( get_pagenum_link( 99999 ) ) ),
			'format'=>'/%n%/page/%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'type' => 'list'
	));

	$paginator .= '</div>';

	return $paginator;
}
?>
