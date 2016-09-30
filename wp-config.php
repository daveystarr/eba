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

define('WP_HOME','http://www.eba.trumfiodesigns.com');
define('WP_SITEURL','http://www.eba.trumfiodesigns.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'btrumfio_eba');

/** MySQL database username */
define('DB_USER', 'btrumfio_master');

/** MySQL database password */
define('DB_PASSWORD', 'Jasmine5858!');

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
define('AUTH_KEY',         'e|C7::T%a)q2-877n*xke6)x(ry2 lIG?tIS>a(C3<#uk.Ah{w36S%w?q#nLfe:(');
define('SECURE_AUTH_KEY',  '(U{0uXy}>]mT%7=rOF+/9Ii;{GYr9q#bG!-p|agFx 3O-LWAh9Wb3o<0>OQpK#;R');
define('LOGGED_IN_KEY',    'JwX2%g?X&$)[D<|qJEwH aB8Cc:b!AmE_e11|42e 2BQ bq92@N.tG@Zi:T*KIol');
define('NONCE_KEY',        ']QEmO&-O/t)xS*`kf85SVa;@T 3n:N(di29Zp;T1J=oU2G0AzR}=?7TBeu_M{3Y~');
define('AUTH_SALT',        '{!agcif_pqNkk;*Q5M(t~w)B9C/Ci`0OKYS.BpTmB6uQ2tpk13vVOl^_;8x-u-b4');
define('SECURE_AUTH_SALT', '1qRJ1Mny`p:.rgld8MJpGH~Kz&Hqz}QD*:~!-b#v)z&|/q^8 W]p$mYFiHn>K81k');
define('LOGGED_IN_SALT',   'xIBU=9>67=a3!qdAkZ,Ys{v;~O(}9ThWa3]%UEKWp4IZ=eOcsiQ?[PTp{C4:io%q');
define('NONCE_SALT',       'km<-)u>zO_680*GDCCw53`aFPt%|w4AY$!N!@LjMg2]*[Lq].A}yV#]e;sD@GT>L');

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
