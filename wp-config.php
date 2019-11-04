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
define( 'DB_NAME', 'chinesdark' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ccc0b8a06b486534288acbab5ce3cbfc520c9e6a32986658' );

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
define( 'AUTH_KEY',         'D=Wq~^:TZipM`8|*ZAUB?&e{MH9=xn2!?j_#u68?#C2b6bVY6_CLUB:l=D<T pQo' );
define( 'SECURE_AUTH_KEY',  'Nf)hW23liB4`=`AW=EQEj0@py{@^5B?qAQz3513@yi=S+ Oe$Z.~iz1Ld| mJ+RM' );
define( 'LOGGED_IN_KEY',    '{;uQ.=9ZBJ[8u+S^f=Qo52$hm.j~o$C(;3Njc%!H~2EeMSy/Pe4Lm<JEv(l0.KfQ' );
define( 'NONCE_KEY',        '[X`?*_{=o^xewtP3FD1+/QukfniCsFSW~Rslx)ppfZ/$VO>RJCN!2|4,xvx=/nX;' );
define( 'AUTH_SALT',        '|/fMzcm%s0!0{f8f`tYmO!Xp8g@;PGm1s>-x%iwyB72wWYf:w[Hl%ClFPyj-<jLi' );
define( 'SECURE_AUTH_SALT', 'PFp!m98pL2?kc9eRw#-%%.v6+pBsUNKkM^?&@^YO e#@J3*BiSMmMf?JJ!bK-)Wz' );
define( 'LOGGED_IN_SALT',   '$AFko^~#%6M[T)n3,w4nVI^6(kQt=d.4[<f.3p1U?_]QX+^Tl64B851^TS_a^`+X' );
define( 'NONCE_SALT',       '1w[A@/? }7a5CZIn@9nd-Pj.uRrSwY|8S,y*hD->iB5gn$8z=e$Y&lPyGW/N701q' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
