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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'takunibos@)!(' );

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
define( 'AUTH_KEY',         'i(x_t-p#$P;i?e*wHfz/?v2k R>-Vo.!IYO(#^]%tjL|}Y`!A}8UGzr#*r]x.Hs|' );
define( 'SECURE_AUTH_KEY',  'Fh:4kzZ)VdKESi?^)~OWWjLcy/v[MFIGnrPLLGppmICxtZ(?AH8;#/g7179g#-h=' );
define( 'LOGGED_IN_KEY',    ' !<.eN9J3[%7AAi%iF/]Eg-j&06h28@|%sV@*-n;Q3];xqkS-G$t<k&^mxKlVSc@' );
define( 'NONCE_KEY',        '2-u3(o@p7K@Gn(@T mn/fL(t9@>NC*)$F 5ZN.DvZWo7}{OWE<xU)#MK>H%W.htp' );
define( 'AUTH_SALT',        'syLEfi* >^}fdx6m6vO_cwrzUN w%U0{m-wu 6J!qiMG@8,Cb>ObG9j y#w:m|E7' );
define( 'SECURE_AUTH_SALT', 'skNK U@7_(<-N$rU3R:L)c<;<>+rfxYYt7f=y&=yv9 M7*?<`.|Epo9x6NU8y7*N' );
define( 'LOGGED_IN_SALT',   '1Fpj J0C95wzVv<|s[ol.87ZW,&(G<y_;B.;T]1d0`OvvRiAr5UWH%mccJkN]@qi' );
define( 'NONCE_SALT',       'Hm|>Cl$:9b5:b@&M+zo}R%438)fHI|o%lS+xR8ju$O;u{0_BfN4B<G2>1g!,F,S%' );

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
