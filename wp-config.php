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

require_once realpath(__DIR__.'/../vendor/autoload.php');
(new \Dotenv\Dotenv(__DIR__.'/../'))->load();
define('ENVIRONMENT_DEV', 'dev');
define('ENVIRONMENT_STAGE', 'stage');
define('ENVIRONMENT_PROD', 'prod');
define('ENVIRONMENT', getenv('ENVIRONMENT'));

define('DB_USER', getenv('DB_USER'));

define('DB_PASSWORD', getenv('DB_PASSWORD'));

define('DB_HOST', getenv('DB_HOST'));

define('DB_NAME', getenv('DB_NAME'));

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'tbFEDY1L2z/avFk6o/zmtZKMTQLOnauM4XXr5+G9sR9ZU+w5jyShjzmNVtvX6RWI4l/pxGAF6qcMYVcoUjJ0vA==');
define('SECURE_AUTH_KEY',  'AuBYTp8q8GC9Dbsm7RCefMmfq0aEEDOyNdhMgejLBmalJu/OuCKhu07Y4UCjhq40aDIDxThWw2i3u4DKg9tOqQ==');
define('LOGGED_IN_KEY',    'rpWHg4qDEgcmrmBHqCLFnBTRtrm7i8MK89WqBO55Fk9nMMjhzO19QXH7crLUMwxT7ypPfx3TkZS83lldGJt0Eg==');
define('NONCE_KEY',        'FjgdWoGwdH0FBzbZg7r/fSeuQXugB6wBOxC7iR+eZOwuOe6iYl+nKlvokXEYgaZbDQvSqJ+gFYkGCNTnbtE5og==');
define('AUTH_SALT',        'GVIDppt8ciA64ph/r6BoAYyF2W6q4s9ExdK2zS0KOiQMPlK2U/lyq+eaOfq4r9pJbyHwC4+XXvh817pdB8eH6g==');
define('SECURE_AUTH_SALT', 'auPuIPN1IKZ5gzRHYmOsEQPqTZih2VKF64Vo8osW8gCtLEeKZ9HY8R+kb5vPTzEx1C09q5xxjd/AM89PuQzQ8Q==');
define('LOGGED_IN_SALT',   'T21LgfKUJJi6NdUQk7eV8oVKZKHc26+ZqUmqJsFo796jpNcMi77FNYiI/6CsVM2L6O6FrW+NMoDIlpTxf2aLmA==');
define('NONCE_SALT',       'u2nAtLR+4fRovKcv+QQgeW80COcvlmZh8KhgfIQd49woRcmTPTrKMz5t4nYbeHeKhs6wVF3aXQ21arg2dLtPfA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
