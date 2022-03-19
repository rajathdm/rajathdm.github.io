<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'wecucmzj_wp224' );

/** MySQL database username */
define( 'DB_USER', 'wecucmzj_wp224' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bk[p401[SC' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rm9gilu4opn0yi0t09nm9mm0ds9ydr2btvjauaqozchogo1iwfluecjz8mbtxses' );
define( 'SECURE_AUTH_KEY',  'sgverpr6jvbgu1lek46sdp7dvxumi49elzsaabbqyrfgzb6d9h2privpgogyxldo' );
define( 'LOGGED_IN_KEY',    'y9dv2ducrw24ys9zcfyqtltgz9jynsoshllc8xcgefx0awfrzjvt7kkvssdv9bar' );
define( 'NONCE_KEY',        'vlhi3alcsp9bijshfavah52oouwbc647gdw7ztl5lbzlfoqxyrdj3nuyyohnvbqo' );
define( 'AUTH_SALT',        'krbztomqnsmyutxiobck1dwqsfrry7wcewauqvmapsoenaiyvkh1tpxrq9zjltxn' );
define( 'SECURE_AUTH_SALT', 'xt8gq1l9rxrqiv6kl33qpokntzo8y7zodvlsoug6wmgpvu0kr29iw2nnu0orfid0' );
define( 'LOGGED_IN_SALT',   'tqxljcbdksk3j1nhoiuyemyx96ujc9uedpjtu0ekoc4nc3friyhlnqbc3qxq1trr' );
define( 'NONCE_SALT',       '4lyztosdidxwkjrytgpaqxagyjj8m3hffvcy89ttkukwyxuhywssg4ulwtktrzwe' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpml_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
