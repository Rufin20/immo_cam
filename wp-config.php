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
define( 'DB_NAME', 'immo_cam' );

/** MySQL database username */
define( 'DB_USER', 'immo_cam' );

/** MySQL database password */
define( 'DB_PASSWORD', 'immo_cam' );

/** MySQL hostname */
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

define('AUTH_KEY',         '-|1eK7-LcC~-VGwBoE ^@0tY sz_q$W8lJUXKO!LK|V GF8T=A$0--(I.60f(gW@');
define('SECURE_AUTH_KEY',  '+ VL|+,+!XvGMgq<6xkqh;)U7GTQmIB6*+41US|8Q YAi+{5*^j~15gYW6GGiOgN');
define('LOGGED_IN_KEY',    '>V!ReYOtO?-[n;qC`uwOarw^i,b|&6L7t7IpY?emD |VG$p^2mT5f_i K+cJ~k]W');
define('NONCE_KEY',        '!!8ockEi(>au?~1bp(=`;fP(gV]T1`J0p!A?m5gtnxGK0I^+u+92WOAqD?]TY 6r');
define('AUTH_SALT',        'W`uq2`Fi1O{E$anP^$:|x-lC=7vzfVrZ~=`]Ow]+<GDJVd`N_$v(xh[]PKWtLsU]');
define('SECURE_AUTH_SALT', 'VNb)/fPUQb :fhurz+b@,MzuL9J$5|B`EOwn.9jO8DQF[tt!<bhm`>jj-|Te](@l');
define('LOGGED_IN_SALT',   ' :|&y&2U}`Bpd~|y=oE9W01#XaE,kUC A,5O5A6KU)Xi+.zT9U+?{}`1`DR#rR`.');
define('NONCE_SALT',       'M.eZT^H~zs{Eck_aFE2d4[Ep<r+n|3x>_^&1A.;+p(hJ&ko)bD.m}d++n-uuHtQ@');

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
define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
