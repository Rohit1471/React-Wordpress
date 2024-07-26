<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-database' );

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
define( 'AUTH_KEY',         'Tw;Ph86,!CR&`Nf9XS]h8](5kZ3&36qf+s4k**2nk_w*m?[#+1+^Z(<gM(vvvR_}' );
define( 'SECURE_AUTH_KEY',  'FhwEua=%duDa,A6U$GNOAFWlea&S:oC&RY@f2#LyPgl.(W=(vIu|aJ)Jj#a1]!`O' );
define( 'LOGGED_IN_KEY',    'lPdfzdD}x898BT/;5Ufd/1_k:C`oEi}?(%<]$m..0Dk@Pbb9i7BGs~+f:F)mNw,F' );
define( 'NONCE_KEY',        'svh|gQ:gZBn&%v]N,NfBzJ4WtKnWPs:S76L3hqI{<B>J1:>$xHW,ITy#).#i*KD_' );
define( 'AUTH_SALT',        '+N-SYEF|axuaE]]Gx;#dgu;> .flbSl6<2{ekL11BBzK*;2#iK/l0?a%giS +gvF' );
define( 'SECURE_AUTH_SALT', 'y1e+(25P[7:, prw/l/6s}:^`FV>O!tF?vU21OhHag}+5QY;FSbPKl`lzR3t(JAF' );
define( 'LOGGED_IN_SALT',   'dQ%6o.+P@]2{S.SoNrVUIE]fR<}t<{UQ Bv*p h1&nC?;TO!Z=[a4~8rl6s6nbqG' );
define( 'NONCE_SALT',       'TpjL6D&pFY67Xl pm=u4;3&lQ]zuZnqb&GPG45A^:qGS~X| g-c.$Vw>xPDDJZcc' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
