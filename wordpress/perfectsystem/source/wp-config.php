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
define( 'DB_NAME', 'perfects_perfectsystem' );

/** Database username */
define( 'DB_USER', 'perfects_perfectsystem' );

/** Database password */
define( 'DB_PASSWORD', '1qaz2wsx@#$$%^' );

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
define( 'AUTH_KEY',         '<)@PlMtb*yif|)y}J]bqU&1g084wCZk|i5qZEkOrf]$%Oa0hv}O| t!|%(0)%$13' );
define( 'SECURE_AUTH_KEY',  'kvlqL<~uxI(LvT4Hj<JFuqVD{E53C6/L@n|JMg%ga{5rRq:( Qr?.uF}h]-5Yu6[' );
define( 'LOGGED_IN_KEY',    'W9NOnpC(qgosdjX9O,pmEQsdl%bcBsMAv|pP`OO1~nU{s-pirY.M2s>pYORXv]u`' );
define( 'NONCE_KEY',        '};eCGD,cEJ:J*IjuY&(|`_xf<L.!m3,Km_@/{:SD1|_eGg{1L`m;b&Z*YM&Z!`7{' );
define( 'AUTH_SALT',        't6Lqbzzq#TB2/fc?kh*W]Rqb%=0pT<)*_eC4`*~-y7qh/d3BFIulO,.6OEyw%-m/' );
define( 'SECURE_AUTH_SALT', 'B*9i<0MH9Ta@17NCah%GzqsQMd,Yu%>e*kcf--Ip^c9sGz;Xg/`5* @P;F**wT|a' );
define( 'LOGGED_IN_SALT',   'W+VN3S%$_T3j(5o0v1xS]j|<7#e?0)5Nwb|!=-dK(3]FW?XPu`H$LID^mT<zyrdi' );
define( 'NONCE_SALT',       'c{R?SjgPUwbG!F@_$Z^IH<>NN(*>Zd8c.b&<aN&<R=KK}wIs.p]Rd}mxoDB8Fqjk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_1qaz2wsx';

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
