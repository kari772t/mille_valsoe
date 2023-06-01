<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'kilomanu_dk_millevalsoe' );

/** Database username */
define( 'DB_USER', 'kilomanu_dk_millevalsoe' );

/** Database password */
define( 'DB_PASSWORD', 'MerMai1818' );

/** Database hostname */
define( 'DB_HOST', 'kilomanu.dk.mysql' );

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
define( 'AUTH_KEY',         ':EVDuztq<bq>tv079lVSjgDuW-w(n,DRW:O7htI0Jcodz3=$k>t 31:@i!On,,jD' );
define( 'SECURE_AUTH_KEY',  '{AQ=;KsP>}]|*a|-TK4G;>%T]hj=Q Rn@?lO%Ih9#OH3W]V[eTDC9h(G<1zgptH^' );
define( 'LOGGED_IN_KEY',    '=.t0%PP]_fv>xhq3$tQ1NNOM}j]2@Est- E5]E>l4o+j&+ao[Cj.Typ;K1,B)H&-' );
define( 'NONCE_KEY',        '47Dry G_ad.?Eb<G4xGZ<x/@*c>F9Xt&(pq-7r);$X,hYQ<,aWnOr!~,fqZwF_+*' );
define( 'AUTH_SALT',        'b%l^dt!yuY8l{42H3EuolOXP7xLR&0*B<nd2+C?ZUK^2m-g9-Wij,1Y*=tnp5h{w' );
define( 'SECURE_AUTH_SALT', ',bgsRT+vxC%oJ?}S6I.+y(FE7I?<JPM9iO8~O>RqOH<TSpI:P8sRFluMogMoQ]2(' );
define( 'LOGGED_IN_SALT',   'nz^&6q?g9mAG}hrm%auUQ-e1{-ajBT&P3s3moh&j<p,%zcN4wCpstOrSnmQeGQuI' );
define( 'NONCE_SALT',       'aG@4S*QR0as/CkCK^:@U%m/IW*d_6D&RQU`o1KuR]:w$cj9{[`fjj]YsbQI<+)dP' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'millevalsoe_';

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
