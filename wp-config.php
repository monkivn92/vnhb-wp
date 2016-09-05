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
define('DB_NAME', 'wp46');

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
define('AUTH_KEY',         '~Z_&:w$lc4;I6pO;x&f(NUKNmvOJHEs!M#Lpg-xQXQc( bwRBC,T2%h Af*=96{i');
define('SECURE_AUTH_KEY',  '3/:k_}_>/|.QtAO6.B<+m|*caNOI7$[V{r3.z&9=JP&.ot1-?x?]`4?UWKq6tw.V');
define('LOGGED_IN_KEY',    'BGtn0s%DSAv1gZ!iH}:2Fq}TnyI`:6ifb^-7+Hn:LZ,4?3)+}$=/u4#`G6CrK#*g');
define('NONCE_KEY',        'E-Fn_=CRe/7*K}Z/m!:-iIrISsbJT)[CD#<I( ex:Z=1%o:jxSIvA*kyoxx?!Bfk');
define('AUTH_SALT',        '`n3uwp$,|BBGk9?h9F|/6~3JP5Vf4<T4DG~~,xyT^oKE$M3_+=O6kg@z8ZfCdYCh');
define('SECURE_AUTH_SALT', 'VDy%m-qb9}A?$ Zi~h@&}mzt`d2]!CwFBgJa>91$~f${UROZ!J1T*trG QS~C%Ad');
define('LOGGED_IN_SALT',   'fV}~)=4.```ZB9o9D;j9Ank0IgevE9&*Xe2T(S%Seu8DSm8g61a 8Z)2`(wnkVlB');
define('NONCE_SALT',       'Q & ;;<j$p/l?)zKKIj201Y%ub)DQ2;j{9@e:4qx7Bk.a~8t.ry;64g?l:|Au`z7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vnhb_';

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
