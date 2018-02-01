<?php

if ( ! defined( 'ABSPATH' ) ) { die; }

function ahe_circle_shortcode($atts, $content = null){
    extract( shortcode_atts( array(
    
        'id' => '',
        
    ), $atts) );
    
    
    $q = new WP_Query(
        array('posts_per_page' => -1, 'post_type' => 'hover_effect', 'p' => $id)
    );

    while($q->have_posts()) : $q->the_post();
    $idd = get_the_ID();

    $options = get_post_meta( $idd, 'hover_effects_options', true );
    
    $responsive =''; $sresponsive=''; $s2responsive =''; $cresponsive ='';
    
    if ( $options['style'] == 'circle') {
       require ('circle.php'); 
    }
    
    elseif ( $options['style'] == 'square') {
       require ('square.php');
    }
    
    elseif ( $options['style'] == 'square2') {
       require ('square2.php');
    }
    
    elseif ( $options['style'] == 'caption') {
       require ('caption.php');
    }
                
    endwhile;
    
    
    if ( $options['style'] == 'circle' && $cposition) {
       $output .='<style>.hover-cols {
                  text-align: center;
                }.hover_effects_li {
                  float: none !important;
                  display: inline-block !important;
                }</style>';
    }
    if ( $options['style'] == 'square' && $sposition) {
       $output .='<style>.hover-cols {
                  text-align: center;
                }.hover_effects_li {
                  float: none !important;
                  display: inline-block !important;
                }</style>';
    }
    if ( $options['style'] == 'square2' && $s2position) {
       $output .='<style>.square2style {
                  text-align: center;
                }</style>';
    }
    if ( $options['style'] == 'caption' && $caposition) {
       $output .='<style>.ahe-caption {
                      text-align: center;
                    }.caption_li {
                      display: inline-block;
                      float: none;
                    }</style>';
                }
        
    
    if ($responsive) {
		
	$output .='<style>
    @media only screen and (min-width: 320px) and (max-width: 480px) {
            .ih-item.circle {
        		  width: '.$mobile_image_width.'px !important;
        		  height: '.$mobile_image_width.'px !important;
        		}.ih-item.circle .img {
        		  height: '.$mobile_image_width.'px !important;
        		  width: '.$mobile_image_width.'px !important;
        		}.circle .info h3 {
                  font-size: 18px !important;
                }.circle .info p {
                  font-size: 15px !important;
                }.hover-cols {
                  text-align: center;
                }.hover_effects_li {
                  float: none !important;
                  display: inline-block !important;
                }
                .ih-item .img img {
                  height: 100% !important;
                }                
    
    }
    
    @media only screen and (min-width: 768px) and (max-width: 1023px) {
            .ih-item.circle {
        		  width: '.$ipad_image_width.'px !important;
        		  height: '.$ipad_image_width.'px !important;
        		}.ih-item.circle .img {
        		  height: '.$ipad_image_width.'px !important;
        		  width: '.$ipad_image_width.'px !important;
        		}.circle .info h3 {
                  font-size: 18px !important;
                }.circle .info p {
                  font-size: 15px !important;
                }.hover_effects_li {
                  margin: 0 10px 15px !important;
                }
                .ih-item .img img {
                  height: 100% !important;
                }
                
    
    }
    
    </style>';
	
	}
      
    if ($sresponsive) {
		
	$output .='<style>
    @media only screen and (min-width: 320px) and (max-width: 480px) {
            .ih-item.square {
        		  width: '.$smobile_image_width.'px !important;
        		  height: '.$smobile_image_height.'px !important;
        		}.ih-item.square .img {
        		  height: '.$smobile_image_height.'px !important;
        		  width: '.$smobile_image_width.'px !important;
        		}.square .img img {
                  width: '.$smobile_image_width.'px !important;
                }.square .info h3 {
                  font-size: 18px !important;
                }.square .info p {
                  font-size: 15px !important;
                }.hover-cols {
                  text-align: center;
                }.hover_effects_li {
                  float: none !important;
                  display: inline-block !important;
                }.ih-item .img img {
                  height: 100% !important;
                }                
    
    }
    
    @media only screen and (min-width: 768px) and (max-width: 1023px) {
            .ih-item.square {
        		  width: '.$sipad_image_width.'px !important;
        		  height: '.$sipad_image_height.'px !important;
        		}.ih-item.square .img {
        		  height: '.$sipad_image_height.'px !important;
        		  width: '.$sipad_image_width.'px !important;
        		}.square .img img {
                  width: '.$sipad_image_width.'px !important;
                }.square .info h3 {
                  font-size: 18px !important;
                }.square .info p {
                  font-size: 15px !important;
                }.hover_effects_li {
                  margin: 0 10px 15px !important;
                }.ih-item .img img {
                  height: 100% !important;
                }
                
    
    }
    
    </style>';
	
	}
    
    if ($s2responsive) {
		
	$output .='<style>
    @media only screen and (min-width: 320px) and (max-width: 480px) {
                
                #square-box {
                  height: '.$s2mobile_image_width.'px !important;
                  width: '.$s2mobile_image_height.'px !important;
                }
                .square2style {
                  text-align: center;
                }               
    
    }
    
    @media only screen and (min-width: 768px) and (max-width: 1023px) {
    
                #square-box {
                  height: '.$s2ipad_image_width.'px !important;
                  width: '.$s2ipad_image_height.'px !important;
                }
                .square2style {
                  text-align: center;
                } 
                
    
    }
    
    </style>';
	
	}
    
    
    if ($cresponsive) {
		
	$output .='<style>
    @media only screen and (min-width: 320px) and (max-width: 480px) {
            .wcp-caption-plugin {
        		  width: '.$cmobile_image_width.'px !important;
        		  height: '.$cmobile_image_height.'px !important;
        		}.caption {
        		  height: '.$cmobile_image_height.'px !important;
        		  width: '.$cmobile_image_width.'px !important;
        		}.wcp-caption-image {
                  width: '.$cmobile_image_width.'px !important;
                  height: '.$cmobile_image_height.'px !important;
                }.ahe-caption {
                  text-align: center;
                }.caption_li {
                  display: inline-block;
                  float: none;
                }.captiontext .centered-text h3 {
                  font-size: 18px !important;
                }.captiontext .centered-text p {
                  font-size: 16px !important;
                }.caption_li {
                  margin: 0 10px 10px !important;
                }       
    
    }
    
    @media only screen and (min-width: 768px) and (max-width: 1023px) {
            .wcp-caption-plugin {
        		  width: '.$cipad_image_width.'px !important;
        		  height: '.$cipad_image_height.'px !important;
        		}.caption {
        		  height: '.$cipad_image_height.'px !important;
        		  width: '.$cipad_image_width.'px !important;
        		}.wcp-caption-image {
                  width: '.$cipad_image_width.'px !important;
                  height: '.$cipad_image_height.'px !important;
                }.ahe-caption {
                  text-align: center;
                }.caption_li {
                  display: inline-block;
                  float: none;
                }.captiontext .centered-text h3 {
                  font-size: 18px !important;
                }.captiontext .centered-text p {
                  font-size: 16px !important;
                }.caption_li {
                  margin: 0 10px 10px !important;
                }
                
    
    }
    
    </style>';
	
	}    
    
      
    wp_reset_query();
    return $output;
    
}
add_shortcode('hover', 'ahe_circle_shortcode'); 






