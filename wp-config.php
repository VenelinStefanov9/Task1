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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'ugHYU58j;S#1v!;N|eouTo8W{{4wJCD2]y,zc=DIEBzb,*&C|{v?BS#2!;~c6iIJ' );
define( 'SECURE_AUTH_KEY',  'oMlw0C99}.]Tg9}Koorlw}Z^X;xdneSn~l(q.v VN/$9:Z`o:vKjb(YJIq7]G~TL' );
define( 'LOGGED_IN_KEY',    '7wL^ON[g(0~|t1N{DH9<N]bUBJIzESDBQ?wbJ>y!e$Qg1UQL-1Kc#l85qv0YUdvs' );
define( 'NONCE_KEY',        '!{f<:~UVDJ}vwY B-om}p! 1WxIo{<W-K(c?fW~[>`c]T k)j7>l{!hrPaDOP0.R' );
define( 'AUTH_SALT',        '_fMIT#12X+geLEY<&SH;6(=&2G.=wtWHuVDd<+(:<7OhD=#fBp3`5`MMF8K965|k' );
define( 'SECURE_AUTH_SALT', 'OfsvJ{L)w, LB?eYaIla >e#AJi5P~11triYt<VYP{EL%I,f?Ok@&bGIv|fNg??h' );
define( 'LOGGED_IN_SALT',   'b)KVSNN=E?k*uU:=Bmc{+U:3l3p$Yem1pr0I8dVF G(r`O(gK(-M:cpTpyN(bKTs' );
define( 'NONCE_SALT',       'P:$)<2zu(dV$kjAjal;y0lyXoutG&Ax%THMWe((?zKpT^6BP^HS<21pBdxIj)^ Q' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
