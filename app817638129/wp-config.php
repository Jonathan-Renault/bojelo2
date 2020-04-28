<?php


define('FS_METHOD', 'direct');
define('DISALLOW_FILE_EDIT', true);
define('WP_HOME', 'https://bojelo.com/');
define('WP_SITEURL', 'https://bojelo.com/');
define('FORCE_SSL_ADMIN', true);
define( 'WP_AUTO_UPDATE_CORE' , false );







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
define( 'DB_NAME', 'db817658725' );

/** MySQL database username */
define( 'DB_USER', 'bojelo' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ronald94120@' );

/** MySQL hostname */
define( 'DB_HOST', 'db817658725.ns3038232' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Nh0aV9s:g^uvaOK?v}$g8}+aUOy+q`RNNG5_yhd>2?1#4[>m<4FvGYYcdp0G.33T' );
define( 'SECURE_AUTH_KEY',   '3sr_8R~g485&zB%WH#|[z/uRzBfz_K F&>o(ixOj_U VeKnFme3l_70n&DUl0RX(' );
define( 'LOGGED_IN_KEY',     'f$#S-Uem=^w[.&#Z&RSDPSNFSSMc@TLAh%6Jly)z^. v{.{}<m6lFJp4ESVI%_*&' );
define( 'NONCE_KEY',         ':gs em-shL@K>F;EURl;i[ Pvq^@LWFO(]46a)vo@E}[WNE*/RQrh>KPo@~v^)jh' );
define( 'AUTH_SALT',         'WlCuz1N%{})_pcEn.NIH2{!7/Q~s@Grzre:qoQyp>5/%%cySk,Pa.%Be79RiI9b4' );
define( 'SECURE_AUTH_SALT',  '(rDHMyyZKFRa|sKpnijrDZUBa7h}VDtjR)Rg|My&Nlc)C4o%^|<8lwe6j5_BE|$1' );
define( 'LOGGED_IN_SALT',    '1cG5A#:&F*)teFaJ/uINcBA<K,J$(E|ThJt;=gh6QS3p6;-s37%g9`=dP<DfVc(m' );
define( 'NONCE_SALT',        '[&G8j6&:V<EHZ.}vkZRSh835K#b+SryTFy5D8=&7~gagM9#WlEQC{K6Etp_/RW6w' );
define( 'WP_CACHE_KEY_SALT', '-_yZ/h75l}0V.q:J4Xv*^vu#(a|*}6`:$B#Yu~]&>GZZ*0;V[?,>9rK72UhAPkH4' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tmg1h9h024';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
