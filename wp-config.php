<?php
define('WP_HOME', 'http://localhost/kstudio');
define('WP_SITEURL', 'http://localhost/kstudio');
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
define('DB_NAME', 'kstudio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'j,H64A/!z3v$n 94+K%#3X+nd)oB6Gh5s/8E>LIgX./z2G^teEa>Sr}:>u40{Wnt');
define('SECURE_AUTH_KEY',  'X-/xGLzdy~K-&D&+2-F/-lym@NW9lGwFZR3N&;.FXlofn(=>S+b=|3)w7]*b#/6D');
define('LOGGED_IN_KEY',    ' LapU>^-1%;rKkraL.aoq|~xzq|G|I8x!ATuJb23U8F1i~rbi{S5mvg/3_jOYc$k');
define('NONCE_KEY',        '3WHP))72Muq2a^H=[16c(jA8HCtyB5CW|j|6[QyLBWV}WiWs+X+Zoh?H/6Dg#MpB');
define('AUTH_SALT',        ':/= D<eK%{5H1=,>$YtiXbH@?V|+3SSYcQWpEhx&-O=5X#.x|.hSU/d,VP>-t>Fk');
define('SECURE_AUTH_SALT', 'ed-{BSjCQp1.!V=>}JFL^w;wtmB$FU#LTW`Wk|G1wP :Bcy@ g$y>R|2aZve%L;y');
define('LOGGED_IN_SALT',   '.:tYx&p(#dbbEKg6R*OKL-0,--tllGHg@G.T#.~(|(8:4(Rc0Jb?5ZSP|`g-VT><');
define('NONCE_SALT',       '3yU9#I!T4]`5jJn?Ao[lD^52k7$|xZ+Rjt# FNr~[Z3VuGyKxbC-0&&L l(5*<>Q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
