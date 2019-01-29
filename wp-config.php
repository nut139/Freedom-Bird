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
define('DB_NAME', 'freedombird_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'JJzCrw=%W0mlOYQ;$##?cgW878i8^~ +jmozdWo_lO;i5=d-,Skdk^UyiX;{.E B');
define('SECURE_AUTH_KEY',  '$QuP8RiMC`j`zZZ`b}i6OF=`hT33QEi#48#HOsNlD|E,RaAdKiPSyl}S)if*@`dx');
define('LOGGED_IN_KEY',    '{6hDsAXJq7IHr86F^JSrO1m)J~3gfKkI(#$JG[dJ+oUK37a{f6e(fF!y,0$&PcY=');
define('NONCE_KEY',        'L|E:.Sup8k<T&F^n*E5+&b<FktE~HUJ!}Q[{I7+]0sRQY|KUCVin-]vFD[oEI2Yi');
define('AUTH_SALT',        'M%6X8>?k.fP6U.9$a{#(tNj@$!h~fDAHecJa>;<)yq)uaN$>PqBs6RYZ]cCrhg.i');
define('SECURE_AUTH_SALT', 'M8v}t3<fZ/l<FvwGA~DvGx4 d8IY~ygm50a0., udyH85a#r~(YP J@.$EiE5zAk');
define('LOGGED_IN_SALT',   'i1]zCvX5$AI/rqxv,4.Sgn`;Tbw8cESi3;)E&PIe;SygacC`Gqf%Np@Vd%DfB3X2');
define('NONCE_SALT',       '%U$*PO-ckz)7[9u>TNHj,w)@RhNDLVW/ax9Y a*qPXPD{9IbPJlPFM4% >7VsP@R');

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
