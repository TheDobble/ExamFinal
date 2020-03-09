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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '2020-veille' );

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
define( 'AUTH_KEY',         '2H tDoX|a_&<j U8*z$H6^8sY$/RloqMZuBXX2ug+3~,a-xQ7G-3KRN5f_Qk6!77' );
define( 'SECURE_AUTH_KEY',  'yz7:zo)v6#$iZX[`u[~<71igD.$D[pCqh7 )AUaz75e#J_Nh4fpbdG~hA.t)k/nK' );
define( 'LOGGED_IN_KEY',    'ol=C&4mt/T.*GbRJh(nF`1sU_nPYS{8}U.{CW#+xcvcG.NT]{d2}abGY/wHTU4j)' );
define( 'NONCE_KEY',        '/xm7nGdr^;mI[Q#i3BhJ2@LHp/|-&byH,E!KE3SPG}2)& <KV-T6D@qc6e#4L2US' );
define( 'AUTH_SALT',        'MKf(-?KJLG8l#!9CkQWSMnxjA@vSAU}Ua03CM]gR^W#h_j-x/^]8)#WU0LWny%b{' );
define( 'SECURE_AUTH_SALT', 'fW)6N;2hN28Ym7Qovij~|FDpV@>n=z})9F=.Sdeu>GpQ&JZ^>`C+1 KplQE<H{h/' );
define( 'LOGGED_IN_SALT',   'Z_~:[avE<0_7*t@kY{~e{6m-1DN-@>I>wtnhF:v=`d9iMP?pW*,T+%>7Dg7W<!]^' );
define( 'NONCE_SALT',       '~Qk]!!JwpW 1}L _-k(-^WowwM0%Ao9tE*`{T8(]Z8ZX_q/-UsK4V&_N31^rgn``' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
