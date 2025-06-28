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
define( 'AUTH_KEY',          'E#l9qNhH[6-KUr`;aDf*RWT$_U;%xM3^P$_~aR%IMm%Bi!pwa[!/ZW=MGf|]I-bB' );
define( 'SECURE_AUTH_KEY',   'JH1uEbP+l)`d3>|mnUi*b9m7=uL-%1%?t+{h_Y*GU+oE!>&iTIVcEGc9]95FXz>m' );
define( 'LOGGED_IN_KEY',     '`LxrFq4$h%=P:Ehgkz^;||?EKw^/m|O]B:4ab#<V1?6T^leW|-(QX-{<q@#=5ZGu' );
define( 'NONCE_KEY',         'kt[;aoJ>2F{08%JG|kZ]v68y{aSBcQ&V]@0eQVouWrI#bk=)ifcRN^01l)FFu@nL' );
define( 'AUTH_SALT',         'O_SM)t*S5o1m+{?m^l}5nHzITrK]+`C#vRq3-eI1X],+Cfy*b cp:FV^&s @Xb-;' );
define( 'SECURE_AUTH_SALT',  's+IG~A{VOm,YnC><HOS8xKjT3;64dVBr693K1BV6X!z{uHsX+TM^URVR(w_pzV}/' );
define( 'LOGGED_IN_SALT',    'lVo(W2m(69*N^!/uK4Q QIL.9M]q/z9[Ci+s]*>Ek1i+=$sAP58/19$@o#omZo}{' );
define( 'NONCE_SALT',        'JUO*Zed|T{/TWZ$%39#9H85Ow,4&/X659D~oeWTc}p,#94vR[.`y#,1X.}^`e1h2' );
define( 'WP_CACHE_KEY_SALT', '?<XJ:[O$X~?V*c*sUoUiQj+LEqBAp%C}fn,D%<&cRB]XA%eicT2*#FP:/Oo/w9Kp' );


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
