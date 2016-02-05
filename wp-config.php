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
define('DB_NAME', 'phungtasDBuouig');

/** MySQL database username */
define('DB_USER', 'phungtasDBuouig');

/** MySQL database password */
define('DB_PASSWORD', 'OlacXuJjdr');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'I,3>BUMq.6PEbuj$IATMfy{^MfU*2<AXLex{*2IXqiyI6Lf#9;DWpix#6Let#A');
define('SECURE_AUTH_KEY',  'B7Qjcvn^7JBUrj$v>TIfXq<$3MEbQnfy<A3Qjbun^7{XPi*u{E6THeXq<+LEbP');
define('LOGGED_IN_KEY',    '1Wp_5;VNh@s[C4OGZwl!-:G8Vph-s|C1cVo|z0JCVNg@s[C4RGdwo!-:K8,$0MBYQ');
define('NONCE_KEY',        'Ey.Pbq.3Wm+]*;Dtix<Xm+{A;t#5K~;DWl+]DSHW~:CVo~s_5Kds#5[DSl[CRGVo@');
define('AUTH_SALT',        'Gl~x]D5OHexp_-;H9W80KCVsh~1[G4Rld-o|81KCVsh~F8VJgzs|@0NCZRk!w:G8V');
define('SECURE_AUTH_SALT', 'ei+D5Olexp#91OHeSpi+2]H5SLe+t#*KCVsl_w:G9WOhZwp_91ODaSp_-1#sk!4:J');
define('LOGGED_IN_SALT',   'v4>BYNk@v>!4RJcVo|@0>Cnby},7MfYrj$3}F7Qncz},B0N<E3PIbym.7MEXQj');
define('NONCE_SALT',       'CGVs#~5[GZSld[C4RGcVo|@0[CZNkdw:|81KhZwk0JBYNkcv},80NgYrk!4}F8Vog');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
