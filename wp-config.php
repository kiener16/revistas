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
define( 'DB_NAME', 'revistaddb' );

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
define( 'AUTH_KEY',         '[02=?*T+k*DEB4rz(G]/DPJ+C*)?V!F<!:m--?!~L64gA<0g`BinnV0nM4dUVj[h' );
define( 'SECURE_AUTH_KEY',  'E#H_b%maY<d]#K;;tYGnxEi]SB8bl/`X;7Y`n%`e%m~:Y*!C5>kn!iN+]N_A4eBa' );
define( 'LOGGED_IN_KEY',    '/3|pI&qP|i0|)y$be/#74I}$8hP6D$/jIeB|^pJv%3f;X97>Efy6FD5f4ZPtQ15Z' );
define( 'NONCE_KEY',        ')BKs,pd s[5rJ.r:P8pXzT2T8A4;Th|`BPq_n3!v=LyE)R6BO g`Fo&-p=02U+({' );
define( 'AUTH_SALT',        'qoO#y+<IE:6 0Ini:?-c59@&IG5OR1*z4+f)&YsnE6`W4KqBa.1X.rS2id&xzb!X' );
define( 'SECURE_AUTH_SALT', '<#.&2i>JdTWEL+ wQxzUk{o&-|~Gu8!.dct%kcp.D<eEXHZE+N4?bxo9={<])_My' );
define( 'LOGGED_IN_SALT',   '72P.BGpf0{+W Dmd]#)7pE;kLZ&q^u4 aC4?a4CNbl3fLZt{rt{6Fk0#(2Z2Oa;!' );
define( 'NONCE_SALT',       ')qm3O@TXg~Q@6 dmuFr[O`m)hklOB1tU&egw.r7j:xp]M+s9(D^y=4;?XBO=B(}a' );

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
