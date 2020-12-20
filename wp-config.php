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
define( 'DB_NAME', 'blogcanhan' );

/** MySQL database username */
define( 'DB_USER', 'blogcanhan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'minhduc2001' );

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
define( 'AUTH_KEY',         'vT3Z]+tVrMWJb(*|}rhXS c`uS/R=yuy5oZJ[2=Fyy+(+`RX#MManH_R5e+=s:`s' );
define( 'SECURE_AUTH_KEY',  't;9|+gvf$jjB,LR=Mf+S/S4<?1J^)8QI^5Y0JZ3(0$$iH;XOW`D-.#1K*=1HU#<l' );
define( 'LOGGED_IN_KEY',    'ZDFU<?*]BpCC#yT}Mq@(6I{[|/usw]E~dt5YMhMUjpR-=h*BY6H Smh=JTaL>c-J' );
define( 'NONCE_KEY',        '!H{aevNK25;1@igt)j5wDVg/%8If%isUR=0ll7E*4!s4$56QX(G066CT4Z+iN}+F' );
define( 'AUTH_SALT',        'AepE]jg a/F j%LQ}80Zyl9 ,u;n(?#%=_AvhMV?!xh $V_{lbBB<Km_p.Pn/xh4' );
define( 'SECURE_AUTH_SALT', 'O8BJMKes44RZ(d1@u;$ZofGq1*e/DbJ,p_Yb3*Su_]Acd&{K>wgmlRrcN3_h7OX5' );
define( 'LOGGED_IN_SALT',   'W4?SbBCb9,uN!]DOKbxL0[FKg%9gofx`Kw5X= d<AOV;Sc@4)+Wc#<!9.LBT6~qw' );
define( 'NONCE_SALT',       'hChB$)N~VJd_A)oRdUzNdv{S)@he%Q2y#Z .7]&6F[JIpTZ3rb g_E_6i1K4qs:~' );

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
