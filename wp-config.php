<?php
define( 'WP_CACHE', false );    // Added by WP Rocket.
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'u151284214_debra');

/** MySQL database username */
define('DB_USER', 'u151284214_mrgoo');

/** MySQL database password */
define('DB_PASSWORD', 'debora2019');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'S>kC^674g*#e?+V@H}MigPIrnQ2ms&U+MXj`94 yP}=QvW^XId(i:gVLB<Z`pUqq');
define('SECURE_AUTH_KEY',  ':pNr)@sdM8sc;ZgtE6FRT<(_3ZeWertL]fEk=+&]L!aL|H.,#X,LnJl0T7sqL`Ko');
define('LOGGED_IN_KEY',    '!RA1u#buefXG>%{2[y|WIvO&ZT}X?{Ojpbmv$:AF@k4 }uGj]-7w+^*mTeGW43EK');
define('NONCE_KEY',        '1@j4yT[Lo]-Y22fLkDOWd@z+).vd6NF,=alk@ifd+[mx:KikZ*p/8?-1mzTJBJq2');
define('AUTH_SALT',        '$a:qUaqtKWbARA+FyGQz6i>bC=-KBSP^nm2+kJ HT9wu*XpJc-QrVqozyjSCqK}S');
define('SECURE_AUTH_SALT', 'm4 qpxU:wNF@?=^NWn^>3-kg)bW@[Qq~5hUx~-}9TxKu$l6&8>8Em<keqr<}2.>(');
define('LOGGED_IN_SALT',   '8jw aE_EuuLqtcwcu(#H.m46eOS1T*s)UI1nDuVH=)-Ed:H1z8[GpOIv!1/Q#W6.');
define('NONCE_SALT',       'e${YL9@.|?2)nw9aPJhOWH$YU}1t&fulrfOUDm0,ESA`DP{NYDRU@2a.]OG=5J8h');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
// Habilita modo de debug
define('WP_DEBUG', true);

// Guarda os logs em /wp-content/debug.log
define('WP_DEBUG_LOG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
