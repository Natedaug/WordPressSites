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
define('DB_NAME', 'localwp');

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
define('AUTH_KEY',         'G;@`y#hyaK$B-Ogx5En#%reE4{$[oj!IIv16-au.%f0U,UwyM{PV-%`OL0oexX78');
define('SECURE_AUTH_KEY',  '-H]P~$TF~8yrUK54q-mhuHC=S(P+}l@QXPH*K{9|,6PK<M+e;bm|`0-T(rOGn`/2');
define('LOGGED_IN_KEY',    'N2uG[| s/eQ!]Ql/EK;6*aZLXT+0gM_.1G  s*cQ&by-4{-f}M,P(6U;@qL!>EF-');
define('NONCE_KEY',        ']ll87#@amL%aWc:F#kF].IQJ~Xjm8gYW+`w$ip6|k5!=0Mp1;N<:<GRE3y^-5nj$');
define('AUTH_SALT',        'P;$yquhC0.UQG<oQg4jd)p[4U@x/5?{CZ1h<4H*yD~J$z-!z79/T--xumhu T&T4');
define('SECURE_AUTH_SALT', 'vp3GgKi+2^^!VM~;O/_HryypcJ~$JJ!wuyv?{yvJePM_k-XLaj n/>{qo<88 EpO');
define('LOGGED_IN_SALT',   '.=<+nE-a^Y@-_Q`:LTu*.-8B8-GDI.=qpC>>fIpCK*sBP$ h3u#=3 CmL[dSRBO4');
define('NONCE_SALT',       'gG|LYHU?/oGZ&+0oi1@i(,@b|sI-GYfTwMGA3jr3<Rd=q}dgr%*@4}9`H8%N!zjI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wptest_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
