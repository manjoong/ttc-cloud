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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'ttc' );

/** MySQL database password */
define( 'DB_PASSWORD', 'TTC@2020sk' );

/** MySQL hostname */
define( 'DB_HOST', '10.23.64.3' );

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
define( 'AUTH_KEY',         'PNVsGWmP^A6-1]ICx*r[@G.CMmf&_qKMlMG*By&h9EL]215Mxl7Ic-9yPPIudy(Q' );
define( 'SECURE_AUTH_KEY',  'GaZu>pfm&8vGGI,6zB,Ko6.oKk0$xeky=!X$1WS]cf60) hPAgw!H/n dslsm(;Q' );
define( 'LOGGED_IN_KEY',    '-<4},C6fBPW`:TdYRb haWIEa-S ^(y=X%LN)4Nl^8FRdL6nJjcLBF8zy(zSQO6v' );
define( 'NONCE_KEY',        'cF.lBhwSL|~-DH{kmFVLx2Rm-3Jj7f+/*EEU&&7V!54.o;DZL?mk;/VqiwR]s JF' );
define( 'AUTH_SALT',        'O)&q|DiF+ns^{Z/[ tfJB{-p-us]90S_Xj@4LxR;VyzTPTQ3W)`~ApV8p94P,EW^' );
define( 'SECURE_AUTH_SALT', 'igG7,!+m]O[7>]P On+0BC(`Ll.SyrRws*],!$colIH!jQXg;,KwAujEy0d.AcG%' );
define( 'LOGGED_IN_SALT',   '@75UEyW_Td=ds:oI:/)1&|qT:dx/I34<[pN%Tox?8I=O+YgBH2B>PPBQz ftc{+1' );
define( 'NONCE_SALT',       'rV}q|M}?F>WlSs;Og/*i*0+u$-qkeRLqY$pm9e&2|vb>`wmqnRF?<``i:SPfM/WG' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
