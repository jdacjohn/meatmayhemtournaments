<?php
/**
 * This page shows the procedural or functional example
 * OOP way example is given on the main plugin file.
 * @author Tareq Hasan <tareq@weDevs.com>
 */
 
/**
 * WordPress settings API demo class
 * @author Tareq Hasan
 */
 
if ( !class_exists('GS_logo_Settings_Config' ) ):
class GS_logo_Settings_Config {

    private $settings_api;

    function __construct() {
        $this->settings_api = new GS_Logo_WeDevs_Settings_API;

        add_action( 'admin_init', array($this, 'admin_init') );
        add_action( 'admin_menu', array($this, 'admin_menu') );
    }

    function admin_init() {

        //set the settings
        $this->settings_api->set_sections( $this->get_settings_sections() );
        $this->settings_api->set_fields( $this->get_settings_fields() );

        //initialize settings
        $this->settings_api->admin_init();
    }

    function admin_menu() {
	
		add_submenu_page( 'edit.php?post_type=gs-logo-slider', 'Logo Settings', 'Logo Settings', 'delete_posts', 'logo-settings', array($this, 'plugin_page')); 
    }

    function get_settings_sections() {
        $sections = array(
            array(
                'id' 	=> 'gs_l_general',
                'title' => __( 'General Settings', 'golamsamdani' )
            ),
            array(
                'id'    => 'gs_l_control',
                'title' => __( 'Control Settings', 'golamsamdani' )
            ),
            array(
                'id' 	=> 'gs_l_styling',
                'title' => __( 'Style Settings', 'golamsamdani' )
            )
        );
        return $sections;
    }

    /**
     * Returns all the settings fields
     *
     * @return array settings fields
     */
    function get_settings_fields() {
        $settings_fields = array(
            'gs_l_general' => array(
                // Direction
                array(
                    'name'      => 'gs_l_mode',
                    'label'     => __( 'Direction', 'golamsamdani' ),
                    'desc'      => __( 'Select Direction mode to slide Logos', 'golamsamdani' ),
                    'type'      => 'select',
                    'default'   => 'horizontal',
                    'options'   => array(
                        'horizontal'    => 'Horizontal',
                        'vertical'      => 'Vertical'
                    )
                ),
                // Sliding Speed
                array(
                    'name' => 'gs_l_slide_speed',
                    'label' => __( 'Sliding Speed', 'golamsamdani' ),
                    'desc' => __( 'You can increase / decrease sliding speed. Set the speed in <b>millisecond</b>. Default 500. To disable autoplay just set the speed <b>0</b>', 'golamsamdani' ),
                    'type' => 'range',
                    'sanitize_callback' => 'intval',
                    'range_min' => 0,
                    'range_max' => 20000,
                    'range_step' => 50,
                    'default' => 500
                ), 
                // Autoplay Pause
                array(
                    'name' => 'gs_l_autop_pause',
                    'label' => __( 'Autoplay Pause', 'golamsamdani' ),
                    'desc' => __( 'You can increase / decrease the amount of time (in ms) between each auto transition. Default 4000', 'golamsamdani' ),
                    'type' => 'range',
                    'sanitize_callback' => 'intval',
                    'range_min' => 1000,
                    'range_max' => 10000,
                    'range_step' => 1000,
                    'default' => 4000
                ), 
                //Infinite Loop
                array(
                    'name'      => 'gs_l_inf_loop',
                    'label'     => __( 'Infinite Loop', 'golamsamdani' ),
                    'desc'      => __( 'If ON, clicking "Next" while on the last slide will transition to the first slide and vice-versa', 'golamsamdani' ),
                    'type'      => 'switch',
                    'switch_default' => 'OFF'
                ),
                // Slider Stop on mouse hover
                array(
                    'name'      => 'gs_l_slider_stop',
                    'label'     => __( 'Stop on hover', 'golamsamdani' ),
                    'desc'      => __( 'Auto show will pause when mouse hovers over Logo. Default On', 'golamsamdani' ),
                    'type'      => 'switch',
                    'switch_default' => 'ON'
                ),
                // Ticker Mode
                array(
                    'name'      => 'gs_l_tk_mode',
                    'label'     => __( 'Ticker Mode', 'golamsamdani' ),
                    'desc'      => __( 'Slide Logos in ticker mode (similar to a news ticker). Default Off. <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In order to make the ticker appear slower, the Speed value must be raised.', 'golamsamdani' ),
                    'type'      => 'switch',
                    'switch_default' => 'OFF'
                ),
                // Pause Ticker on Hover
                array(
                    'name'      => 'gs_l_stp_tkr',
                    'label'     => __( 'Pause Ticker on Hover', 'golamsamdani' ),
                    'desc'      => __( 'Ticker will pause when mouse hovers over slider. Note: this functionality does NOT work if using CSS transitions!. Default Off', 'golamsamdani' ),
                    'type'      => 'switch',
                    'switch_default' => 'OFF'
                )
            ),
            // GS Logo control settings
            'gs_l_control' => array(
                // nxt / prev control
                array(
                    'name'      => 'gs_l_ctrl',
                    'label'     => __( 'Next / Previous', 'golamsamdani' ),
                    'desc'      => __( 'Next / Previous control for Logo slider. Default On <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Controls are not available when Ticker Mode is enabled', 'golamsamdani' ),
                    'type'      => 'switch',
                    'switch_default' => 'ON'
                ),
                // Pagination
                array(
                    'name'      => 'gs_l_pagi',
                    'label'     => __( 'Pagination', 'golamsamdani' ),
                    'desc'      => __( 'Pagination control bellow the Logo slider. Default OFF', 'golamsamdani' ),
                    'type'      => 'switch',
                    'switch_default' => 'OFF'
                ),
                // Play Pause
                array(
                    'name'      => 'gs_l_play_pause',
                    'label'     => __( 'Play Pause', 'golamsamdani' ),
                    'desc'      => __( 'Play Pause control bellow the Logo slider. Default OFF', 'golamsamdani' ),
                    'type'      => 'switch',
                    'switch_default' => 'OFF'
                ),   
                // Logo Title
                array(
                    'name'      => 'gs_l_title',
                    'label'     => __( 'Logo Title', 'golamsamdani' ),
                    'desc'      => __( 'Display Logo including / excluding Title. Default OFF', 'golamsamdani' ),
                    'type'      => 'select',
                    'default'   => 'no',
                    'options'   => array(
                        'no'    => 'No',
                        'yes'   => 'Yes'
                    )
                ),        
                // Clickable Logos
                array(
                    'name'      => 'gs_l_clkable',
                    'label'     => __( 'Clickable Logos', 'golamsamdani' ),
                    'desc'      => __( 'Specify target to load the Links, Default New Tab ', 'golamsamdani' ),
                    'type'      => 'select',
                    'default'   => '_blank',
                    'options'   => array(
                        '_blank'    => 'New Tab',
                        '_self'     => 'Same Window'
                    )
                )

            ),
			// GS Logo Style settings
            'gs_l_styling' => array(
                // Logo Width
                array(
                    'name'  => 'gs_l_width',
                    'label' => __( 'Logo Width (px)', 'golamsamdani' ),
                    'desc'  => __( 'Increase / decrease Logo size in width. Default 200, max 550.', 'golamsamdani' ),
                    'type'  => 'number',
                    'min'   => 0,
                    'max'   => 550,
                    'default' => 200
                ), 
                // Logo height
                array(
                    'name'  => 'gs_l_height',
                    'label' => __( 'Logo Height (px)', 'golamsamdani' ),
                    'desc'  => __( 'Increase / decrease Logo size in height. Default 200, max 550.', 'golamsamdani' ),
                    'type'  => 'number',
                    'min'   => 0,
                    'max'   => 550,
                    'default' => 200
                ),
                // Logos style
                array(
                    'name'      => 'gs_l_gray',
                    'label'     => __( 'Logos style', 'golamsamdani' ),
                    'desc'      => __( 'Logo grayscale feature works only in modern browsers like Chrome, Firefox and Safari', 'golamsamdani' ),
                    'type'      => 'select',
                    'default'   => '',
                    'options'   => array(
                        ''      => 'Default',
                        'gray'  => 'Grayscale',
                        'gray_to_def' => 'Gray to Default',
                        'def_to_gray' => 'Default to Gray'
                    )
                ),
                // Logo Margin
                array(
                    'name'  => 'gs_l_margin',
                    'label' => __( 'Logo Margin (px)', 'golamsamdani' ),
                    'desc'  => __( 'Increase / decrease Margin between each Logo. Default 10, max 30.', 'golamsamdani' ),
                    'type'  => 'number',
                    'min'   => 0,
                    'max'   => 30,
                    'default' => 10
                ),
                // Slide Width
                array(
                    'name'  => 'gs_l_slide_w',
                    'label' => __( 'Slide Width (px)', 'golamsamdani' ),
                    'desc'  => __( 'The width of each slide. This setting is required for all horizontal carousels!. Default 200, max 500.', 'golamsamdani' ),
                    'type'  => 'number',
                    'min'   => 0,
                    'max'   => 500,
                    'default' => 200
                ),
                // Min Logos
                array(
                    'name'  => 'gs_l_min_logo',
                    'label' => __( 'Minimum Logos', 'golamsamdani' ),
                    'desc'  => __( 'The minimum number of logos to be shown. Default 1, max 10.', 'golamsamdani' ),
                    'type'  => 'number',
                    'min'   => 1,
                    'max'   => 10,
                    'default' => 1
                ),
                // Max Logos
                array(
                    'name'  => 'gs_l_max_logo',
                    'label' => __( 'Maximum Logos', 'golamsamdani' ),
                    'desc'  => __( 'The maximum number of logos to be shown. Default 5, max 10.', 'golamsamdani' ),
                    'type'  => 'number',
                    'min'   => 1,
                    'max'   => 10,
                    'default' => 5
                ),
                // Move Logos
                array(
                    'name'  => 'gs_l_move_logo',
                    'label' => __( 'Move Logos', 'golamsamdani' ),
                    'desc'  => __( 'The number of logos to move on transition. Default 1, max 10.', 'golamsamdani' ),
                    'type'  => 'number',
                    'min'   => 0,
                    'max'   => 10,
                    'default' => 1
                )

				
            )
        );

        return $settings_fields;
    }

    function plugin_page() {
        echo '<div class="wrap gs_t_wrap">';

        $this->settings_api->show_navigation();
        $this->settings_api->show_forms();

        echo '</div>';
    }


    /**
     * Get all the pages
     *
     * @return array page names with key value pairs
     */
    function get_pages() {
        $pages = get_pages();
        $pages_options = array();
        if ( $pages ) {
            foreach ($pages as $page) {
                $pages_options[$page->ID] = $page->post_title;
            }
        }

        return $pages_options;
    }

}
endif;

$settings = new GS_logo_Settings_Config();