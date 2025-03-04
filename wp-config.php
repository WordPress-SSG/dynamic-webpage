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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'db' );

/** Database password */
define( 'DB_PASSWORD', 'db' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '8*%lbpPJC2nN=F(qxD=4q0yL rz3Z. /mJ!@DP2DhaT_2PI7| f@pY,%~~j/rXVZ' );
define( 'SECURE_AUTH_KEY',  'b/2)|@b{@qjLbfMJCdBq%Iw kQgSgw[L!Avp,kd])N{DzuUYKLc@$|m4[LfL}G{(' );
define( 'LOGGED_IN_KEY',    ' ($+{K#mk^Cew-mU> =6>EBc(q{}RX16h&.??>M?+`__+fOlYO<qe+(R|y+PFBa}' );
define( 'NONCE_KEY',        'z{+3|#+QP]d-u<r-ooClva$JY~&YpuWB#3H]#Y%&eWZhgn+N&Nn&b=@K|@8mkcUf' );
define( 'AUTH_SALT',        'ZB]?h)eNYfO!heGp_]-h/{gZh}eiZ,m{Ar;^|~(^|*J8{b;3,d-=B7=Y_0!@Nbg>' );
define( 'SECURE_AUTH_SALT', '<VUbXVp$ AwkZ^9rHDT2w6oc?fa:@z~@b,MnZVPdYyt/?3O1Y.1vRG@!bk^)$t _' );
define( 'LOGGED_IN_SALT',   'XK_3bsqe_/J=rq-n`|l,V5hey6Upzlg@-SEGR.5|u/<8V7#d 0}?]SDO`{BlJHOn' );
define( 'NONCE_SALT',       'W~br>H)9,gUj(1-+1W;{fpXg =6L&V,Mc~ZocFMRtG/*?oAQevO,6KyE,I`=&-&p' );

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
