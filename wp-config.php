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
define('DB_NAME', 'wesite');

/** MySQL database username */
define('DB_USER', 'zhungko');

/** MySQL database password */
define('DB_PASSWORD', 'pAnh_QPlOq!w');

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
define('AUTH_KEY',         'i_A%>QFhB@@{IU&8h_GALQ90qjAto`}x lf)6tYUH{Bs80zST:uuuLuy Rw=Ud`D');
define('SECURE_AUTH_KEY',  'qBw+iLvUc]*1.Dft7b{#-t`dKD H6<Vrbt?jMrCerq_O/cdpKyxhkVGAq,-{eC7K');
define('LOGGED_IN_KEY',    'N^xm&)(d^k$L)5KCSFwb2M~2Q{*rl`ja5O>)sBBS[[E*&-}y|IuCvSiD;&^LKa:B');
define('NONCE_KEY',        ']|6oc8$46o$` N^Z+#{Qws.jkKxBeC2xRwtoDg:Les|wck37Cy,Ku}L7v0=a+w;V');
define('AUTH_SALT',        'Qzuw+x <E2y;/dSn+OB|V1LHSduImp>M?wAjXjIWqK:~g5r5{wi5|W(*~5A*wTaB');
define('SECURE_AUTH_SALT', '((]3!MGP+S&FVlaefTj]Ot-L_I{+C;j6X[i#~]e>.Sb#A`M%e#7 tng:a{_p<.n~');
define('LOGGED_IN_SALT',   'O<dimKV,5e7ds*VVX{1|Dczo_<V}AY}u<aX+}vo0|$jIA>,nNi$7E5kTwFkLZ$ZF');
define('NONCE_SALT',       'M#ku_!YYo`P~vpdYh,R+|N<,&VOZgqdNKzMW38j~KUq}N/?WAoP!unR_~-:wz6,d');

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
