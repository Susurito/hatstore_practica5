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
define( 'DB_NAME', 'hatstorebd' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         ':?+l)c1onlP2o-YL?imCJI#)]{dI;vz6U~KLa>(QQo>y^ =HA^UQKHMdN;>Yz)*O' );
define( 'SECURE_AUTH_KEY',  ',abq?>He?o)JU4s.;<QS4uWCGqtYKhg$G)UIap+_C,HWufyhn~[kQ(`Cz#IB-qdm' );
define( 'LOGGED_IN_KEY',    '=RcH7dYH 7]H*i`y/MGQHIS,iX9]N[kavwh}v1|0A/@gBkw.+/w3gNn7u&0S@TZ`' );
define( 'NONCE_KEY',        '51hT]t*l#N|_P$h{d~;Hscmw(M/nIe8K#m Rr4IL=@kY+{ioA$ 2Ys[-x;E{IUK]' );
define( 'AUTH_SALT',        '397QVh2YI~sB=aSBXG-<IVacvre(umK?&fTV~ztssY32ktP|`^pVJQ&u9!aaU$hw' );
define( 'SECURE_AUTH_SALT', '(B=)W^uy-NB7iq)2sm.}e/k}Tj,A7!2g[s6 X0H<PN|{j+#s]cW!Oh`/Ce0.M.}O' );
define( 'LOGGED_IN_SALT',   'qWAIfpUMp5Ly`e9H,7|S=]vj}@y5hLKgyC~7iCe&ZF8|@p+^`}:Ou<& 4N*:>D?v' );
define( 'NONCE_SALT',       'p/dWr@[_h9oi O%^!oV:L XqL&(FxD4M!@iU(L:,Gl2fr! oQeP71AEYUz6+R!(7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'habd_';

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
