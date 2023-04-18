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
define( 'DB_NAME', 'modernho_modernhospital' );

/** Database username */
define( 'DB_USER', 'modernho_modernhospital' );

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
define( 'AUTH_KEY',         'HV2g%i?jNTW<]w%v,J@l5wq#i{H>=,b_gq(mKcZ.2Z)[q-OHdJoN9Zfr(GglcP,6' );
define( 'SECURE_AUTH_KEY',  '6*AO.[MD8V7wO4<cL$W8s(0@q]<}/<7ac=VyXL1D]13Td2p5Kyx_oj>P2DBL8~gP' );
define( 'LOGGED_IN_KEY',    'gOhIPco`P_JK47)#]taaQ{NFs7z=o!|aM>F@DFYk[Lq-@k`]A{,v21|Toh,wTWLy' );
define( 'NONCE_KEY',        'q51u,]SN:m/<mJwD/BopD[<oNe4,Cli1_o1&s=~HIu*favQrfN,#9tB=:w4w,I#O' );
define( 'AUTH_SALT',        '|=@`2$nX*uwQ#qKz)6N4c3$oIEoXPcyK@l#ufPTMADE=0>RX]d>KoXn}KLVWVOL8' );
define( 'SECURE_AUTH_SALT', ']9km~kn~]ppC9^1e}~ <mMT6h|L97d~,J0y##i5V&Lm-/AA*m*@j[v*?e:0%icpl' );
define( 'LOGGED_IN_SALT',   'Ajl,dYpA,I@z>f+r63*C):o9dlX}^^8]1(j/kEgxi86AE|3]:blqkH>|b3KHRqh3' );
define( 'NONCE_SALT',       'T9 yV~@Y%!{/W]..smKvk0_R/qskcMyi6p{jt<nF-R`+PI:QV~O<4oi=>q6]qT[Q' );

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
