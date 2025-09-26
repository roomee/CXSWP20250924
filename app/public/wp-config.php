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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '{Ft0ju.OV%6(QV_@,$)<ZW~;z:^@;GI~}eGPD3~/cGmY`Bx[*~C>PYhT`RUeQ=|h' );
define( 'SECURE_AUTH_KEY',   'gV2?8m.qZov` fCJ|E1ncE&w2eC&ydhKz7lf_ 3c58(pIDn):i:gNQ9l:Y0a-Uiw' );
define( 'LOGGED_IN_KEY',     ' K70RvxNUEM,;,!8,fQ?J/T[sv7;-oc>B@1%Fy+;KWDj?ViL8`92@32]UYI8DgKq' );
define( 'NONCE_KEY',         'D-7vJcFvZaxH^eDPaV}kxA){0raBi>,eW[]EY3 HI^Iliij<9<-0; KJu1B^`x./' );
define( 'AUTH_SALT',         'Ikg#UZ&8G[V:Upj?:v=]yXFK.7k%6Ltr;T@FEmq<//clmp)*twY.b$.|j];Q>Kl3' );
define( 'SECURE_AUTH_SALT',  '}~+p$--|mp>~7tV:}#z.7$6nMT@LkufZ_a*Im929N)|y}FP1@F<~=1j,3XP(=r:4' );
define( 'LOGGED_IN_SALT',    '}IinG2p}cSDlCu]?hAtY6|}8;l^}Vrq#]wM4uJ|Fnx<wyR<Ser}ZzMdnIe)[:):U' );
define( 'NONCE_SALT',        '4A$GzZ<_1nOq2_m-9rMKUT1NCO{r$vnYuj<Sb1u0Z3AOH|fzx;*%%qvQ`!}Wr7kI' );
define( 'WP_CACHE_KEY_SALT', 'H2/QpR!f(5/_yqy9X.TkS,6_K!q>|c@VWe(0nP}{HC6mmT^/Pfx/>-V(I}gISxr-' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
