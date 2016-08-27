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
define('DB_NAME', 'buyhomes');

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
define('AUTH_KEY',         '5(PX^0?KII<4J|N_2fG+EtMOWPI4~Cb1&+1}Ilj+.+Yi&LK!vde:X$=/=!O$z*FE');
define('SECURE_AUTH_KEY',  'l <1!pej!#f[hUe-i-c]xVs)ONo/#b)u.Z?1 m];O|UhIN=hA/^N?|+l1K-WxHqR');
define('LOGGED_IN_KEY',    'kuZZ]*^M@kqb4VLnFi~Vq z6o_%|(~`:2DZL@VmH9,g^cKmbC!xHD-2iuR bX1B*');
define('NONCE_KEY',        '-hYDXIYdgl*9[|o*_M.e#$EvmG:f^a@^PS9_|sxwSq|^Y9M{p4BDq;^y8`|)?A*q');
define('AUTH_SALT',        'rDVG[Z|<e;f@I8t;P@$RSS5}y,Rid,D8OG-G=.JQB5|9/E8`*K@]V%W0W42oFf)N');
define('SECURE_AUTH_SALT', 'wR($H|PGSqHqah=2~Jskbd_|We.dM/sV+.s-o[f#Xi+R_H bX66~3H%(?O9p]u_^');
define('LOGGED_IN_SALT',   'L7(2=q5SyZv#~@!QrtgW; YLN4@/kzM*zhj[3YbciVpo}:&;*0A++t{1D9>UPM{z');
define('NONCE_SALT',       'VlIRoqdsu8!vJXel,c2yX9 W|W!O1|+|O*G1%:X~-8hagw=$p)/pP|U2@X@>n&MJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jc_';

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
