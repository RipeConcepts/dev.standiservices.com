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
define('DB_NAME', 'standiservicesdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'v:.U~Q)haAdu|/KIPk?Y! >z- }PsyMY.TLy(]68_l3b?}l=5_TMn`3UnVV+<`X(');
define('SECURE_AUTH_KEY',  ']pKpmb=%F:mFBIgvA{^dKq?$VYd!L@9![{#qLE>/QTJ9}xbD-iFfbVRgE,n*8+fH');
define('LOGGED_IN_KEY',    'AnQQA:*C[G|ag,;GsO<:W2G~C*)w*Sav9p}L1266T>#w837Rv_HDQn*L;_OqPD%1');
define('NONCE_KEY',        'gm/lE+3}q,64j[P?!,@<4j1dr)(Y,B/{$X$fI|#(5^i|w@h~!rL{9nDKuKeL=^b3');
define('AUTH_SALT',        'T1$qd7lpuEt*NnAbU??trTRB7Ya:Z:3k$p {L<H]%p|>Gp>e3kr3|o<gQY9r{^z7');
define('SECURE_AUTH_SALT', 's@T|^m?w!YZho]#q*=sRgujN6es%vYMHvS7DL,h~f$FTYphs`?!d`pC/e`IEA&@+');
define('LOGGED_IN_SALT',   'WH7$UpF~$&B}WoNg*SN,27] rw#]Pj XLe+EX:c1c}g%k$C16#DoU-};lL~XZohX');
define('NONCE_SALT',       'd#y0oYtY[ .?}i+s]zJt_LT>=K0$<]Z2pMPy-MgQ?F0CXzQ1Nb0BC%+sG=J<$`NV');

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
