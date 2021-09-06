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
define( 'DB_NAME', 'aiccnj_db' );

/** MySQL database username */
define( 'DB_USER', 'aiccnj_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'CQeaA64dGN+9y' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'nn*&WcgOAY*^IQF228un]c[_`L<#hrfJLj3o$pU;u0Z}O)HdO&|wr+^l%aFYL6J ' );
define( 'SECURE_AUTH_KEY',  'slEzA]PF4I<|rF)iAQm-WK(Pxkpf=rGJp_c?K}t?RxP+XaHH&T!&JvM8YNHiTlo<' );
define( 'LOGGED_IN_KEY',    '4?8(#Ndn&F=&sct^#yB&Z!n3y]U*Y;SBBmbBRZ_!X&&4<snI#HXaO/p|D,lE`3)Q' );
define( 'NONCE_KEY',        'VT}jBEfegLKCY]~tXo2t/m^C*|tP&H s0!(kG6V`I6)[$k=7VCI3DozD*QoZPAS`' );
define( 'AUTH_SALT',        'zt2nzzC2AQ=`lyT:*VfG~PF6lbS;+A.9H6G.lAK oo 8R<1%]6:.U(B>I~YuA8/I' );
define( 'SECURE_AUTH_SALT', 'KVG}0<e& |/HP}|=aCJq3=0LF-Zjm8s:9%Ryz=E(LqBt4B[`0ywbi6C?4w^Yljk@' );
define( 'LOGGED_IN_SALT',   '_d2+ /9-bTUTO1Si|t@n4-E-S<za|86DD!Rscs(w^tzU6)4.@.Jb)U|2D`@~DA_-' );
define( 'NONCE_SALT',       'Fj/wjK !MECUW-o+ITLyHtY};y06`&d~t97tUk@C)(3i#NJ`i$UIxZd?r2x0|:7P' );

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
