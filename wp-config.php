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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'carmo_bebidas' );

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
define( 'AUTH_KEY',         '`5.(9P7MpPq9CFn?{OwtQ|A2:Y~{${}X[fBcwk4jH0|-3v`^)tZu7A~V_?)fEHqb' );
define( 'SECURE_AUTH_KEY',  '=o7Za.F;xxh;X)Sv+DVTNUX1:)o5+9eItFw q#usaJ1(aqxEBy{SU9i8=7$Djy*0' );
define( 'LOGGED_IN_KEY',    'e~ipELw2?M}Q]_:dcsV9.P!{1]`x%Ar|LQ3fGWaCg#=kh~4.{v|nvS#eC:Mu1bR?' );
define( 'NONCE_KEY',        'ii~}]#*4QJuq[a$Im7j1FLWY)W~QvscL,}s53(`*%o /#VG2sdkg[e=v~7-bqCTQ' );
define( 'AUTH_SALT',        '/clHxpkABS{96(a@k-yM!WE3J{u$C#i0%K.uF$fIdG&f5h~RvRsD5MPNGoJ6_VPW' );
define( 'SECURE_AUTH_SALT', 'b1})C7>Z-)uF;.;Qs1Y%sH)K$78#?Zr7(>TpvBY>RVy]4w6rHO>t}Z?>026F*.Dl' );
define( 'LOGGED_IN_SALT',   'q8{cd[{WJ)~2rm,mW^+UUo E1/Lg?#DyxbVj;P#7:s7yiUm4a@oYoO;[fK,x(Awi' );
define( 'NONCE_SALT',       '(KL6[Iy}yVcaq>p_!8#NY(Jo3|[Y{wkS[T_jr!tbGOXnshd^`b.M=P9r?DFhvTnd' );

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
