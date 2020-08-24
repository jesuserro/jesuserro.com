<?php
/**
Usada en el template Libros Grid de Pods
@see:
- https://www.ta-camp.de/news/howto-format-the-post_date-in-a-template 
- https://www.php.net/manual/en/function.date.php
*/
function my_datum($input_date) 
{
	return date_i18n('Y F d', strtotime($input_date));
}

/**
Activada carga de Javascript en el fichero js/custom.js
@see:
- https://wordpress.stackexchange.com/questions/306604/adding-javascript-to-child-theme
*/
function carga_bootstrap(){
	$version = '4.5.2';
    wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/'.$version.'/js/bootstrap.min.js', array('jquery'), NULL, true );
    wp_enqueue_style( 'bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/'.$version.'/css/bootstrap.min.css', false, NULL, 'all' );
}
function my_custom_scripts() {
	carga_bootstrap();	
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ),'',true );
    }
add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );
