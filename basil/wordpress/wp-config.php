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
define( 'DB_NAME', 'basil' );

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
define( 'AUTH_KEY',         'b#?iz4ir!St;n^$rVM!,rvJ tqr>+=i|K|qJ+vv9xV*8eorWRiw;iW?QkoGKf#Q7' );
define( 'SECURE_AUTH_KEY',  'odKk*T+@3b;_+j g=^r>qe8M!mm5^S24Pb%3*@*~0Y&54olqR]``_ ?.|(x#k4FE' );
define( 'LOGGED_IN_KEY',    ',d/8ePNbF|o>_3DDi9r]NrcsTBFh3ic$6Thk%lMz=qPelcv/hS/QH2:p~S&8~?*4' );
define( 'NONCE_KEY',        'bB=y==cFK}~o?)btosd{l|+HWr_(L(bK,TlXt[`1{.Y;6:vDEm58*0W)x&wkH#l,' );
define( 'AUTH_SALT',        'T98>G=0/#v,U0_W[e`Uu6e-9J1+f4xk^M#hL<.!@Ud<]3I:. =25wMg?#}^W>8a~' );
define( 'SECURE_AUTH_SALT', 'M+%yh5Q3t),x:JrOezN)Fc7@+hb5xcBq!~O$~gO$Wz#i7=YrQZU=v?az;hpz~vl}' );
define( 'LOGGED_IN_SALT',   '$A]4{U+l3<=i{u:~Ne}XpZ%eH+@lBGnI$p)ap6b]2a]@m36v~M|omohtkSqN|5sK' );
define( 'NONCE_SALT',       '+E c9cE6R6Q u3s5>r6Rk)A?(lXfJ~y}G3vByIfe%lCi_qL~z7bVqwXa2L`jy~.H' );

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

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
