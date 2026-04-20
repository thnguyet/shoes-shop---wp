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
define( 'DB_NAME', 'data_shop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Nguyetdth892005' );

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
define( 'AUTH_KEY',         'v.$.AKbz 1xVo8@R_%T/Z5,.O[a-@Pk*_U[@gJKmiWV9T>`|khki{l7TqJ5-j,$/' );
define( 'SECURE_AUTH_KEY',  'r1PN]/K|}:f5Z9TTg Of~J%ML!L7QzZ;*V(AX9M@5{uf1oM9cN!oGzA&-G.NJ>qL' );
define( 'LOGGED_IN_KEY',    'TSSH [D-th/ YJ^z2?69XG8IJ0Pm:Q.Ng]}RX&_KEJD#JHxF%/q6KKRW(/%5*`9u' );
define( 'NONCE_KEY',        'FA~/V9*XPYI8r/bkjE&3!lyA*B&im6Ae,B9K+F[DBs!3.d>G[>%[ ht.UV[~+xL[' );
define( 'AUTH_SALT',        'XxWMt3b8>qZ%_KO+Sd1ii4,110PCj]lLa53?2wg(2R{=Y7hg5&rJ[vYr4kG9+LgT' );
define( 'SECURE_AUTH_SALT', '>Wc7f/}jle*QLVGHd_nw]@m;99.^m{#SoKO[C$D* :#Z>X8eW]RDx:L lDi6UDm2' );
define( 'LOGGED_IN_SALT',   'RY*.nK:*n__oHsphv!&c2Lou~N;tsR+z+#fmRh.#`eso:T!ZB2(qL Oc{<*k|}J,' );
define( 'NONCE_SALT',       'YM8wcA@.9PX-Fy.Cw&}%vk=vn_o#2[Hs;efd4hQ96kV$BaG.Ioe5V>;<6C_?GoIn' );

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
