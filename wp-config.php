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
define('DB_NAME', 'morrisseys_catering');

/** MySQL database username */
define('DB_USER', 'morrisseys');

/** MySQL database password */
define('DB_PASSWORD', 'webdesignclub');

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
define('AUTH_KEY',         'Ro1l23?V7yb#Qv1bv;Cpf.*&GBwQvfu@C3fr(yi8a<6+jdfC& jN/w2}5.0&rjY-');
define('SECURE_AUTH_KEY',  'jO+[-[|4+97D+@u0p1c0u{(ik3gN<g b|(,D{-YkXMW;Q^/W(kSr>zd+e8-aG Av');
define('LOGGED_IN_KEY',    ':LirQGTlU)(Ad@K<RF#{UIJD!ddDKM,1diazZn[9|Npyy7}cC?4g]BDJ {vz6&ka');
define('NONCE_KEY',        '*#s*9|cNj]I@N:F07wQHtTxx2VMS|]9uN3(O!Iow(D.B-7Hhh.pn_F=O1SJ>trd:');
define('AUTH_SALT',        '(I*@puC1%q6Z8A/KWLGQhSWhv4ar^%Nj<r.hc@4rhkm@@N7<tAwMi-rI8Ez|J-Z-');
define('SECURE_AUTH_SALT', 'AS^LG:sXMDRjD+Z9p`h.iF*YMpCz2>N41*Z%;Hij[_sB zZFoiATC(`L-xu#!~Q$');
define('LOGGED_IN_SALT',   '(YbzrX0#G5thPtZ*dafjg2@6ix030}A%m3b:s!hFn{{>&2c#}1)uw 1/-v^XBCFs');
define('NONCE_SALT',       'yJi.-_2/lr+SMmN^Z|}i%T(K<Tp.1qCSRqe5)-XB=vc9J~9S-TzC4M+5>CH.{A2U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
