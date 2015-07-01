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
define('DB_NAME', 'custom');

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
define('AUTH_KEY',         'n|O#9#-,w%,K2F{1Fh!C~&*M;-+;{x<eO+]TKuH|=*h= Hz-NFqpu)uU8);JWOfQ');
define('SECURE_AUTH_KEY',  'n#@Xg;^#@8ei>0+;wBR!:+Q}#w|5Gb_O^{L*a|HC+`7$bfRn.EgapDIQ1w` |my#');
define('LOGGED_IN_KEY',    '_+T2dz`3LZ}hih)(b-X:bzOda|wI@w)zn/[ByIp0E[s,z)G[TiT{ra@|N/JdF]I,');
define('NONCE_KEY',        'A#~THM[ZBk3~E:f;Rzd3]kumbY~Icf/Q.Z:7T.UK.{ZD>+#@3jTMh`+m;wa:9s9l');
define('AUTH_SALT',        'QZ1fA<)-je01^}tG4d5I?GafQavz.*W<O HL2Aj-;-G+yCRSMgsVdg5K+dCge)h/');
define('SECURE_AUTH_SALT', 'at=A#Fc)do@B`-huk75_mr#nD>IgVCd-G+4Vw[MuA*vi4F4Hh}G!/N>-=XcKvNjs');
define('LOGGED_IN_SALT',   '-}c_G@P|vF=hE#aVA(z+V:4|ZrYo_q>x62aBPN4JU=6T482L&Ccu5voz3xnDY*<f');
define('NONCE_SALT',       '8|=#>x6E--,fp<TJcUCv)67 pB:dGT8q*y2l[+&>*8Y<EUK|7-_0PKdpXcDbudLm');

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
