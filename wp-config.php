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
define('DB_NAME', 'ProjectNick');

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
define('AUTH_KEY',         '=KP}o@/Y RVsbhkQ_T8Zs^>xBG,EB|P2OtgPpF6.3Vdr4|kNj$X|u*HA!^@+$Ye!');
define('SECURE_AUTH_KEY',  'DJXZqAV}jCOunuI-sD|`5G>7m3)YnuK(p@=%C]?-e|k;|il=#lYMAi!*dK#!p|7`');
define('LOGGED_IN_KEY',    'l<+%a1I:8%62f cB.=Kig=]6G?QV,EHt4aUX#nzHAJYmi hgdvITH%J0*-}a$PHs');
define('NONCE_KEY',        'tWSHZ.W.b+M<O6,2N=a6]!NGCv]btQJ2Q)Fhjbr[cEy-K>4iCLK;!EKsT8`%z#v2');
define('AUTH_SALT',        'aPFkg$Nz^5Ak|v_nN5LW_0ZKKG=jxYD{<}?W0~-mhVv(6]1{B9>#0jL4fgsU{{}O');
define('SECURE_AUTH_SALT', 'MFov+kff1/mh#xWl9:&b@1FnJ Cm7TyI5n*/HcB%J*VF<Us(p>~4;>~0=(2iE4$-');
define('LOGGED_IN_SALT',   'TC0Hsc=/vr}VGyzC5K5Y~WQt0lYsk>@2+pX+hy)K(M*M,us^7^>PG+W9MKM|B=A(');
define('NONCE_SALT',       'z#UFk6q#aIE,T1)nu7c,1NRXaR)Oh(GA0%pR:W6+R}65Fs=mI{(/d*WpZzVTt&n}');

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
