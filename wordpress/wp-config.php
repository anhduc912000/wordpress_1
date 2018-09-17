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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'thongtin');

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
define('AUTH_KEY',         'vWF*dXe[b-9)?UKDFyaS$$ZOnMm@E=on+SjJ)Yxq19{V7+t_K6N$I.(A[ A/3dqN');
define('SECURE_AUTH_KEY',  'Ta,:kr[rts*)Uf_Jp+G}ux%oDVQ1W<|;H6AGff9=;5[bcO*B<wT`|EdO;6m.gdm5');
define('LOGGED_IN_KEY',    'Ds%aNxnX8a^W+Y1&GRmen<`AO*8`4PQgv(#A`&s8~s#}=+5em099w$gmG6{U<)x-');
define('NONCE_KEY',        ';|C.h_5z#D?avm9tc6n }mF];#;Ciz#^qX!8/w*t`63!@#.V}u{q/UPtTS=Jl]tH');
define('AUTH_SALT',        'WN)?#POJ.0H$(qok3I]tlpE-[CtJWD-$1<E]bVtYM/Qj09g|}hTXPV?*}P0lp{:i');
define('SECURE_AUTH_SALT', '7l8Ug<c!ZmU^]-SD4OU]QBfV&3*c#U7^Lx{^9jPU))U)KB.b?A5d;tzE8hN+2rO(');
define('LOGGED_IN_SALT',   '!Im&;%b@~ur>e=Z-m9Vw1-mF@jIYB|S4v`Ws%tenr8/zldO5^U1`7 v=B1+#=XM5');
define('NONCE_SALT',       'gYXGH78c://*B;Q~3_!WFaYUMR!/44fZ|G@aux,CYY4h.p=:2>b<o>()}#3i`m%)');

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
