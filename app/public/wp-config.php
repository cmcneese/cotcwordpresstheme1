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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'm8tmystSMeg5S9n+7cGDRYhkJyxkMtzvj7ES+XrIvhCHFKrd3h8I2GLnSpEJbscsz4MMMD4tg1yYQcbxag6mxA==');
define('SECURE_AUTH_KEY',  'X740QXXK+J+2MJJfHNBJBNUhIAJYdmxb7ABah7czUoCvDl8DzjwnWuiaa0JGRiiDgtUpUrQ3VqJK1LSIiupDzQ==');
define('LOGGED_IN_KEY',    'A4Pd/eQHn0HHw7UymD1VBeGRxmDGWkB3iDJoH9LEvhdVuR5LNCYgsO0aqVI3LrhcaqG7JFArjPk0LGNn5Ve0Yg==');
define('NONCE_KEY',        'LU0gg94MqvcIzxvMsyc8rslSE65HKk5nQ/MC7HodYqmV3s5hcynAj5pelgNy40soQ+UVVJa3v/HWw2vjbYmRDQ==');
define('AUTH_SALT',        'e5j9+SnpsTYLheKIA2iKsPsilJ/rXU22BNTYbmeXi0Jiuq1Qi4a7ZNhGBDNxc4HpKbhqcaP5gzHSahox5RugCA==');
define('SECURE_AUTH_SALT', 'I8edlJd7+ivuCuJffCQKNig/7Kk3M70q3Hm3vy2aButwwZVqTO9eZJ/t8tNnjZ1QyL9OkhXAP4jtqNyTIM2zew==');
define('LOGGED_IN_SALT',   'OqR8mw8HvI9n9Pr4wormtYODWD6+kSBu1zMFvuM/JQxspptTFUL1j2yZoJYfNWb9FRtgN8bmXpoo6CTW+AT6Yw==');
define('NONCE_SALT',       'GzLKXCq4GNBneLsc/TdZrLNN4oaLQshdtq7HS3ddl9ChD8+GookgaveAdBEKwpkVQbU+4zKsfvl58Mue2auq1g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
