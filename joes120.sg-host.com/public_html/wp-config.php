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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbgjsoxa4flqif' );

/** MySQL database username */
define( 'DB_USER', 'uktsf4kd4ukas' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hjpdgl3nwuj5' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'pY<DkZ0^tX:z:Rt[l #+C5Efe6n1~R^M^*&J<*8VN7Cv`ee#5i;b8&tb-Be46i2H' );
define( 'SECURE_AUTH_KEY',   '/{2k|)]7](K]-rtXeXDX>I^M_f~rL;*!H`ps;GA{v+;TZTIZVK;`XowJ-{~R)f3.' );
define( 'LOGGED_IN_KEY',     '?Y<fpw}AcpLC~[f .qy?iiD49n`&{:sB*<~}C3`+xqC,i>c%2`k$Na?-.n!P}&;w' );
define( 'NONCE_KEY',         '%AsD6]Z[C3K9_{TEYq){:M8Y~pem|,6r*@.*)RG*FK@T&=Q2,pggC1p5hW7y|ye ' );
define( 'AUTH_SALT',         '$Hj%YMD`JY[2c@lRr @-I)}s|UPXs|}Hz_:zi_Tl#BzBm7d5s*^f)-V?i,}OH%<-' );
define( 'SECURE_AUTH_SALT',  'uFg$l5j@+C9mU9hHoW[GF%R:!$!%5]6JxA9t_YzieUL Qyv$ u%gK..ZP@4/cY/&' );
define( 'LOGGED_IN_SALT',    '~hku0!r2U`LJh)26{I22TnI8P}M>Z],qdQy3~y=X*LL$*S XXV.ysd}Q3Q=)hR#E' );
define( 'NONCE_SALT',        'DTPwXuwoyqzQUuJXmZ(oVLt`/yBvP+f54zoTegKF~$loxhCeeR&j*ztvZq(qJcD7' );
define( 'WP_CACHE_KEY_SALT', 'K&/r6A<DgR CwcKUk6%dp2&G>4]3HH(eHXo<#KJ@#GLb|dizEK>h_>];Mt(^f~}@' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kpu_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
