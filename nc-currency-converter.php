<?php
/**
 * Plugin Name: JS Currency Converter
*   Plugin URI: http://nccassady.com 
*   Description: Convenient, JavaScript enabled currency converter widget to include on your sidebar.
*   Version: 1.0 
*   Author: Nick Cassady
*   Author URI: http://nccassady.com 
 */


/**
 * Constants
 */
define('NC_CURRENCY_CONVERTER_WIDGET_ID', "nc_currency_converter");

/**
* 
*/
class js_currency_converter
{
	function converter($args)
	{
		extract($args, EXTR_SKIP);

		echo $before_title;
		echo "Convert:";
		echo $after_title;

		echo $before_widget;
		include('converter.html');
		echo $after_widget;
	}

	function converter_init()
	{
		wp_register_sidebar_widget( NC_CURRENCY_CONVERTER_WIDGET_ID, __("Currency Converter"), array($this, "converter") );
	}
}

$js_currency_converter = new js_currency_converter();
add_action( "plugins_loaded", array($js_currency_converter, "converter_init") );


?>