<?php
# Database Configuration
define('DB_NAME','wp_suitable');
define('DB_USER','suitable');
define('DB_PASSWORD','OicbuslsjqWfIg43kJOK');
define('DB_HOST','127.0.0.1');
define('DB_HOST_SLAVE','localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wwd_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '3R ]2@V#@Liz/XsHYJO=aLbS-B6V5|}~6o u3&~DB<u_Zk7Q Ae{oo>_xPg77<5d');
define('SECURE_AUTH_KEY',  '4^S+8]S*J1~T:7.0>/tfHuwDY;xk3_Q|%+ _uVFy`(V0m:6I^U|t7Xs%:ycF1m`;');
define('LOGGED_IN_KEY',    '|X[h!P[l/;hT/6S<d7u{./Oi7s%f6l3:304;@X$?ll2nD55|P[;?YIQ^Y:{sE$B:');
define('NONCE_KEY',        'xXt1AeV9re?,<mBD#%fh.^?aAS-<#Z1ve6@;H(>?x+9o$T/MFH+r_tNd+j)sKK|K');
define('AUTH_SALT',        'qvVr}1`?*z%iAuy:2sSd~BUSOADQ@Wb`Z1UYzI]ZUDzBu(/sFUBMcUfUE;;ksE*r');
define('SECURE_AUTH_SALT', '3Zzopt8K<v$V6dwQ3l-X~?dKKk+9d|2d6Yu$s=00M]8q;i/?yo]|eQsnCGiT0?2m');
define('LOGGED_IN_SALT',   'b+DwmY2 ef8;0~R3c7|7}{m=JegmS};Y_tezbFn*vo6)$he:DJ+CkYQy$HTCW8,q');
define('NONCE_SALT',       'C<vii_x6l<y3zXeY|7j&Y{_Dh6|-9kA?i-bI|}U#n-79H:wzbVL^K$g1_F/Z5p<3');


# Localized Language Stuff

define('WP_CACHE',TRUE);

define('PWP_NAME','suitable');

define('FS_METHOD','direct');

define('FS_CHMOD_DIR',0775);

define('FS_CHMOD_FILE',0664);

define('PWP_ROOT_DIR','/nas/wp');

define('WPE_APIKEY','95e4677a52f0230f6d3dc228d760e1974841f4a9');

define('WPE_FOOTER_HTML',"");

define('WPE_CLUSTER_ID','1805');

define('WPE_CLUSTER_TYPE','pod');

define('WPE_ISP',true);

define('WPE_BPOD',false);

define('WPE_RO_FILESYSTEM',false);

define('WPE_LARGEFS_BUCKET','largefs.wpengine');

define('WPE_CDN_DISABLE_ALLOWED',false);

define('DISALLOW_FILE_EDIT',FALSE);

define('DISALLOW_FILE_MODS',FALSE);

define('DISABLE_WP_CRON',false);

define('WPE_FORCE_SSL_LOGIN',false);

define('FORCE_SSL_LOGIN',false);

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define('WPE_EXTERNAL_URL',false);

define('WP_POST_REVISIONS',FALSE);

define('WPE_WHITELABEL','wpengine');

define('WP_TURN_OFF_ADMIN_BAR',false);

define('WPE_BETA_TESTER',false);

umask(0002);

$wpe_cdn_uris=array ();

$wpe_no_cdn_uris=array ();

$wpe_content_regexs=array ();

$wpe_all_domains=array (  0 => 'suitable.wpengine.com',  1 => 'suitablenyc.com',  2 => 'www.suitablenyc.com',);

$wpe_varnish_servers=array (  0 => 'pod-1805',);

$wpe_ec_servers=array ();

$wpe_largefs=array ();

$wpe_netdna_domains=array ();

$wpe_netdna_push_domains=array ();

$wpe_domain_mappings=array ();

$memcached_servers=array ();
define('WPLANG','');

# WP Engine ID


define('PWP_DOMAIN_CONFIG', 'www.suitablenyc.com' );

# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
