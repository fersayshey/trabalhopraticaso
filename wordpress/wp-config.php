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
define( 'DB_NAME', 'trabalho_fernanda' );

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
define( 'AUTH_KEY',         '2E,jf/Ys*/bO7#j..;Ar(-svZ<7ZTJ,D&{%%S+*!X/mTnl 1A}}a54r!|O/GPBzK' );
define( 'SECURE_AUTH_KEY',  ':tc@fg<N8#2yWG6/pMGGwJmve[~Zn$K_^NA94]J75|BGVM95mi8zJ=_>exwFB)e+' );
define( 'LOGGED_IN_KEY',    '%q9RPozBFlJ@7w5^Vd&j6> +*iLQl?3ON]K~=|6;WhY9V{n-kC1.BUS?-aS-Z{oO' );
define( 'NONCE_KEY',        'owh,:/MUFxbCsX6&@KyF9}?ud+9b)&>MHs^W<uyO0U%;jslC^SETHW(oeKZYS6T+' );
define( 'AUTH_SALT',        'tnzjvmU!>u<ZAPOe,#%%)Wz;-OivY|SLJ],a79xsuqk9;0HkuCF9J6sKN9~UuZ/H' );
define( 'SECURE_AUTH_SALT', 'K$IPt=4$FW12y_Gc5CI@S8L`#0tHh0rCT8d-6fY/y#`oHxaJe_idX4:zp)}NTuc%' );
define( 'LOGGED_IN_SALT',   'u<S3 dVhSW9Lg P1h@Ao2.`^>][epNPhQ9z4ZE4^VDcLgPb([?GC0l3I6e4RNY*D' );
define( 'NONCE_SALT',       'W$yXBX%r}9-t0ZR7dfj=Rb!MCF<}YM)0qtHJn(_>s&I.-gD5~lJ8,i]9XEH@0bSi' );

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
