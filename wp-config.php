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
$url = parse_url(getenv('BASTION_DATABASE_URL') ? getenv('BASTION_DATABASE_URL') : getenv('BASTION_CLEARDB_DATABASE_URL'));

define('DB_NAME', trim($url['path'], '/'));

/** MySQL database username */
define('DB_USER', $url['user']);

/** MySQL database password */
define('DB_PASSWORD', $url['pass']);

/** MySQL hostname */
define('DB_HOST', $url['host']);

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
define('AUTH_KEY',         getenv('BASTION_AUTH_KEY') );
define('SECURE_AUTH_KEY',  getenv('BASTION_SECURE_AUTH_KEY') );
define('LOGGED_IN_KEY',    getenv('BASTION_LOGGED_IN_KEY') );
define('NONCE_KEY',        getenv('BASTION_NONCE_KEY') );
define('AUTH_SALT',        getenv('BASTION_AUTH_SALT') );
define('SECURE_AUTH_SALT', getenv('BASTION_SECURE_AUTH_SALT') );
define('LOGGED_IN_SALT',   getenv('BASTION_LOGGED_IN_SALT') );
define('NONCE_SALT',       getenv('BASTION_NONCE_SALT') );

/**#@+
 * Amazon Web Services Keys
 * 
 */

define( 'DBI_AWS_ACCESS_KEY_ID', getenv('BASTION__DBI_AWS_ACCESS_KEY_ID') );
define( 'DBI_AWS_SECRET_ACCESS_KEY', getenv('BASTION__DBI_AWS_SECRET_ACCESS_KEY') );


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpob_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


