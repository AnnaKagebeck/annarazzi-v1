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
define('DB_NAME', 'annarazzi_se');

/** MySQL database username */
define('DB_USER', 'annarazzi_se');

/** MySQL database password */
define('DB_PASSWORD', 'Hcwhpyfd');

/** MySQL hostname */
define('DB_HOST', 'annarazzi.se.mysql');

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
define('AUTH_KEY',         'D}x3@;KHqgrf1u[qp_+j`7dtfH ${CrX<BC({s$H1Z!p(h^zKb nHx@Pk,2jK|m*');
define('SECURE_AUTH_KEY',  '|YH=H,M<H2n#ou@v!:?+cY6vsP!l&JNZr2,)ZFz:S&%uC6PEsK0Q|$Y4El^xw]I6');
define('LOGGED_IN_KEY',    '9ADgZq8c1{urxx-e+u_H=7ww,Pi-;LVO=y(L}6{1QrD)OQZ!P%#Tl{-5@#e0&g(`');
define('NONCE_KEY',        '|I!BN^-9h)++L1&zn6&XyhH|IO|+YFA%W`~9Xm2|A7Rh}|>zE&Otf7*ngr]f#@ab');
define('AUTH_SALT',        'Z)&-^09}PP-^VPB7:u+F=V-o``NTHZo/I%lF5&zaqS+xx_-4=%.G@-P}f85;,iAN');
define('SECURE_AUTH_SALT', '!|B&Ri9ecN@#p[Y1jYI[ZGaYQhG`?gQ+k`|zb|y 07p_S]mv4=aVsXdTD&9.$qRG');
define('LOGGED_IN_SALT',   '@4w`[+x5m8eB#){URt${^>Ea.ml;XrNpJdm=uGTN?_Hb^PkJg1>[Vz_Riv6/2lS{');
define('NONCE_SALT',       '|hb$-4.?-|%GP]Q68^*,t#9r!N8`cXzv5a:|(&KQ|1E8X^mWQ^DpJegL33|3O+t ');

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
