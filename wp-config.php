<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'prottasha' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(^ME~uEhPvTohc52pI<wzc}cj*|Q]vmeM<judYyWz:M!5JzMtH({EUT,HCs|;D7e' );
define( 'SECURE_AUTH_KEY',  '?n}QH|?*TrO{$71qCQuZ~9#P|xc,cJxh|9rj,%rHQ]]ux9hO<>-=ctg1JgiE[FB~' );
define( 'LOGGED_IN_KEY',    'gi7ls|]5nfUp6q)07oz0>[)[~QYA9b]i9nK!^/7@yC2W}d|XOVLQM#vGhEBRK1Xq' );
define( 'NONCE_KEY',        '{+n*?/R]RoOPsN$e>IZ>Gy;CT,M!0v11X]&?/QH&;(~pyr(bOjk[&~Z+!5brVFNu' );
define( 'AUTH_SALT',        'tfgB|vuyp;dPP_cz}@(b`&owVKZDEt65FKqgM *!Q<l7;r?k*^r[tSA(ogZi^vv7' );
define( 'SECURE_AUTH_SALT', 'k_B>Ebh@C&Twu0e@{|5db#n?ctzBceI$M~WopvEZwmiH~|J3bp+--s+y2|k G8{$' );
define( 'LOGGED_IN_SALT',   'k$&0J-z& o3x0G#k ZErr]lIH#.kcAi>44x~jfm!1eHY(h$-T1<1f<s[Rq4a!*4t' );
define( 'NONCE_SALT',       '*kZRzv*S21?+`Uj4E^T[xi)hWTV20gUe2IeXB4{@H.{4Xt/~]1X&Y7c9jM)o|tl[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pa_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
