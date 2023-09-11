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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bddlepays' );

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
define( 'AUTH_KEY',         'e;4jsuaoCH_SeQF+74D;>a/2c8JV4I:nCLu]$%O*g1OJ /hIZ)=xJR3ejDD%1bGJ' );
define( 'SECURE_AUTH_KEY',  'shaS{t**6*)S|g{[)n/x|[s*&^HXVn,1>+9~~,~bp*(em,`QIPlt>3Sx`gZ+D0m{' );
define( 'LOGGED_IN_KEY',    'p9y=uIvzz~D69>y/KURYm@m0?SJGf#pyDtX4ft;qY}qB=|qv@:OOMc6J 6dTl>yG' );
define( 'NONCE_KEY',        'E[E%+-ag=}TDj`*X6JbAh1,%gl$*)Ot18uRffJKUGtBg#9E%tQ1)a>MYgFl@ar2y' );
define( 'AUTH_SALT',        'aJIcJ[te]lg#FTKQW9jXe{Gnu]PW0kwj}b.);wv0`b_W/Xz}D94O_=cVADy-Y4mz' );
define( 'SECURE_AUTH_SALT', '[M`:FQlG)i-jGJ*|*Ui($2}!5ensdVR3<{ETn7Yp=Pz{nt773I_;*s58|8]u([f#' );
define( 'LOGGED_IN_SALT',   '$*{]*/$N*>*Yr5I>v=eM;^v|$xeM%#_O^$ 0f?x[nY%,:osx$pa-w@8{b@G7%:Pe' );
define( 'NONCE_SALT',       '%`7|-P40YQI?!qubNbrUy<&XOe~x=/RAO=To}wffhmBrmP1wHORHd!sJs(Q1K:PO' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
