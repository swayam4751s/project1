<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'minor_project' );

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
define( 'AUTH_KEY',         'h(`5TdC.mU*M1/ v;nQ|mTng@`y?ro:Udah>kel4QmdJ0Ww2`mAn=R1;`%/MI!<W' );
define( 'SECURE_AUTH_KEY',  '*w,aSgoP[pR^ct7>?aQE1uA9x*M&qgsw1e4$cu*XEKyKxk-Wi=b&h{1usg`:7qNQ' );
define( 'LOGGED_IN_KEY',    'D=tQ<wo, #?nrhG/!%*@hrs D?H_+USN= ID@~{DFQ0 m?t5]-= :ey2p#PM19ST' );
define( 'NONCE_KEY',        'L7_nxqP[!MHM$A=*@Bh>hXS7v;QT`JejuNqzO=::g9FdV@>xuhw^Fe`7lr_}#R/9' );
define( 'AUTH_SALT',        '4U=b,1w%W7)gIC__c}}~1g`QrZ}[Kv:<R%aO|+q{[5(V(}ias<aO~tS(q,,hHwUR' );
define( 'SECURE_AUTH_SALT', 'K$FDI!o/Eh85XyRX&)P&NK#oO:-9tkoSopOgJ:qD=z%gg(</BBi@4{|,?I4/ic}.' );
define( 'LOGGED_IN_SALT',   'VOk?LuRP^,.6d6s0c4^CP%eucsLI>GeK-sFMiF-T6z(|cHqfNB]BI2cMla.5i~^m' );
define( 'NONCE_SALT',       '|T(NcrIxXQ&nP*>PSUk#nM?AwxpMEn7+PK^HdaOD R8s|(vPMCxqGq_U8c!gA(:L' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
