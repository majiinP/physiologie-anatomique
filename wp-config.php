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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'sH,GL+UG_}RA/$e9xiL#`0y)R2cV>K=]M(z78*F>pm/XZ^qlz$CNaNkqt-S(uw0B' );
define( 'SECURE_AUTH_KEY',  'J)DQko+T(TfD3Dy>{`DqL. `M)?AlF.{{]b7,U)`PBihfnP]jc`zE]=K^!{EpHMy' );
define( 'LOGGED_IN_KEY',    '8U6:OoG,CjNn*po-<E[Q&hRvH*5L9nb(*oU5e=~~q7juyDY7&C8^>zRAdGkKX/ef' );
define( 'NONCE_KEY',        'X=oR$MECu{MWB/OP4.VdVEkD&YYwS?Qp[C~d@Dm&dskzX3SJm-EhYc#.wcsG$VB*' );
define( 'AUTH_SALT',        'O3f-e[r)!Wj0/@I|#H4$odXId-U8Gr^oYM68[RY#i!xs#%tV$sbC]-#BS_)2$Bww' );
define( 'SECURE_AUTH_SALT', '?LICKS%&GlRR0`s:-AfFZ5TXd&sLC!&L(.DAWt;[uw%hB~@CeqBUq]^ 5G%(Hpg ' );
define( 'LOGGED_IN_SALT',   'qPX+zl:5qE:`0|QYTq=-NMHv+8#~Xeyf4|%2}A#4ZzA@jI5v(s:uI()w(o+nZ7Px' );
define( 'NONCE_SALT',       'd{|c]5]zc!`=n;cD9!iZx$[?,~x1pDidmoAl$o!]LnT2,=P @reSOY!poK }pVrr' );

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
