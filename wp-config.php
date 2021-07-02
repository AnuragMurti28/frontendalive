<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'frontendalive' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!K@%CX`B<j0HCRft.9%ut[5&:jP4|&@FjkAUWb>9aGO8<.P@W%hn1(aXW1^QnoF#' );
define( 'SECURE_AUTH_KEY',  ']a_<O9.a l#vRe%@eH*@cxQQ~Z GkP5O~f=;ZKw$Bz)|O3U`FhK(+92WJt?),S@c' );
define( 'LOGGED_IN_KEY',    '<hlW {?!Bzzd}LQ0yP,y3~+/?)]v8CQaTmVbUXxnk32gANRM9k?h~qUbg(6iLzuP' );
define( 'NONCE_KEY',        'D:/KeF.FltkMq=oi,3bXa@UCzZ16dTP1B3qff)F#v{KuRVajKDubplc<HLwoT|!Y' );
define( 'AUTH_SALT',        '{<0>a_Y@oMCa!9r[cUF=DqeI1Ia:?ijzz|NPeT!t0]5@bm5#Sa/*0!~?h4iQ3Y*0' );
define( 'SECURE_AUTH_SALT', 'm}il(5+MBC:R Xj]pYnRkyU)W*&HMeH3)$@AN#?@|2[lz|W(b./G7bE; 0LHuElN' );
define( 'LOGGED_IN_SALT',   '`#oLE[cYfr4Gk~>+!0#Aq{>ojC_Wi9!%M{JkP KctWoU$G)_?+cQ16@ykm!w,,I/' );
define( 'NONCE_SALT',       'm}7._X,#l~$4@v!X)RanS%ez43W,GT}aQ9]X>Q,z>+MOSfUMm.IHAlLj)5N=T$)X' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
