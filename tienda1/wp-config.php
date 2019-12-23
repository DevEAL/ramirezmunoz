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
define( 'DB_NAME', 'rxpjfcmy_wp958' );

/** MySQL database username */
define( 'DB_USER', 'rxpjfcmy_wp958' );

/** MySQL database password */
define( 'DB_PASSWORD', '8S)82]pj3i' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'hbcexqebf9uhvvkmbjynubkkwg9lcfgsajysdoardcjbolzfaeremefbdb0zrch3' );
define( 'SECURE_AUTH_KEY',  '0zvotdqtgxjtfnu3klvap0ork5qgaxbdp9cglxgyv91tzskeb0xb4ywzpmb5wlln' );
define( 'LOGGED_IN_KEY',    '730rtgazapujnpbu9l7wfwyh6usijhrsibixeszjr8hjmb2gofpbynvsrnqwswfn' );
define( 'NONCE_KEY',        '6piprnhnmcp2yc0nete7iknrkuum5zai8uaa8xs1revqz0tfdwauy9hfqkqvsifz' );
define( 'AUTH_SALT',        'lrwlfoiz4ifhmqawigibkbwaf8swi3vuvjkakaao7gyvlj2dq23vcvcsj5l9fi4j' );
define( 'SECURE_AUTH_SALT', 'wuwjlut5qzfas2gy038beznae7yze00oaj7ovhdxbalquwruxd32wuizbh9y93gr' );
define( 'LOGGED_IN_SALT',   'w4vry2bjqoxky2zmjc9ynqrfmarg56iaho0blduvimmsfldnktry85c6srw2pvfz' );
define( 'NONCE_SALT',       'yj53y4ndfhonrlhoczr7z7dtvc53sbsu3ej1gtv9jiy7fz4pkz3zeustkqzmf6as' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpyk_';

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
