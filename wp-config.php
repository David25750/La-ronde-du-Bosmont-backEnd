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
define( 'DB_NAME', 'laRondeDuBosmont' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**Ajout jwt API
*/
define('JWT_AUTH_SECRET_KEY','cle-secrete');

/**Prise en charge COR
*/
define('JWT_AUTH_CORS_ENABLE',true);


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
define( 'AUTH_KEY',         'ETXm*n;sP]<i}!KaTPu$O,B}tC|3Wd>DV?t$I>?)OHP)cMoIIkj+u`EM?GX#U|80' );
define( 'SECURE_AUTH_KEY',  ';CiG*APm~3&Cc.?]8m?`3nNx5KA?$&D7a~3GB5?Uz|hmVSF5_e=*:wQeh.M]qrqK' );
define( 'LOGGED_IN_KEY',    '$u7bc9(V8>L1@tJ]7Kg6b7+xtP/~P(:<az{J.2 s[:[);#&=y4>5&79j](T!{e>/' );
define( 'NONCE_KEY',        '2Ntx-NuN.cwz:T?O$Yfqem3%1871flu78 0^GI6}f2#jKZK`h=h}GXcmb-mdq.UF' );
define( 'AUTH_SALT',        '$ d)|&{D- ?1$KYXViu-UA23HhtuJ%4>O?blZ: &]-%M)YwX0,b:`79Qp[xj#Yya' );
define( 'SECURE_AUTH_SALT', 'fzA8)*e#Kq)89r;ku_6Fns;8d/ko6cm)vrW{E%|O-.5>?R4i&``fqKo(KJ_(S0iB' );
define( 'LOGGED_IN_SALT',   'cs>kBUb)yr}S?.+*c~@tOHG+MJ&Ado6+ OA|=$`(rX)&py-dL%[nkPAC4O@K(nj0' );
define( 'NONCE_SALT',       '6L9e;uSKhmS_}hUQv$W.$Zhx5I~rE9d*Jlxm[;MU50E>M;t5hUOW_YY!/@5`uBPE' );

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
