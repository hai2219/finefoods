<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'D:\Working\Projects\finefoods\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'finefoods');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'River@1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '|dCG_C3RL_H%b|T6_&Q*Zl$uqc4JL@Qmo,{yO7fQNv*/hO/UZn/t?.m,wI:o`G06');
define('SECURE_AUTH_KEY',  '+m#^#*qhZ[uP!#j&g31<iFC-/F-R6[+EpxX}Q:b3i|QHx6+kVx33g<5KqS[~e)P3');
define('LOGGED_IN_KEY',    't1dvA$kC~PhZS.E0F]5cbfTTBL-5PmxfA3wEr~RfCt>(2$d=4&KW3Qh-R<)FB:ss');
define('NONCE_KEY',        '~ST<B}sup($&~qwi[.Q9t_9}#3-YfuB%R4NCkF08jyei2^@nHf<BN-xF49y-!|l9');
define('AUTH_SALT',        '+`|0W@fcUr4&&/5Gv(yD0-G=Pi|.1;qo0VIIr,gq*w<{a-qi`lvfE4Z(Yz4/Ll~2');
define('SECURE_AUTH_SALT', ' q,}ZUw/$$E?({RZ!Q+%jY_89nJ<g~X2VQJbNRjC2!)F.i],}XJGzn#{R4 >=Gtc');
define('LOGGED_IN_SALT',   '|UNmV)17F9Vq*m9>|9Q0Iu(7yn{X}e>b?CYW) UKTHprt{>PSeg^f84[lYTmn%2+');
define('NONCE_SALT',       'zAv~}PZf;.Lj#{y2uZ@@?L[{sAUlDL),>()_8och^7z]jE(/B#&%692OEzx-ol_n');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ff_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('WP_HOME','http://localhost/finefoods/');
define('WP_SITEURL','http://localhost/finefoods/');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
