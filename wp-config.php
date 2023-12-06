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
define( 'DB_NAME', 'wp_vinyl' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'SY^XAG*nYEa3nvvgP-+N?{Wtn{Wtwt^=2SK1,zhr-#uZ4q{Ik/EFQuR*N.z3k9`s' );
define( 'SECURE_AUTH_KEY',  'h^99{N-[pr|ODu[9D%6*A4vVLC;g|uysptylO@=0@7$<h;x{=2$I&kyXgYTtz*kU' );
define( 'LOGGED_IN_KEY',    'pnY/ZmRy7+5ZtsANWGf4`hBWoGkP`DUm8F!U>y~zp>Qq/-RnQ[0oltnNduwZ8vi+' );
define( 'NONCE_KEY',        'B}fBt*Nh6[4hzufqsd~ev&[XGp@^(NVe?%lFxTcyBq$~6]h3O!%5i3myPxtP3g_R' );
define( 'AUTH_SALT',        '@`L$l}`;~{9uUfHQ.O!IF$6Z7r-7OvlZ`YO+rT[8yE~;cOY3Wg5_0KcLZuEBwyQ8' );
define( 'SECURE_AUTH_SALT', '3tt7cLzAsJ0WsWZ!je,1E9&G=,fe^1z`av-l;vt(re4{W]EV,jSE=)S4Nk|xLSt.' );
define( 'LOGGED_IN_SALT',   '|0%MB.aQf~*fl;.&7CBCH[Mc.M`}YfAPL2oCG<v3dB DfQwmt1.xs}Y%HTOxq5`h' );
define( 'NONCE_SALT',       '!<<#_&{_8$?+p[Ktqh3;6YhUI*.^5[j15q#hCH^S2gI4zXh&kBpg2bjb>ZeiK>Zt' );

/**#@-*/

/**
 * WordPress database table prefix.
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
