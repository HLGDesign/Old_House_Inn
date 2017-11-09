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
define('DB_NAME', 'oldhouseinn');

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
define('AUTH_KEY',         '0zs370tUs6X^(*. u5F)_e}G0r@x#@],SUnP( J$pj;dk/$/Z=2xyQ*g4P8.ZVN_');
define('SECURE_AUTH_KEY',  'T[G.^=A=:gB}1j.i05~w-o$#1SXakm>_3-nc:w:H4kW>1Mrcj?b.u>04y3 EBo>0');
define('LOGGED_IN_KEY',    'luD-B5l)8shb;^]7ryIF~{iTKjT-[^,yQ Z^{LUHKNiXE!/u|r=$E8>s B*BM[;L');
define('NONCE_KEY',        'f._?Ic]ilZ$P#:2u${Ec?gNL}x}ifS~V}NFrqm/jQh&>P8.Dkp*Q]&/s$GRs/7~n');
define('AUTH_SALT',        'r`IExl!5(!+6V6YXR|p1nj7{_T5msKI(lh@@Lq>U=xhA,-<L$,B-wyM[=U2NwZs`');
define('SECURE_AUTH_SALT', 'YrZ5 sZ&U=.vQh_Lwu{LP$b/Jz!<*m*.P !.j`<_F~|qehot=,J0-V|57e.Fw+jX');
define('LOGGED_IN_SALT',   'g ^8Ig6@*~6ZC0-xpD?:(-4UnP~h,M>-L3L6C4xSEO&?^t;_q%V,8wuP>el#Nzv1');
define('NONCE_SALT',       '.?j`?o=200[c}f/P,fYuIpFE%-A$c4F[*bZayD^@>sn1|m)sUM$~5fVV;5h@#4eo');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
