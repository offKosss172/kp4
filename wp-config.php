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
define( 'DB_NAME', 'kp4' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '#}SD|>r8ifg>`.Ocv~]=[_IQi*]:i^T&%lE#lOuL0COV>8@neY@bdHP4<{RnUvec' );
define( 'SECURE_AUTH_KEY',  'ZjOx3n!W:sO #LDcJow>TJQ{ /It5NE7Aa#Ts@i Xn~@6&C=)h>r-m}M9g,CgB:M' );
define( 'LOGGED_IN_KEY',    'FAD3wj(y/H@-~ln:%:b7zAz6mrtAKXU}g=in@E`v,(B-YB;Fq4*%_u!089AW`xG}' );
define( 'NONCE_KEY',        'KQ3:jwYIk:6I7rscI|V@9:Pr&,RX{T2+WT,OTd4`B#y@fB,!h&hQ//|&[>ot_H4D' );
define( 'AUTH_SALT',        'F|FM+OGJ.:8MSb/j*>T^s] 4[r=4P}ZN>I/K8]eO,v2$$g^BsA20qPkNEn-=!No&' );
define( 'SECURE_AUTH_SALT', 'KGxa]KBjT7{U<qjA/z[*Bdjo!HT;1uPEq./IxD:bW(sKrdHh9WVfM)(mxuh;;.+j' );
define( 'LOGGED_IN_SALT',   'h#S^%Fb}T3-c3@46axyTAI*@!iK0|-F*YbR(oII@oPb?<-A[.H2]<=X/.iw@}5]j' );
define( 'NONCE_SALT',       '5[V{l~Cp?qs$0e1:(SO?EmV[}v@X(jCcCu^a1S@#2P$v6SDc<F{@;lvtU-&ae8=>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_kp4';

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
