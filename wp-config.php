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
define( 'DB_NAME', 'anjanportfolio_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'y0X5@ko@MivL-fs];_b}8IF<Asrz-#m_r7kD>VS)7ysU>Wq[83tO)UD).[I/8mZ*' );
define( 'SECURE_AUTH_KEY',  'jRHiepav6F`^xq<m9]X)T&29}kZtV}J)Ue=LY]a4<^r`3lUP&t&FFQMeTw&De&Oh' );
define( 'LOGGED_IN_KEY',    'tw)_IQ>|:OMHAM,>GM7Z:oY)*nRY1={~{A|wA}oDXcd3B>~!1:Bhuc-j!,fv|5:m' );
define( 'NONCE_KEY',        'd=w]P`h)-(z]7k$xHXY=T.b/MMn#pRynw@$~2<19875oMcDx*#6v*`eusQkl3i;-' );
define( 'AUTH_SALT',        '*.5G{rg[f][c[r[x&1o;d)ERujh%Jixs&k_+6#FjHM>VW!=#v5,grNjj+<</RY3T' );
define( 'SECURE_AUTH_SALT', 'Jq(#o)O {Ra}__B#dSHQ>q*nN%umPT^W*3hm D-Dm=bGtD7v~(-!|&83+BBnGre=' );
define( 'LOGGED_IN_SALT',   'Rz3_M}T>+K`^n/w:APb0NAryY W RMuCw@ljgzA3K$a{j47ki$V.t@:%,!C(koAw' );
define( 'NONCE_SALT',       ')%WjK,U_2FyIa^GH(c$de&[s&fo9bA7T >gwMxNc-=Lx(QRgrO57D~-sOiqfn|9P' );

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
