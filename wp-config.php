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
define('DB_NAME', '2k17_wp_musiqueaction');

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
define('AUTH_KEY',         ' j}]!iyiy05qp~w|l[TV9AR2Pg-o-f@sC5rX&A}oB1k}{(q}+no|vHHN[g#|Ev&f');
define('SECURE_AUTH_KEY',  'o=Pw(KZ_hc+ dpK~G&XqLp9k!7dyX1`v<m&5Ty*Qh}0<[{IazuC$+@:=/(%$]^:T');
define('LOGGED_IN_KEY',    'xmlLZ1F8<&3ub5spviMxSEz(k6.47R?cYA%eZ*)<=FF%OvNZR4KnDex2@~nl@K`J');
define('NONCE_KEY',        'Fo({FqoB>PD6]rl2h!M9fB4dLJqa2p~3b;N>y]%0N#@T=mkXKr#pM,#i-9TMa=&K');
define('AUTH_SALT',        'yNw!r-f=xSR%=`fqZD+[(>Jj4!f);D$ npyJ@}Ivv(BCG{G~0d=Y{2Iz~=JAfpSI');
define('SECURE_AUTH_SALT', '&k,wUglNM$AeiH6L!2`+:~Ml:LUnsyGZlzWAa10VSwTUb.$k~^!@_#?e!&O,rx W');
define('LOGGED_IN_SALT',   '( []K&YLApd2{JAV@Nv;TDjyJK)9Bcl?2_?V=yXG<cC(=RLN_{fu,;.DaN6:_c,Z');
define('NONCE_SALT',       'CaL!px^}B9<9~B`xz)rsj{UQ[uJHv-A/s@Z~[go7RVY)tmk<ov6>wC`CitO$L&%>');

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
