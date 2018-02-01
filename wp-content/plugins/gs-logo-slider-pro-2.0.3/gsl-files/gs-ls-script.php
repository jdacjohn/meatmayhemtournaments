<?php
//-------------- Enqueue Latest jQuery------------
function gs_ls_jquery() {
	wp_enqueue_script('jquery');
}
//add_action('init', 'gs_ls_jquery');

//-------------- Include js files---------------
function gs_ls_enq_scripts() {
	if (!is_admin()) {
		wp_register_script( 'gslBxsliderjs', GSL_FILES_URI . '/js/gsl.jquery.bxslider.min.js', array( 'jquery' ), GSL_VERSION, false );
		wp_register_script( 'gslEasingJs', GSL_FILES_URI . '/js/gsl.jquery.easing.1.3.js', array( 'jquery' ), GSL_VERSION, true );
		wp_register_script( 'gslgrayJs', GSL_FILES_URI . '/js/jquery.gray.min.js', array( 'jquery' ), GSL_VERSION, true );
		wp_register_script( 'gslCarouselTickerJs', GSL_FILES_URI . '/js/jquery.carouselTicker.min.js', array( 'jquery' ), GSL_VERSION, true );
		// wp_register_script( 'gslstartJs', GSL_FILES_URI . '/js/start.js', array( 'jquery' ), GSL_VERSION, true );

		wp_enqueue_script('gslBxsliderjs');
		wp_enqueue_script('gslEasingJs');
		wp_enqueue_script('gslgrayJs');
		wp_enqueue_script('gslCarouselTickerJs');
		wp_enqueue_script('gslstartJs');
	}
}
add_action( 'wp_enqueue_scripts', 'gs_ls_enq_scripts' ); 

//------------ Include css files-----------------
function gs_ls_adding_style() {
	if (!is_admin()) {
		$media = 'all';
		wp_register_style( 'gslBxsliderStyle', GSL_FILES_URI . '/css/gsl.jquery.bxslider.css', '', GSL_VERSION, $media );
		wp_register_style( 'gslCarouselTickerStyle', GSL_FILES_URI . '/css/carouselTicker.css', '', GSL_VERSION, $media );
		wp_register_style( 'gslMainStyle', GSL_FILES_URI . '/css/gsl.gs.main.css', '', GSL_VERSION, $media );
				
		wp_enqueue_style('gslBxsliderStyle');
		wp_enqueue_style('gslCarouselTickerStyle');
		wp_enqueue_style('gslMainStyle');	
	} 
}
add_action( 'init', 'gs_ls_adding_style' );