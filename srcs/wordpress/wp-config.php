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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'ccaptain' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb-service' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '[%+ToF9z))@n`5}H-|.I8(|=V_~R7D04;: UWX&f(8$kw[fgU^KFU?q{88-&dA2u');
define('SECURE_AUTH_KEY',  'NWZbf;8ir{IDgVEj=u9p2:pO#,B U,p|*u+Ut[`<{]-;?<eEacZ[$`0.-9XJHy>N');
define('LOGGED_IN_KEY',    'L#/Tm gE.f)Bfrx3izEHv#oiO0KQ3W%%2A}x=TAb`M0k0}HOK>ScF}KVI[O{$bjN');
define('NONCE_KEY',        'BBX$hJU^f |Umd7!,zJZhDGVk$j`x+C++:D5I<dwQ{||m**d}a0#Fn!YV](NvJ,K');
define('AUTH_SALT',        'kocVF]BARpCXeo;DM^~A I!3VEspE@hy)sS26R0;%b_JS<y(kKfa[2L7-E$Ezq4u');
define('SECURE_AUTH_SALT', '-6o1-^?]}`[q!w|pXc(-W6ss{l>?@Xx*SA?,Byq~aVV*Idw^$E]CJcH##(I,S^X:');
define('LOGGED_IN_SALT',   'wBSOpl3.l zc,8wuYt*o{ 6z7+/~ ]rw|C36PEu-<2KK=}n1>vSY*HQ*~9$P.8R|');
define('NONCE_SALT',       'kL^DA8=riF.;e|k9$U&,@``jfB`GO~[-jgpGc819}dZgObPJn=3xD-o[p{)-X7:}');

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', '/tmp/wp-errors.log' );
define( 'WP_ALLOW_REPAIR', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';