<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'myfazzep_speakon');

/** MySQL database username */
define('DB_USER', 'myfazzep_speakon');

/** MySQL database password */
define('DB_PASSWORD', '6SP1.vaa(6');

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
define('AUTH_KEY',         'xmrwwy18vmelc6tstsc0jp32m8a1tja0rnq6qpthpsmgbpqdpy4towyli52d9ip6');
define('SECURE_AUTH_KEY',  'qjpbsrboj5pjejxdjpg1d2g1ldtb16tcmdffzydmzu6rkvm1ztjkxxu4fzevcij9');
define('LOGGED_IN_KEY',    'hwf4bngl9bn3dco1s4n7xwbgdbhz1dcxefmppmv6a9hzsenmkeo5xy32g0xfakbq');
define('NONCE_KEY',        'zpj5xipxghqwkqhr4zhavmcyygxdeaowvmhbivfkvklipzzpqluooqprtpm45jcq');
define('AUTH_SALT',        'y5kda7yhb8sdn5fdtr56inn02h5zzrres9ayodm4khk166cp6wpzfcjkorhlwloy');
define('SECURE_AUTH_SALT', '7a0eewgsyzfrragpsz4dohpyq9g8dnvtrhrcmkbhmxszn3mqpg8bqz1qylswrnd6');
define('LOGGED_IN_SALT',   'qndsvij0araejjusdfsau5vj7yjmio1yk5ma5bxaolcyjzufj9huosuv2o7l9kip');
define('NONCE_SALT',       'btpxfbf2edvtoxygubhaitosf2km5afj2abguao5ip5zuo8vhlrajghjz2doukfj');

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
