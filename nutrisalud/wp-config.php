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
define( 'DB_NAME', 'nutrisaluddb' );

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
define( 'AUTH_KEY',         'e.y%%%i[a@86B-c1CLAHA0N;?sRnG%l&Tv,iolrU$S(FT>@beRHT,,t2>U%|:OT`' );
define( 'SECURE_AUTH_KEY',  '_LI~PQ*@dSe8{oB:Y1]~q+B#h7Mt{+9BRD>?/>B/3M0NDN$5ndX8U.o9Rq[U&tT$' );
define( 'LOGGED_IN_KEY',    '<0{GzhC,JxAQ8K~1.U[N}i29bPh]Ej6t)f|3L<IA`UAi8)[sM(  k}&%gF6z8{,!' );
define( 'NONCE_KEY',        'ile!j%f Pz tG50)RDL]%7Ed;r#F)BY*O8%S5)&t&$?bIWXioiVeiW[DnVETFdgf' );
define( 'AUTH_SALT',        'ML)1x6D#2%.gBs^0&ZOd8C5FiI3d^Gd += +3 X/&?3bHhOw-:Lw~G6rLN1_VD,K' );
define( 'SECURE_AUTH_SALT', 'h`4Eh`Be@7oVE9JQ3><n6/?ZmUq1RdT2gXQ?y.h3-#S-E9r<*@j?+Y,]!O-%<O]%' );
define( 'LOGGED_IN_SALT',   'r,|GI#]4}8C0Y[SXAJC&A? m[Ld|Cf6|_x3?zn!kGNP+]DFpNuIqPDuNC9twB/r&' );
define( 'NONCE_SALT',       '=`},RzT/QxONqn/f5,Gp6A3C>|irx^{?h-DM@,Y*c%xBQO1lb!6Iu~CUF7u#xI?m' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mp_';

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
