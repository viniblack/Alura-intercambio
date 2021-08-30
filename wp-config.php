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
define( 'DB_NAME', 'aluraintercambios' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123!@#qweQWE' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Esta função permite que o usuário atual edite ou instale arquivos em sua pasta. Veja como você pode solucionar esse problema. */
define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         '}h2omG^a{kLQq^L9UE2AFl(eJq4!IW=x@o^4,|kqDk!?[T^EMfa(Jh)kiJ!KpK:f' );
define( 'SECURE_AUTH_KEY',  'xbUZykJ:w-z KYtld!2hpPaVbf`dZcN?Vygn22#Ci1@<5 nv{j|2-MXRqKFk6*g}' );
define( 'LOGGED_IN_KEY',    '|6#]m*,u`44oU[JF8ulp ~HVxL`(w,&1^04@U{@-Y^{Y]6w7)u_v8_Ms8Paf)qMm' );
define( 'NONCE_KEY',        'Mcn/B;7Nuhu9b|UdL70|{XdkTdZi{`@;!%t@n4Qz?UM;2iEl2hB:RYtK]UFuC3{O' );
define( 'AUTH_SALT',        'opwr)PwRHi<iT<9&>xWEPsjyf.)Z$Yqa$$H:jdOXqVy;}gDZiE@OKW@:/5bX9#)G' );
define( 'SECURE_AUTH_SALT', '<<hpn+9@roi-vjZ@n E]<ATO(z<kqc0k%Se|^4`6X*He1OvXV:{JDwWe9zK-#4(2' );
define( 'LOGGED_IN_SALT',   'pCrr$2vZTY<KyR76qHv~B/d_<T$A Mf0j&<vG XNEH%kUElflswxcWj;InIJN#1>' );
define( 'NONCE_SALT',       'AU}=$>d=T=So{d#><@u%%wL=IqZL1GY:#icdg:j^X7~Pq18d~akasW:rq=w`0:[d' );

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
