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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '1<xJ`QS#oz<VT#4O<1;?-C+3>RYM;lHvc$ EI0]K(XFE[vY!t]k Qn:E.*F%%Ari' );
define( 'SECURE_AUTH_KEY',   '@80$lV1|9n0J8R1G^Q]wC%euOY/Z>9P^e5q,?o,UsdN{ WoJ l({k|,[IE6j`6Y`' );
define( 'LOGGED_IN_KEY',     'Ylo3hjj<z]2yJB2by~k%%1cT_K,IUZ/jLX(L`w;z>:!&}Xa~8rF T_4</JGf4M26' );
define( 'NONCE_KEY',         'xfg$JsJFzIxJaBmV+eUk`;Vk#%GNmuC+IKz7#u{f$nqC5>qEGfZS(Ux[zKW0PDCC' );
define( 'AUTH_SALT',         '+a|:i)C);f_gXHSTKW!;M+Jexk[Mw{vK9Ew9qw4E@Uqyr)&IK-o]{*SMrE]_LmjU' );
define( 'SECURE_AUTH_SALT',  'C2PEYT*,tqFr8677l4+>zB_/EtW!By^Zwg7PGW94%%8`JOF1q`9L^L!Z.[`w*HoH' );
define( 'LOGGED_IN_SALT',    'cvTu9R7Y/=l8`W]!KaYaw;!F57fO`6^!5+nT2T7LzHC2,Pjj5!~:i1=N]$vx_-v ' );
define( 'NONCE_SALT',        '4Q8?Tr*8048pwPV4ND>pYWnF{GwO)G|vZ@GGX3jhqB |bR^RRdGkm&3&awk)mSQz' );
define( 'WP_CACHE_KEY_SALT', 'D!^NYUrSaqfK]pYz)kid(4LP7YGPZ{!2a7rR@+&$y|k;[mQa4$)u^XaJHlu[+(yp' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
