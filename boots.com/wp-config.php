<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'boots');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'orange');

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
define('AUTH_KEY',         'Bh9TlF2C@J{lq&i[6Q$d9vqtt?d<_G:c>~3|5!gXXWR^<1e0-15Z-}Y-z/*YAykV');
define('SECURE_AUTH_KEY',  'm)kD8+1RMl6/,PcO-E&J.CjsB@V>8iYyJAy~F]cE.u$1(&Y]pv?;Y,_5ApIMy`6F');
define('LOGGED_IN_KEY',    'YJnJ<lf5zi_-R}N_41p|PBYj,C{&f^vvzq33II_-YL`jNUn7[=oWc5ynLjZX{)=8');
define('NONCE_KEY',        '+#>=L+z-Zh,2fOIY4YI0RL->|lY<jB#)qtWzj#Oup=9F*gGqf`H35IrvZE=!>+{R');
define('AUTH_SALT',        'qNqt1gDnl,;<QWu|p{%1t#aDd>p#+7u]-(!,O5mkVtR*(<R#gi3|U&Q,![2XB5h+');
define('SECURE_AUTH_SALT', ' Nk7(+|1o<V y:J yRx,j7YsSbj%Ko2##rH;es4iJz$d3,ax,OZ;!yX90nq%^XxV');
define('LOGGED_IN_SALT',   '-cl}!i:Y+9*.rYK;GdEnEIJ@R YqMJa?vOf;]8@TCF1~2w(i/JVvzN^HeqM~J1$6');
define('NONCE_SALT',       'soo{Bm%+qO(>*tLvhK!Q|KH>W|hylpN1r&}fpWe35Wr%3ISv6BR>_,X.PQnaU|Qf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
