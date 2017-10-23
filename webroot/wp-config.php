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
define('DB_NAME', 'jsf-financial');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         'Q$Yt[&#W/:.`lj4Kb0.&`SfLU(FzPWfK3!npi>:U2 4{65PX;|#5^HWJkr,YMo`a');
define('SECURE_AUTH_KEY',  'O#k13z1?3I}G#;iXBRVh4:]mwH2K3T@!Oq!/*UAlo*YLKQdFlC12XG:Gbv@wW7B<');
define('LOGGED_IN_KEY',    'mED;9nZnk%b==raC}sy:_p,h#/QJ|Wa]FsTP5G0AD[G_a$6a_n`wCQ~1A,6$.1P6');
define('NONCE_KEY',        'UiO3fw!5;7,!^)KY=jlqTM|mBIb/8tq0,Y4[Q!r3&d{&[Yr)Bfx8P![AYn?_G5$L');
define('AUTH_SALT',        'bKP?pNwls,+S_(96s,S)<Ynl=a3NY]HEU&iGAZbqL&7>+`S<7`X;[[>lw$04QLAJ');
define('SECURE_AUTH_SALT', 'NJ)MK,LWkYeDbDt)z`HcY El_#/N+|@/8Te3=@ulV=?`|SwU3S#K3wwf*?sdBqux');
define('LOGGED_IN_SALT',   'N`z&pwIe7Hj)>R{zDQ)ober==vB(nu41Y4|(vlI:%xS>=`MI%gQ$B),{q=M4,w}|');
define('NONCE_SALT',       'L3WU-x$Sk=, {%8.l,S^s/WKJDHDr}M(=dDHA^_4O]a2%w|FDIl-t;*J/f.N$9%A');

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
