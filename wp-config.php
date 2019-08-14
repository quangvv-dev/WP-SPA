<?php
define('WP_CACHE', false); // Added by WP Rocket
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
define('DB_NAME', 'WP');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'bITt@wO2uR3*');

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
define('AUTH_KEY',         '{iY]tP$Vk+uyFp?B-]P:}xNCrN_37*Gt8q7fB;R(:t)bmMOA:}a2,4a{cwi7-H }');
define('SECURE_AUTH_KEY',  'P*;{z<5>ROYpt6Z.|x;A>dHYQ_aV@Z #-x4+`pF$aog-gh-H]K8-3I4ZnwLA+-Vz');
define('LOGGED_IN_KEY',    'QPgr|jxow/2_h^@p(Kr&n(7sf6y{LN+Hso[6ZsC@57$mu!_Tnq7z<k?9xucH-Kng');
define('NONCE_KEY',        'm?PfiV`^f^QrQ^(U.<O|n@<N^a1_|697Y(Bm^DFpu&uDsW=..&N4}qcV#^xZo^B6');
define('AUTH_SALT',        'zA(LFDi&HhV/&4okA(2?Q^E$=h!Kl-~6a~,js|-Ir-3;RgH_c:/&)Dvgxb__^m,F');
define('SECURE_AUTH_SALT', '^&yLZ_]xsd#|KE*1Q^p`>-B%z>zCn;3![7-WU|y^b9/RMGk6G/WjY>f(Rnq_F*:j');
define('LOGGED_IN_SALT',   '1j`gDU8u[OyJd|fgb&QPrF?R +g[;};/KucyLBEw+WfXT)dN:HWk%+6-HK4yz@tX');
define('NONCE_SALT',       'Pg`>o)L;$j?eO )#~VfSi[#2c2j;iYx /-4}WyMN~1g&90?/=!ImgA9soCq8K4W=');

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
