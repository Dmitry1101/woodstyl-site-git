<?php
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
define('DB_NAME', 'woodstyl-site-git');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '^=O(RksN=Dch})j+o9<Gv:~S4ZnZ(Ln$SDRLj~*k?2HiuN?O.b*#&wGq%W}(/^I3');
define('SECURE_AUTH_KEY',  'hou8+q% zbZww@n&sVG>pB?l~}3N06YHVDy{>s*{G( ^ZmW=FVGU.)aT:MWP^];-');
define('LOGGED_IN_KEY',    'nx*KyWGf[To,g ZP8/hx}|/jEjZW]+~k7*}IsC`$860g;@l,{[i{!ymJz20i?A%(');
define('NONCE_KEY',        's>EZmL>c]8f=wr);NrF*LAvb:l<)G$:3~a)VDoYQEAYlt!Zp=J5Lai,kOKG}g~.J');
define('AUTH_SALT',        ';X}}@B-:uEfAjbrK|*~FgDnCkV 5=IW.htkQ,k3DnC1ashFF ^01tnzFHxI4/biC');
define('SECURE_AUTH_SALT', '9k5ffgnTRxI&0 Cy#b*U5P=?$Zgf1PGuTjlkj)sD@Ms(HpSDR]}Z2JKtR[:Yg&SF');
define('LOGGED_IN_SALT',   '0d%j<g;uB%B )w4g`4HwpPb{y%tsF[X2n0?)x+WD7mls3kx*C&5,!qq!B1CrL!GJ');
define('NONCE_SALT',       'DRI#Tb>^Mp7$F~zU{@Eb0P=JtstT(*~f@l~US^cuWDAS!S7$yg,V{8>L%<mN0OBm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kd89_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
