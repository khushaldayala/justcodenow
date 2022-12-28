<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
 // Added by WP Rocket


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
define('DB_NAME', 'justcodenow_justcodenow1');
/** MySQL database username */
define('DB_USER', 'justcodenow_justcodenow1');
/** MySQL database password */
define('DB_PASSWORD', 'f!4tH3%5JJ7#');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('FORCE_SSL_ADMIN', true);
@ini_set('upload_max_size' , '256M' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dWC?<oU gw+WBv*Q 5,*A.T@eEt`Yy3,W_,o(PU@~j*TWm#e4~z=^WWD-P,U);Er');
define('SECURE_AUTH_KEY',  'HErRTNz=_c;^9eLaNtCS[*B6<-JAWivg!%V1BOQloh$p!@Q|BF*vO#NY8xM7zobC');
define('LOGGED_IN_KEY',    '%>]*~x_,whJZ6|adL_%fwuJ7;VQm+iVqLIU|W@E5Efce]O-$V-Oh7@[`u{nC4yB8');
define('NONCE_KEY',        '3DaD?i+fqySSe:)Y^f>-)KSpt%X^FO%hdNM,tuJ,X0&:c3{pv=3`E1%N.u~uS+1N');
define('AUTH_SALT',        'y){;=,=+Vo#F-nqOnQ5RzXlL7BNC1$q&JF-a4w~2|W^3Ysrcps@8M)M/.@8#2QK%');
define('SECURE_AUTH_SALT', '|E+Q*K@$12U-(1}-Fo(+I+(L>^{ E(!r| {,$F) u{?lRd? N^[upR0R=O<K0|%@');
define('LOGGED_IN_SALT',   ']tms;_-R9Zp#XC9^TA4{_7vTEszXXn:^)!gTLF<~_nk-]<@Q <~jq- }=Z?70wy+');
define('NONCE_SALT',       'G8/o:a>Uab0,NZYwugX`Z6{Q5#bEdz@1Y;X!6&vlCUY0B,cN2M3jNI.?NIF ;d:b');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jc_';
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
define('WP_DEBUG', true);

// define( 'WP_DEBUG', true );
// define( 'WP_DEBUG_LOG', true );
// define( 'WP_DEBUG_DISPLAY', false );

/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');