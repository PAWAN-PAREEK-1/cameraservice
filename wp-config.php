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
define( 'DB_NAME', 'camera' );

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
define( 'AUTH_KEY',         'M`(A?*r[`L+Nz=k#a-)XtG%.?c7}s<baVA%c@@|N^07eLhpzE`W##5ZaL&+Qn4<^' );
define( 'SECURE_AUTH_KEY',  'JIQRC:g}pPlU4hS6*,?q$-!;Hp&U*@GNUaow}K[3Zw$M2+~Uz*T|Hhb+a{OFZ@;/' );
define( 'LOGGED_IN_KEY',    'ek}8o;8 kmh>N0![_Q-b?&{-:Rs)@_yPbGN<;0,u(mS?%enk<B3UB7r5lf;V8Ylw' );
define( 'NONCE_KEY',        '0.#6&6Q9x1w{hJ(LA11/g $d@;%3;(R|10sTy6zWzf5CJIFPX5Ct1CW6TRA[O&AK' );
define( 'AUTH_SALT',        'bc#X6AEX4.6B6pZO&0O2/e%Z=~/mkTw(Rs(C]4B)S!~n79[3T%Qg<P &2;@nk~ (' );
define( 'SECURE_AUTH_SALT', '34q< X&@pJS:91v3Qa*_B,M6u{VV-?CzyR|t~+q*xLeQ3Y.lJB{>y8[! f16B!$,' );
define( 'LOGGED_IN_SALT',   'UYX+5<3&%,^<s2,h@{IA45+$i`!Fd3z-;+V%vM~ qT4R7efj+G:f@(0X4ZKC3{.%' );
define( 'NONCE_SALT',       '$Bff%R4!SCOi;6&8U?dH@`(Vb+9bN_oUi,OB#=hJ(PhE{FnoZ|7zMOs>i2jB(J2_' );

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
