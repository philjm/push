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
define( 'DB_NAME', 'push' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'EAn2Z=_xv(=bm3W:T!OrIL_/Q=|%lI:8uK@zvi=t@Qm5O}[f&O -pMkRrA58!V+A' );
define( 'SECURE_AUTH_KEY',  'gRuuTpN:xr}y+{,0w/7{ErBpm#dFN9Be!_ @WSiS3.dC!N|a/^?o,p[`gC[d?QXV' );
define( 'LOGGED_IN_KEY',    'b O#e1Q[-ij aF3oPwQO{6t {Tf0u>IclK|I=7.8XEU<VM_Q2$A&2JD1)Xg8f!Zl' );
define( 'NONCE_KEY',        'LALO.A%R[6Dh8|05&$#{[GX]|S8-$8}xrFtfKn7exlTAKez<ajZN3VKZ;iXO01V^' );
define( 'AUTH_SALT',        'aJ)ne3V[.t<j}-jC]AYFC4S Jf*b}Igi%1X~ThBdhI%s-Ze{1TP.#-9hwzN!5Lg7' );
define( 'SECURE_AUTH_SALT', '%trzODK>^6htt]8og^!Iu)=`C/GykHThRTI5bXkqoE_F85|UaLVQst?KBbHHRG@{' );
define( 'LOGGED_IN_SALT',   '!#b:vKm!kpiwzVLcK=x<o/ V43tjbv`7,`=EWU0vxSB*fB4= 8VX=qf,tjTN;+Y-' );
define( 'NONCE_SALT',       '$+L[kb-2g+M^bjW:y[/{,%& ~JIYXJR5R%2((`nX<MW>jeO}5s#.c0&)abE2-HKr' );

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
