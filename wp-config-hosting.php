<?php


/*******************************************************************************************/
/*******************************************************************************************/
/*                                                                                         */
/*               DO NOT CHANGE THIS FILE, YOUR CHANGES WILL NOT BE SAVED                   */
/*                                                                                         */
/*******************************************************************************************/
/*******************************************************************************************/


/**
 *      =======================   MANAGED HOSTING WP-CONFIG FILE   =======================
 *
 *          This file has configurations that are managed automatically by your
 *              hosting account, any changes you make to this file WILL NOT BE SAVED.
 *
 *          If you feel you need to make changes to the seetings in this file please
 *              contact an agent in the support department.
 * 
 *          @package Pagely v4.0.1
 *      ==================================================================================
 */



/** Wordpress Cacheing Setting **/
if ( !defined('WP_CACHE') )
	define('WP_CACHE', true);


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
define('DB_NAME',     'db_dom35295');

/** MySQL database username */
define('DB_USER',     'db_dom35295');

/** MySQL database password */
define('DB_PASSWORD', '7COXaUJKibOBh8AVybEHlbDu8FmDWX+MnG7khddS');

/** MySQL hostname */
define('DB_HOST', 'vps-virginia-aurora-7-cluster.cluster-czvuylgsbq58.us-east-1.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Define method for plugin/theme upload or update **/
if ( !defined('FS_METHOD') )
	define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

if ( !defined('AUTH_KEY') )
	define('AUTH_KEY',         'RPBSFqHo6cwmvtY7zhDB5c4k1T7bWmRVbWfa2WOa');

if ( !defined('SECURE_AUTH_KEY') )
	define('SECURE_AUTH_KEY',         'azFfygd1P87[jTnUV?FgXfxR#GiUlJ[gocSb$#4e');

if ( !defined('LOGGED_IN_KEY') )
	define('LOGGED_IN_KEY',         'b9xzv$l6dooX7[kz1Q9awkN97vQ2b#tbm3]IZicz');

if ( !defined('NONCE_KEY') )
	define('NONCE_KEY',         'D!YHnkDD9fw4IfF?h8pdLDke[wYF1?N8UP[R!wku');

if ( !defined('AUTH_SALT') )
	define('AUTH_SALT',         '8nKzUtfISEk1hYtVfJY551AA5Ciug50EJ4oVhxO!');

if ( !defined('SECURE_AUTH_SALT') )
	define('SECURE_AUTH_SALT',         'zsq2x2JVGEF?ONZfUBwI[PnnabT]R4]YNjgVzdd7');

if ( !defined('LOGGED_IN_SALT') )
	define('LOGGED_IN_SALT',         'QkAndYTEB$]pHeLjpJrdIrj!]?QJbFiZn!8H0oMo');

if ( !defined('NONCE_SALT') )
	define('NONCE_SALT',         '5uRvR8OqNUW7fA@O[fggKXF8EaSt54UBuo@O3Tev');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
if ( !defined('WPLANG') )
   define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if ( !defined('WP_DEBUG') )
    define('WP_DEBUG', false);


/** Turn off Post revisions to keep DB size down **/
if ( !defined('WP_POST_REVISIONS') )
	define('WP_POST_REVISIONS', false);


    
    /** Maske sure multisite is off **/
    if ( defined('MULTISITE') AND MULTISITE ){
        die('You do not have a multisite enabled account, please contact support.');
    }
    


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

// ** Redis defaults to allow seamless install of redis-cache(-pro) in Pagely environment ** //
define('WP_REDIS_DIR', __DIR__. '/../pagely-plugins/redis-cache-pro');
$WP_REDIS_CONFIG = array(
    'token'             => '208d7b6faa354ae6a640f5b991e595e3a8e328db0a93cad1ac7794ae994a',
    'host'              => '10.0.14.98',
    'port'              => '6380',
    'async_flush'       => true,
    'compression'       => 'zstd',
    'maxttl'            => 86400,
    'persistent'        => false,
    'serializer'        => 'igbinary',
    'split_alloptions'  =>  false,
    'timeout'           => '.5',
    'database'          => 1,
    'prefix'            => "db_dom35295",
);

foreach(['/user/redis-config.php', ABSPATH.'/../user/redis-config.php', ABSPATH.'/../../../user/redis-config.php'] as $path)
{
  if (file_exists($path))
  {
    include $path;
    break;
  }
}

//  Compatability with old redis-cache vars
if (defined('WP_REDIS_SERVER'))
    $WP_REDIS_CONFIG['host'] = WP_REDIS_SERVER;

if (!defined('WP_REDIS_PORT'))
    define('WP_REDIS_PORT', '6380');
else
    $WP_REDIS_CONFIG['port'] = WP_REDIS_PORT;

if (!defined('WP_CACHE_KEY_SALT'))
    define('WP_CACHE_KEY_SALT', 'db_dom35295');
else
    $WP_REDIS_CONFIG['prefix'] = WP_CACHE_KEY_SALT;

//  Turn our array into a constant
define('WP_REDIS_CONFIG', $WP_REDIS_CONFIG);
unset($WP_REDIS_CONFIG);

