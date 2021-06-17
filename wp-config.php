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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'kolliM');

/** MySQL database password */
define('DB_PASSWORD', 'GkHMlU2q6ZjFXacB');

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
define('AUTH_KEY',         'Dt^S|l0z%Jp]ZXw^0^P.+[DDtH|>`ferSdx}/~V;` bG_T+lx5;!2j _cNLYre.)');
define('SECURE_AUTH_KEY',  '+4X^t5hA|Hs9*fh(%D$~x?zx=oD/UzYW3f^JwR+nX$)<PyvWJq#I)dAe)ow1-8i/');
define('LOGGED_IN_KEY',    '6%>PC7,CMO5ogNcsc>tE?(y(%*SLIPTj/S<Eac1! PA:g[ERpPo~&vMChL%#sH4L');
define('NONCE_KEY',        'dH;CVYS_NGqNw#Q7V/{AX%<PKi;j[mYe`?#xaugt+6MGL6`UjMva4HXOvuDD,crj');
define('AUTH_SALT',        'TLkvXUr.rX[t[Zg=|{AU#MxaJj9Q`d^Jc+F>Y],CpvT 51LB}kmq{i@N~.V;>OVw');
define('SECURE_AUTH_SALT', 'Y*G7g5dRge8P0X}=7HvqHjx>aan3uBHleHNF<[$O$Xs&E<6bA1JaRU}r:]f,fDlE');
define('LOGGED_IN_SALT',   ':].1kRPWkJ&d {5-X~jK^tJ#m+B@tnZfSDge~vW!DTU>ZEx)XsnYP>JmN_ 8}PIi');
define('NONCE_SALT',       't+TWKy8c-/TP*~lLzM3Y`,PF>po[]9!{;z<2$hZ}-:3qDPH@@_mtFsTcxyWE*nwA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'db_';

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
