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
define( 'DB_NAME', 'swap.corsair' );

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
define( 'AUTH_KEY',         '?$h~!D6nFD|q;S7@_HEUJ}|#LeZcq5ubJV>A+iE8{(JVaIo,ix!CNQrv#B;dhk=|' );
define( 'SECURE_AUTH_KEY',  'Pg5#bA{j;/`.623pqPZ6~cZxG(jURxeLbTQmWM@z.s q2H5N6Q[k9! tv*^.t&pJ' );
define( 'LOGGED_IN_KEY',    'fUeUD+ 4?~=(Qs02qFzdClU(~3>=#a9UnXIwYniM%W]sJeG JHa6vlX)V=cd=FJ+' );
define( 'NONCE_KEY',        'JfZVNm/A=KW*~+Hx=vA%3>7uY[jW#s}oQrOUk?w8GuM/;oJ+99~RIL LK*5<z?Us' );
define( 'AUTH_SALT',        'i%j:DL ypP[4m2D6QSWqa%DU3*s/$Zw$oT6Dj8A(qD/m-;||EZ0=u >p7GJ8D}$|' );
define( 'SECURE_AUTH_SALT', 'RpY>KW4+tW/s0R2-!2c)*a%k(0WBV%lsj%_P2P7F`*ur(styd%SQ]3Z(}F<%7.&!' );
define( 'LOGGED_IN_SALT',   'KaOmF?WPz~d-qSH%viUA6!3%<kg`l=;aR|QQ8Di2-}$TT{ylr(`f4KQF6KWleyQ%' );
define( 'NONCE_SALT',       ';W@N$Cr}ogj!f@2+=jQvX?%[&8Owi^f@N[ddM}[SBC2r:Q87+)twjQ5nh^zISv?S' );

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
