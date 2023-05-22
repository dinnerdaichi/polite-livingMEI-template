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
define( 'DB_NAME', 'polite-livingMEI-template' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '!|IJ5}%[XN8F,z!DZI<^[5&9 770<7iyMEg`WTq3V/k+D l7fTLM0L;?ct0w1mYx' );
define( 'SECURE_AUTH_KEY',  'Tll%DYnTu8zR2IAMA+hGb$*NFvhT|Cv@i4?Ty4X;}!QY:S34OYdk}nT)0RclPr}X' );
define( 'LOGGED_IN_KEY',    'Ld]s/w*68_R~!$t#j7h[Nb];F5RB}XG0=dtyX3_|RcA]cIQ v7#bhax `b|{P>+S' );
define( 'NONCE_KEY',        'H^-suK<w@fwKxU1)pZ-ze|ausSq2sjq5A}O|(.W4oai|#HjaSJFA03)h<Pz<H:AO' );
define( 'AUTH_SALT',        'K[*;9}Ke(#Z0+fSFI4t`aZA.BhIRG,0q5_ NQiX9[b]Xy$nWJ9>UsK~uK|M3Ey@`' );
define( 'SECURE_AUTH_SALT', 'a =*=P6L1zv|nx9STrC|hPo_?35JVE7Bt/Gb=-S0${I=1i$HHdVG{^_5zqQij`d|' );
define( 'LOGGED_IN_SALT',   '7YY^b^xp<f/Rt!BFxP!^Fq`! o*ZWg),tuf#oS!-Am#78H7h~+bVk&FCS@[%-Okx' );
define( 'NONCE_SALT',       'GFZK-9vz@UA(Y098I-F4 lGp=|Wq`==j=I{5[i1.wIr<!gZ#gb8V#0bF]?BaMes-' );

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
