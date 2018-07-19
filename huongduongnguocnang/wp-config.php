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
define('CONCATENATE_SCRIPTS', false);

define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\huongduongnguocnang\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'thaotram');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'fwGFDYv,{pl#FsTT:?egnA^0L0[VEpZ2iFU:p1AC*5q<l;tm[L<lc6}gGZ%~.a/5');
define('SECURE_AUTH_KEY',  '{vEvdtr-/qF>Xjx5aO14T5!Lr(*hzEaEZjYN=cmWQ4+*S,vM,_EW]]b%]L9aZY)p');
define('LOGGED_IN_KEY',    'W7(eN4:nzGJ*uRGX#3g}T.a}Aq9?kj,5iv?GG%xB5{o>{4X+6vW?Q/E.!zx1Il4+');
define('NONCE_KEY',        '|z6vph%JVn|HUOh7)YW=Md5bPQn9Wb_i{}wZ5JEmi.:aKZ0R>,#/z~*f_P=n&u}M');
define('AUTH_SALT',        '7y.X[OE> g]os3M:,vp5N3.}wakfqf:H_FC2n{ZL>1aF7qo,S`5:$-9F,oT_EpPD');
define('SECURE_AUTH_SALT', '>p_JAvv;F+hP,F9KFn3Gz<G|6l;{gIk>y}vm7MOO.bUG/z-]h|:$(!|+aUR<8]wK');
define('LOGGED_IN_SALT',   '/;|vo>-|$J-w-=>[gqD_A/?do!7[Zx-[wb$!_tYDGl.>e5K<(W@`@!VDS{S%{/2T');
define('NONCE_SALT',       '3.Hr2:>.a9Iaa]3T!LR_>=@u!:2M@2kvXlf|}|5;o&z?lkK~MdnJ:qvqi@*VO=WP');

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
