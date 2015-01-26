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

define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME']);
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'place2book_landingpage');

/** MySQL database username */
define('DB_USER', 'place2book');

/** MySQL database password */
define('DB_PASSWORD', '4Rocket_boys');

/** MySQL hostname */
define('DB_HOST', 'mysql4.gigahost.dk');

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
define('AUTH_KEY',         '; 1|yvacO8L[@b`K-!8*TOE_<H>-d])9Q%+H)-KrB%t+[,vf3 Ehq`X.3:}@X#MB');
define('SECURE_AUTH_KEY',  'jO&n)&D-,oI</W/~G00nfw#`Fq6:$WHJ`@=y0JiN+{3VjzHXn.)M@>MXH6T=S7-2');
define('LOGGED_IN_KEY',    'kLt=_IF[2%sFP&}f7V]3ZF@&:(oZg^#TI<)?s[_86+p[z~i(nyt2F*zobe7 i&mG');
define('NONCE_KEY',        'frnhfQJq$h7MF~`XI1+Z2KG`xpH.kk<i4Htk%QvV#}3y!*+)OQ-|a()TF[-Y>%z.');
define('AUTH_SALT',        'BUE2:`xH;R9x.0`%Tr1b 6^YXBU++@6ops-D~m-OVX~PlX7$E_MQ/)GND,Sk+}PM');
define('SECURE_AUTH_SALT', 'T6-3@&^Vq$GI+]jkJ)ZlA7, &|F8<9^3(3gP0?l|iAB~E~DmVg+0ox)3/Vo=t+m{');
define('LOGGED_IN_SALT',   'vT#Qr::U#}p&B_@e9GO.G#Nh-1rdp:)CPj++Ek(DV%P;{#a3PZ=Xrc<53*AQedUg');
define('NONCE_SALT',       'q9+h><1AV^aEPiXS%qxw-9}UlCVxjJ.)S)&&22&`W|w/e<}Qra-oICREWvwa2#sI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
