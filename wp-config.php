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
define( 'DB_NAME', 'papou' );

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
define( 'AUTH_KEY',         '88c]/Svum$L)4$,VgDr5czAsN4!AO{HFy0F#Gnl@B#)|[]HY4vvd!Mg3#U3vS,$4' );
define( 'SECURE_AUTH_KEY',  'qtTw30>/Ps;c@arEX!c2ZN7 |UU]a^GgC*zZ4:K4oM`%nlIy%]n3<[NE0bF(V3WQ' );
define( 'LOGGED_IN_KEY',    '(N~BI5mxTDHTrz!1p~$;2c=c|+H=LURI`tM[)7G}8q!spFPX%n<V4f*fy35L5Y*e' );
define( 'NONCE_KEY',        '>?V`uyFL*rx]QdSCcADsA] 6sf7MnK(4vR  q-E/u2,/.[%Xt~u0=vK4rB3s@.g_' );
define( 'AUTH_SALT',        'a<!>BSJ,Nw&>-*-{G&Y$>#$VZ?WlPY91+.X8D#SZMv/@%]qV_y*<Y/Y=k6bHn(0,' );
define( 'SECURE_AUTH_SALT', ' $e]R#m!p&Id[U<!j#a)FMu<5h/?3y#e(a`@}h~$th0Crx03 ,}&;#/lL3N2TTv.' );
define( 'LOGGED_IN_SALT',   '^@]O T?.B%=FNU I>y|#&]r.9`7]pBOL+:lWc)&uwLUE[^e<0*c=lKfk[9V{U[hT' );
define( 'NONCE_SALT',       '9f~e?S@B:^zeH`3ID b(:<yPZaFrmC7j[|wij$dL,<e+(/-<M6i*0B%;59$|e+C9' );

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
