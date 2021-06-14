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
define( 'DB_NAME', 'wordpress_dev-liberator' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8889' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c|kT Q#txIc~AN~*{T[]Te_w<DWGj-x^W|1a-//o1FDdqNMcr Kb?}_k8D]q1hXW' );
define( 'SECURE_AUTH_KEY',  '7;,vs&N(V8z*T5)>:?Np(B0HrKd1b${PR2Ba2DNKAAG%kWVV4GA`EzZ6)1bE@r0)' );
define( 'LOGGED_IN_KEY',    'V0KLzzh7q2q%PbFT]&t8Rt%HPb1]H}GsEvBTY?ioApqaoEo>A6@CO$-y}ne-^*tz' );
define( 'NONCE_KEY',        'f3i#{z^jU+M5)}6cfpI|3l0=}b~S~$]D^y^V5]`{,m_J?vxH]wop9C<PkHg6Q@Z~' );
define( 'AUTH_SALT',        'x=jNyt?9j-$@YnAmcu_n`7JOHTdg{Orf#|9&X!RLJ~bN;`SGr%pY`Ta^67rZ*VrR' );
define( 'SECURE_AUTH_SALT', '.Dr6bNM kGwWyl[cM-a9pxEu@Cr(mG;A^T6 36D^HS!tDjJpRCd~AHnw(NpOj2wQ' );
define( 'LOGGED_IN_SALT',   'mZ4`7{ NU(NfmRV%L$z3U_YFt2(SK1(EnW@goC<Tw;A(j%4Wikug@,ANKL7q?mIB' );
define( 'NONCE_SALT',       'akavzAor?V$>xDOK^m#;&%tYp5u|/q[`A9_)%D)@K*E+i@`IlJEl6EO;i#D($jAs' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
