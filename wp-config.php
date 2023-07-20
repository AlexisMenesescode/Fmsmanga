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
define( 'DB_NAME', 'fmsmanga' );

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
define( 'AUTH_KEY',         'I{RP4r=P~MaaQ~,|dhiL/~x61qAh=3#/<bcXn{*z$RYrF:cam>]Nva0>{,COpenF' );
define( 'SECURE_AUTH_KEY',  '*Xsf/;%9Es!.r^6P9DfDqYYeZO$qU]fEABZ1k4L[jZ#/<VKAqGlKjLKH2][<8k0R' );
define( 'LOGGED_IN_KEY',    '{W5cqD>eu/,^!KW;/h*,zHe-_y?&/&5gVF[+ws/+TI@*Wn)!-S][~a/G1[tZk>Ai' );
define( 'NONCE_KEY',        'qJ(+b_p8)07Yr3^#)O3cn&zyy2|_0]y+!vuMk8=$Z5dfp_U}3b_0I2ru-c=Ch@0+' );
define( 'AUTH_SALT',        ';9 0}LTklj:OoEkWstdv#CKMcA.iV]ZL9#[Xf/mZ(o#?`M<1jX0[fTV<=9c0<1:%' );
define( 'SECURE_AUTH_SALT', '%RV/VwW@=7$k6V@1P:AWu{ApnWh)a$t.Y,=1zV:xdUo&h!D2P>c~[J!KzAI5#CL-' );
define( 'LOGGED_IN_SALT',   '+jB.5)XAj-#Qj:70~<23vw3/*/M`kBrT=@L^mc:^rg=$5(Ur6xPn~VAHD5#BH-CD' );
define( 'NONCE_SALT',       'oU1!|f+yh1!^zh_%K,nY nX-Dc{Bk HdN#X-Sr=9rX`K%>H^k_LRR/;xywLy>Zu/' );

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
