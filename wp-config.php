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
define( 'DB_NAME', 'so_rosario_central' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rootsat' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.0.10' );

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
define( 'AUTH_KEY',         'NxM7/:1;|XAiSGb%W2I;Ch.j`diNU|ol<:L99ql%Gk=|,?ChT<j312X!iZgl@zQ:' );
define( 'SECURE_AUTH_KEY',  'xE:cgKlM1[|K6thVE}AQgis.5My$`%/T&<VIY*5z](#0h-/>sLgiMZ&j=Zn%KnsE' );
define( 'LOGGED_IN_KEY',    'b9XMnw),S%>%cy^^^xUU38_uuHr5!)CYxqPqcM1BCh1R7ryYm5=PIwa>)5I=hP2i' );
define( 'NONCE_KEY',        '#<gl,O`7M>nRDpizYO-j)Yp7Z4x =tUw^ca6f|iCQj|kNu0eXlD{-c!SOS#J,qc:' );
define( 'AUTH_SALT',        'qvDEh)KJ2LUE/_L-z+I&Y:w`J|IgW[pXwVde4J YZ>=~=Kfc/W{[myjuwTSj<)yP' );
define( 'SECURE_AUTH_SALT', 'p6OWt~x2[Q./OrhnN<6!r9o64rK;-+Cb(we-A/ R]]hWY>AMr&V?$SonLr#=; P{' );
define( 'LOGGED_IN_SALT',   'P*o7G~Vj0{uxtF~nXQqhbD3T<`RBDCL^q_ZG*PqdF.KFj1?gbf?@Oq7z2Wpg }ha' );
define( 'NONCE_SALT',       'ubf/.&|<IGaTrK^<{XQ0P@9+K,YNA:rnD L1#V*K}MQ6A+JV[G{olgiJFnxLD(;n' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'so_';

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
