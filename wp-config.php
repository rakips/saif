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
define( 'DB_NAME', '12112021' );

/** MySQL database username */
define( 'DB_USER', '12112021' );

/** MySQL database password */
define( 'DB_PASSWORD', '12112021' );

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
define( 'AUTH_KEY',         '5eHzg+6K1,6(uaueo8btMvD&{-Rm5yDT?~4y(?1]6drA7kgK<@Yu !%S9/~-Og5s' );
define( 'SECURE_AUTH_KEY',  '3$^YYAh`n EWiA7;)%3-$4;iqv~;jw*g~,)ZQi$`{!91n|^$/u2YKg4LcVAVO%#o' );
define( 'LOGGED_IN_KEY',    'jxE}>}eX+T%~x/T<_G$uz{@dZPaOmWST=E[.-h>n/V//s7x=_5cR(]eLrz&w&8]H' );
define( 'NONCE_KEY',        'g^4OSg86J@1v6y_Vd&2G+R[j1;|24Vv-TIeLn!WFGW/bIlb(8Mo}F~,=>zFr/L.>' );
define( 'AUTH_SALT',        '[!ML9aFMDeaI5qg3qe7B1{%0Q&R%a&.e}`?,9Tr~|<HE%tkiFvT;9~n[[s#W%&7T' );
define( 'SECURE_AUTH_SALT', 'Q;bfV?dJ8c!bB30BG4O/Y* x:}P4iEu`oh0i}<[VK,|p$Pw5}IW{O LZ4y/~;-N7' );
define( 'LOGGED_IN_SALT',   '!kvh;^]E#!8icTGPR1O/-DD{lZCH5M|LkgI~av~)JBQ+Ri06Yv}aE,K0n*1D|1@k' );
define( 'NONCE_SALT',       'H&S!~ NgI,?][bq*dSc~|]g:Y-]&Tv?c,k8j8m`pEC1V=U)nyhpe|}xL4gBOaUxx' );

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
