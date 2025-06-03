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
define( 'DB_NAME', 'kmk_phucminhkhang' );

/** Database username */
define( 'DB_USER', 'sa' );

/** Database password */
define( 'DB_PASSWORD', 'kmk@.123' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'n~P%j$[9272& e$Q[lLr.$4w[`)uUP{9oqH:{)dwN<R,,u#@2N%(U|9yac6-Rp&$' );
define( 'SECURE_AUTH_KEY',  'QJsm#{UDII:ke40B*0[+}iA6i0~_x$0i8~f<(38$r:E;@Z#G:Zae)*it(-g)N]d&' );
define( 'LOGGED_IN_KEY',    'WgM/?@]l|y+momy>K)fLwt,VlL7}MDe-|R9mO*[( 7IfB+K0gN)Ql?mEp6ECgD59' );
define( 'NONCE_KEY',        '%=5e~2X:`H<&@lY]B=v4K;|yk|WPyL3573Oq@xO0sDx;7/|kl@ i*{b@6@F|%,h1' );
define( 'AUTH_SALT',        'WzD;mLA$%#`M7,w3](Yb%s%h<1vR]`}*p(]P8jgF<nbay9HSm026AjVVb[x ooF7' );
define( 'SECURE_AUTH_SALT', 'f+1-XXE3ar@+h>(28zb,*&l|n<z~n)!)L[dGs?L}_P@`-UT$cTe!vP&(_<|)4vrD' );
define( 'LOGGED_IN_SALT',   'K?{q*}pec.!Ws^%bwch4dBD#&D1]WhqD?^nh~+zetM,~IlAp}vAqkHl<~{i[^MEL' );
define( 'NONCE_SALT',       'LO[[m(N=gnM(o%a)EW>-ex$4u2ohph@jh2q0Y5ez@:`{Lh[:NsUlW&6Weg8yL[uN' );

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
$table_prefix = 'phucminhkhang_';

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
