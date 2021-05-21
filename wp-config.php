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
define( 'DB_NAME', 'luckydye' );

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
define( 'AUTH_KEY',         'o}RsezE;L0y}@u8`z( Mz>}Y_FtP*4m>Yq%=]G?z=TEB=ium/R6%:oTsW[A~JD%m' );
define( 'SECURE_AUTH_KEY',  'HAEd|yy 1zMC3{v6H-JICL+s&rL&{bLhm-x:l$<0A[7nnu}mqnNga:M`BHszl;UB' );
define( 'LOGGED_IN_KEY',    'HXOhCezbu:EfqiiNxo(~7W)H[M6iUSW<!3_{<w}o?OX_`B?1kb1-RF66Tses}o0-' );
define( 'NONCE_KEY',        '(yz]L3n{yf<CqyOTz6M$$3KDh1F@ j-DRTtieOf_mVA3_$%pEQ`YCj<{cN{g@g:H' );
define( 'AUTH_SALT',        's3ISs&e]F9i^Y]{}%$.U|#d:]:tjFHOyA]RQ^mb6x9nmY)*)iPa}]Cltm@JqvV2E' );
define( 'SECURE_AUTH_SALT', '#o&4re+ _<qN!FYGgYYfc.xoD;pYB){p4W-1e`(b>X|B(;3N`_,#fkVV]j5giUG[' );
define( 'LOGGED_IN_SALT',   'l7>pTYtESU4jQS/$M-fZ/24d[^bgC;!ljqfs4BQvr u~I&)jQFR6-{f4dW]YGI2+' );
define( 'NONCE_SALT',       ':.&hkB4Ow ?[#9t:6&6|.^j7X+DZU@8jpc!WpcOmOrsI;`tJ#U.}^U`1}?khrxg1' );

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
