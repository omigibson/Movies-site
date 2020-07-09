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
define( 'DB_NAME', 'qte' );

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
define( 'AUTH_KEY',         'PL6[0?MdN~,X,h2n/~(SE!DE:eqVy9Tc5?=(FJw7<%3kukO_yk,s3*[e:Bs&WbcI' );
define( 'SECURE_AUTH_KEY',  'rrk@.e-Y#p?]r32;lYLEsx9?xBkI+nJV@=fT906U{AjF1[e`&d0:lMcgEs8PVGaJ' );
define( 'LOGGED_IN_KEY',    'LSRv*$?p*jj3S-;-{Tjz<MH]g~[pItyH+s0AZ5UQ7*sR!HeSBd%NiOAQ;6<eJrq~' );
define( 'NONCE_KEY',        ',EH)N2f>V<qEWvg.<(ojH]Fhy[&XQiAall34K$X;6,8gTt]ucPW!p)i/;?(lv=2Q' );
define( 'AUTH_SALT',        '27>[g,pCv%a^1<aI4Mwp!2}eyUcivUXLB+0*=NG}>9U(^Ha#(`%v`xs|Q/F; L|*' );
define( 'SECURE_AUTH_SALT', 'a?.P=`~kapFeo*Fp+ZWgbK>.;*f:8p=R7IpW*^TT55|e1LzIAOQrfV43Hi{E}|mE' );
define( 'LOGGED_IN_SALT',   'bj7R1SZ&cyQJMDvD2]8IWUji2Ms>RdD5nnH>a3Wnsi^nsS$fCa CIyT!<|?6 xrI' );
define( 'NONCE_SALT',       ';>c;b/[>)$*xlWeL}(UW]mkW-a>ZNTh1+dsxC6]K-8!QF]7}$6EO)![acLOx:w>F' );

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
