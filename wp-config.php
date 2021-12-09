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
define( 'DB_NAME', 'wp_structo' );

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
define( 'AUTH_KEY',         '2y.[DToP~zn JT%cP6*u9wdusex0EHwqp@.{&w|k!5<o/RkB)!oPF@s{gtQ.sd(L' );
define( 'SECURE_AUTH_KEY',  '^m-JkZi{1NADDqbKUD3#,<-s]l7kOkXaoixM<d0bL/2!.UYN6:gDT&9:<ScLrI,M' );
define( 'LOGGED_IN_KEY',    'a`M=s>m/5PnPQvusK1%m*zq-tZDF0V~ItUVss3yYS4[{W;ln15i *t/V?by%Mr>L' );
define( 'NONCE_KEY',        '@t4#QJgZM<(k/l(<aN7U{|Tq{RSEOMiO0A26}09[qPl&ymZc:xTnTBMwHvqeuG@o' );
define( 'AUTH_SALT',        'Jkt+N$W#:Xv.)o .8A8M!iMX:{d5 E=6qEq1kDAC4*5] W;3CYaK~,xH.0(5EL`&' );
define( 'SECURE_AUTH_SALT', '>/jkrl`,@q]EaG3J>Y.n-5cU2<xzg,HS<BeuifB*m*s(=/r[~wWYrq59CxooU7r[' );
define( 'LOGGED_IN_SALT',   '3%}tC)tmqbcj#6Fn_g(3h:P_Q|sKOuDX]`V9@^tV?Yo%{H)-h^)+mW];QIM>$Bj4' );
define( 'NONCE_SALT',       'OTmw}G5ogQC0]V -463}y6<q&iNoML<K!H/d7(mcX::@r6Do_t2QID!{[.yQHl/2' );

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
