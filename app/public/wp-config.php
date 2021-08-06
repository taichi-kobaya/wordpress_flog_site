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
define('AUTH_KEY',         'SGdCB4aXdRtDHUCLEgdhy40fDKFTeEcSSvR50E+2SjbWTU6oWMHlU8VXJcw7aes1oOzLrlv3MSkTDxxUXX7LeQ==');
define('SECURE_AUTH_KEY',  'O0JFtVbXF+1VLRUZlc/NiXn4jBh2acqFA/YPF80Fbnbjc3kR8HMWX8woIVXjLFVDebDzuXuZ4LrbKnROEa30IQ==');
define('LOGGED_IN_KEY',    'HoX+wP1XWCpmatgnyGEDpeHD1DQVFiz83zotsn6uo8QSPt3oPk53x+iQ4SWekWCionQyhd3/jMQGg7o7uAWeLA==');
define('NONCE_KEY',        'wOS1pxew/1v66xe9Hwl7GKsoDgmEL1s/kaicpWiH+uAHAXmU7UEJ7M00p+UF394BQjo0l0L3eWQ5MWqWYqOKuw==');
define('AUTH_SALT',        'iRerW7JExyRtrWsy9AQZdGjZtr+Eb0OX+PmO/Qd+pbfD3sWwjsKWA5KADdvvwq/WCVOSBAsVBUmADw90AAQlVQ==');
define('SECURE_AUTH_SALT', 'e4DzidRXuLG2+EBl0LHUs2IjLifUnUP9TTx5ZvZkfutNqyGYoE9zJrYMDzzQZIFz+bQfN3hg5LXLpp6M0BA2JA==');
define('LOGGED_IN_SALT',   'ECqEQXEm3C2wws0h2orrGKoCklYo9GFFGsNDA0UxkeFDeouNGeJvV0eOFVjd1vIrr6a/5htGdmn2Jtnmm40DRQ==');
define('NONCE_SALT',       'OpzSy1+HcXQTx14flq/mgqfvZWHBDrbw1u/gyYi1tMCkSZX6V2Pa5wAGtu8A+zC6ISU0aFtyo0vyfJcVogEe8w==');

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
