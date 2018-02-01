<?php 
//--------- Getting values from setting panel ---------------- //

// function gs_l_get_option( $option, $section, $default = '' ) {

//     $options = get_option( $section );
 
//     if ( isset( $options[$option] ) ) {
//         return $options[$option];
//     }
 
//     return $default;
// }

// ---------- Shortcode [gs_logo4] -------------

add_shortcode( 'gs_logo4', 'gs_logo_shortcode4' );

function gs_logo_shortcode4( $atts ) {

	$gs_l_title = gs_l_get_option( 'gs_l_title', 'gs_l_control', 'no' );
	$gs_l_mode = gs_l_get_option( 'gs_l_mode', 'gs_l_general', 'horizontal' );
	$gs_l_slide_speed = gs_l_get_option( 'gs_l_slide_speed', 'gs_l_general', '500' );
	$gs_l_tk_mode = gs_l_get_option( 'gs_l_tk_mode', 'gs_l_general', 'off' );
	$gs_l_tk_mode = ($gs_l_tk_mode === 'on' ? 1 : 0);
	$gs_l_inf_loop = gs_l_get_option( 'gs_l_inf_loop', 'gs_l_general', 'on' );
	$gs_l_inf_loop = ($gs_l_inf_loop === 'off' ? 0 : 1);
	$gs_l_gray = gs_l_get_option( 'gs_l_gray', 'gs_l_styling', '' );

	extract(shortcode_atts( 
			array(
			'posts' 	=> -1,
			'order'		=> 'DESC',
			'orderby'   => 'date',
			'title'		=> $gs_l_title,
			'logo_cat'	=> '',
			'mode'		=> $gs_l_mode,
			'speed'		=> $gs_l_slide_speed,
			'inf_loop'	=> $gs_l_inf_loop,
			'ticker'	=> $gs_l_tk_mode,
			'logo_color' => $gs_l_gray,
			'ids'		=> array()
			), $atts 
		));

	if( ! is_array($ids) ) {
		$ids = explode(",", $ids);
	}

	// WP_Query arguments
	$gsl_args = array (
		'post_type'			=> array( 'gs-logo-slider' ),
		'order'				=> $order,
		'orderby'			=> $orderby,
		'posts_per_page'	=> $posts,
		'logo-category'		=> $logo_cat,
		'post__in' 			=> $ids
	);

	// The Query
	$gsl = new WP_Query( $gsl_args );

	$gs_l_clkable = gs_l_get_option( 'gs_l_clkable', 'gs_l_control', '_blank' );
	$gs_l_width = gs_l_get_option( 'gs_l_width', 'gs_l_styling', 200 );
	$gs_l_height = gs_l_get_option( 'gs_l_height', 'gs_l_styling', 200 );

	$output = '<div class="gs_logo_container">';

	// The Loop
	if ( $gsl->have_posts() ) {
		while ( $gsl->have_posts() ) {
			$gsl->the_post();

				$gsl_post_id = get_the_ID();
				$gs_logo_id = get_post_thumbnail_id($gsl_post_id);
				// $gs_logo_url = wp_get_attachment_image_src($gs_logo_id, 'full', true);
				// $gs_logo = aq_resize_gsl( $gs_logo_url[0], $gs_l_width, $gs_l_height, true );
				$gs_logo_url = wp_get_attachment_image_src($gs_logo_id, array(200,200), true);
				$gs_logo = $gs_logo_url[0];

				$gs_logo_alt = get_post_meta($gs_logo_id,'_wp_attachment_image_alt',true);
				$meta = get_post_meta( get_the_id() );

			$output .= '<div class="gs_logo_single">';

				if ($meta['client_url'][0]) :
			 		$output .= '<a href="'. $meta['client_url'][0] .'" target="'.$gs_l_clkable.'">';
			 	endif;

			 	if ($gs_logo) :
					$output .= '<img class="'.$logo_color.'" src="'.$gs_logo.'" alt="'.$gs_logo_alt.'" >';
				endif;

				if ($meta['client_url'][0]) :
					$output .= '</a>';
				endif;
				
				if ( $title == "yes" ) :
					$output .= '<h3 class="gs_logo_title">'. get_the_title() .'</h3>';
				endif;
			$output .= '</div>';
		}
	} else {
		$output .= "No Logo Added!";
	}
	// Restore original Post Data
	wp_reset_postdata();

	$output .= '</div>' . gs_ls_slider_trigger4($speed, $mode, $ticker, $inf_loop);

	return $output;
}


function gs_ls_slider_trigger4($speed, $mode, $ticker, $inf_loop){

	$gs_l_autop_pause = gs_l_get_option( 'gs_l_autop_pause', 'gs_l_general', '4000' );
	$gs_l_slider_stop = gs_l_get_option( 'gs_l_slider_stop', 'gs_l_general', 'on' );
	$gs_l_slider_stop = ($gs_l_slider_stop === 'off' ? 0 : 1);
	$gs_l_stp_tkr = gs_l_get_option( 'gs_l_stp_tkr', 'gs_l_general', 'off' );
	$gs_l_stp_tkr = ($gs_l_stp_tkr === 'on' ? 1 : 0);
	$gs_l_pagi = gs_l_get_option( 'gs_l_pagi', 'gs_l_control', 'off' );
	$gs_l_pagi = ($gs_l_pagi === 'on' ? 1 : 0);
	$gs_l_play_pause = gs_l_get_option( 'gs_l_play_pause', 'gs_l_control', 'off' );
	$gs_l_play_pause = ($gs_l_play_pause === 'on' ? 1 : 0);
	$gs_l_ctrl = gs_l_get_option( 'gs_l_ctrl', 'gs_l_control', 'on' );
	$gs_l_ctrl = ($gs_l_ctrl === 'off' ? 0 : 1);
	$gs_l_margin = gs_l_get_option( 'gs_l_margin', 'gs_l_styling', '10' );
	$gs_l_slide_w = gs_l_get_option( 'gs_l_slide_w', 'gs_l_styling', '200' );
	$gs_l_min_logo = gs_l_get_option( 'gs_l_min_logo', 'gs_l_styling', '1' );
	$gs_l_max_logo = gs_l_get_option( 'gs_l_max_logo', 'gs_l_styling', '5' );
	$gs_l_move_logo = gs_l_get_option( 'gs_l_move_logo', 'gs_l_styling', '1' );
	
?><script type="text/javascript">
	var gsl_viewport = jQuery(window).width();
	jQuery.noConflict();
	jQuery(document).ready(function(){
	  jQuery('.gs_logo_container').bxSlider({
	  	mode: <?php echo "'$mode'"; ?>,
	  	speed: <?php echo $speed; ?>,
	  	pause: <?php echo $gs_l_autop_pause; ?>,
	  	auto: <?php echo $inf_loop; ?>,
	  	autoHover: <?php echo $gs_l_slider_stop; ?>,
	  	ticker: <?php echo $ticker; ?>,
	  	tickerHover: <?php echo $gs_l_stp_tkr; ?>,
	  	controls: <?php echo $gs_l_ctrl; ?>,
	  	pager: <?php echo $gs_l_pagi; ?>,
	  	autoControls: <?php echo $gs_l_play_pause; ?>,
	  	slideMargin: <?php echo $gs_l_margin; ?>,
	  	slideWidth: <?php echo $gs_l_slide_w; ?>,
	    minSlides: <?php echo $gs_l_min_logo; ?>,
	    // maxSlides: <?php echo $gs_l_max_logo; ?>,
	    maxSlides: ( gsl_viewport > 480 & gsl_viewport < 768 ) ? 1 : <?php echo $gs_l_max_logo; ?>,
	    // maxSlides: ( gsl_viewport < 430) ? 1 : <?php echo $gs_l_max_logo; ?>,
	  	moveSlides: <?php echo $gs_l_move_logo; ?>,
	  	useCSS: false
	  });
	 
	});
	</script>
<?php
}