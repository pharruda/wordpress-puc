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
define('DB_NAME', 'puc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#Nk`_Ixit&]{JXRGx .]6fT{>yJ(;APPcrU_>jdbx>w)kPp{cmngH0L~o f9=6-+');
define('SECURE_AUTH_KEY',  '<pcH_UGm| ^Do2+=.3_4ZWsXTl`{Vc4Qu_sN)J0(I9TAc+prBtD[tzKXh5=%*z`0');
define('LOGGED_IN_KEY',    '*06 HBT`Yuce,Q/wfCOEYLgY mpf=m`ZN*#Z$;N$Y:n|c8KF^2alIw<AOx+?RWr$');
define('NONCE_KEY',        '>kcz5wxRaR#3dy6z5~!w#h(Trv<G^y0h[z?BOa>qmh3|RK]h]%_`]E,vx,1uuyEx');
define('AUTH_SALT',        '7sQ8q9)JAU;mwRWOPY`SHE-M$+0](bs#Ke1c|FOymW}1^&MSh3;q}SHA%e<iW`p{');
define('SECURE_AUTH_SALT', 'XLCZ1fFU{+~w44n4V]@^U~O_`;.h9Zwr)OZw6jw/qv9BGlbHbu{_A6a)[cOB}Dx?');
define('LOGGED_IN_SALT',   'W`C%&7r}Ka1EskU^&5o0b3I0HXmTNl`:poXIOcXsm@]a&4XR;f.Nm+i5J$T;s,zt');
define('NONCE_SALT',       'w*Yf3YB(f!g=8q5<Ek8WvIYNvVF!@ $0=?jFTs+In1aO]z%!e%Pky^hHKfF`*^No');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
