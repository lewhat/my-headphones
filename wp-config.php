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
define('DB_NAME', 'pro-headphones');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'd{a+E&@EoT^9:!Rc+%n:W.^&AhXFixUi6Q2eX54iPvJ*tR2A2IqL9`@DL98aw0+v');
define('SECURE_AUTH_KEY',  'ru>aM5:_p* Y6hR@M=4T&FBCJ(5Comqe9b(eM_N+{lFaW=x|I}Z4*`vbu)DSL~Is');
define('LOGGED_IN_KEY',    'W:MVHwV-3+w32~+&!NJ8r4LH#mOI1Rc(uDNS!RFVq7!S5nE%yi0i}^y)Y=?B/.8 ');
define('NONCE_KEY',        'FwO4K^-!#C_a[p~%3Of5!Yv~x{Nmy&<;_=_.WRKTbEnley%Q_[-[n~h3Hc3`3a1A');
define('AUTH_SALT',        'QkuV*KJ?nC9 y_g6$[L4@YZ&%W6}yfqE#qH;7VD75Z2MU783T8HA0?CaNnn.KD=R');
define('SECURE_AUTH_SALT', 'A >K3UpwM;Z2*GF(S;CKcI?2,7x1g7:ulV1AM;V+(3Qc26=#}}GZ=u).)u$6g.RO');
define('LOGGED_IN_SALT',   'PEgU+&viNqvvB@@v8Ou1`gYkH|UtOop}s#<h!]0p*C_6({J|M.vC[,A[lR7,][eW');
define('NONCE_SALT',       'Q;YuF/<&a-NdaQ1uJv<zvRsgD_wL&B/hy&m)2|k9K^3E!/&NQ,f?6R7k.Cy=oe8y');

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
