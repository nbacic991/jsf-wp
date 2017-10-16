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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'mariadb');

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
define('AUTH_KEY',         '88%zXft1RgM{lJf)0;pN]NB--td~hui1nxP +HPv^R{v;y`7}x?C)e~O7V=mV69j');
define('SECURE_AUTH_KEY',  '7U;mT2vO}@E$U4vtBIYJ`v}! x9elqkwx_95?^6/Qjv!f4lK[ASSP{`H3LqA@&Od');
define('LOGGED_IN_KEY',    '})Rb#0y4E8`2stgoV/@7N!ko,H!hOMyK^u4{<9VPP=bRpr+QxgR3d*)5jeVpyYaF');
define('NONCE_KEY',        'V~O~u=Sh>DZ?|U*<}&? 3&{@=+tY;O)^]Z+)4%9rp)XI]^Q4(6tb&z5~Esl@719Q');
define('AUTH_SALT',        '%4/bICf[f 1-7O!LF_fuW(nCL|oso2ds~Ty5_Yq_o48d]Cb]H $/rsEYUeXFIuBF');
define('SECURE_AUTH_SALT', 's4bse=07%B@A%UBv_YL> [2OU}s<b@_sPPEsvT3!s(lWe^]`h^KTPyLt }/;!m B');
define('LOGGED_IN_SALT',   '`=yUj i`vJvmz`k3YyYT5xl5e?}:Hq!-u #!A3:~GA+_6xtHG+8V$8{iTvH%w3Cc');
define('NONCE_SALT',       'OwIB:$0HZ8^VaEFBK<MtI$-W[PVV)OoJ!p%Fg/_ZA->eRw}<o?An&9FCTd6}OX*a');

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
