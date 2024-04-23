<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db' );

/** Database username */
define( 'DB_USER', 'db' );

/** Database password */
define( 'DB_PASSWORD', 'db' );

/** Database hostname */
define( 'DB_HOST', 'ddev-chingu-db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** WP_HOME URL */
defined( 'WP_HOME' ) || define( 'WP_HOME', 'https://chingu.ddev.site' );

/** WP_SITEURL location */
defined( 'WP_SITEURL' ) || define( 'WP_SITEURL', WP_HOME . '/' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'YuKRWHzYNUeqLmcnQ91fbbNrORh3Y6fEinzBN9agfdtXJEe23pCEv8KAy2Y8mNhU');
define('SECURE_AUTH_KEY',  'EkSpPUDf0lN7vurQ73a6k1xmy0xIOcUBna8galYCJS7UmNXSiaJbLwIoU7dcdxFp');
define('LOGGED_IN_KEY',    '5o07QwuIsUB4JBN5hsoIjvIvlU26Yp96wXXQozsrMm7zU8YOR5OIMpDz4ulMGUgA');
define('NONCE_KEY',        'VZTsyBn1nSzL9EjIJbT4QXl5vU2erglW621pk3gNzUrd2uLGBeCe8oElvE4Kd7Tq');
define('AUTH_SALT',        'sYI123NZ6hnYSJMbvv3TIJDQV8vfHlU4MnpiEUclNnLOE18bZkklHUIT65T7zPa5');
define('SECURE_AUTH_SALT', 'IhsnXJcGURQIQks7MsO2vYmAUdOOgzamMLRpWdQM9FmSTcvN74QiG2EzoMnNq9t6');
define('LOGGED_IN_SALT',   'hHPp3D6uLBLVr2g3ywf6CfeV3EPJ4AZcTzXqkAAQAbXp8VtVzBGxL1PqV5pDTPoa');
define('NONCE_SALT',       'EPJ5Rbz21losY8lhUZao2VxFsVCBb0jpOcCuSxVGHVMqDoGNxLI6j4eSwZyVefSY');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fxb0_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
