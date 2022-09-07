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
define( 'DB_NAME', 'news' );

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
define( 'AUTH_KEY',         'WLlb!uzhMw!>*Q89`W :`E1^NKo4=vmtK9W|Et.;wS8VdKGkdumk<hYKxJc`5?-w' );
define( 'SECURE_AUTH_KEY',  'b0XCJIc.1#r_9pG<+0.1&Qq{oGW,y5Y-:ywwU{ajji$|^jQ%x#c~1>>%BS$Zl#nS' );
define( 'LOGGED_IN_KEY',    'bHx)O+gS8hCajL}5+xaNC+dp[X?6Cv*577|+_rat5+?s]!Dx6+}o8qxpKo-N0zKQ' );
define( 'NONCE_KEY',        'id1p)AYR^1uAiv]eVS`gU_e+d3lIYga;mc4^~pueK(_.</C_3#1$9*(I2ldD@e)&' );
define( 'AUTH_SALT',        '^oeC;H/CCa;Rw*]WWk=m19&1Pq${Ie%eylk-SRh<s~lS(lqMfYeRm.+Yj^[*8bAP' );
define( 'SECURE_AUTH_SALT', 'd`5iT<9A~^AmGuJw)[azs7IQrwQI<M@](~h@-@b.J F9Oq#p)Zee/::wu0ZY,%^?' );
define( 'LOGGED_IN_SALT',   '7qbpwI%gR6~+I)lM<a__n-bOd_`bT(4%%M^a6n~ozt4LY_@`|;*z{~_:VZo0#^zG' );
define( 'NONCE_SALT',       'P<u>%ERFG/uT:^VKXnc,lz*Gk5KpG8YzZY!utlriBW[UXQXO2jO65m`fn~ 7<V$_' );

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
