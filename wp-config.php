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
define( 'DB_NAME', 'biomaster_test83' );

/** Database username */
define( 'DB_USER', 'biomaster_test83' );

/** Database password */
define( 'DB_PASSWORD', 'S]551I75p)' );

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
define( 'AUTH_KEY',         '`Q.`l;y4s63igJAD)~W1TPcK.21%$h[(j;~Vr*FNWg7SK4kU|9E8pt]=2uSDq&gm' );
define( 'SECURE_AUTH_KEY',  'a|G8UQyGu6FcF.tLI5Du<?oN[B}VKg|`t]OUD:gg2+y:wH$6:G3R534W]Up.JNW=' );
define( 'LOGGED_IN_KEY',    'b+y)Jj(2+P{15TfNiQESNv-&O;efd`[+gSS45&lA $#WZTC#yM^cTb0VK~#S#~;F' );
define( 'NONCE_KEY',        'i>g/^-nB`<&&_4qObdb>ix.Le[XpbFnP+U@BSXi>?Ey*8]x 1iQcMxo9[b@^@x.m' );
define( 'AUTH_SALT',        '/A$=m|Qz]VUJ_<>x&-Ed(J|.|$f-m]sgdhwNM$(<2Zi1/2M`B^M`2LPw?Gy85]UA' );
define( 'SECURE_AUTH_SALT', 'C23tWOVSLfrTE5~S~f>W|A;#?%kFQ:IHYl&^{EmXk{T4`KL}+W88Y;2k@RQmm}o)' );
define( 'LOGGED_IN_SALT',   '77;.;{E|#E#)y`*/1XB@zDIyE/Vah}G,4hwu^D#z~dZM !dq}>plFC|((j]aTZjU' );
define( 'NONCE_SALT',       'QGRdrh}Xv9rc|+||PR@Y<q02/0fB2E2V@sX}~(pLk/L7*)!7rV@QLPSX[/kT+UrP' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
