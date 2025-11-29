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
define( 'AUTH_KEY',          'KFc9I6|Iz=d<h5Av}N]4l@)XL5zrlM9V5K&X#mNbB:s+<)l@RRH>`SM:vV~2fxkD' );
define( 'SECURE_AUTH_KEY',   '4-a*HBTh)X{L0&>YKV[,`S@_ )QcC3WuB:ekqyv=fThRmBbr$lKZifw>Jv_k&ahP' );
define( 'LOGGED_IN_KEY',     'ZjvFFHXQGX{qmMW^@B9_!&#z4hrFq)a,UXm,n{l0F6UH<>UPDLo5$p k/$AEih9~' );
define( 'NONCE_KEY',         'f5rI20z5dCMA]OWa<@y[Xb2:QI^ovgZFy[w.X&-C1<&F/|<1nY$hn.uRh~0[UD$R' );
define( 'AUTH_SALT',         '@6WI*&t/)7P|Qc~G.8+f8d4rpv5~~2lT n< .eFnD+8tG;]<: `7s@[6c3aAHrwu' );
define( 'SECURE_AUTH_SALT',  '%&umKoOtM#-r/T0.4H9BMhBRM{}T59Gp1+,Dhrc&|Atd_]lP4R$i>`.Pd|^MuqO:' );
define( 'LOGGED_IN_SALT',    '$F$ysTT6nLUrr:|<XOU.%A3=64RR7.u>gZZ:A O`k>X2V$Ru7[g:-At;*_73Pv$+' );
define( 'NONCE_SALT',        'ty1 qb&=f9eK(E?k>|M3:hJW~|c-}^Q.A?dCWOOd#?|5HLW:meme(x*h)0+%d=Um' );
define( 'WP_CACHE_KEY_SALT', '[l&[[/Z)0J*2/0aX:{%};e:=63Ba&[<U|q__cGRcA:;SN;sH7&VFXyhIme=U~tO<' );


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
	define('WP_DEBUG_LOG', true );
	define('WP_DEBUG_DISPLAY', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
