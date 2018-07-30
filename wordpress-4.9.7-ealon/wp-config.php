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
define('DB_NAME', 'ealon_wordpress_theme');

/** MySQL database username */
define('DB_USER', 'ealon');

/** MySQL database password */
define('DB_PASSWORD', 'wg448pJtpZCDejs5');

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
define('AUTH_KEY',         '+`TYhNNs)l-|KyW%hM`]+|}dU=-WdF}k-=8[6U{`zvJg#T%)w)nRQMgT4^=;&zX5');
define('SECURE_AUTH_KEY',  'E+n`D/$mSzt>,sS^io{pW*#fNhk-AN?CW)@A<gr)D#/XD%.@0%F&aLs[_I(V4q+o');
define('LOGGED_IN_KEY',    '2/2, QO!-+_%,#9m[-!e.DQ$3,)=OT:$]M2AN?OMNKt|@*}CxP|0u@uWOby4e:!4');
define('NONCE_KEY',        ']c~r:qww-8w3<DQKY#M:1~wb&UNu,Qaf,2vd`u IQ|Ke-/uM9fbL9DUBx@5LX9,r');
define('AUTH_SALT',        '74B2WTch4= 1Z^6Z^dgV.-PGZ`TY%a4-%V&H|,QH`k/j=RRP} F7NN!hnP^enOP-');
define('SECURE_AUTH_SALT', '),-g}zVx$=2<3DbFMA/>R.qJS`M/Nt4HiW-N&xPf{s5)XBjH!3MJGci@g:B@[>|&');
define('LOGGED_IN_SALT',   ')p#T7SgB*+N<;#?,T/khOrCCad!HwIF3s+A&,nnaCfyy2WkJ:@Z+}@zDK{t-KYl@');
define('NONCE_SALT',       'hMDy-HE7&t^DqaVK CVV|Oc>5~Yqe=Sh[QQ{2(4<g%kI1vU{su1W8 *T}T_{RHPp');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ealon_wp_';

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
