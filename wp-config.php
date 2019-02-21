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
define('DB_NAME', 'wordpress_00');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'WassPord64#');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'vuN6)1<Qx7xXYcO7w8K.$$y, sH@ua.iiTg,)f//.YK|Y$eQf^z`nS3K6(ULzFW;');
define('SECURE_AUTH_KEY',  '.VT7wS,/lQNcMo@wxYqNz_Xa%TJ@ds]LT?#h)qYA|HX`NJWN6qh35%)nxvX3UqU#');
define('LOGGED_IN_KEY',    'WU7O4jc?|?u{51+({/7<m*u8mKRWot6nPTp6<>g]icGc>oNBtnFyo8/DE*^3J1H9');
define('NONCE_KEY',        'TP#u~m{yW-WWWLZr%Xb(UumT72;^q*e0 .)`7VLccM?3)2LT}4Jru:dQLgew3B;a');
define('AUTH_SALT',        'hu9{P[d;(!^Ezc>!g.cp8bb0k,6~RSfMe&V|[b# ?DRSR/SoKZ_Sk(L$|#p=9$Bv');
define('SECURE_AUTH_SALT', 'BvLRF.BT?C^o/M|Y;aMX3;3OI+Iar^&C7cB1]t<L/_mt`po= S*aL+f$BGYXR_<B');
define('LOGGED_IN_SALT',   '0`EP$/z=Ow[{ Q_yFeEQ%3J`q9n/Lf q&}^eAUWTYDw]/42/@v^D+}0`~Hk)1]-[');
define('NONCE_SALT',       '|xyx.cUDz6IS#N!&Q,,y,%bhTCC^2H/Hfli0`6z85``&yS,;P[@q^Q+9 ~tLDv-T');

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
