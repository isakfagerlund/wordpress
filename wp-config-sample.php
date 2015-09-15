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
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'wordpress.dev');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'S7^T0U]a{jF`~O[hES+UpE4).j-hR#w_g}$K=P]y}]Vp[3+Aq:5`Q!Rri)%zXU,+');
define('SECURE_AUTH_KEY',  ',ou/TChl>$&rI6lNyI@R+y0|EM>44,;]a<vyB12_Mm~O-NN~t)nqe-Yo#:f-%nbu');
define('LOGGED_IN_KEY',    'n<I.mrw[V8 W@]~=*>k|?X~fc@K.;H_4~DW?h;nM5Xiv*+`ky<2,BcL2WeI|;WGZ');
define('NONCE_KEY',        'wm34gc:3#z<Z:xdB/b 6T,_Nl;*T[sG$!:~x@|ur{%z?-lM90{L`O L:@M $0Cos');
define('AUTH_SALT',        '4~;[x|Dr-p%Ycx8)@bx-B-I_Z2yh-E7vkk2LKEd1&FO(4AwxjLbssfItHSztb5,b');
define('SECURE_AUTH_SALT', '+?Qm9FC4e% j2yDzH8>*Y!<{P,dUx^-L^ZT.[j|fp-aTnH?c)?W,r,Flu$XjoY$l');
define('LOGGED_IN_SALT',   'YVDP2)&j8E*O]cb#;(?Dx!XDsZ3gX;_!|!?+,--lu7*b;-FmJ,l$q}gBh*#C[&0>');
define('NONCE_SALT',       '/,Bn?Z?2IOLB1-jdqsT6Fkn|+l5Cep9mdDQf+V!^?}/WX6Qj&0~IBA0e!ZaL:zTL');

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
