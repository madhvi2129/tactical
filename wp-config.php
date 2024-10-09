<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'u343075698_everytactical' );

/** Database username */
define( 'DB_USER', 'u343075698_everytactical' );

/** Database password */
define( 'DB_PASSWORD', 'Every@Tactical2024' );

/** Database hostname */
define( 'DB_HOST', 'srv1408.hstgr.io' );

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
define( 'AUTH_KEY',         'j`F[6,)]Kqx+FeRJV5^InyUm5(G-7OC1HMzL&vL(=ClQ@s{bM#3j/hd48g{-Kc!3' );
define( 'SECURE_AUTH_KEY',  'TZuM>CZ6(M(@x?!0W%)~;)Q*CR:2+VJmluIX]S:??c|K>eVHZDX<..K~G<z;!L4+' );
define( 'LOGGED_IN_KEY',    'w/%Y+^D5k*9d8Q)M|qRF%F4xRHuk]Za&YnDtd3;,{3Ak]5Wa5Fw~q~wl>`l:rsA9' );
define( 'NONCE_KEY',        'GkqG9dhq9X6h<Xz^sXl79W(|J{b2P>6jBtRovAOji%GOV1U @%imB3`8f^Zak}tg' );
define( 'AUTH_SALT',        '!3w-Z:VIgH2xm =D-1CN3&x*Mbg2xnj.ev+0WuqO<fjSnW0(B,.DZF3;nfLgpBH:' );
define( 'SECURE_AUTH_SALT', '![m|>0;-GL$wDQvWk?KtaPHRZM}9FO{CdB|n%{g1Pd4X:xDy_c/:UO5_UKnI,$e,' );
define( 'LOGGED_IN_SALT',   '3n#u?A01~<g?_x`f]sXOFz% zT<A/+N5.fKSpseq1B($}pgw+tXf^n.:# gHmnxS' );
define( 'NONCE_SALT',       'ciwWWnLg/I$yK/P&|&gp(Qqp7+?XX(B6Y_W?V.S+!|[PLP&(YvlVv8d~dUi^GhPV' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_REPAIR', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
