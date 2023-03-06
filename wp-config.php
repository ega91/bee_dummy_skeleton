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
define( 'FS_METHOD', 'direct' );

define( 'DB_NAME', 'bee_dumy' );

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
define( 'AUTH_KEY',         ']|`BBQYK8nw%4;vM?SgC<TK00 lzdXNj,DY,!ZrD=5i>TJr=_n0Z?tmz1E2$jI{$' );
define( 'SECURE_AUTH_KEY',  'N5ncj)fUSmQ(BBu=IX;&>Y0~L#/07?D^e!@fd& 9V=zvs&YynNHI6Ea$2]:f?zt`' );
define( 'LOGGED_IN_KEY',    'L4+`bB#o;o|FYZ-lZ3yHE#j9m8eH&,;?C<Hn9rra [:&IlA#0,IGKIwO-ss~EDXp' );
define( 'NONCE_KEY',        'rv|{0;jh~NDFm^oq`G,6O/9C;B: [ %#4OrV)R0^1XnzwF?!0RL75%[Wshs9TM8*' );
define( 'AUTH_SALT',        '91<)=O{`Hrq#=/jW%NMer=QG|+^#lFTq+f%xdVc*;&ZiKG8w1N3}n2bSy8,|:gV#' );
define( 'SECURE_AUTH_SALT', '3QPU~ha  k3p%dWF/<u)S7bN0i<4*2E2BQ&u}&[WZ]%JFUb}(zr 9wpLTMbl[TCJ' );
define( 'LOGGED_IN_SALT',   'P&l*zFJS&CTr 9,L{SJ?Z5I=VX>=T=K@]C>Nt9D0_|,:pvJa17Lq#x[MDj4hYqgH' );
define( 'NONCE_SALT',       'TLAie|P_W]UP<6rSiG(R,j|EGtrq^K=4O`ao]`CQZLy<CKB!fkSZF]/!1lEtD;s2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_secure';

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
