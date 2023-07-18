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
define( 'DB_NAME', 'if0_34627248_wp296' );

/** Database username */
define( 'DB_USER', '34627248_2' );

/** Database password */
define( 'DB_PASSWORD', '5ShpN9[[S2' );

/** Database hostname */
define( 'DB_HOST', 'sql302.byetcluster.com' );

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
define( 'AUTH_KEY',         '1c02k0msqckkityjy493uwtjiipaefpw4yg0wzcluiyokfpsmdwxcnhqkfpjc5js' );
define( 'SECURE_AUTH_KEY',  'yijwheqcw8o7fvk8ynecppcqzs59gopnkojovif2ripj49ajsdcsdezzc4ume0wy' );
define( 'LOGGED_IN_KEY',    'feb3ao7g2ttldgild53ejg05hsxpwpqd0jmk9p2kztkwoshpsbxeqmwblyxch29h' );
define( 'NONCE_KEY',        'cudhwd1w81idtxbldrqwodduvvzwnwatowjatr6ikvyyjj7dqnkktt1n8lsayqeo' );
define( 'AUTH_SALT',        'it9kicyvjr67wqwal8qcmisglabe1gs4vv7u0cgfriwx6lchwhvgl4jkqv1iu8s9' );
define( 'SECURE_AUTH_SALT', 'rjgh8jzudoinv2nyawp3j6aeatrtnr6rod4skdes5occivu6ppdp8d3gqaneow1a' );
define( 'LOGGED_IN_SALT',   'sgp521txc1ffgd2jtskpeoqks9emoqqayaoh9w6wjnubefsphtljdozkhkedleje' );
define( 'NONCE_SALT',       'rr2p7sckdpjfjfitelwybhgruexhudolf3a9432yqbr6m4kgtqr2jqqmrihzq8i6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpjw_';

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
