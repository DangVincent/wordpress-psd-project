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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'gyzqfQxXMxR9a/nmyLZqGiSA5Ay6ULgZXXjWBDOciPMGl6caIOXXYAiYWYY2s1aoOIn7wLG9RWE+znkDZd2MGg==');
define('SECURE_AUTH_KEY',  'sDywgnVFv8tcz65rIIytDDDllAjh0glDmR3rLU35bblri8VLNFQ2LgRoVoq9c065wZU3kb/kXOlyX/hl9eL6AQ==');
define('LOGGED_IN_KEY',    'XmVpKxKmDg10HKeqzkQUPJqMIdECEgrlJ3V0aR5467TU7r42P9EQu2J2stH2uXfXHabvc4BaWSjm19p6Oku9Ew==');
define('NONCE_KEY',        'ebC35CElb1vUmx4whC1iBA5NbSZY5/6E6RghapOs0i7/sDqb2n6bMyFMlgBGH/40QPd7CL5NC1WU/BiuZuUWjw==');
define('AUTH_SALT',        'JgpOE9wjhbSlgppRvoFFf1DgYp7v2gjE+6cGHIg/VAymM/1O62Zo8nn4rQglh7UVQGvY47wjyOFf1VaK3Z12Wg==');
define('SECURE_AUTH_SALT', '7D8KcGb2rL808FLe1SRugNw7mep+mImHY5gy5xEOnXa6Mg1d94DYOQTEWnX5pqPOjfUH5iKUCWaaGh931+og0Q==');
define('LOGGED_IN_SALT',   'OgGIYOesv+TVV3Is/qpOcEW+Zz69EJttvgYXdewrrIj/qn42dpqkq+wC39qN9lnL9HJvRQiuTwwVU+zHDj9txQ==');
define('NONCE_SALT',       'M0/+e5Js22Rfg/D3fGu7vk5WmkZ1PFK5/ftCU9hNFo2ofHGkKyt+D9n1mlu5BEtxKvMyfWIdYO7c4HEdmG8HyQ==');

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
