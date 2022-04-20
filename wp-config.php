<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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
define( 'DB_NAME', 'aws' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'ITq%kF;,(jjfxhAh^B1>t|o@=,nOzT;Re=$b~ 5{X*w;N4pSRkD]-HLHO:pEIiii' );
define( 'SECURE_AUTH_KEY',  '7 U;2Cv^^Z&A!8:b}#0(wEXH%_ Z[$i?{Cxl+gZ<E=fT/uw}<:|Jo3(p83p]7~w}' );
define( 'LOGGED_IN_KEY',    '1|!9XPeX>_O~AqUX{RCX7V0rTYK<if`@{!LPY1t2x%{ZB3Ljlc)O+#dx:Gc#2/Z3' );
define( 'NONCE_KEY',        'BhHWa@&: KY!4bCDZ%LBoeyFV-}-*xFLZ6Ag8aZ<@3Fk~SN@lwIz]Y=nF#3x^bd/' );
define( 'AUTH_SALT',        '{A]f9R:3Ou7)]9rzT?B}`c`xit&bZT4,R3Ddw}3>ZsHzXo*=/R_Kp2@^$;@$[<o)' );
define( 'SECURE_AUTH_SALT', 's&cX*,1<t%gG4T)p2)J8DNsjET[{FYI+t?D_F;SX|[YxnEtk3PBsTLPM!UdClCeM' );
define( 'LOGGED_IN_SALT',   'NN:^:?_-hV p>M}K3T)(}5!@EZTny%(x9,h$E bz v -bKEx68gaef&g[L6#)#C%' );
define( 'NONCE_SALT',       '^X9<IV,c2b@vgRw1eq/MDz;nN8AW*d93x=6J[+-RC*dWL<%#uw)t3m9?|siEc7c$' );

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
