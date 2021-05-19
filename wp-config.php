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
define( 'DB_NAME', 'rim-test' );

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
define( 'AUTH_KEY',         '#Ejeg=ii]D-nM5od[?LB0@CEWHdpDT}(i/WOvVVv@^jX/+[RuAgv9pa&Ph%vy7PE' );
define( 'SECURE_AUTH_KEY',  'E6BBs1jw1ER)1sZF-vc-3t*tJI^epwH|BTK71<+ZSvEwX3QWZ d=L-x_y)m/Ng!H' );
define( 'LOGGED_IN_KEY',    '^{FqAlTD~Iy[bw!DA?[chX)rE,h-dp2(yAi}]*t].2f%/$Q(6|QI%{v^0P@?R@|2' );
define( 'NONCE_KEY',        'C*bsY@1L>$cNmvJ5llxeW%5wP&iC}u|PvHxuP:)2N}v[N_W9D8JsHn%Sq=8vnJt<' );
define( 'AUTH_SALT',        'U@Pg0_Jw>I!;fN?KTdP4DgR:715M/[n-GZ&!$kGoMi~g8RJNchkW36n^r[FR!C;{' );
define( 'SECURE_AUTH_SALT', '.*d0Bk#<GGD6cJRKC$#.t&r;{D~o9l4m:wazy7u}c*s`10zw53}dX14rbKyVLXh<' );
define( 'LOGGED_IN_SALT',   '-_qMlO:hH|,JyH^9ulmkm(XQ5qVi6u;-X?9DFB=8G&pWBuDL#Yumt!v~n4ufU&r^' );
define( 'NONCE_SALT',       'vxy=d?k:_SUa#gUa[BMzKca2XB[nwF^q(oHRTT_,Hn}:z~@K4] Ho0LVC&[Vd>L.' );

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
