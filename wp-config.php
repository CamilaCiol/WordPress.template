<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wp_learnwp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L/sNYY(qb{hu8]zWa#owre$[X?PKBAw@c-3:]F+_4@;*bl!I$)<OVUA0i}V^1G!M' );
define( 'SECURE_AUTH_KEY',  '*oTn,esn!L:yr9E-tU7vGynQbVqK`,0:<7r4u4p`y`;`%Gqs+iM{E!%EUDQ!{:9z' );
define( 'LOGGED_IN_KEY',    '?@/iDF,dK]*H*X=arPj8uc|,}p*SnETseS8Z >M_%}^:,lQ$G00r,e7L+=UHwuv-' );
define( 'NONCE_KEY',        '|L[}GX*FN^oTV/eZ*O klhhG>A(!-c5k{_#$DB1q24rb)jg!*X.ra$<VU)uWj1<C' );
define( 'AUTH_SALT',        'd]mAq>J#DiAG0>At{sDB56]15G~ZeSH^#}mzlVA>)@k,TG{qY>~,&RopbIQeYp=R' );
define( 'SECURE_AUTH_SALT', 'yXt>9$cPUr97RgaoL~vV4+.#dU*=j79G~#M6[;2=P.~V[hGEi6}*L68_L,i,S.=d' );
define( 'LOGGED_IN_SALT',   ',4y<@:6CV9Qi9t>m*/A,SVvZ}2dYt3}UgnXG;6!jQ6X36~w9@uT[(yI2NL5_be*L' );
define( 'NONCE_SALT',       'n<Ay!nzLz1$UP ;S+vxFapH^,dPO$ .p21}r S3h.P1Am{<qtL-+J4:5iaSe{KKA' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpcrs_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
