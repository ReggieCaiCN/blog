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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'aeqsDqw0[m~?9T:uI*lOb^*8<PG{5pj>3k@j*sN6tE2ibOIA/D9X|L8] ^`jO#p9');
define('SECURE_AUTH_KEY',  'Xly6n^[Xn#4 xoTJCS:0kDEQuX;sWJ+6*HZP%fOkXLqZ:IV|CN0}/FGF8o^E%)s2');
define('LOGGED_IN_KEY',    '0JgLi2lB[uoUvk[#[Io%K`EY+.DErJa%SX4u@(ipjkcaaZk-> -g^-3+h,30lITd');
define('NONCE_KEY',        'X*6.-e#9W,+aE9H$r(E%*RRRa&hL6uxT ?1BQ<Dw?QZ,a1NMEH5D41|y6warZEPR');
define('AUTH_SALT',        'mY`3A$,Gl2?URjxs^*`O]mm^.lm;7i.*((%!cOH=7SWk)U7Y>S^fvQ6hd fX2[zh');
define('SECURE_AUTH_SALT', '26<-K2I-X j^G| /f3P#]g#D[P99Ws/+CyH^_0-k~H]+!xN:yL_1RkfVSTWj@RTN');
define('LOGGED_IN_SALT',   'S>e6:C03kyI z|^t?vT<:ZZQtk2(/p?283cJ#h-k55$AF:X=G$V=m2QL9V3>-7?e');
define('NONCE_SALT',       'r^v0=5Ux,MMxp;&],#S(}aXrW=X4&$mo[I:k`u0@[Wr(Gz{.`<:7kz9%YbigQf:G');

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
