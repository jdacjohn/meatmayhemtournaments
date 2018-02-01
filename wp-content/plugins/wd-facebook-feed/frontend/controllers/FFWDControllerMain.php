<?php

class FFWDControllerMain {
  ////////////////////////////////////////////////////////////////////////////////////////
  // Events                                                                             //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Constants                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Variables                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
	private $view;
  ////////////////////////////////////////////////////////////////////////////////////////
  // Constructor & Destructor                                                           //
  ////////////////////////////////////////////////////////////////////////////////////////
  public function __construct($params = array(), $from_shortcode = 0, $ffwd = 0, $view) {

		$this->view = $view;
		$this->display($params, $from_shortcode, $ffwd);
	}
  ////////////////////////////////////////////////////////////////////////////////////////
  // Public Methods                                                                     //
  ////////////////////////////////////////////////////////////////////////////////////////
  public function display($params, $from_shortcode = 0, $ffwd = 0) {
		require_once WD_FFWD_DIR . "/frontend/models/FFWDModelMain.php";
		$model_name = "FFWDModel" . $this->view;
    $view_name = "FFWDView" . $this->view;
		require_once WD_FFWD_DIR . "/frontend/views/".$view_name.".php";
		require_once WD_FFWD_DIR . "/frontend/models/".$model_name.".php";
    $model = new $model_name();
    $view = new $view_name($model);
    $view->display($params, $from_shortcode, $ffwd);
  }


	private function wd_fb_update() {
		global $wpdb;
		$query = "SELECT * FROM " . $wpdb->prefix . "wd_fb_info WHERE `update_mode` <> 'no_update'";
		$rows  = $wpdb->get_results( $query );
		require_once( WD_FFWD_DIR . '/framework/WDFacebookFeed.php' );
		WDFacebookFeed::update_from_shedule( $rows );
		die;
	}
  ////////////////////////////////////////////////////////////////////////////////////////
  // Getters & Setters                                                                  //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Private Methods                                                                    //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Listeners                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
}