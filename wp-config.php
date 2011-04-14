<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'c6wp');

/** MySQL database username */
define('DB_USER', 'c6wp');

/** MySQL database password */
define('DB_PASSWORD', 's1l3xd1g1t4l');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '+ru.u=s+;?3)Q3fLOtYsL:/*<`7.iG|+{db|<|nas!^ QI2KlW9]Ti#kc.W5_IkN');
define('SECURE_AUTH_KEY',  '&trRhs<O$ /SgPs|#INVIR8Ps#1`9M|u6SZk_acq:~]%JS%%Uv*UN7Beq#mOhEOH');
define('LOGGED_IN_KEY',    '!Km38eodl=-zxIc4(5lQ/<hg4|YrkL((of^uOuEwp^9B9+Z<DlOf&*r~Cu^Ns0>J');
define('NONCE_KEY',        '<}Zo~V!<au<:a|y}u,GDlYor}tTq~9dZbx52,OmTD&Iao-K*JD`s15*L[_&6@^3/');
define('AUTH_SALT',        'P-V iVmt.!u6]!rJX>LzN:.c]GGRn@l[H16^,w^&-p}}e%s> Q#<D{PJRkRJ_Ud$');
define('SECURE_AUTH_SALT', 'QWYpT.w*.x09CciC7gsnk!cDqmk5km.~YCyLF)L_a}u81<DeVZPZ1$=Lb/+{pa:s');
define('LOGGED_IN_SALT',   'S?Il4w+[]_C_[UXD5@]]z7S$o/,qW)F|0|xYt+2xZgcC0]nELVy;}`?/4gKcQVY.');
define('NONCE_SALT',       'iATosoJFRHQw|;||;[b./qB=SNp{q|uas~X>|JLZx8O{C-0$`mZ+~87&!W+K$:)|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

