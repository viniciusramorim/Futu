<?php
define( 'WP_CACHE', true );




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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u776008726_FpgMF' );
/** Database username */
define( 'DB_USER', 'u776008726_i2xM0' );
/** Database password */
define( 'DB_PASSWORD', 'lOPAwaQuDE' );
/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
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
define( 'AUTH_KEY',          'g^5E?FQ68U?`GtJ`5([;3DFzcIVHBZ8CBGCL* A3nE+uYen|nk=z7 YPH `7OE1J' );
define( 'SECURE_AUTH_KEY',   ':_6/[ye=diM[$53G #[K(}K!3f-d`~lX!%RdarOs#V <1V:=bnCk->}mQNke%q}E' );
define( 'LOGGED_IN_KEY',     'Dm:-YG tK$3*?q(<$dt/s2hckYj6c6s~rbji+++J c.N1Xi/}Lg0{4# lXWjme?7' );
define( 'NONCE_KEY',         'Mld!&y)#&49uNL@c;%vY<a&|V5/cErqgo9a5aSW2.VX_0QUsk&LOkQImr;qq2v|g' );
define( 'AUTH_SALT',         '/LOk%yV^CCN4<U6bj.hW!|7UkZv{gD*/j2OkExOsYFVCADJ<KT%fOwU(Kr/^|yt)' );
define( 'SECURE_AUTH_SALT',  'nKO*Bq`aj*u9){H56FQFw@$l=[6S-wiL1z}*0-(UU(UQ~lgDo#m=IhmE></NsY}B' );
define( 'LOGGED_IN_SALT',    'T2=(9vg;?4 .]W:a[B}VilH>[zq@bb$m1|I5%n|i4:r2eEU:2q}r8%I_<W9+hZU)' );
define( 'NONCE_SALT',        'ag]Gp@b%G+P5qpNyIYgF3+/Sv_;>ov%l,$S ]T$+4Re(+j,md`i?L.jUqn41@.kc' );
define( 'WP_CACHE_KEY_SALT', 'wbE@rw-h%yz,DQ_vpQDro_o<e&tE4f$xaOwy$3:|aMtGx<USk7m) xYxT6*I&cOa' );
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
define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';