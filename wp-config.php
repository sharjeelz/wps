<?php
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
	require_once __DIR__ . '/vendor/autoload.php';
	$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
	$dotenv->load();
}
if (file_exists(dirname(__DIR__) . '/vendor/autoload.php')) {
	require_once dirname(__DIR__) . '/vendor/autoload.php';
	$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
	$dotenv->load();
}


define('WP_DEBUG', $_ENV['WP_DEBUG']);
// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define('DISALLOW_FILE_EDIT', $_ENV['DISALLOW_FILE_EDIT']); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
//define('FORCE_SSL_ADMIN', $_ENV['FORCE_SSL_ADMIN']); // Redirect All HTTP Page Requests to HTTPS - Security > Settings > Secure Socket Layers (SSL) > SSL for Dashboard
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */


ini_set('display_errors', 1);


define('DB_NAME', $_ENV['DB_NAME']);

/** MySQL database username */
define('DB_USER', $_ENV['DB_USER']);

/** MySQL database password */
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);

/** MySQL hostname */
define('DB_HOST', $_ENV['DB_HOST']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', $_ENV['DB_CHARSET']);

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', $_ENV['DB_COLLATE']);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    '');
define('NONCE_KEY',        '');
define('AUTH_SALT',        '');
define('SECURE_AUTH_SALT', '');
define('LOGGED_IN_SALT',   '');
define('NONCE_SALT',       '');

define('FS_METHOD', 'direct');
define('FS_CHMOD_DIR', (0755 & ~umask()));
define('FS_CHMOD_FILE', (0644 & ~umask()));
define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');
define('WP_CONTENT_URL', $_ENV['WP_CONTENT_URL']);

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vf_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/wp/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';