<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':x^R_rN$XpT6ome+R}[ ILg4.=G6F=}88@tdi=GP+z-^HE_eVl4(-#U<[g8<-wV8');
define('SECURE_AUTH_KEY',  'gh^`6d>,jID=Ej/1dZxy-.K[CZ1_qGr~Vw6?+uTLRm|C^ShTVXV[m#iNW0u|Iq?Y');
define('LOGGED_IN_KEY',    'T|+T90l&+q|,z>gGo(`}<u_nyRASVUKYYvX|X|!)#CpR#;y>M1f&Nndw:W2Dxm,>');
define('NONCE_KEY',        'R&00|+|dN=4zlxW**f?sI_)s`G 5GzN#Pu.+NIq/B5F&SM,OO,Waa&/G)NM`<JT4');
define('AUTH_SALT',        '2/D~bCm7dV.?[<CKih-%DBEaxE??K<eVflHhXPW1J.+~|*>w~1uog0cL1H8,ar{,');
define('SECURE_AUTH_SALT', '2$4zuz JI&tO6$:ITorJY<;#-R@,u.nbVoURy$|:qq40W4D2aW=V6TlktwVgf!72');
define('LOGGED_IN_SALT',   'E3sV[^gUb?-~;<`<SzRB:bXMPM3~!t!3Yu(Up^U-$5K6=0}Me6)&-(mr>{xX~wis');
define('NONCE_SALT',       '<8tWlk@b`Z 9TAZ#?0B_~<gT1DK8&Cwc9!wF`*Lb;dF!pW+f2~F#Rihdi{+{Ylz<');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
