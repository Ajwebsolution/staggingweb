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
define( 'DB_NAME', 'Stagging_web' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Info@123' );

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
define( 'AUTH_KEY',         '2.tz[Y2I/kW~Gg%TaH<ap+h}_U`pet5YC?+v/Z;W7z8P9 NX%M,,,|15BGAoqLzB' );
define( 'SECURE_AUTH_KEY',  'T}`/Ii>Gb1#)P;>$Pa|Lll|lc~?c|I,qEodL%kZ&?jE~5-aC&fgy*.6pbPxCWjY)' );
define( 'LOGGED_IN_KEY',    '=?FRn6Hv@v`:s}Tu1YbK~$W@FpF)Ur9)]2R: oBxtLOm9?GHV7z}07W+W~:i[P[a' );
define( 'NONCE_KEY',        'pC{C,Mr=3A+vEH9 9Y85<jKm2,tDc8&TkI$M4m;w.w{=Z>jVGQ?QzE+G}V%Kl$-+' );
define( 'AUTH_SALT',        'B/e]b+oCcNRg_vh&_IJpR/ D1vWJ(3D4$qR-$(?B/PMtsvF)_mh{A*EQWmsO2D4/' );
define( 'SECURE_AUTH_SALT', '7zD (shM`sZFR{6REE>L)EdrD7KfI9^Q$SyJ<wR|=We.PS}-d*F;/e^.A^sJ}].j' );
define( 'LOGGED_IN_SALT',   'NIb~niCz42K}yK%0Shy`Znr%4hv]jBYK}/!;(DB)(Rjjbz{1z&9XGH)L!ItK7,Tr' );
define( 'NONCE_SALT',       'dI)bF(;r/?q7|v0[-L+67;pVdvAy{+.BZtFI@Gm^~l ,.cBqs doe:.vC%$N?x`:' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/** define read write permission */
define( 'FS_METHOD', 'direct' );

define('ALLOW_UNFILTERED_UPLOADS', true);