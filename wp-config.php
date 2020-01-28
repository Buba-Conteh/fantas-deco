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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fantas_deco' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '3010451' );

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
define( 'AUTH_KEY',         'SzZ1HfK7g:Oevv{]7n/xKd:sRSwV#PEY>@^f==wBy,(lz.fC$Y=$CPv z7Cb4e}T' );
define( 'SECURE_AUTH_KEY',  '?XW:SX1P;u&1Wq*{nDNepO6^,Ofwh)5Gs[m#|?(HPM<qH@[#E}h}4![HDa{+5M,?' );
define( 'LOGGED_IN_KEY',    '%Z:,G;hl3j&mB:uj#LSO$m4WaZB0X=O6)]N/D-H878tE4-LbL-BkSlqPh0X+WQ9?' );
define( 'NONCE_KEY',        'h,x</S~b!70+bg7N>rnk<t!I{Wb,hp>6wGo+jHOjsI^N{r)W|q!vc[zgUPB~Z1a`' );
define( 'AUTH_SALT',        'O6dee?#?ul2R_$nR,.7_ngv3[~n{ FZ~UY|(:H&I:UtjI`x #`0:ItaCw9,=HWvo' );
define( 'SECURE_AUTH_SALT', 'I1Eb[Mum#{FD1R+KRd,e~GX z)gKPU^g{@GWxC/loPh=4S`25Vpqstyq7-]$CzL|' );
define( 'LOGGED_IN_SALT',   'bT:$(Yb:CdR&ekoU2]55 bOS!i.3K&9~# RO@o<ep})X@.B?Gk.F ohzEFgi/tmA' );
define( 'NONCE_SALT',       '_u}cOZQt0& Q>*m2m3]9N=`4hT8>r7S_OQAj~xUV,Rl|$FLhQ#N+gb{XJo#p/,c7' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
