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
define('DB_NAME', 'erica');

/** MySQL database username */
define('DB_USER', 'th');

/** MySQL database password */
define('DB_PASSWORD', 'Pastorius1');

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
define('AUTH_KEY',         'o~J=w2#BETnc=8InGDyYO W<Sv%R=t|0?X]1-R<}Zga,Uzh!T7<-~J&fyMLKzbqj');
define('SECURE_AUTH_KEY',  'H8B8@5s$/D#k0}qBKjZ{~Uv!Y0^Ck]^m_[|riR|,I#-VKhSbHgh?Ks|9]Qk%1|Z+');
define('LOGGED_IN_KEY',    'UX9;/ xyEaFKBNrQ(7Q6~I Eo0AW2G/0_2Fd>BXQez{&!zE-(l|)OX|1*{<=f+vo');
define('NONCE_KEY',        '-9K8GBrr Ez=(1oU ^Cv1c:v4RG&|gaPHl/-|@3})Eb9cxv$b/O)39}5%ydLr{SD');
define('AUTH_SALT',        'A<RO4?R=b#Q%J| Ah.oguD3+ahm[I2W]|`zTa|dyBpf#(7Ek|R`5BOiBf!YhUJJV');
define('SECURE_AUTH_SALT', 'TW}zO8.+>t5`=-O%>qII=~r1+$BEyK$P7Z;2d-hU,z{JIVHC-vJziuszt{u@~o=V');
define('LOGGED_IN_SALT',   'xx:q.;9P2,IJRiha-H~$<{4O5f{q04-O+,OR[kwR@@2J#IdJ?@!}Kl2SBh/oTCx8');
define('NONCE_SALT',       'hXQ!*2lk]z;u $[|Z|E*VbNK_X]^K.B%-,y>}KU0(R;:09|A!E|X!tnN-I;v0jZq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'erica_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'pt-br');

/** Disable Revisions **/
define('WP_POST_REVISIONS', false );

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** Disallow File Editor on Wp Admin screen **/
define('DISALLOW_FILE_EDIT', true);

/** clean trash periodically (every day) **/
// define('EMPTY_TRASH_DAYS', 1);

/** Automatic database repair **/
define('WP_ALLOW_REPAIR', true);