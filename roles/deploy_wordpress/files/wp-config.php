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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '0302' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'x$$+gY2uSK%1!?P:sL=&`SJ;MSgiT?,*.]lg_I?(1?]u%,*wc-M7FOf.aZJ!RGVp');
define('SECURE_AUTH_KEY',  '_<B}oKq6$J{b# S{n}d.&uF;$feF2P/[QW+: * t>)6$b?13U#_GhV?hcdE6R8Z9');
define('LOGGED_IN_KEY',    'b2jn#Lh:KSM%=`|HV-0^M74e]u6@EP1L5jWtJ|5lb&qoUin>fl]N:Xgpe]egHO0%');
define('NONCE_KEY',        's=a1dV-G5Oz$G=r6hxOoWOh,_,%P$mOY9KVPP-i3LfYO0CB^:PrJw)O|LB)9!=g>');
define('AUTH_SALT',        'j|%fKVXC|=+kuGLvlA/L|wDW|kxrram 1piu0?O0IdO<^& Q d{?5`J=Q%v<r5}2');
define('SECURE_AUTH_SALT', 'Ud? X`H#83B$L!)h]$*-Fo<>dfo+z>Eo76~>s}_5oAR-|*)uj~dI}oa1 <9_gq*o');
define('LOGGED_IN_SALT',   'Z>b`E,};w%O3 0c=1G|hWU|+NSMqp<.-FR+`kQMBZ_Q)G#96#Io~old8#1)0+{&x');
define('NONCE_SALT',       ',pg>5<$0T-24: PA|UHGkrLQcE31gaVyW,sQ=ktSS/MH+@(af0HiMLiAL~||v3p0');
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
