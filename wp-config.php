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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'naveen');

/** MySQL database password */
define('DB_PASSWORD', 'naveen999');

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
define('AUTH_KEY',         ';<4sE<SFaiSz-5fh#vVv<dRIh4>C|/m0V@CV)^de<MBxmLjk@Mv6SnZ2n,ZYTA`V');
define('SECURE_AUTH_KEY',  'JIns)m8NTUR<PbZLHresPfWQh3#f0C}{VG.KPZU:;h33yB>oH4!.x2dN)d0;P` J');
define('LOGGED_IN_KEY',    'jh+GQp6{h-6fY7dxeW@Ug;ff;VdXjLcSXNp(0UgJPYeUH?lf %/$4Q/Yb{^iD4:n');
define('NONCE_KEY',        '_i_;/.i=QRnuZByO3k|lK9RS X Qse~Sl48ajhOFZ+5kRu_P.j|c7Ttw~}u+!QT)');
define('AUTH_SALT',        ')0[N;<Zrd7MX|vk{VXd.n!TPb>UCA;*{i *1gkz%a0x5vE5Mv0tM4C@f#azgHX2e');
define('SECURE_AUTH_SALT', 'yfX%pHSIGA@]uxyb8uDeSt]y=iC_RY:i(k/I8G0)6e_Y8K6{3I]f(ZU>L<z`k,<,');
define('LOGGED_IN_SALT',   'liR?-R{6T-=(k[hX5&Tz./z@z-mXlS0Bz>NEQ)Yif^0d,RYq/?gGP;/Jw_U`4Cx@');
define('NONCE_SALT',       '!s%[+C2xP$CSuo|:9c5+OtxpI*cql.cMfx}~c;iu#2P_fV|*N|H;R-KIKo*eH&^{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_wp';

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
