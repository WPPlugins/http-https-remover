<?php
/**
 * Plugin Name: HTTP / HTTPS Remover
 * Plugin URI: https://de.wordpress.org/plugins/http-https-remover/
 * Description: This Plugin cleans all the URLs in the source code while it removes the http:// and https:// and replaces it with //
 * Version: 1.5.3
 * Author: CONDACORE
 * Author URI: https://condacore.com/
 * License: GPLv3
 */
 
 
#     _____ ____  _   _ _____          _____ ____  _____  ______ 
#    / ____/ __ \| \ | |  __ \   /\   / ____/ __ \|  __ \|  ____|
#   | |   | |  | |  \| | |  | | /  \ | |   | |  | | |__) | |__   
#   | |   | |  | | . ` | |  | |/ /\ \| |   | |  | |  _  /|  __|  
#   | |___| |__| | |\  | |__| / ____ \ |___| |__| | | \ \| |____ 
#    \_____\____/|_| \_|_____/_/    \_\_____\____/|_|  \_\______|
#


if (!defined('ABSPATH')) exit;
class HTTP_HTTPS_REMOVER

{
	
	
	//Add some links on the plugin page

	// ###########################################
	// ##### Apply Plugin on the whole Site ######
	// ###########################################
	public function __construct()

	{
		
		add_action('wp_loaded', array(
			$this,
			'letsGo'
		) , 99, 1);
	}
	// #########################
	// ##### More Code... ######
	// #########################
	public function letsGo()

	{
		global $pagenow;
		ob_start(array(
			$this,
			'mainPath'
		));
	}
	public function mainPath($buffer)

	{
		$content_type = NULL;
		foreach(headers_list() as $header) {
			if (strpos(strtolower($header) , 'content-type:') === 0) {
				$pieces = explode(':', strtolower($header));
				$content_type = trim($pieces[1]);
				break;
			}
		}
		if (is_null($content_type) || substr($content_type, 0, 9) === 'text/html') {
			// ###############################
			// ##### The important Path ######
			// ###############################
			
			

			$buffer = str_replace(array('http://'.$_SERVER['HTTP_HOST'],'https://'.$_SERVER['HTTP_HOST']), '//'.$_SERVER['HTTP_HOST'], $buffer);
			$buffer = str_replace('content="//'.$_SERVER['HTTP_HOST'], 'content="https://'.$_SERVER['HTTP_HOST'], $buffer);
			$buffer = str_replace('> //'.$_SERVER['HTTP_HOST'], '> https://'.$_SERVER['HTTP_HOST'], $buffer);
			$buffer = str_replace('"url" : "//', '"url" : "https://', $buffer);
			$buffer = str_replace('"url": "//', '"url": "https://', $buffer);
			$buffer = preg_replace(array('|http://(.*?).googleapis.com|','|https://(.*?).googleapis.com|'), '//$1.googleapis.com', $buffer);
			$buffer = preg_replace(array('|http://(.*?).google.com|','|https://(.*?).google.com|'), '//$1.google.com', $buffer);
			$buffer = preg_replace(array('|http://(.*?).gravatar.com|','|https://(.*?).gravatar.com|'), '//$1.gravatar.com', $buffer);
			$buffer = preg_replace(array('|http://(.*?).w.org|','|https://(.*?).w.org|'), '//$1.w.org', $buffer);
			
			
			
		}
		return $buffer;
	}
}
new HTTP_HTTPS_REMOVER();

//Add some links on the plugin page
add_filter('plugin_row_meta', 'http_https_remover_extra_links', 10, 2);

function http_https_remover_extra_links($links, $file) {
	if ( $file == plugin_basename(dirname(__FILE__).'/http-https-remover.php') ) {
		//$links[] = '<a href="https://condacore.com/portfolio/http-https-remover/#beta" target="_blank">' . esc_html__('Become a Beta Tester', 'http-https-remover') . '</a>';
		$links[] = '<a href="https://twitter.com/condacore" target="_blank">' . esc_html__('Twitter', 'http-https-remover') . '</a>';
		$links[] = '<a href="https://paypal.me/MariusBolik" target="_blank">' . esc_html__('Donate', 'http-https-remover') . '</a>';
	}
	return $links;
}
