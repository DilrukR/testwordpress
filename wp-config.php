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
define( 'DB_NAME', '69graphics' );

/** MySQL database username */
define( 'DB_USER', 'rishan' );

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
define( 'AUTH_KEY',         'RDh9tj81C2R*?S4iIwX6c5Q~Fo=qaTf6 %|d(J<@Zn0*/b@Av.?y7klGQiK/&@7!' );
define( 'SECURE_AUTH_KEY',  'CBmDF^0oh#uOmK:&9Oc}rC292hLR;FntC51I~Ejz{9JcN`[T(Jht?bz0~o<qZ?Z6' );
define( 'LOGGED_IN_KEY',    'qFoRJj$YboWSs/E]5-YyDgT%heW}~CU_*Us~oegKUL$i@myr;i7SVm86)%X96+mO' );
define( 'NONCE_KEY',        ' 1ism8WhaL#hv1RCk<vM>RwoV.F>mq>Mk}(]>A?!`Sy#dh{*k*C(}`dbAN5=?lI=' );
define( 'AUTH_SALT',        '$]zbc_{]pz=5.112vz0=& ,gXrh@7ZIbM8Mr*W;?kfozIg5Gy>zq;XGIuS[/8yI5' );
define( 'SECURE_AUTH_SALT', 'X$B.eaqd0lB=8.Sn6%TDO%J@%$SaS6irP{~yQ:Y#wU&027&PfX<(7s+=vlNww{0x' );
define( 'LOGGED_IN_SALT',   'a_$nAwhOHyQJTNvqL*R)H|UV|*^#U CQ~kSJFOK)=I{-&i9oF?oSCDp%KR5rx~-p' );
define( 'NONCE_SALT',       'wDT^<=PwrAGI!R)l#=/+D@bmFYzlZ)+|^U8z:*x8E1-k~rC}.)2J%Naz!PbpQEPK' );

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
