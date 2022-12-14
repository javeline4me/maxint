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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'maxifwum_wp419' );

/** MySQL database username */
define( 'DB_USER', 'maxifwum_wp419' );

/** MySQL database password */
define( 'DB_PASSWORD', 'j.[p2jS9k-F4!7' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '91atyrdbtkslrdndav7s8ibtmywumze3b7k9klgq3mbc4npcjldpi3xugg8n4wll' );
define( 'SECURE_AUTH_KEY',  'akfgpeqhhvh9efdbd1xtfpancn8b3iiyugnhdzclygnbbxp2u9r4xbyksyecofsx' );
define( 'LOGGED_IN_KEY',    'yzmrsccca0wwijdzt57vsylb11dj0q8wawjgqpovnaq9mju0w36cmp8r0kdau88h' );
define( 'NONCE_KEY',        'ips29behfs2jmijn609y1ck69nwj2n7kqmloaq7msclmjhehuy48q8kvs3ehadnp' );
define( 'AUTH_SALT',        'uepcq62btd141jmqlibj36kdo46e0cmj3bb7hods5ziq7jt3dyiedbivhhzpntlu' );
define( 'SECURE_AUTH_SALT', 'vkwrploe9nhca1azc8332tuk10fvkxmomrv1qlcu7xazteeuepyljaxq93vvpixp' );
define( 'LOGGED_IN_SALT',   'jligyvkoevrhaz1k9qrriek4tyo2bbux9nfj9l2f8slh88ekd7etbefk75dwcpsu' );
define( 'NONCE_SALT',       'humpvlayywrf7svbq1b1cef6athzx3bq1yzl7nqhnqohmo7u7mtvhiyncjxuzilz' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp0x_';

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
