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
define('DB_NAME', 'testSiteDB');

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
define('AUTH_KEY',         '/@FHXTW+RByiINe{E#,omN7Z%js5c}{20k .5:Zx-5x%9t:~$[2*J1a^7vTF|eV9');
define('SECURE_AUTH_KEY',  '|ag`m$RjT|^In^{|$#W4KcySaQgg*HJ7zdo<Km=7oww>4h&Zk]&>|/=s(wGAIab*');
define('LOGGED_IN_KEY',    'oDN#:1i}+:+r- M7K{Pu12{-$i6/UTMqaWa,`x`i8jxO?-53ec7 mrcm**P=x}Q+');
define('NONCE_KEY',        '~~TYz2=[PO?8mwf;y]=v`c+F9w]|=a(x9/#NCCmbnBJE_D z?W6D1B5!Y) t4wk#');
define('AUTH_SALT',        '*^>z}@ntHl-y:Yb:c =9]qs=VMh+;E4M!G#)v:k`qtk^sZ[NGci@{~{Tz1<xs]o<');
define('SECURE_AUTH_SALT', '2u:Uv^0M+=`VS>wP?8+!nI%^}:}c=%XiP|OF|b=Ii@SlOvIUJ@S={%P9Fy1F+-S$');
define('LOGGED_IN_SALT',   'urCy||p^1#E/m^?6tMy-A)%^E!U2hZ[r^Qu&EeE2h<5PM- J(DexT<5<QN{fR%QG');
define('NONCE_SALT',       '5D5!*GyORPNbS+(N?@wJ6h,-uRql&ozLiN TIx Nmydp0 Tgxn#SK@+|/I2&^-mz');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
