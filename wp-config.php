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
define( 'DB_NAME', 'project3' );

/** Database username */
define( 'DB_USER', 'abby' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '&*.v;%HtL2dsA@[#N(>]H>]4=cC%60TvX|)1njA+<^BtoXl5rb[=%&uD?|n#;E/b' );
define( 'SECURE_AUTH_KEY',  'x`KvAN<qW]j~dZSn4i@ 94HQ]5@4n2yycG;_WpSHiyc=8@?,n3_I0moza-.EK,$Y' );
define( 'LOGGED_IN_KEY',    ')>~xQ?,gI>_N@:F ZAl)i^Cw?rvP x~Ad,r{XB!klYB %bc e17W-5&bDmooK)V>' );
define( 'NONCE_KEY',        'S!Vb2f#o)T4MR!J#M/pZ_6fwM~FZWm.5cQ![W2DKB<~r%:$mW-1M[*LuvC&fEhpY' );
define( 'AUTH_SALT',        'mm_oF^$K<Gx~m5Tbc@U3}2Bz4?`1BmEf(RZCak54tKuH#9a_IZTM5>F{?zG;dt4(' );
define( 'SECURE_AUTH_SALT', '?t.SZXt0oO4o{0].[fLkn<}bKU!Ef{bM)h9$bHu]#*:r]={X(6O->=f`(WQGH^ND' );
define( 'LOGGED_IN_SALT',   'I^tYU}Ok4._&2-:]e8A0~G?PJ?n@|3HKNSR%);+fKsmQ{*CvrpkPFmt=2&OgCis$' );
define( 'NONCE_SALT',       'P DFAh&A c?W&;&;2jh*%=vH&GBS$p[)(g?l3VNYeBpV4{uf*&p?MO?YV8}2wpH&' );

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
