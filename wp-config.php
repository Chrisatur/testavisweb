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
define( 'DB_NAME', 'avisdb' );

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
define( 'AUTH_KEY',         '*^.uS(Z:L?G,=THr0a4 &N5; C6<!&0 ^; v]JH5{Kz0ZHzZ?*K#$#=p3Q.yMN]H' );
define( 'SECURE_AUTH_KEY',  'I_}n~/1Y.r]H/;#/W@1C_;R;;%XARd*D38mIqD9yP^8tRv!+W4+07?_`S1jCGe|P' );
define( 'LOGGED_IN_KEY',    'vU2]>C#HVC|F!A?h+#dG<~E y/R{XPCV6[+8te*NXL`nk?BB0za/K}nK%8ORY7QV' );
define( 'NONCE_KEY',        'yw1G_p.:Lv;uz,FNXM.2Ys)PoeEVi}1#,kB<lo$a6:z8_#vF j{5jBBQUdStw,4B' );
define( 'AUTH_SALT',        '{fcVQdaJiRT:aCfY3bkoMaSOep_2)h|YJN _OB$?Jhc1`biM@_Z3@L-fY6s}r;]1' );
define( 'SECURE_AUTH_SALT', 'XDxiiBEKS>uxiRA~Ac4{Q>?a^N_A2)bRMJ!>kUO~40x&2W^;li<p!u-|:7EP>W3t' );
define( 'LOGGED_IN_SALT',   'gK!y.y&@/gGimeqOff@yMcV|0r?aiIBj}(0;`Ij>Ll(VshfVy&N9W$iX/VZVW*;|' );
define( 'NONCE_SALT',       '#wl93Fu7yqEW:dk.{NNA!Or9pkSCJ?|`gT&>Wx;uNO1LuBvb=,-HcJY?XsBzZo~}' );

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
