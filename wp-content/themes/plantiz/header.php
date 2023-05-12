<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
        <header class="site-header directionRow">
            <a href="<?php get_stylesheet_directory_uri(); ?> /plantiiz/index.php">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo_miniature.png" alt="Logo Planty" id="logo">
            </a>
            <nav class="navbar">
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                    <button onclick="window.location.href= 'plantiiz/commander/';" class="button-commander"> Commander </button>	
            </nav>
        </header>
            
<div id="container">
<main id="content" role="main">