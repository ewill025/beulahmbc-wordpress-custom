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
define('AUTH_KEY',         '2Tc5f4uyc9fuWvx6eEP20AWYabcbj9naCONxrt5p/X+pXzYGanjvdwfozUGH5ESpRJdVMz5wkQFMtaawUMVHVg==');
define('SECURE_AUTH_KEY',  'HAzeur2wcInkQ3IYJ+vY9kVsLKlJr/Z9Y9vfPvHFr1H5dd5e2BKcnIi0JAJYrAaU3C5yRU876IPixt7m9PnBHw==');
define('LOGGED_IN_KEY',    'zuUs1KrTTYVyntAeif5lrgtUI4tHBBuctkS6WY/nPy/BQRwDfvRBIUC0dkJD1+T6RMplrr1WY/rETaLcLTJzSg==');
define('NONCE_KEY',        'Gp41Z8eVvQTRyonPb50eqO5y1uneq6Zrd3cz2zdQ91m5qfkXic/pKE2xUEBlJwPRIf97/I+Rk6vbr1n+M358bQ==');
define('AUTH_SALT',        'Gqvc23uWTezFIdnmCEuhu9ivPaMc7docUt9xv9ATzQI9EMSzSCKpnGDqtxSBP42+bB/fNAbRPWd7OgQZibKBDA==');
define('SECURE_AUTH_SALT', 'j6JFq8xoaGotcYrVD2wv8xv/sBDRx4hKzyMyToNFbXMGFdVfEABhNuPqHytWAK/JxVAqdljOMgRH6mY7e3ttJg==');
define('LOGGED_IN_SALT',   'RZM2XJckMSXxCrLmLGekN0DVCEvAVZvNpg9jTFO3F4jNMMfa6H1OxE/lwthfIrTWJdyEVVyPSCAAGofYAqVtcg==');
define('NONCE_SALT',       'IC8MXB5zv69hEd/f/7msAikcG0lpNL+scACkD0N6ZseAWJXdKdWNsyIzWRSe+fBS/qarL/get9t9H7bMVWJ6Wg==');

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
