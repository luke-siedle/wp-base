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
define('DB_NAME', 'wp_sync_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '#-bL-yP1fY_^=MR=a^mI.Lt%BY-TSw3&yenvR|h<Fm*LUV{rU6p2/H!De|adM+JR');
define('SECURE_AUTH_KEY',  ';jURA-A^8C/=N,JUQ=}ynQ69pQ~Mv8&,N k^!/L[d1)BZ/yL]2qsHl%?q5Tov8f:');
define('LOGGED_IN_KEY',    '81s|k.Tt&fkfP$LcR8-AY+`y`qp]KJmf=eRb_hY[Q3>Ij_[&DaLCZ+ $5=IH54Zv');
define('NONCE_KEY',        'QY(A9*Q.-0wG.ok,^UFPdY^ k30IXM|Kev`OZe.P.0{:n*9@5{Z]~E=Ft1O6nHon');
define('AUTH_SALT',        '?#trE%+s=K!y3]#/k@7@ar8BL-K8(Q+@)mDQ az307.LT3 j<w,K2y?*037+[j| ');
define('SECURE_AUTH_SALT', '>u?-/7~_p&0I#K/$$|HL&/&XzADO|5{nnePo@/5?#eD6 +xGlt3^vXK3$N}8|fs|');
define('LOGGED_IN_SALT',   'y)Z[y@<Aa[Y>=H`b(,- gu2VguVA-sklWN+..b(xaMd62e~m RwwL3Nd+`%R^u/P');
define('NONCE_SALT',       '8XB,3qy{+6 +,8[.f5K.+JgCVXZ=p#D1B$.9amy?QUt}I!i[+7^aZ{Cw3&34(dtd');

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
