<?php
//Child Theme Functions File
add_action( "wp_enqueue_scripts", "enqueue_wp_child_theme" );
function enqueue_wp_child_theme() 
{
    /*if((esc_attr(get_option("planty_setting_x")) != "Yes")) 
    {
		//This is your parent stylesheet you can choose to include or exclude this by going to your Child Theme Settings under the "Settings" in your WP Dashboard
		wp_enqueue_style("parent-css", get_template_directory_uri()."/style.css" );
    }*/

	//This is your child theme stylesheet = style.css
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.css'));

	//This is your child theme js file = js/script.js
	wp_enqueue_script("child-js", get_stylesheet_directory_uri() . "/js/script.js", array( "jquery" ), "1.0", true );
}
 

// ChildThemeWP.com Settings 
function planty_register_settings() 
{ 
	register_setting( "planty_theme_options_group", "planty_setting_x", "ctwp_callback" );	
}

/* add_action( "admin_init", "planty_register_settings" ); */

//ChildThemeWP.com Options Page
function planty_register_options_page() 
{
	add_options_page("Child Theme Settings", "My Child Theme", "manage_options", "planty", "planty_theme_options_page");
}
/* add_action("admin_menu", "planty_register_options_page"); */

register_nav_menus( array(
		'header' => 'main-menu',
		'footer' => 'footer_menu',		
) );

/* fonction pour mettre la class nav-item sur les li */
function planty_menu_class($classes){

	/* var_dump(func_get_args()); Renvoie un tableau comprenant la liste des arguments d'une fonction
	die(); */

	$classes[] = 'nav-item';
	return $classes;	
}

/* fonction pour mettre une class sur les link  */

function planty_menu_link_class($attrs){
	$attrs['class'] = 'nav-link';
	return $attrs;
}

add_filter('nav_menu_css_class', 'planty_menu_class');
add_filter('nav_menu_link_attributes', 'planty_menu_link_class');


function add_admin_link( $items, $args ) {
	/* var_dump($args->theme_location); */
	if (is_user_logged_in() && ($args->theme_location == 'main-menu')) {
		$items .= '<li class="nav-item "><a class="nav-link" href=" '. get_admin_url() .' " >Admin</a> </li>';
	}
	
	return $items;
}

add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);

?>