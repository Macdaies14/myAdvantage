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
define( 'DB_NAME', 'my_advantage' );

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
define( 'AUTH_KEY',         '?@^np_*&}h2!AieG2N<Mm)T* M1vPl`e5rj1^hLf5rV:o{Z-CF{c~aPN{W5OX4:d' );
define( 'SECURE_AUTH_KEY',  '~QdK`9EE5c&%KZk&M&KK[tk;pJgiyg;KOpAhr*9&t;AP8q$tZDsFwZ]L6-AA97e]' );
define( 'LOGGED_IN_KEY',    ',OE#3(>pD0Ly.h]lV%QW/9R7G]y2R!Do(60-TSUJK-GwPXwlPU>X&PR%gZbbyd1?' );
define( 'NONCE_KEY',        'e@)Cv3k/]DObb#C@Z[IEXM#YZ67G,1yNy$$?ql>{9wFEgF@{[ 1t`/MMcR}6fV4|' );
define( 'AUTH_SALT',        ']%QIoq]ptJb5Hg[UaqCFGDC6eS:%D0A OU+x,iW+u) Mz%cgoS(@6E#!{J D{*-D' );
define( 'SECURE_AUTH_SALT', 'O9_8V[&Me_]q<cNV5^C`|>k{B`%C9T0(3cz$Wg?hRfjqpxFN;h#UBMM=#:d3RuBN' );
define( 'LOGGED_IN_SALT',   '~Z]O;HY<{vH&$s[RP?&{/_^U{*[%Yl[NQ]%6?<FcoJ/ cw:>by>JlRfPeV/$<,4^' );
define( 'NONCE_SALT',       'Q7:z`Pv,wMuL3Bh.EM*<c>+e*?09:@RBx$TpjP5$MPOS!$I73~qUC,ivR5ZL@zoF' );

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
