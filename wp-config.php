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
define('DB_NAME', 'mywp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '|N+Ah;Bzd!!VeC$A}d?gM._1Lx{t3V&3IudIr-SFFrLWeI`c^[2?]eCB@JtkbSHi');
define('SECURE_AUTH_KEY',  'x$JN(|ESMeRz/iI>5wDuy6{G[9zQE*::*#7m]R1&E>1U*Y=&S+=Si,0Ws&zV_x5W');
define('LOGGED_IN_KEY',    'FJ{KBFwO]]t|:$+1CPC}j,#]Phflg8[b:J%XM]elYr ]J7u|rESY@hG0i8rgTU,o');
define('NONCE_KEY',        'TAIS2~A{:=oU}W.O<@senZmh0Dcvu-DNU|CX7qN>~a=(v8o~e^!Y`0!OR@vAv7E]');
define('AUTH_SALT',        'Q+:3 KCnkecg~]?oM4xDAM0$I?qI+; |n )_&o(dJ?K6:Ez,q$y)sVJr_^9JFU<.');
define('SECURE_AUTH_SALT', 'a6@qSeqZ@QryWYQgE*rOjC?VbU,P#~FBan@<o{;>^[wk)kj80#i>;%B$:P!=YdDa');
define('LOGGED_IN_SALT',   'U``C]XQ`b2HSMQxZ/}y>rGSAhA*N66Cp3GS4*kyK|h>ruEc&Tj+,GDRC7d8PF~c%');
define('NONCE_SALT',       'AW)9jON-~yDeMS9e0kNcOB2<Zbq;i-~=V1u/`[b|K}O>6V3=& E,l9M0_x8oUla[');

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
