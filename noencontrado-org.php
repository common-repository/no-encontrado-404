<?php
/*
Plugin Name: Noencontrado.org 404
Plugin URI: http://noencontrado.org
Description: Un plugin para Wordpress que permite utilizar tu pagina de 404 para la busqueda de niños perdidos.
Version: 1.3.3
Author: Ideas Que Transforman
*/

defined('ABSPATH') or die("Cannot access pages directly.");

require_once dirname(__FILE__) . '/lib/Vista.php';
add_action('template_redirect',   array('Noencontradoorg_Core', 'NEcarga404'), 1);

class Noencontradoorg_Core
{
    /**
    * Carga la Pagina de Noencontrado 404
    */
    static function NEcarga404()
    {
        if(is_404()) {            
            header("HTTP/1.1 404 Not Found");
            Noencontrado_Vista::cargar('noencontrado');
            exit;
        }
    }
}


function NOENCONTRADO_add_script_style() {
	wp_enqueue_style( 'my-style', plugin_dir_url( __FILE__ ).'views/css/404.css' );
	wp_enqueue_script( 'busqueda-404', plugin_dir_url( __FILE__ ).'lib/busqueda.js' );
	wp_enqueue_script( 'google-analytics-404', plugin_dir_url( __FILE__ ).'lib/google-analytics.js' );
	wp_enqueue_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'NOENCONTRADO_add_script_style' );



function NOENCONTRADO_my_plugin_body_class($classes) {
    $classes[] = 'tm-background';
    return $classes;
}
add_filter('body_class', 'NOENCONTRADO_my_plugin_body_class');

?>