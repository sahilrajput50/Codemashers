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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         'sq&S9lmZfH(@&CmPM8;>R`m>!$]9e_,fBVbkR!lW{u7Dub=8JXyi%}65TOU-~C1W' );
define( 'SECURE_AUTH_KEY',  'S}`4}5c2FoWRN]?3exHCoE:8:K%qJwof;g;=Qjm346Y93.ab$Wns4#e_B:OBtPnp' );
define( 'LOGGED_IN_KEY',    '7+sp$?J{T~pbLSD+B96/+4oU;>2DSdHoA~/0N*Rs)>}[7)lE}``0QPyq[@vSLZ(K' );
define( 'NONCE_KEY',        '+mb0#v7IaaI<`1#nKLh8:ICy&-,u<Ga58=$s#H}?Y@@mi&EPJEaT{<kojPG6ttiC' );
define( 'AUTH_SALT',        'lDQiK!}q9uKs-%:{qCA:Na{}4)b;z}j!tFH|==s]?b>XPch,ouH.)nqaAY{3#ejq' );
define( 'SECURE_AUTH_SALT', '>tsx*}Pgd96i(FK.$|fgR?k2G`34#)mgfa[>$tF?871HbWaT~1Z[nW|Xga$dV*d.' );
define( 'LOGGED_IN_SALT',   'hM4a3}800[W/eC<4;es5Y3qDbCm(8}i`fUVU68v8f8&|@3I|`ojj3}9SU `o/}ck' );
define( 'NONCE_SALT',       'M0CuUd(}fEMtZ9h%l#b|3!3g%+Yn*i)xEiF431!<j3niwbq)gg7mf}_^ h.%+u?P' );

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
