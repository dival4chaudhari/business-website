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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bluehivedigital_db' );

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
define( 'AUTH_KEY',         '<:3CCpiiL9MU2cuE{+,#uBa]1s9VOM5479e|h[;fc{Z5?MjjwHH$6t=T3|{Cl4pu' );
define( 'SECURE_AUTH_KEY',  ')}hI#?.L$X+9kyA.x}+bqpKmBD@Zs$GB <OtUCwp{$znhk6tS]%y{+{Cb!i&)ejT' );
define( 'LOGGED_IN_KEY',    'mfWW1U<1~(N m%}k%RNm5aZ>C_7#{Hba:HGtPgJIH?ls(`@6Id=38sk%ChoA2:XG' );
define( 'NONCE_KEY',        ']kAF<W?~wprc~Yo{0?T /k#!=)sIZ|rCu5Voyh/lw:EGBhk)b2(@_]1?:c[yn-dz' );
define( 'AUTH_SALT',        'UCAn25ou={hHyaZ)Q,WfoWHo!{bPo1D1b9nj> GsmJQ?-AgJkXRN9X,?MCl.B^e<' );
define( 'SECURE_AUTH_SALT', 'gSEj.|aR.XiWa2+?^_R9GC7{-GY<$YFCKH#Jj}M#i64ltf4_nCfQ7X.mULcuD>|a' );
define( 'LOGGED_IN_SALT',   'VxWGW1%1a<eCc)3WS6pMQ z35JI:P,dGJVmflChmc= z_g[$zK!~$cb^f?:MXZ{O' );
define( 'NONCE_SALT',       'M*f.)#?v29ESF>s`zL{byMOJU!*0.^%4HHV0|ZgCe!,-{l_(hYKi!m&hkf@bqJ#X' );

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
