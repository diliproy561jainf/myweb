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
define( 'DB_NAME', 'dilip_profile' );

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
define( 'AUTH_KEY',         'J!}p^9is2u%qL]j{qJKI[fbFXQ|qKJ#{?!98gh.$.muMEg,?wBu0?SRM6_Lw8hDc' );
define( 'SECURE_AUTH_KEY',  'lI$irA=jUm0g^9 k{<Gj!u+[}6G8%SC~S :u%USTp8@|Ef(wTX6Kq/>wy{@DaA~/' );
define( 'LOGGED_IN_KEY',    ',m/z,mg4{DKs2iMpAa*f*Hj> 9np}==1U>k0U$2asSVCO-$E*;sH8jcP}t|o4Gw3' );
define( 'NONCE_KEY',        '%8W[8Lr3zLPH1!mfYRa+vZ1ew?8w963*>#kG4nn6pBSE^FtuP6} Z(J+R|:1fPs~' );
define( 'AUTH_SALT',        'nmg/|Y#T{Fs<2.]C)Z/FE1~juKP%2>3h+s0afYV>JnH#.k?C -CpH=WxfmN>Z%-C' );
define( 'SECURE_AUTH_SALT', 'J*]rDV=$+A6k[ULB6B}XLk % 6HEd(#dsz>I11jO2!Qn74f2g|Y-*Bv7.@(,FTh4' );
define( 'LOGGED_IN_SALT',   'izpV^BSjpv>5(?/#nCg8+E02sbny7Axm/tS5Wxsmp|uv^+BRV_AoH,pLpo+-;dFt' );
define( 'NONCE_SALT',       'w|Dxq!Tpn-b l%]#joIR2=Yyn.[g2q*V,pm*Gg~neaSZr=1ANA_v&{rw^Tl%}*_j' );

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
