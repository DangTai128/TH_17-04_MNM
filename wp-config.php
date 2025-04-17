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
define( 'DB_NAME', 'web_demo' );

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
define( 'AUTH_KEY',         '*moI^=1fKXVjS;*ck~r<_8tuxX@+.HpB&48f_JzHV#F<Zik|.t)a>V}Q}Yn!e0Gv' );
define( 'SECURE_AUTH_KEY',  '!#t?tJ[Cx|9lx]0z[,mT`0IyL-Zm>&pmi.cdZ[;xot9STeK2{HX,B:pPlJbX}hJu' );
define( 'LOGGED_IN_KEY',    '!RVF[vmjZFx~gRqSC2e`V{jQ4!T7dm;&&nalLS1U5Ki& yt*nU2kPpWo~u82~NAd' );
define( 'NONCE_KEY',        's|*$@8@<IMf@|gae8rmLPvJKz@,[r$>QpUjeV38H>RN3P4c!wiFp~;0$AX<C(A k' );
define( 'AUTH_SALT',        'zD`)shl2_/;F@>oD04Z#T,X6q*[IbfSbAA*^gp*CW%z!3pSoo+VeO9WjjetE@c2 ' );
define( 'SECURE_AUTH_SALT', '<lJ;M v0@ejTAlR-K,NAmBStz4&-RBli(*>j@iRQJM==iXVahH_rpy26sx7E^;f{' );
define( 'LOGGED_IN_SALT',   '`Y8Lb`6~CT5;b?(OV2,],T{fd%yk&~?6ot7p-k|H^f@OE6?XSSt1,clG#og2PI;[' );
define( 'NONCE_SALT',       'J ))Cdrh7j$9+h7QC#I>X;)d~5_re&d+0o&k]84!:X,~pl<bx<fy)/$NK%lNuzc ' );

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
$table_prefix = 'web_demo_';

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

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/web_demo/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/**- Mở file wp-config.php và thêm dòng sau: */
define('WP_ALLOW_MULTISITE', true);