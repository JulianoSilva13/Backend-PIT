<?php
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u706403729_voH7w' );

/** MySQL database username */
define( 'DB_USER', 'u706403729_7ksaG' );

/** MySQL database password */
define( 'DB_PASSWORD', 'fOqe7rjCPl' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'f `WI4%%pdRJH{`k#!pE++2-n<8GJPsaQ N4m4}]A|S*B&XLC[Yb@NHiGgL&)0xF' );
define( 'SECURE_AUTH_KEY',   '--omFy!c,Ty#DFm><i}BA/p2M1<6MCIfrhm[B/0z&X3:`1hZ~=Ae $zQhf&6U+&!' );
define( 'LOGGED_IN_KEY',     'XMi8v6MgPk@~I12w7_yW-RL+$>CVVm_fK,Ww@2aX5L*u_kBe`eiyT@M2*.{p#F|3' );
define( 'NONCE_KEY',         'H=A$GJq:sZ=ij{G&!Uw/ymaCvAFzHi?8heaU%sXxIm0r#E7&$t!09fa+J#j2Bh,0' );
define( 'AUTH_SALT',         'h}`A~yd/}&M}seJCJ4e&yWqTt7QmNb:o||L$9Fzl,h9xoLB8AZE^;_S9m_F9;I5d' );
define( 'SECURE_AUTH_SALT',  'vVq0jwDBULS9`J-]v&?etgF`Dne+1O)/9,qeu.)N4u,mp;,EY!v4$V=`QJ``tiVZ' );
define( 'LOGGED_IN_SALT',    ')%Nsk;7SMs4$lPO4ttizncS^wv%tIcC7$=WgbRFbL*++mdJrpG)UaOlN/?WxXM3%' );
define( 'NONCE_SALT',        '$U05|_6&(VG:HTPn#^|C[KjUv4qhpk;X!@vrG2S>S]mk_Unv+X4BXQ}t[D0eg$fT' );
define( 'WP_CACHE_KEY_SALT', '(czzP*DM}syA0^oW(6&.mr|D])(OUyjn)ak |0n1Q-H`k+%}#nMz8VB@A2@iD6;?' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
