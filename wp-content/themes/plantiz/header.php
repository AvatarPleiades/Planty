<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
<header class="header directionRow">
            <a href="index.php" class="header__logo">
            <img src="wp-content\themes\plantiz\assets\images\Logo_miniature.png" alt="Logo Planty" id="logo">
            </a>
            <nav class="nav">
                <ul>
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
                <button onclick="window.location.href= 'plantiiz/commander/';" class="button-commander"> Commander </button>	
                </ul>
            </nav>
        </header>
            
<div id="container">
<main id="content" role="main">