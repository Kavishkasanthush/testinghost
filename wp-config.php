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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'r,1o7u6wGvxUtNxBr^GdYg^D~:4u?6-N9EGGK(rMR]Z[@70=nBkmKebo#</[ IFd' );
define( 'SECURE_AUTH_KEY',  'o(,zUpIZ0&z$_AeaGj8LBh(0KLe-KpWxsI?p75SYf;]r!`b+LiXwi4Jck| g=h4>' );
define( 'LOGGED_IN_KEY',    'Xj4OT~zucK(<4D^i~PZDc :`t)`0Gl(cPvM[HW7NvnAW{+}l,=w8`woN<vBik>CQ' );
define( 'NONCE_KEY',        '-N@(0x)D/<pAZF}=AIQh>OnuII/)]W_/Bu*2u^{R}=*Hi$|NK&R7wuUT%`X%].+D' );
define( 'AUTH_SALT',        ']y;X]zz-LV@fAH&q&or#5fAn@rB[Ya^5dDFkp!aI(uCOZ1dE85sw{&mbTp.g!2}^' );
define( 'SECURE_AUTH_SALT', '|FLM6b IucGCCM6s7dNK2j`1>6@8IkU6;l:8~~-YmvBL3^jdqrbrC*|i`G!/*w.M' );
define( 'LOGGED_IN_SALT',   'X&;?}&{&,l0qAW!1j-_,|)p@iTPWt;}n);(f!GOSE<Ca{(pu m$YbTw?;FYQ(.m?' );
define( 'NONCE_SALT',       'xJ/*W_-$s3+iGE05Y?$=fg _`L+aqF,fEKR]Tb@0$V7H6HHKb3JEu|N}shf#s#V;' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
