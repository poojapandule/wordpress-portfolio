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
define( 'DB_NAME', 'portfolio1' );

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
define( 'AUTH_KEY',         ':KlCm7QlG0w4|}S^.yHI2%Tfr$Ck_5q$o<m~b<j#{f_1z1Q3~tX5hRSp}=L%x0Z:' );
define( 'SECURE_AUTH_KEY',  'f$M,l#a %:ZpMmp$4&M_>>~eW1VFrml:h=bTU;8|;q_Nf<-%Rv@[h[X~RwXbAQYE' );
define( 'LOGGED_IN_KEY',    'jdbf~yd[{4>X5N%wc-L6GRMpP(7yRzRR$UjN=/%&~,LW.WRQf(_|0=>O?o:qGK~(' );
define( 'NONCE_KEY',        'k}]ZoD!3QrXh1ue]<ln!c]/a8u$_%&t]U?DQu7Q|FrdNp_~,YtfU4*/u3WlMSDUp' );
define( 'AUTH_SALT',        'lO*f0t>9bk2^3!5](3z4Uy7&Zl[=-m$=j=8S .IS?be99{W-0rZs^G5Ds&#YLaj>' );
define( 'SECURE_AUTH_SALT', 'Puq!ak4+^&b}UB1{yn{RrZL4a4y>7Ht4.Xp<-^$)5@I`2]PRq*q.6P]|sYHilNA?' );
define( 'LOGGED_IN_SALT',   'DY?%@d+/.[{gp9wdwQMrGi:vQrYQxEdm*M[$x6WmNd;=;AJfp[g-]&;d&/1D<[~X' );
define( 'NONCE_SALT',       'ch6_3C %6hY{DV=fth.BW>PoMb`9r=:Qap8ah]J;acg)$d%,0v7mb`OkrO8rr%#A' );

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
