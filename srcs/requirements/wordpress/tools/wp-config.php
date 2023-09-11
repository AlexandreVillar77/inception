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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'avillar' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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

 define('AUTH_KEY',         'e-p0?j,RyL$:`|Yg ~@&XjYq4)#&(W5 mKH`X][x[4Om/3VwuD:bN-6~m1^/JP}C');
 define('SECURE_AUTH_KEY',  's3]nDj{i9$]8 |zDPZArQ`j^B~dV?H*~-i6|4XH&3S|.F/E4+PUeCzAU?w4g S(e');
 define('LOGGED_IN_KEY',    '(*H!I{:cf7Y{[<|-!hOk-W,2swR!-+ &Z%pL-,?BgqINWS)zMjwQr#3-*K>ON,Q^');
 define('NONCE_KEY',        'FLKG4 ll|&Q{[AHU*rV[f!+rl1F=lUxwZ/B}B}W^MEe1Um9t(0?W*[N[W_;2yn_o');
 define('AUTH_SALT',        '![V?% T|+%F+Nxq|)3U6!1z>9 /Jsz:oTNac4m=y8c-$Rl[ea+(Qff*|E49}=&N,');
 define('SECURE_AUTH_SALT', ';KKTCNU.>`oVV<ZCr7Gz{#]Ghp-`]|mcDvD}We-cqAR@52M-EeM`~Bv~Hw,ugLrN');
 define('LOGGED_IN_SALT',   'ma-F{nc)2IW|O{!ms)xN<iE4cK%{G<L`q/jIfPN|;x5 &R++C5rh^m)7mYfBlD*2');
 define('NONCE_SALT',       'J#o_k.a!l)@CZN^_KV;$RNulyuVg9&J8.de|cu8,c5e2n8alJ3tG_%b8k%-EpF@y');
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
	define( 'ABSPATH', '/var/www/html/wordpress' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
