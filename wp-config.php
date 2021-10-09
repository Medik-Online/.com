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
define( 'DB_NAME', '.com_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '*SVl@YY.i|u7Ur*VxH9)ct@&c036Rpdqx-5Y@Dg8*tFvkT2gyun[u@aNe%JC+f&z' );
define( 'SECURE_AUTH_KEY',  'W^/hw*V6y#:O[^D`~a,Kt^~32Prfaxn{9<U}GIG)yh[aQ-1(_MztRmriLaFpeM4R' );
define( 'LOGGED_IN_KEY',    'MFs,:#vESsk,Cuq8z*vWQR&xW<v$Y+sm>q%v9T*vY4O?1$MKEqxbuzMZ8AL@L+@B' );
define( 'NONCE_KEY',        '%lMDNO6P//rK,Lcf}|-v_jAU/R=0=j=/t(FrzxF!_a[-^ cem&4o(&Q yZge:<,r' );
define( 'AUTH_SALT',        '>;:[A*EG{K7TrC0V]CXXgU]d20sT93>r^`ojul_M!av} b#ynl4r&`hcUPe7XH)L' );
define( 'SECURE_AUTH_SALT', '!Mdo.=mS7miC|0gwn7)KJ$E!DyTpAPq$hn*X(@Bwt/kEE{z;Q+sv@}J^S4;Ul*q0' );
define( 'LOGGED_IN_SALT',   '??;FFxNJUCwF]H]b-M+5*`@J3$wZym2ax1{V,wwbG;!0S$<wq{#C}p=.>Zgc3)ob' );
define( 'NONCE_SALT',       'w]$^rP9sDmcwM6]MDi5a ]3VY|/-L!go]g*Os SD~G_R9>c]XpM&B2%:d@YU1HpG' );

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
