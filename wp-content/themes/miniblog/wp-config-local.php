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

define( 'WP_HOME', 'http://demo.docksal' );
define( 'WP_SITEURL', 'http://demo.docksal' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'default' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'user' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('AUTH_KEY',         'fOq8V^[s6614b,{[$v^AHQD8Q+s&(Z2v<.V2CeMbOn[RdULwlhRO}Lb]= $8AUt)');
define('SECURE_AUTH_KEY',  'g=zzkk+,#BsB6|-nY#HHj-bl1USV>gZ[g2s_b_za}dy+Na6Ji8:t9:WO*|.wt;~b');
define('LOGGED_IN_KEY',    '|Yc<%fZ2Legw3.i^DGB0g-87Ht=)mE_,](-x-tm[G,/.3/~|;`}m6:T8>q*aPui!');
define('NONCE_KEY',        'Ig4P*|E|52|+@<)6fE$${zp9V5r7{}{E=<@S%Kd1KI89bf^ IVt/7adVEpA^s,?2');
define('AUTH_SALT',        'W=izU&Z6F!5|lHx7,^H?=v|Uj<lpbVS-n>f@2DvB9-c8UQp~5x8C3L<!+v% iKA8');
define('SECURE_AUTH_SALT', '6jxIqW&ZO7wP;]WY=lG7WRZv{$3$5^S,av+fag4y?2(n%$w_tp,w+3:[v-|][Fy@');
define('LOGGED_IN_SALT',   '|>I22$~lzr9VA=*>io0%:e_L&yxl-j:i@E)7AE$7Dhr )iON%GzM=pB-2RlHkQfG');
define('NONCE_SALT',       'kL_Be+-gHp_5{Ib6ZOffTeQw/6nFqC>=p%|F45h6V^Sm]Ob~2J=4#{g-o3U0A:);');