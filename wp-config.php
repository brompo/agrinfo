<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'brian');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'ruth');

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
define('AUTH_KEY',         '7b]+R.rF,%{ 8$rs@?d+[UfiYB(qNH1C2,OT FsZN+345CVCBsp0i<.9Q:7s*9fR');
define('SECURE_AUTH_KEY',  'vW=]O{+y Vs%0}`uqS9d2mY`a=wCq<d}w0gcJ1=r:vbJm_d;RKcvG+b[kN/w:4ef');
define('LOGGED_IN_KEY',    '50(Ot~o$af)bmu&?,1${>HJ}#nY ~sYqVg!rjx`a#o,l7hE>Rp8.A!Tkve:tRh|<');
define('NONCE_KEY',        'Ev+a}j~O:x$X!3Nl24*Z|&*_3&3 %m]K7~%Q%xK 8ZP=1VD*H>.m10*TG:+0K{QL');
define('AUTH_SALT',        'L*GC<P>_1/Jxw3MW,gA]xoX #YcfUD7457YCi1vEdO&7A6~.-k4@<|]7rMZermsX');
define('SECURE_AUTH_SALT', '!@Dvxf&<M&9{PTJXM=4h).CO/kfBx,vUN9MqCCW/^Q? ]&P-wK@kYG&uV$t(q&E_');
define('LOGGED_IN_SALT',   '&Y!vp]$(`w.(n[o6 L2^id42sB8v<G<$Kq1#l,PYH2=>#cUCrmBzgW,U/,yX<I0W');
define('NONCE_SALT',       '*$U-]kD z~a3~}y5+I/B0j0yT~2q8I{to+2](^Qt /(rV-etk3IUOCe+Bs[3x,a_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'br_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
