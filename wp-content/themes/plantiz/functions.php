<?php
add_action( "wp_enqueue_scripts", "enqueue_wp_child_theme" );
function enqueue_wp_child_theme() 
{
	//On demande à aller chercher le style.css du thème enfant, basé sur celui du thème parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
	//Puis de récupérer les modifications css faites dans le theme.css
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.css'));
	//On récupére le fichier js de notre thème enfant
	wp_enqueue_script("child-js", get_stylesheet_directory_uri() . "/js/script.js", array( "jquery" ), "1.0", true );
}
//Création des menus
register_nav_menus( array(
		'header' => 'main-menu',
		'footer' => 'footer_menu',		
) );

//Fonction pour mettre la class nav-item sur les li
function planty_menu_class($classes){
	$classes[] = 'nav-item';
	return $classes;	
}

//Fonction pour mettre une class sur les link
function planty_menu_link_class($attrs){
	$attrs['class'] = 'nav-link';
	return $attrs;
}

add_filter('nav_menu_css_class', 'planty_menu_class');
add_filter('nav_menu_link_attributes', 'planty_menu_link_class');

//Création du hook admin
function add_admin_link( $items, $args ) {
	if (is_user_logged_in() && ($args->theme_location == 'main-menu')) {
		$items .= '<li class="nav-item "><a class="nav-link" href=" '. get_admin_url() .' " >Admin</a> </li>';
	}
	
	return $items;
}

add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);

?>