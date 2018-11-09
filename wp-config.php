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
define('DB_NAME', 'cielpane_it');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'l6!CWKP9-^Gw!BnB<Z!@uR_Zq|yWwy,NR7Qm@Mu@1m^)%Ws8!v9lxeWv]PT-lbJ ');
define('SECURE_AUTH_KEY',  'I[XO^Mgh3[l HJ}-&pJD`Pe<9,7Ws}P]g^|bK3o#f|aMC,cQ:r%fD1NDEec@L]aD');
define('LOGGED_IN_KEY',    '.@<>vBdCrZBg:=pLQF~i3?(KapGTD|3qetI@3ahiT[jq/@n*P(l{RDH`;ph(Y3hi');
define('NONCE_KEY',        '!DR._~0b9xRYY[^Fw|Q4!t:B6Q[w5}@@2OG3/]QKoo>w6DDk.hOR>OeE2nT4VrkP');
define('AUTH_SALT',        'L6~rwZLOFN xPb_g]adIY9O04+j(!?$~ehhZX/gJsC:H+6SaKC7h2-9Lr[Vu*Pn7');
define('SECURE_AUTH_SALT', '>%%{womaPC;PF1u ?F<1gL.(8@IR}QQ:+|X2^Rh GB^l:UEC|!8Jo,OznA0Kh[>t');
define('LOGGED_IN_SALT',   'u%BP4ZEL?~iVt:cH oe&u$aGP=G~;^-Ge// um{pYkJ~ep`zxEgG;aje!T!gh0Za');
define('NONCE_SALT',       'fUJ22?oA<A!b e64#3amY[QK~D~ECCk},iLWw_F#il5ho`n130#jI9rNMfkfD3}%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dkp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
