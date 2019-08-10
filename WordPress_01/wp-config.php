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
define('DB_NAME', 'DB3741644');

/** MySQL database username */
define('DB_USER', 'U3741644');

/** MySQL database password */
define('DB_PASSWORD', 'NqFcWtslDhUQuYhE0');

/** MySQL hostname */
define('DB_HOST', 'rdbms.strato.de');

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
define('AUTH_KEY',         '8ipVlxWWpII1O968VCFaxrvfMwf!7ZtTQ6mGv0@6wxV%Bx3%MGi&Slz6rv(sWS^&');
define('SECURE_AUTH_KEY',  'cE1(dl1GY4Zxif4eeSIO4G3AJ8#B(UGTWAMO7viU)^lutfYxjf(BPpvyn1AH5pyw');
define('LOGGED_IN_KEY',    'H4aVKiH#DfJg^LPnu*ej%Xf^HVW5A3JASyvrNp5oT3#^qt!3#D!0cK*DU#pTRTgd');
define('NONCE_KEY',        'QyDy1h&TIWUInRO8!&yGc!lU4obO5kDsdoRlu%WBVfpTAmHvVh7hjCG(gFwbIYA1');
define('AUTH_SALT',        '2Yy0(#)FdZ0vhz4P8qP0MlV!4fjQ4!P^Cn(zJIPUdk*L#gAOYihy*TjCNzRM(R%E');
define('SECURE_AUTH_SALT', 'tdtHNlJ748bXHzpFQ^FK4Qu@Z8LD0QHsDVwbPoz@HkO%l32)(ZC&)Y(kfRieEvNE');
define('LOGGED_IN_SALT',   'n2fZ&NnN^hjolDviq@J6lsaPCs0xFoKc5cWsSvQs24Nuu%*5Xuohm8O*ZOVKo6(W');
define('NONCE_SALT',       'O^Y61vbYHHU%hjH5vgjFY1terldBlOcN&c2KKarX4XPzlb7InpebjUP1(3Efr27z');
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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');

define( 'WP_AUTO_UPDATE_CORE', minor ); 
?>