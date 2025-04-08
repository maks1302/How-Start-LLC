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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u475519970_LppSR' );
/** Database username */
define( 'DB_USER', 'u475519970_56Hwv' );
/** Database password */
define( 'DB_PASSWORD', 'om5Z6JFCY2' );
/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
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
define( 'AUTH_KEY',          'lTLd( 7l?R~Lryl7x,#];q#/yNWE,vYOHuE>|-K-L6ib5Eg&nT3;7=`xk4M0^?Ug' );
define( 'SECURE_AUTH_KEY',   'g+kY8O8^~gLQGNm8yO;M(z]XQCvdg-CP+v?f-d[*#3RH9b]A/+,xNRUF}It1kpP[' );
define( 'LOGGED_IN_KEY',     '$.[Y?SkSd,Ok1dV9m.A*%)z}[]Oxgu]N[.CTh}W;F@H4t}[WGHb*zbrk%d-b1&JL' );
define( 'NONCE_KEY',         'La2T|]7[f6)vcN;=!m>N;^~&qV,^=&$;v3Hd8ST<VXMKeMj6SzzH32K%K`NXmJ%#' );
define( 'AUTH_SALT',         '|Q;;gX8)EkEUg+PKe8of$p$.?kmAAaTN&H5N*HM.b[j=4APk{hdeTa9g5q@[L*ku' );
define( 'SECURE_AUTH_SALT',  '$WnfLN::xS~!Mh5R1%6736r6<)-zMy@xL4M&st_mWq/6h0t=Sjlcp <=&Lfm84J=' );
define( 'LOGGED_IN_SALT',    'l[Uq*>3@_Box#NqQ+Y(D0NPeU*ofc~_2Y7T5 d$a.5`qr7o^.Ms{,vo3f[:?Ld9s' );
define( 'NONCE_SALT',        '+r2vR2j6.o?4e#S1>3Y!#T$T9rgC>$mbrk8<gvh*D /I3fC,:a$BV4SzhT:kfu1D' );
define( 'WP_CACHE_KEY_SALT', 'UZ3b;v8n,|_pF$@&k|!!ysUmDeP_/fBL>cp=XHL[VNt,DZQ0V(Ue3O*,K=TCu~TE' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/* Add any custom values between this line and the "stop editing" line. */
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}
define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'cd207e0dd57ab273e41837979f819c14' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';