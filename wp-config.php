<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cybertec_wp795' );

/** Database username */
define( 'DB_USER', 'cybertec_wp795' );

/** Database password */
define( 'DB_PASSWORD', ')1SKJo1.5p' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'u1mi5cx03poh416licipqejznqybofrys6kgxg6sq7lihutoskrmgrcwslzliton' );
define( 'SECURE_AUTH_KEY',  '6fo5mkmjmx13f8r4yiu7lgikr5yeoss0e0nv0mnarog9jxygphno5kljt3ujisn3' );
define( 'LOGGED_IN_KEY',    'bc3usipw3hmsdrl5svhk3scd9mnfvbildfxksnwxmksug1lelaa265bc0x9ntf3l' );
define( 'NONCE_KEY',        'euyvfyqqo7z6mcaxfbwgjuiu5hkmebghju1khg4irbdc8es3tburzco9labmaxby' );
define( 'AUTH_SALT',        '1fxjdpuwi5qy8lpmzahrsax4xpmce8alqnyflmov6g2miisspuic8wslu4ictpoe' );
define( 'SECURE_AUTH_SALT', 'c4ddlcullvawymzt2w6zlubcobtx99u1o7unry0jypqnfkz78zmjggr2cbnqflnn' );
define( 'LOGGED_IN_SALT',   'ylowwvceqgxmlr0jvcpml2ec8pvirydwt7i5pd8a6zwsygvq6ocz36bkou49bjsa' );
define( 'NONCE_SALT',       'yuyr0glgkjc8uhx06gmmeo5jlj5jtlj0tjgdlpw93jjwexy9tgjabdd0kgfjmi5r' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpod_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
