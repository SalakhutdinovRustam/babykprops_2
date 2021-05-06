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

$cred_env = ($_SERVER['HTTP_HOST'] == 'babykprops.local') ? 'dev' : 'prod';

global $cred;

 require_once 'credentials.php';

 // ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */


define( 'DB_NAME', $cred[$cred_env]['db_name'] );

/** MySQL database username */
define( 'DB_USER', $cred[$cred_env]['db_user'] );

/** MySQL database password */
define( 'DB_PASSWORD', $cred[$cred_env]['db_password'] );

/** MySQL hostname */
define( 'DB_HOST', $cred[$cred_env]['db_host'] );

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
define('AUTH_KEY',         '5pv54O8gKFCXgNqfotfzlknt9Urw/3SOxtt59VKbhBluTWaP9rK1eJGO9nFrHhphao/t8+lIfUgFyCtzU3bQRQ==');
define('SECURE_AUTH_KEY',  '+aOX0PGduBN3QR2tpgDjpq8PWFvrcCTpQWwBS1k1SJyQQ4zyHTJkK24FQdCbTpKSB5pK40tPZl+TlZpiXcjTuQ==');
define('LOGGED_IN_KEY',    'VvCkU9A/RBsihYOZBvSIAJHMIhZGHVBaIUQZ90yHspNctBsfhv5MlouuFErLNICjRQjJ8C6e3/QIpJljAa1bYg==');
define('NONCE_KEY',        'WzOFHQAKdO45Fi5rmcsVmNV4aJplzwLkQbIQa99NzVHgPZwoQMX9X8agsoQiBPjTzxRyVFvaITv6C62a156rbQ==');
define('AUTH_SALT',        '3m8oE6EgWfYQ1Y0+EvM1T4as8KUnYCP6sna0H8xxKMGy68SQHlYTbGGOrbXk59GfjggGoTD0kAkKUN2lXUj2yw==');
define('SECURE_AUTH_SALT', 'iYNxuHr+XFyjvTXaCOvWCf4GGP3RGI/eL4RMeBi1nTa5hPvP4kj63TAPluw6dwS98CyXAFidKpZDNlqS7YGl5Q==');
define('LOGGED_IN_SALT',   'mcCDtWfe1vXTzmw2vFg8wXMoQM1dm7h0LFRtiTYhmtwQHiovE3UgWSPArFPoFeIkiPRsHor5MppCvXEzUSN6kg==');
define('NONCE_SALT',       'EdU5//jcXk5RWAaDlYDhqymA97lSasrOJBCX/lXLy1BhLEJWXpA8fPD5p+ogMtClPT2EPYRrKzl3imJ0ReAKSQ==');

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
