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
define( 'DB_NAME', 'Hobbybakery' );

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
define( 'AUTH_KEY',         'srmih,]_3gtF|N&B$1h/f+{JvuohDCJVJo!{(4w)Pqz},AY @,PSgLXGDh*6F$de' );
define( 'SECURE_AUTH_KEY',  '&J&t*U&DWo@So@]%T}GV4,`l5`:[};!Z*T^1wpETZt=abJ.Vl6x-bhxhA;WvC2,X' );
define( 'LOGGED_IN_KEY',    'aH3yF:0YhKN*YA=3;A5`#96UXy9){bG;w>Gmt#IJ31N9q1c%dq[kd @L!A}bE*o.' );
define( 'NONCE_KEY',        'WM{uDJX.8W}X-NVUuaSl1!3ffvCG:E[!A5L6efXbaUcZ7g0vN#t,TKS5$_iv}E *' );
define( 'AUTH_SALT',        'S7Mxm7m?W-nf_F`H(MDgS`4ar`#kiAp5=#f[nDej;IIlWz8eOetkj$IRc[*RQ/MR' );
define( 'SECURE_AUTH_SALT', '7toX$}fOy`S8PG(F.KTEPec?hY@oq3>|Ga:~>2MO3@y%.{E^uX(qbp25ZrD%7d>N' );
define( 'LOGGED_IN_SALT',   ')*]iYne#azmqY]jLPP!4gDqONO*HFF*`/ }EK%B`o6MwG+D>f=MXAGqTDkmj|zby' );
define( 'NONCE_SALT',       '_b+9Vzps-<dH2Q1|j_d9iJEg)/jQr>teKe6UUOOp(OH^ASjI|B9TC7PphBm%7^(k' );

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
