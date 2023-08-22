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
define( 'DB_NAME', 'nikosdokmetzoglou.github.io_db' );

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
define( 'AUTH_KEY',         '8TjrxX=Jk}1ucM2cY/9r5ToZDE~:zOWEijFAVA;Z]XXe^Mm0C-:}!z7Hr/puik?I' );
define( 'SECURE_AUTH_KEY',  '|(9*{=U|o/.@?f PYCayy@1M*7)L:16H1%QQ&.UP4@jG `*gOg8GeUoWGEce$]]j' );
define( 'LOGGED_IN_KEY',    '/gK,X.)3W&v)rZHehlR+|,}#(A9C$,W^Lh:0.D(X&32EwetR9H%=eGUtJd!VVPm7' );
define( 'NONCE_KEY',        'aQY.4Vhq%~OP|y10,=S|YT;@4Ddz$%LNNBFzC)?dAx<uqQlpw=H0A{)rGIZxp-b2' );
define( 'AUTH_SALT',        '/Wy?p*j!]~Ht__7r,A#|owQ0^F#]|Eg6.lVRP_qX3IxtKS^()n1xDHxc!X&DV[My' );
define( 'SECURE_AUTH_SALT', '|FE}IK6XU&#J-52d:?1[Y)eEQnsF~d_8AN9bZ63tZn%,q{^>~(1j@$!y-SJ`0}*`' );
define( 'LOGGED_IN_SALT',   '!xR2]J>#6e0=lphG4_-6+h>OL91PVU@6(;Q8fMe5|hlmD(1-ZE%(c[S-dN3KPym]' );
define( 'NONCE_SALT',       's8Pwu;q{jEru+a-Lz!w~j}8Q9j M+o8UE(d8?X_X.?R(0Z{KCuVtn.( 0`=DJthe' );

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
