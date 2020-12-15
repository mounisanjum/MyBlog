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
define( 'DB_NAME', 'myblog_db' );

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
define( 'AUTH_KEY',         'l}.b=U4@}9J34f25mWFf&$}{eu[hb6O:v2=5l0Wh++YhLT? (m,o2%I9PU`ttWyU' );
define( 'SECURE_AUTH_KEY',  '(:PQgU/#F5*!xt&-<@}zA{?5bwCyo{ao4{>}ZU.oD}qdWJK%VvxYX.05.*[;`[<m' );
define( 'LOGGED_IN_KEY',    'th}OVfiVWv*J_S&Be.r5E59$_C;Z1 A6KYmA2iQkxEe#3zoS%K.LP}H_F;Q4kBHx' );
define( 'NONCE_KEY',        '^sw>PH{XFzXtJ,W%xlw!tDQb?|#UrNz./Dx=4Fix`e)!%bp|*o6]iBvmFk+bAA$z' );
define( 'AUTH_SALT',        'j|2>[RkYU}QaRIiT~zWMkfqXY.c)[rw|YMFTaoz#$W>hb7v{K:mZfR,hwlVwIr.w' );
define( 'SECURE_AUTH_SALT', 'KaaI8:By`;8#_CtG0fm>F{Jxa,?+qBVS]as]MA!Dy:46zrvRj<2F1L%QQWv==iBN' );
define( 'LOGGED_IN_SALT',   'q2${wfD^l6{,|49TAifS!)xcdR&,F:>;3?Yiso}8go1+>$OR[8cIc#%%JJ:Ed+!>' );
define( 'NONCE_SALT',       'Z=i7WxZps$y(=%8W{trkyP]:2[4d#l73up3=c]0)*)DDbmnBsvroRIJ!Cuo}`[v.' );

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
