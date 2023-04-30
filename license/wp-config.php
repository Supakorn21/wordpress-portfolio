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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         ').)7$lC]a=l{.D.pNbxmQY(I?MK(]cQ&_ FJ)qt)o~gpoVMp b<>nL<Tdot54bn,' );
define( 'SECURE_AUTH_KEY',  'uJE;3LNJ2J,uSoxX`OCNJ<5rm9Y`E}(6,c<F;hI/JPl6euyR~.~QelE6!Lbr>p5e' );
define( 'LOGGED_IN_KEY',    'cx-1^OysJ^i2?lVQ`,Nz,x%aPJk<$^_w4cO^1|Z(O)<Yr69T7%{mPq/vLK~UN1|N' );
define( 'NONCE_KEY',        '3K2<54@it}znVJ5wjxqUdrk4@K[~xn!Rs.32p;#jE&5).K--,59!?[B:CmnxGw?H' );
define( 'AUTH_SALT',        'VILuY!B!{oPD:!Fk9X)|LhxW64>r&.W?RG7:<psw=ib$t[dq_^ZY,1i@lw%r[o(W' );
define( 'SECURE_AUTH_SALT', ']q3X3Bo`[&{lr;;%[a}t!?GYcd5ZAP7gH^ury/z &v5eMb;8b_IOKrEeMUB$tXd1' );
define( 'LOGGED_IN_SALT',   '6qu?~L &{J+x0Az9AX#cE,CqjF@GrG^<X{KGf9;f@Q~1i@rik!rvsR|,{^&-6CAU' );
define( 'NONCE_SALT',       'ROoAcHSywD0od`*)a27|!)be>A;iI$!Pzp/6^oGvUDOW1!: DR3.,iyjW,fk}P%&' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
