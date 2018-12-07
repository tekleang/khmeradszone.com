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
define('DB_NAME', 'khmeradzone');

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
define('AUTH_KEY',         '~&3A^I`gk8{=)f.=}}&GZ;$LpoLUbeh2o_G,En!K.;^^UoWtOt=yQ(*hn&Rl44g.');
define('SECURE_AUTH_KEY',  'dk70%0=~/n]& q<~QD!D;/[<JD#M+m8U@LQE^V6x#B#u2OR8+qZv?RuFS2-WA#pw');
define('LOGGED_IN_KEY',    '31zG0C+-,Vmru@tQ,^dK7TGD%&;8h+l$pe!*Pi<q_GS/q0`.fdslk_8Nj(mg!C{8');
define('NONCE_KEY',        'qV!Ld)<;,[4UL%3G)?`9Ei;[3(#It@%k)H>{Sw*m%Oy0S2[cSZsN/%fdsGo]J7F#');
define('AUTH_SALT',        '/8L&XS:U2v<rOM=1%36gjt0EC)-dvZK{uCnXD@YEOg?abO!8,3xyk*}F>d]i6Lea');
define('SECURE_AUTH_SALT', 'l;S.L;Z{FPo<6sK@p*+PO@m,^NCG.L@iDU#flM%.{6ztU3K@@:MAA^R*1%}Bs Dx');
define('LOGGED_IN_SALT',   'Cy:1WgTa|-T/{8W^%43:)0P@ZOkOp1{Ez9.3CrZt&4GRGGBfwQ;D,AY|[YIU<u@}');
define('NONCE_SALT',       'j6Y.GcYF{8!?Zh9|(%cI56%ja0OO5ujGSD#cI[1=v,6U@q1UHL0`*KXO3J-hOD=8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'adzone_';

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
