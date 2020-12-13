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
define( 'DB_NAME', 'hello_academy' );

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
define( 'AUTH_KEY',         '^oe<L_<8PKn|?VcOhCZ,>TYrWz`+m2#Kd3:UgxZqB|wC{fR8~#2C,9v8#U5,u#SI' );
define( 'SECURE_AUTH_KEY',  'afR)MxU`n2[}*uPhMNfJ@_.Ba_&w(i,Xm`zH~WfhOAUB17/@v?Am]CSgF7)4xNB,' );
define( 'LOGGED_IN_KEY',    '~QtDsRcTc!f|^l%.=yqyn8FwuzlNTTrG=![,UyO_;Gx5q$*Fcbyc VVK4dz~oXd=' );
define( 'NONCE_KEY',        '[gfiKPWMG2<{*mkm_NF~[?TjN / Sa3y&9/W7LObqBoA4wwRCN6R7v*nn*GT&g,!' );
define( 'AUTH_SALT',        'xi~6RGLshYh2fuGp%oW+-IiZBYPFl,{0:dI*|05n!3GzTxngu8:_}!2QVqAVAbOK' );
define( 'SECURE_AUTH_SALT', '_<iW=:?#F2;=P9_i%:]&(L>8fc(NE9$/chf mdJ{$}w_u(0S1R+fiK5K7GD5Oj}J' );
define( 'LOGGED_IN_SALT',   'I}rcREby!U K6a%=*J<bn7P+S:7{Pc0N[R6V8geFz&ylP^%Qk|bWR)1}=LS{L_;i' );
define( 'NONCE_SALT',       '@w4!T@D N^A=uCR=y0@Sd# @#5zkuq6>ravw28dN~xt_X#7s=*NlF236!GXG,x3B' );

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
