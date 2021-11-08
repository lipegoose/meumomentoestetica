<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u151284214_PrjEC' );

/** MySQL database username */
define( 'DB_USER', 'u151284214_9o33N' );

/** MySQL database password */
define( 'DB_PASSWORD', '4UUju2b3j9' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'SU+#!XMC^(? kOPfl~!Ouy468Q|v*Sg2 6E_Tk*iz|@v6I&7N-|%TWV~|mdh;iP;' );
define( 'SECURE_AUTH_KEY',   'V`d^H3nd#i2]rr#4JgQkB6p{p9p|T-.y*dA 9Id7gcrp&@gP#$iW J~hXdTqhHxN' );
define( 'LOGGED_IN_KEY',     ':8]X%UAsE!3E?Zvw/1-^H}Jygf273fj$]pt2s<`1MZ`F8hWA8{N9v`guNBBU21)4' );
define( 'NONCE_KEY',         'u@s=jIqbk;7o0d3rvo_`Bzs~zVf8m+!L5^R[@I^{~a,s9MA@)3#T/](>`bvHb3uB' );
define( 'AUTH_SALT',         '(I QT6V 50Ry:^uo+e2&-KRAc$X/<X;rL,0yQtTb$6>-z1&k3+Dev8y?f|RtK?24' );
define( 'SECURE_AUTH_SALT',  '9fW_2|x6v~[@+E;Kidj3NIgeDll-(k_F`5 J5ERJE3#a#WJZaCj`?nw!2xkBPU=B' );
define( 'LOGGED_IN_SALT',    'SPJv+KVFC-pT|k_Y]xHJNucO,!z1L4Fo;2(^v<Iok</]7FsX4no{D)20dE?Me<og' );
define( 'NONCE_SALT',        'a=:JQ8<x1u/gMJ$s+rdw+kTBIFJUeW18~+{N$]cCA^%gBy4%T?5WJ1xQ;DQz_VK^' );
define( 'WP_CACHE_KEY_SALT', '2;Qcb3~Qz@}JC:_l~O G*;j o*RaGCI2J5#kA6jb-6GML@O8OFuhF*<oiqc?S94t' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
