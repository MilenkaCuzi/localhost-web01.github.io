<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'miilenka' );

/** Database username */
define( 'DB_USER', 'miilenka' );

/** Database password */
define( 'DB_PASSWORD', '12549739SISinf' );

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
define( 'AUTH_KEY',         'm[FX)$&BzH(Li>_]p/R?}r*!^1voJ?}M?ClLc[mE9QW-{6e@m;C@lh*`(j<{]3@8' );
define( 'SECURE_AUTH_KEY',  '1onK-9^)z.G!fZBf55d7)E`zSDLi,S6do~:SXmYLcm43 *j9T9%LizlHsICmK!.;' );
define( 'LOGGED_IN_KEY',    'hOz CtXnCT1bc0l%~3bs+^prF-K% _p:OB>])i:tWb->;TXB^ljIo,+Fj*N(H0r{' );
define( 'NONCE_KEY',        '(vCC!{W?u!>,HA/}_8k;@et-qwF(WPLaG6B<=/1Z>u<IP(JM~NZas%5TOKe.XU)*' );
define( 'AUTH_SALT',        'Rr<N.XxqO!Togt>Hk_$GYpKl.7OTZ# oj2YjN3Ke{,4053,NQA7&L6?,n&K3oKl;' );
define( 'SECURE_AUTH_SALT', 'bu*dvj{.0Kq3`x@$QnU+Z+envbyb!!DuxLq*BU:vX04}%,{-jZYw,w&NZizC8Tpr' );
define( 'LOGGED_IN_SALT',   'YSBYqGWH{y0--e*/!3xK(KB8-c+,VKVi0}EilP/C_&tU6%-SxrV6HZ[N=,rILiHv' );
define( 'NONCE_SALT',       'g9pSWtko_f^LiTk@Pl&MBMPG4~:Za`+`<rC@7[S(4M(Deyjw1(#ca/?nTAI5jsQq' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
