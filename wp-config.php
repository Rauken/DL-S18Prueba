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
define('DB_NAME', 'fev1pjer_dl_wordpress');

/** MySQL database username */
define('DB_USER', 'fev1pjer_dl_user');

/** MySQL database password */
define('DB_PASSWORD', '5KMkf17RpRS}');

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
define('AUTH_KEY',         'd(aWrQ_j!@m2yTt=,Q)?L1%|rsvYx+(1qjY*KRvU2skl(PmMP_:(I=6D|/qdbt-y');
define('SECURE_AUTH_KEY',  '1j[FVq>lqQl.T!1ab$&ebB3piUYa7x3AH ~=^$hE1yJ0U%@k@18Km`Xy{QsfpIz6');
define('LOGGED_IN_KEY',    '5HzjlyWryU<x$?YTbO/sRXE_K[+&]Q(;mEL-9uDpF3dFG+E.P2Tl5%S5XT~{Nx_7');
define('NONCE_KEY',        '3WofL$ wgRQ!|Y_kr@jxa7wj^V1;h5,Fyw}A^.b^Qi~SR&pu?nsLnby*[>i8dFyt');
define('AUTH_SALT',        'OpXMuCD1^x?g;c9/~cOIh;>T;BJBq_fU3?V2PQy }ioj[]e7G0L5x&M.9UWHMt%_');
define('SECURE_AUTH_SALT', 'y}CXqYF5~n)}G)q`Na`k;5)%bB<OM|T?X#|:zQ=NS:{}T[GGZ@JVdUT{$h8|*EYN');
define('LOGGED_IN_SALT',   'P^P&~YIvr7sI-uw|c8y-D~EA6bTQa=U8m!R?TWM8=!i+}s*pDS.)9GHPD>eKA~`6');
define('NONCE_SALT',       'gkP4TdF_}<7WM;C[1$K}[t@. A%?JjL(,erMqB$8ncK-b/x,<z/rA[m5(qwT{Ki{');

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
