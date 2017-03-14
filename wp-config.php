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
define('DB_NAME', 'partiel-web2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'i~3}4a|CDNx7!23h6a{*Np[})y%}rSZR,%2%Z?-O^|Q|cB6IJ8U+= .6dW0(#!F%');
define('SECURE_AUTH_KEY',  'Wk,)_{7[s1@D87M4dKG.|9(,j]j.eY*-qU.]yr#>y;x`G`gK*YAXAD_=$_Ozkg^D');
define('LOGGED_IN_KEY',    ' M{qn1X4+b2/fpV: [kwG-<MbN_Yapude)SkX[X8L!$s^vz)6:wo(/g%S~sAm;M,');
define('NONCE_KEY',        'ZK]9a)<<6!Kr+Av6Kn}1#R.owSogS>%KYN]f`00`tD6>Xa)FM(kM6W-s)y8pV3c!');
define('AUTH_SALT',        '?9qqLXbe<$xLJ;&d1e ec0ax5-xdx3|-G:j{yL6X`S.0tNf{]./$ i_O,]HCXGI3');
define('SECURE_AUTH_SALT', 'kVqsfY`(%<3tKdWq$(M3F)85J$`p_eq]]Bn=x.kEUoRAL!vIq=)filSjH^m?Ib`}');
define('LOGGED_IN_SALT',   'B!NdSi559_>XW)P|0C@#ITw1+J[}>s7u&(_w{=+M5ERUz7>l|a?^rspMo@%OlWNV');
define('NONCE_SALT',       '),d-Zc(3R0n,v-x? %3oV}WvVOP7nD.yNx4#*OC=6V`+$<&^,[bJ[@O1z6nEN$p^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_2k17pweb2';

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
