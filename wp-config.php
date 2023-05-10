<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'plantiz' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.5,KA0ZA=aRC2>E0ax|7c(SP+<m/WczO`Hkfr]0P|?G*Y8 +@NB?[/+~<$2g#@M%' );
define( 'SECURE_AUTH_KEY',  'OtFi|HF0O:;Qxw!L8lJiU3VuWDx1t#JQ0R7-7Eu8GR+ju6 W=UYF4$CguvZYkSLq' );
define( 'LOGGED_IN_KEY',    '=RVP>GqR36{>SmKD>)`}to{9|b&FE,!`$Y}6^y;G~E?9WH_5`#LD?=ECwAc>pao&' );
define( 'NONCE_KEY',        '?Dj^X*:_39G>+gf^$^?~};K(2kzk2NvCI:lOqE3Rj|wqaY(CuY3/WT!F4=bPP=9:' );
define( 'AUTH_SALT',        'c%.[XqTFpQKp+26}-?!z9D/zUHXbT>|AuR[pF,]f= @>b[J=(~tAzS8f}MF60d.g' );
define( 'SECURE_AUTH_SALT', '~/^MXyQ]F@rTSzv `BFU[D`.`@UkpnlND c!s#9VGS7 ?(%3hDf.<h+O^KamrKtD' );
define( 'LOGGED_IN_SALT',   'zyMdNAYI]VT%Sxo:Sh-TnKdX~nRlnryeF$Zf#V9Y}.! /945WY!Z.?mG@z-4?Qzq' );
define( 'NONCE_SALT',       'pF%~`XVD]NM=Dm-@-v;l%([&[6>{(_zZcLpF1QA/[W?mdyMLf.xYa0)NnEBs3odd' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
