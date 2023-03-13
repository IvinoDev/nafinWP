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
define( 'DB_NAME', 'nafinsugu' );

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
define( 'AUTH_KEY',         '),pa[oJ*bS9]8V}{lWq~6#_kU^tw/Lo6!S~bs1@N@5z=7,M|PPo/Ev^RZCjHauv8' );
define( 'SECURE_AUTH_KEY',  '=bqgaw~0=cJ41~1$a$,k6,DexT~z5$ds|28T^*4S;kHG}TuA# JZvpm++iDlU9)I' );
define( 'LOGGED_IN_KEY',    'X=x$iGwRJVVKl?M8cno(nLA0Ks./@p}7#yAB&uv)_4$0L918?MEH]<{mbZqF<aHB' );
define( 'NONCE_KEY',        '4,PdZ)zR@HQJ9#N@!mUi?q?^01f?AiZ$.;QM;~jGhc^F,.U!T[[x;y>%,g0]RHS;' );
define( 'AUTH_SALT',        '$RfvPQK&rj$#aU;x3wNifW@?laydX[/p3!bBC*zEy{;BU)s]*DVQQqRXAz+Trl$F' );
define( 'SECURE_AUTH_SALT', '.$rwc}tmgp2sKu _dUM=>WO#@VO7gF]q5$}:o#y7}!!pM!?[Q&*7#;<qu1HZErB+' );
define( 'LOGGED_IN_SALT',   '6>KQ23XHu25EqoDelZSy8Hms%Z*kworpe{uo,CAu^iCS+?HIbPJ.x+vV_Pj`M}2D' );
define( 'NONCE_SALT',       '[_x~$dk@yhW:p;dP#eG*|Qi7TLK?tIdP[9sp6?:SC;6IHAC)h)Is>dkqZuRn6$Z&' );

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
