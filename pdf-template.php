<?php
/**
 * PDF Template
 *
 * @package     pdftpl
 * @author      davidnmnoll
 * @copyright   2016 davidmnoll
 * @license     MIT
 *
 * @dmn-bp
 * Plugin Name: PDF Template
 * Plugin URI:  https://github.com/davidmnoll/wp-pdf-tpl
 * Description: Add PDF as a Page Template.
 * Version:     1.0.0
 * Author:      davidmnoll
 * Author URI:  https://davidmnoll.com
 * Text Domain: dmn-bp
 * License:     MIT
 */


require_once __DIR__ . '/lib/autoload.inc.php';
//require_once __DIR__ . '/classes/Pdf_Tpl_Init.php';
spl_autoload_register(function ($class_name) {
	if( 0 === strpos($class_name, 'Pdf_Tpl_') ){
		include_once __DIR__ . '/classes/'.$class_name . '.php';
	}else{
		// var_dump(__DIR__ . '/classes/'.$class_name . '.php');
	}
});

 add_action( 'plugins_loaded', array('Pdf_Tpl_Init', 'get_instance') );



// $pdf_tpl_init = new Pdf_Tpl_Init();
//
// add_action( 'init', array($pdf_tpl_init, 'init') );
