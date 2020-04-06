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
define( 'DB_NAME', 'xzqxzqxzq' );

/** MySQL database username */
define( 'DB_USER', 'xzqxzqxzq' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xzqxzqxzq' );

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
define( 'AUTH_KEY',         'lff?jLbQ8/Nsr00SLL3h(kr!8h6u!,%=wRZ[eJN[U@{r}|8.ApG^DZIkcEV _,cz' );
define( 'SECURE_AUTH_KEY',  'ULm?`{p*;ZI GE5wym.J]:o`Z>(fm0(_fo?S!;6(<1{}|]{p}8.n|@FF1I:!y7L|' );
define( 'LOGGED_IN_KEY',    'iX,zSiW!J|f*R3~dg)IqPV{q9 -w59)NZfm<%l(kFq)>YA*v`9)[2GmN^L{a|%cl' );
define( 'NONCE_KEY',        'TWl3Uf$aoAu&uR}tkoh+ByB.,RZGZDVXPFwA1Q5j./PQhWH9W36q{]x4sR]pT!1k' );
define( 'AUTH_SALT',        '0ec<m0GiC5h{p2n_Vu|ktkjVwgw!|X|G^8TXaDfg9B1/]9;E(]bp_U{6_(=.!w~F' );
define( 'SECURE_AUTH_SALT', '~_VOC; C9#~gK`z$A[PI{n}zKI6zdVwjJPc9Tol3N4Cn&4R06q^Tu;?jP!+m,#v|' );
define( 'LOGGED_IN_SALT',   ',m &^9W&&/I2_`C!3oT$[F$nYWq+(i%xNYxx3j1brL^g^P){`0Q<kT?kD#{pd*J{' );
define( 'NONCE_SALT',       '6/b3A,IAl2jXn^y3lK)t&HR5KKh<Nf8O=:s^%_gXC$VA|mY|y72[wgfa-i{`x7s+' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
