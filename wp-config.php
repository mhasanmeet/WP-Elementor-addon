<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'wp2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'a65ZvUzUnpaAQhxkZAw7sb4iR2razNe6VQc8y3ZxNsBbaRZVhgUxV6gLZQsjvigi' );
define( 'SECURE_AUTH_KEY',  'PabU6UesxzI0KHXtcTDOghckArQ3IJ0EkTsA1pBADWHpRUTF54p5VmoeqQ6YT7EU' );
define( 'LOGGED_IN_KEY',    'NnadwQp7kDvgw6T0JTPls80fQbeHsW0k6V8eXpvkIWuCifNZj31sFJOTDgMClOBu' );
define( 'NONCE_KEY',        'OA3TtXlY62mnTUSaUF29SPLHq7eWA7qR3kCnK8fIAlj8yIk4pbDdH1wgM3eYize2' );
define( 'AUTH_SALT',        'ud75NEYfXat1rkLixZQGnSK8uTDlewHCFUomPy4Dug5DAegDdaTVSTF55SHVDvYJ' );
define( 'SECURE_AUTH_SALT', 'dwPnVDiXWEnPwc8F58LXaGUgUXATMljP7tzmISfNpTShqhXrSPqBSvdAQApsmTuI' );
define( 'LOGGED_IN_SALT',   'oqlFDGqCGjMZo8KMUWqq1JjnEVtyG1hblPCB9k9EmxYW82UWGp4VDco45mM4Hppu' );
define( 'NONCE_SALT',       'TDhFkdYmWw78YeI8fPCAjvB55ga18HUNH4GZvcXIkJhiYqDDQsaZwvr5JrmyU9cx' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
