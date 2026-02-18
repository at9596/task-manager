<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'task_manager' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '-0I~2{tIt{T9|K}~>zHB<Fx^7:d[!<Q,^s^dFtLRFvjjZ3v}lg[J{BiuH$xOKxO3' );
define( 'SECURE_AUTH_KEY',  'f> RY>= 88>RcYnt?bvBvj7GXhCeZNs26Pzdqe)YFb-LmE+SG-OY^`AYLs9*^IM]' );
define( 'LOGGED_IN_KEY',    'FpHgZcOZ/2+OH ;y^Rh !L!Oq]s^yFp&GK;l]n/7bi-#{;+doE#i:RL(Cg>G`&9C' );
define( 'NONCE_KEY',        'yE2<Y@59h.z!<@X3.v+L^md`!Nml-#P@S{#!GYWAFoicXnlfsHuun>2:$N#JnHJ ' );
define( 'AUTH_SALT',        'VV-g1@09|h}uiCq.C9*pX@{HCnpv;Bq&NoC,WA6ZCF^7tI!tVw2cvaKw,]Vwe:F6' );
define( 'SECURE_AUTH_SALT', 'd]qIFq:*9@21n^6BA6O(AmS|*YMaCez1Gc=/~(qn>/FB05U=*7/YU+lEJ#n^@s;(' );
define( 'LOGGED_IN_SALT',   '#?hV$xNv`{e2dO)WFI}+RiE3~|Y0wo(NPO.EwnPuyb@$7:?>.csSgGU3d<n81Cu~' );
define( 'NONCE_SALT',       '3:?]zh`fNc?V8dm2)K^GB5lG~/Fg9d!:F<DO$].m=-hw}`)QJ;bu I<yd-bMi{WL' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
