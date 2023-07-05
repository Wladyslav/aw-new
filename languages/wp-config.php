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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'brandliv_wp6' );

/** Database username */
define( 'DB_USER', 'brandliv_wp6' );

/** Database password */
define( 'DB_PASSWORD', 'L*nuab#d3KBf*m[ds@@60*@7' );

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
define( 'AUTH_KEY',         '=T7F|*owtyP[qxi6k1_rEHu|TId(.pz))hkOZ_o,!mali .Dr24wntaPh eY6O[2' );
define( 'SECURE_AUTH_KEY',  '=!253rtI>wBxd1jIu~9D$V:S(]B!&|`<#%DX7|gdeF|q sOP510^x5pu;KwrYITT' );
define( 'LOGGED_IN_KEY',    'b&nE:n5p>4m + z_yJ+{y&YW?uhWMz8twNU>Aa%,5ix1awh51wuUXjrop!o`ka7#' );
define( 'NONCE_KEY',        '}ahsr51|Uj)Kf4!Fe9J(V)m{<Ep <O(bYvCqW]ps,(>?q`EVZYK}J8(![5}h&Ipv' );
define( 'AUTH_SALT',        'A-2rcW#=>W*TFB560/UH_=YN~KfKs[iAS(* m|IVt+SQjU`}nJiA_6p^NMpcG$lK' );
define( 'SECURE_AUTH_SALT', '<Mco?pV|}v)dVU~>|)I v<{ccJemgNTgP@ShCukfX|nT5Z~ aP:UX`IVg.[)*&WX' );
define( 'LOGGED_IN_SALT',   'TC#Jnb8p=*:[Na|G5P;kyjgmYHN*7L 4=rH?WwE^BH-Uda7ue@i(a )@(r+=iSD<' );
define( 'NONCE_SALT',       '`bUc 6r}/4bBM-[yPqA;F4S[JNRxA`&8AS8Dh`qXHav~I#|qJ)H| OUnYghVL1v8' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
