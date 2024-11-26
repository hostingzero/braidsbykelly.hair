<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u756016664_gRKqH' );

/** Database username */
define( 'DB_USER', 'u756016664_BpdUC' );

/** Database password */
define( 'DB_PASSWORD', 'uVHvEUpN4o' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '>/.?b$w/gG1V{e-[.@0lx.Se76o9ej[j <5V1FH`URDWB<=uvW N7|Z;AARu]Sg,' );
define( 'SECURE_AUTH_KEY',   'p`1dm: qmaiBqGkq,0LC2oCNK#u-elQd>fD|fN^?})U&B<bqznz9O=Krxf~,as m' );
define( 'LOGGED_IN_KEY',     ';,O>9/GTVkz@!QBr10w{+s^q=re6>EXW,nQO7gCDm6GNjtD{R#X:<,oFBAoi}+?C' );
define( 'NONCE_KEY',         'W.A`N<3+mWW[%I>B<)$[?dvz~Q=fyTRhw}teSyupi+d@.: }s|&:^!uIgqS!Oyxx' );
define( 'AUTH_SALT',         '.Qo`5e&EzH>L|Ub/h)WVZ5g^-5YQ#yONhr{&OQaf?^P]OfE,-{]}6}9_0CUR2,6u' );
define( 'SECURE_AUTH_SALT',  'RC|KK UYX,ZQ/s[l>m<vn3 r(v)2[ ^56[K-9BR-Hq{6=`!Fu6as1374*Egs2jxb' );
define( 'LOGGED_IN_SALT',    'rCe8A@r,sb9l$5,;{{9i1[72K.q=jnu&[B.>w!9uL O(T4R !Cwy}ncHg{+daGgM' );
define( 'NONCE_SALT',        ',R4mZ@1 hmu]oJ- b@D}eE]+Wc?9YexZ&!1Ab~|Rl(6yuEVb/y)%u R9!TZO5Y_I' );
define( 'WP_CACHE_KEY_SALT', '$^p6zg1V,>PwXhKIy9g*|]ZIyf~Y|{bR.:RJ=)TXJWCB9Hc,NR^Oq/mv=27-zXFn' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'abd3328c1b4df7c9f7acc4ca3aa4cf0a' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
