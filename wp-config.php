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
define( 'DB_NAME', 'orgeffectivealtruism' );

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
define( 'AUTH_KEY',         'Yj/R9n6b57rd7@G![?ie];+rAAnHHM6u8B[vnPKTd@!tvxZkr{t)NYAqZ.mw@EG[' );
define( 'SECURE_AUTH_KEY',  '6m#g^3hZS ;=xeSr$2D~M(FW^k>#IZ[Aqj%RUxqe>xY^J>ys=NaWDHq-$VT{7^pi' );
define( 'LOGGED_IN_KEY',    'r1:4V)(AOgI`Lf:_jb0&t>,H+ytZ;+S_OJj>gZGp73V]Y0kY,/~!QOB q!f5|+P.' );
define( 'NONCE_KEY',        'tQ>rT?Xl?H(gmV(146U0wezn%^# St}WrFNFFyA(lZa#bG/ftTHp{l]4Fb2]8]38' );
define( 'AUTH_SALT',        '%9XyVa%y=nRl=u*x4_-_wI-Ad7)%c<nCA2$YLIa0ev_Vxc/}kx5C`9[@`.%{d0[%' );
define( 'SECURE_AUTH_SALT', 'x<bdX.U?ezY=ntPEa{@3CTix)$V!TU]]UY 9|op2]y:Elr0LRS6P@M=_=^d,Hr#-' );
define( 'LOGGED_IN_SALT',   '.k6y?BZl]G1v(cKIV#*DwRe0qF^?W07:RoI_,h2?BZ(C<InohO-qwK)f*WCVsdeW' );
define( 'NONCE_SALT',       ']AodT?nq?S_7iR=zzMMVg[8l`w~lHF)6S:w&dN}b2y7N7@wAc/e?LN!KD:p5@Jgm' );

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
