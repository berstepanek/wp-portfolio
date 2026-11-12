<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les rÃ©glages de configuration suivants : rÃ©glages MySQL,
 * prÃ©fixe de table, clÃ©s secrÃ¨tes, langue utilisÃ©e, et ABSPATH.
 * Vous pouvez en savoir plus Ã  leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. Câ€™est votre hÃ©bergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisÃ© par le script de crÃ©ation de wp-config.php pendant
 * le processus dâ€™installation. Vous nâ€™avez pas Ã  utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** RÃ©glages MySQL - Votre hÃ©bergeur doit vous fournir ces informations. ** //
/** Nom de la base de donnÃ©es de WordPress. */
define('DB_NAME', 'stepanekb_portfolio');

/** MySQL database username */
define('DB_USER', 'stepanekb_bd_portfolio');

/** MySQL database password */
define('DB_PASSWORD', 'bd_portfolio123$');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * ClÃ©s uniques dâ€™authentification et salage.
 *
 * Remplacez les valeurs par dÃ©faut par des phrases uniques !
 * Vous pouvez gÃ©nÃ©rer des phrases alÃ©atoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrÃ¨tes de WordPress.org}.
 * Vous pouvez modifier ces phrases Ã  nâ€™importe quel moment, afin dâ€™invalider tous les cookies existants.
 * Cela forcera Ã©galement tous les utilisateurs Ã  se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');
/**#@-*/

/**
 * PrÃ©fixe de base de donnÃ©es pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de donnÃ©es
 * si vous leur donnez chacune un prÃ©fixe unique.
 * Nâ€™utilisez que des chiffres, des lettres non-accentuÃ©es, et des caractÃ¨res soulignÃ©sÂ !
 */
$table_prefix  = 'wp_';

/**
 * Pour les dÃ©veloppeurs : le mode dÃ©boguage de WordPress.
 *
 * En passant la valeur suivante Ã  "true", vous activez lâ€™affichage des
 * notifications dâ€™erreurs pendant vos essais.
 * Il est fortemment recommandÃ© que les dÃ©veloppeurs dâ€™extensions et
 * de thÃ¨mes se servent de WP_DEBUG dans leur environnement de
 * dÃ©veloppement.
 *
 * Pour plus dâ€™information sur les autres constantes qui peuvent Ãªtre utilisÃ©es
 * pour le dÃ©boguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Câ€™est tout, ne touchez pas Ã  ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** RÃ©glage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');