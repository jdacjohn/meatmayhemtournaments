<?php

// ---------- Shortcode [gs_logo2] -------------

add_shortcode( 'gs_logo2', 'gs_logo_shortcode2' );

function gs_logo_shortcode2( $atts ) {

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

	$output = '<div class="carouselTicker">';
		$output .= '<ul class="carouselTicker__list">';
			// The Loop
			if ( $gsl->have_posts() ) {
				while ( $gsl->have_posts() ) {
					$gsl->the_post();

						$gsl_post_id = get_the_ID();
						$gs_logo_id = get_post_thumbnail_id($gsl_post_id);
						$gs_logo_url = wp_get_attachment_image_src($gs_logo_id, 'full', true);
						$meta = get_post_meta( get_the_id() );
						$gs_logo = aq_resize_gsl( $gs_logo_url[0], $gs_l_width, $gs_l_height, true );
						$gs_logo_alt = get_post_meta($gs_logo_id,'_wp_attachment_image_alt',true);
						
					$output .= '<li class="carouselTicker__item">';

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
					$output .= '</li>';
				}
			} else {
				$output .= "No Logo Added!";
			}
			// Restore original Post Data
			wp_reset_postdata();
		$output .= '</ul>';
	$output .= '</div>' . gs_logo_ticker();

	return $output;
}

// -- Ticker
if ( !function_exists('gs_logo_ticker')) {

    function gs_logo_ticker(){ ?>
        <script type="text/javascript">
            jQuery.noConflict();
            jQuery(document).ready(function(){
                
                jQuery(".carouselTicker").carouselTicker({
				// animation speed
				speed: 2,

				// animation delay
				delay: 30,

				// RTL or LTR
				reverse: true
				});
            });
        </script>
    <?php
    }
    // add_action( 'wp_head','gs_logo_ticker' );
}