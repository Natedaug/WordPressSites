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
define('DB_NAME', 'plugbag');

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
define('AUTH_KEY',         'V_f&1S|[4K%sgG8`_mrL+0;][+%o +a]ni?ibc3uh!EmHZO1Kc3>}P+o,5Z[m#qy');
define('SECURE_AUTH_KEY',  '|FRo(8*usYnQqE[bLH.tS?+^n8w+ LyV7M.:(t<iPUEzeZB|w840kV{`|M&u!| {');
define('LOGGED_IN_KEY',    '(vM_ TQ]}h#t}mTCVxVMxM`hS>GqCPi,@mL9kZ1er..pF_sN4|W.}=Hw(.7$Zw=%');
define('NONCE_KEY',        '2uQw(&q[P/|zd+oM&-[R9|O`cdeo_r*gR$6</FaI$dJ$3US/dV-Hpb39H]l)nzYT');
define('AUTH_SALT',        'F$[2A6<mr~Lmh}WD(xwCJkBa$A]6U!kYwGhHF$&==P5sk3==0_P|bYKP3ho:`Qu.');
define('SECURE_AUTH_SALT', 'l MU0C-oDRTOo6oA@c2jpOzu#5/HLmmPx0zE)wIS-`VVDTul>)1mTf@tB;Jn[}M-');
define('LOGGED_IN_SALT',   'gn|(.OYF4>vFm(VJDOw!|dgzA!#M`JN c6vQ|O L1[+oW-H?-g1$~7?x~Y&P]hzS');
define('NONCE_SALT',       'X4PQ7Qe}m&sKr#W#UBh|rI>1>CJ4B-X#%j|lui^DmJ|Pa&e`5F,ht;I&0^]K(H?&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_plug';

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
