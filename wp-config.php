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
define( 'DB_NAME', 'wp61' );

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
define( 'AUTH_KEY',         'qd 960TGd4$ ctiJS8SAc){DS[4vK XZ_,=jW?Fgmq8{BygV,~j%0VD}d}.=&8i_' );
define( 'SECURE_AUTH_KEY',  'JLoM!x53XLzXD8jXUc6-./79br6mK~Vgb(zP5&L1epT1JOo|88h}hE:_uj dE=J!' );
define( 'LOGGED_IN_KEY',    ':05/oSlksH/fctLW`f<nHNsSR*A-jB:KAL]9KFwV]1[KdbZjMBV1vvYSr@4M REp' );
define( 'NONCE_KEY',        'SJt8LCg10-Oz8bKjeXO2YAWwlU! bvHwYOVTZnw;ZK%s&P@d5$-;<#+yW=Z9 {a=' );
define( 'AUTH_SALT',        'aswgmdlm|5Sr-d9-;e3` Wf%FG7}5+!unLV%b7=0/GHGX6J6iDLu1aUgZ FU[^&G' );
define( 'SECURE_AUTH_SALT', '4A%fFboo1fU/*~ct$.[j7tm2.uih39Y^Zzw]+uZtmwg7V<^%JJFLQ lG@SxpB-{T' );
define( 'LOGGED_IN_SALT',   't+@I<w:utAyERas=Ur5lNT(DNfJ|*vOwx H:-]ZtkHk8zyth8pri)R?`ow_Tq2$K' );
define( 'NONCE_SALT',       '-M$=)2dxp+&91Plp!Hk6beh5J9Hh:*yyhrN~[DV:uP q(E],dY?EB(icN:OT1O+(' );

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
