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
define('DB_NAME', 'tmdt');

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
define('AUTH_KEY',         'bdl4n YFB:^p&M:c]4Y^GhaJ89B%9`o+/UupZY2#=FdHjW<m>P%s)IQZ{32_oR>(');
define('SECURE_AUTH_KEY',  'gt<m:=Y}.r ek>AP0Gb7H+GURTpWs`xrU@UK_6J65 9VL@a(7zT%~#FFyk@Vvx_9');
define('LOGGED_IN_KEY',    'wpSGe09JWLJ7YcL1(YLZfMO2]@lIt>oB9!cfDFrKK*%t+ jImH A~iSfU7fQc.h@');
define('NONCE_KEY',        '(Ns,gLQi+P:~l|?tOwTRFnE9_jp1@L<oK(C0e,Iu>H;x5K=D>5H^@[d!gw]N*iv#');
define('AUTH_SALT',        ';yla^o~ OBjc-JOeJcY8c8.8z@27r*|YyUy3s?v6nOC3:GTI`oX4:RvUT.HL>e l');
define('SECURE_AUTH_SALT', '5Am=nE9Q6$[,X0cj`=r7*z!<^wI3KQ(iQe9DupfFd0Z&U^|kM<Z:.w+4?bA$?9dM');
define('LOGGED_IN_SALT',   '_^qZOO@_5wr$YDKIBT/wba*s9H$E#}^~J$OiI $Q&o,JV3m=2-Re,JT/gjBp(k}]');
define('NONCE_SALT',       'f66Tff]:87Vc.45H;h,bAI&xz{=I}se{7UahC3(K-B&td{,6M`&+7UV2x[Wu>u-,');

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
