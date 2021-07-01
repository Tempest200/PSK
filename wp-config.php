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
define( 'DB_NAME', 'psk_db' );

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
define( 'AUTH_KEY',         'X; kS_Q13:!p%82&6V+H GiG?d5KDnyM(D _(5q`N0UQNZD<31^(tls hm!i{k`i' );
define( 'SECURE_AUTH_KEY',  'uW,.=NNJi^1~#iCwGp[weR5(3+yNI3?[3nrX97l4YJ9diIy;LuugnlI=jl)pE#W-' );
define( 'LOGGED_IN_KEY',    'x>P3oAs0c^.r@l&m#?@4_Y7DcQt?@LZiqU]kkKS#j3U1bepxB+pRB<t4gZ#A5c>~' );
define( 'NONCE_KEY',        '>;yQ$#SvW~?d|<o_?C*<.:.!OIa6[Q&[.9E:.R^wo62;`3?9RIjKw)d!~]9}B19r' );
define( 'AUTH_SALT',        '>o  <nn7PRC&HZzv)6LF9/|.b<VQBYc`x5o%%zS&)t.5QMsIHDx~D VcO6%!jwZp' );
define( 'SECURE_AUTH_SALT', 'O387UPN5lt|yU7/x& 9rHU>`sm|N2.S}_*(__RGvl7/|MQy5`Jh<(e6tGMX$vLvq' );
define( 'LOGGED_IN_SALT',   ';z0=H}4NGvFl+PVX,fKCBS:8>l->~lfWx#g@500ENz<Siao9% `HwRj4Nrb=o69[' );
define( 'NONCE_SALT',       'f*Kh7#iK(o7+>T52kV%b+dU1iD5Q3uP5ZsCNB8yj7q7aazSN$zStFi/!nx{Vdkw^' );

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
