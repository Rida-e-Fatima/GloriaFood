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
define( 'DB_NAME', 'stoneove' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'm1AET@PL+IOQb`f8FJmYKB()p^ Nv.2F1rct_%eK6hH$|qnQ][-fR1cnH|u,wpbR' );
define( 'SECURE_AUTH_KEY',  'vulGYp7E<1Jef?<D`my^Y:@}Gmy%{W~ZD<qfkNz5FFVs29X51!7<Z()3anEKx:j0' );
define( 'LOGGED_IN_KEY',    '4Daio}SXV8u?%[H]hEXs!V[ pS=llQe:Rwu{#;N1:ET@u1&pjHsg-?lGP,QQz} l' );
define( 'NONCE_KEY',        'b//}:+ HY/>8l?qw>$uIjVj)kv5q1Ham<>;U,(HgoF<&P1C]qH0>0=7|#8~vBlt%' );
define( 'AUTH_SALT',        ',ul#+7[)||RN=]#cJ>7;a?Jd)uvw3s(oL!.R]NrB{a&Fb3OHgbm7uWwvd#%bX.B=' );
define( 'SECURE_AUTH_SALT', 'mR,{67^4$g=5o+yHfHOkm|Ni+w:/f~k;mE%S36dDoAKggk9vj2!u:!Dw@Rc%JBl,' );
define( 'LOGGED_IN_SALT',   'PX P9vvP<^]_tW>i!_oDJ*Htj&-lcff:#P:dar1a-fPC=_B5Ux+:x@:zQEHOp3xj' );
define( 'NONCE_SALT',       '0X{i P{r!NZ5{DZRe>|Y0|),ufaCR_Yd6a27REsm9cy.v+H9{x$pB367SSK8;fS8' );

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
