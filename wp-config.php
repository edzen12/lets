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
define( 'DB_NAME', 'lets' );

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
define( 'AUTH_KEY',         'I`+=IKI>pe_,7ufa%x&w|9-my|LJF$n=fte3?=rKdF1g_T*J:nlU*^II2<2jp&86' );
define( 'SECURE_AUTH_KEY',  'W$}EzWr<ji|BbWy*M$_1gK~_~XPCaxsi#RGlFNo`/zgDA[Z/A=<O0(f1PAM29h*i' );
define( 'LOGGED_IN_KEY',    'HiHz}u-s!OaD)Au@W`FkGZv84~yNm0PUR%&K~|aNFYa_V%K{@cMVg)<z)qS_FZ+q' );
define( 'NONCE_KEY',        'b~B{%mIAznJ#j%d9GTaSEF=[~(utD$fjA_JBa-Y3Ps-O)81}d:g:EPZ7l@nJR$rC' );
define( 'AUTH_SALT',        'vVpl?BrMb[[P{=E+m?,t`dTI#^,Hs]qr08li2e&gPIWT[e>?HtdDxC*jWW]9n9m5' );
define( 'SECURE_AUTH_SALT', ':C=Ga5W4}^zq<[m9c^XD|r)~~!B0%wi3^{g3aI/8~yV>Q}m8ENem7^r~#/WzOu8r' );
define( 'LOGGED_IN_SALT',   ':vne{eUeW`]qQY<zLvxqu`*yQtF_=G:0_w^hf1fg?r s=jwz{q)Yri4Sf!+^*M^t' );
define( 'NONCE_SALT',       '7SySb[A2{?V_`s{@(KY4)S~`S`:.)[en1%<,bhlf7jg8}{qe1_2+|WuZCUGmLOC7' );

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
