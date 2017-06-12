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
define('DB_NAME', 'eatplaycard');

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
define('AUTH_KEY',         'H[RDME1_6hs+oFF_2SlJ213<.rve>}Mt]Ryd<;wrNr/O1|qfIUH:M*t.YOR|Fb/(');
define('SECURE_AUTH_KEY',  '2t:qMQft>}dKvS!|;^#lG,++/u9[h/KT@E[^@+70v@CbXgdyD|nBMo/Z73++h%9]');
define('LOGGED_IN_KEY',    'Qz@1E*p_U-eNv9Z;4?cb;*z7g,CaEYR,,azd]/Z)7-S|n[Z/5F/azH_^|t,xnEn[');
define('NONCE_KEY',        ';Th-]/CmR^Xx@[`NeOE_NwY:T$owFuD[dbz7;C=HARO<U!|)>BuB@.^hyPlm[RgF');
define('AUTH_SALT',        '97Y}C&1W{;y-U$-ooOQYBk.(/jCHrj</V~dG:Dy._|#Nu<+XD)sN1KZ; f+0F=]N');
define('SECURE_AUTH_SALT', 'JiK#Im<EWI<ao@fyZgW;9<y|i|5F[a~6+--@>=/LMQ,O@C%Y)MiReaoa!]3dL@_s');
define('LOGGED_IN_SALT',   '$?qfh(AhY<]O2K;7IIboB*Y<5)Srg9qiYmA8RO^0JE%t_FjV:mCU77YAXof V Ee');
define('NONCE_SALT',       'Y)X1 h8-pt6QXcl@qaL9Eb0Ync!Bh>oBF^tO:+ei3gF`l|5|JR6>j=tD!Mj}y4JC');

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
define('WP_DEBUG', true);

define ('WPCF7_AUTOP', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
