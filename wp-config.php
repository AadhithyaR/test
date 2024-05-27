<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         ' Oh=^|sf%:c6||_(@mCfQ_}x1I&j%9i.-mH)>#;ZbBN(J$aoTGB0(dXtazwbWjbS' );
define( 'SECURE_AUTH_KEY',  'yg{5%j/:|piZ:0uzfMdi&5!iyekgavSsJkFs?@|=@h{)s~0aU4{Q0dZ@`gW?~Gul' );
define( 'LOGGED_IN_KEY',    ';?C-$trd!eS/IF-p5Y`cH(Z)KT%#Iob2u|?m-uHT%>w9Y !`b_v>5/.7x9rM#$70' );
define( 'NONCE_KEY',        'C!.6qpF?i|f;d~G0.fJIuO5;@}!hW=l58+uL$_Xj@,/%EQY3[0kXguXxaBU2L3/P' );
define( 'AUTH_SALT',        '+-}jl{RWUaahXT~j~fF]sZ^Ee8Dk;M%_Xf7s6:iE9Prs(}D<Nf)*pk7)Mzl Q(UN' );
define( 'SECURE_AUTH_SALT', 'Ce,]:zinEp4Zl%aUwhLcgM0V3EugPJ1JQ|N]UL:+CyIZZd0[v6)g(T|i5ClN8!Fw' );
define( 'LOGGED_IN_SALT',   'D8u)cVbHv+wGb8`Zb [ [Rh-qH~5&aXM!$64}@;?/qx$o?%2Eyx+vuLeAe}~_ZX1' );
define( 'NONCE_SALT',       'f%vNzw3.[elTXHa4LpZ#NH}]{}8<UTUGTQ=ua,}8s+-ud$!T.Wj6hyUrU)5,0.J5' );

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
