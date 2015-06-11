<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'daewp');

/** MySQL database username */
define('DB_USER', 'daewp');

/** MySQL database password */
define('DB_PASSWORD', 'A1rPl4n3');

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
define('AUTH_KEY',         '&+o2y;CM)>R!DpNc5K,&/<b@Dt DjS>,d4~0HH^b0mv YMn0v~(lHj-)+MI]iH<y');
define('SECURE_AUTH_KEY',  'KpQ.SE}]c r23~n2{:dPeY%JY8VrrYu%Gzyd{5zRlyO36<Y>WR]^gf]H4EXEW`N4');
define('LOGGED_IN_KEY',    '-MwX1%@Fu4a?IW!j#)Uz,LUoKl2R-#R(1Z(K1C5^tgods;p{myx^d4_+wsz[n#sj');
define('NONCE_KEY',        'Q<a+9{b+#;Cr;h`ruPhsV!C-nKxF*+U7ru6;gEA%Y@<`f6lc2*Iu3+d9{BemzP+2');
define('AUTH_SALT',        '4gO];Ud+s,.DKPwF9%w{ZCWBa- )l0gG{?$M>GKCF0o [HO2vD>NL^b(CCO_.j%p');
define('SECURE_AUTH_SALT', '~mvI+>E 9De8mu<iVMJ{g]@m5-X+-Vdd$L81Vc;18Yn}KTB+aT2364#4N@|gUXBB');
define('LOGGED_IN_SALT',   'TMQ/+|ATgPis;]K4PHkE$yT`o&I?,c|gh|+-kcz7>YA)f)4`|G#g0`-AO&1%KNo.');
define('NONCE_SALT',       '?B^H+meh0QHtbuZn3|@jcFXxnCM=g0RnLuewXmTG3 4pbR|5lK+DoVan! 0Q[I6v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_';

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
