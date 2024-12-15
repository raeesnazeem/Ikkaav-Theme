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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'v0S!m0vl*{LH?KK9f2aUP PWr#Wa_hgeDkASc[YA;;~3JPwW2BN8UaWD70[5fvk|' );
define( 'SECURE_AUTH_KEY',   '$[zSH,j^nX+01+g8#d]p|)OT{n{xV5p&x^z~g,O* ;d^5c;6Q.IibnA$v4<lT*&&' );
define( 'LOGGED_IN_KEY',     '<&Td),K}tBBzyrW-)]+$~}R+7KTX$z/Oi[7asYFG#JI1MNUcZ-}$tU@=}HeUA{}n' );
define( 'NONCE_KEY',         ' 7P[.y:DX=4{U$@,y[VM]!xvfND}GLgA}UEBJ3k0$=)]PyFb!?zd7pe+!<+;)[D>' );
define( 'AUTH_SALT',         'Wd*cdw)m(ls|2Hz7K@;Vyr*-19%YFcb.2VGP*T0SHY^YBeUN S`Ztu}w6%N0UM_p' );
define( 'SECURE_AUTH_SALT',  '?@l,^;CSyec:x^{3IeccdxpMoD[f*Xr,sODEt+!Cwt<G_h(0bF)p5kjc_Cfenm^W' );
define( 'LOGGED_IN_SALT',    'Uakm^aCbsRjN4aABdE).q/Lj{5hITC&D+4pUpSLKE77j{Z&bg#=V>)c%FO-l;]N7' );
define( 'NONCE_SALT',        'K&~<v;~]d-FT3Lome<*ze{<}o|^2gS<Mrw2Pyg-C+CVWc8B9;.j1sHM$K&[}{QL$' );
define( 'WP_CACHE_KEY_SALT', 'mOqB@/0:zE+cVZmgoc%j:g}qFx]f=~8/|p9x4` w8.SX+cH55RVE@@*(JVlN-)Q(' );


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
	define( 'WP_DEBUG', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
