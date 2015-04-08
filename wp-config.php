<?php
/**
 * The base configurations of the WordPress.
 */

// Include specific local configuration details.
include_once( 'local-config.php' );

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         '6rJ3>TKfAxf`X=Eeuxx+Xc04*pj-di5($|+vd)1@zi^+ Ggfk/Je-;Z2Tw6:?Q0a');
define('SECURE_AUTH_KEY',  '[>NdO@IhbbTYmNIU<]V6Bjt$7EBb+Afn.<kW`#+:!m<a+3N4R@HqCR~s%)j`S(t+');
define('LOGGED_IN_KEY',    '<y)zIEi}sN-x-1Wo a/*+eR8(m!-P-qW?tj:-x29fCfZIPZPXOLUFqy<ON$Pi~@-');
define('NONCE_KEY',        'onEfu6#7(/4*LyNVqQ6s6S3B*Y}cIL! G>kY;&E -`_4bgjI |I=+ Qm!W+CVHu>');
define('AUTH_SALT',        'fkvfi1-[11ln}>AtlnlHV8g~i/%=FAkK89!3b>3UzXi z9}l,*T-s .AsL+URLMf');
define('SECURE_AUTH_SALT', 'LNjd1OIEirMEb<hcWO^-Vw9ZQfqwaS#2XmA.5X5Da}Ps{GPM6B|e5eea&wVbfFxT');
define('LOGGED_IN_SALT',   '^g]D;e2-uBbG6(T-nmZH.ZiN{a;swNj(W-} a4rg}#|z)m/HeHW(YN]Fqgmcf00S');
define('NONCE_SALT',       'D*!6:p$u+*Pf{rY ThNA0fb+33p2Z=.hO>S?H}T+=?d4h#|O_ke.NSO S]B_Ei9%');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', 'sv_SE' );

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
    define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );

require_once( ABSPATH . 'wp-settings.php' );
