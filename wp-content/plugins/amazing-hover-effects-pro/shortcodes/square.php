<?php


    $effect = $options['square_effect'];
    $animation = $options['square_animation'];
    $color = $options['square_color'];
    $image_width = $options['square_image_width'];
    $image_height = $options['square_image_height'];
    $column_space = $options['square_column_space'];
    $row_space = $options['square_row_space'];
    //$border = $options['square_border'];
    //$underline = $options['square_underline'];
    $link_open = $options['square_link_open'];
    $sposition = $options['square_position'];
    $font = $options['square_font'];
    $heading_font_size = $options['square_heading_font_size'];
    $heading_color = $options['square_heading_color'];
    $desc_font_size = $options['square_desc_font_size'];
    $desc_color = $options['square_desc_color'];
    $move_texts = $options['square_move_texts'];
    
    $sresponsive = $options['square_responsive'];
    $smobile_image_width = $options['square_mobile_image_width'];
    $smobile_image_height = $options['square_mobile_image_height'];
    $sipad_image_width = $options['square_ipad_image_width'];
    $sipad_image_height = $options['square_ipad_image_height'];
    
    
    
    

    if( ! empty( $options['square_option'] ) ) {

    $groups = $options['square_option'];
   
    $output = '<style>@import url(https://fonts.googleapis.com/css?family='.$font.');</style>';
    
    
    $output .= '<div class="hover-cols">';

        foreach( $groups as $group ){
            
        $image = $group['square_image'];
        
        $image = wp_get_attachment_image_src( $image, 'full' );
        
        $output .='<li class="hover_effects_li" style="margin: 0 '.$column_space.'px '.$row_space.'px;">';
        
        if($effect=="effect1"){
            $output .= '<div class="ih-item square effect1 left_and_right" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;">';
            
            if ($group['square_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
								<div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
									<div class="info" style="background:'.$color.'">
								<h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$group['square_title'].'</h3>
								<p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['square_desc'].'</p>
					
					</div></a></div>';
        }

        if($effect=="effect2"){
            $output .= '<div class="ih-item square effect2" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;">';
            
            if ($group['square_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
								<div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
									<div class="info" style="background:'.$color.'">
								<h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$group['square_title'].'</h3>
								<p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['square_desc'].'</p>
					
					</div></a></div>';
        }

        if($effect=="effect3"){
            $output .= '<div class="ih-item square effect3 '.$animation.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;">';
            
            if ($group['square_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
								<div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
									<div class="info" style="background:'.$color.'">
								<h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$group['square_title'].'</h3>
								<p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['square_desc'].'</p>
					
					</div></a></div>';
        }

		if($effect=="effect4"){
            $output .= '<div class="ih-item square effect4" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;">';
            
            if ($group['square_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
							<div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
							<div class="mask1" style="position: absolute; height: '.$image_height.'px; width: '.$image_width.'px;; left: auto; right: 0px; top: 0px;"></div>
							<div class="mask2" style="position: absolute; height: '.$image_height.'px; width: '.$image_width.'px; top: auto; bottom: 0px; left: 0px;"></div>
							<div class="info" style="background:'.$color.'">
							  <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$group['square_title'].'</h3>
							  <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['square_desc'].'</p>
				</div></a></div>';
        }

        if($effect=="effect5"){
            $output .= '<div class="ih-item square effect5 '.$animation.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;">';
            
            if ($group['square_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
								<div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
									<div class="info" style="background:'.$color.'">
								<h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$group['square_title'].'</h3>
								<p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['square_desc'].'</p>
					
					</div></a></div>';
        }

        if($effect=="effect6"){
            $output .= '<div class="ih-item square effect6 from_top_and_bottom" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;">';
            
            if ($group['square_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
								<div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
									<div class="info" style="background:'.$color.'">
								<h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$group['square_title'].'</h3>
								<p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['square_desc'].'</p>
					
					</div></a></div>';
        }

        if($effect=="effect7"){
            $output .= '<div class="ih-item square effect7 " style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;">';
            
            if ($group['square_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
								<div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
									<div class="info" style="background:'.$color.'">
								<h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$group['square_title'].'</h3>
								<p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['square_desc'].'</p>
					
					</div></a></div>';
        }
        
        if($effect=="effect8"){
            $output .= '<div class="ih-item square effect8 scale_up" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;">';
            
            if ($group['square_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
								<div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
									<div class="info" style="background:'.$color.'">
								<h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$group['square_title'].'</h3>
								<p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['square_desc'].'</p>
					
					</div></a></div>';
        }

        if($effect=="effect9"){
            $output .= '<div class="ih-item square effect9 '.$animation.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'';
            
            if ($group['square_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
								<div class="img" style="height: '.$image_height.'px; background:'.$color.'"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
									<div class="info">
                                    <div class="info-back"  style="background:'.$color.'">
								<h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$group['square_title'].'</h3>
								<p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['square_desc'].'</p>
					
					</div></div></a></div>';
        }

        if($effect=="effect10"){
            $output .= '<div class="ih-item square effect10 '.$animation.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;">';
            
            if ($group['square_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
								<div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
									<div class="info" style="background:'.$color.'">
								<h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$group['square_title'].'</h3>
								<p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['square_desc'].'</p>
					
					</div></a></div>';
        }
        
        if($effect=="effect11"){
            $output .= '<div class="ih-item square effect11 '.$animation.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;">';
            
            if ($group['square_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
								<div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
									<div class="info" style="background:'.$color.'">
								<h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$group['square_title'].'</h3>
								<p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['square_desc'].'</p>
					
					</div></a></div>';
        }

        if($effect=="effect12"){
            $output .= '<div class="ih-item square effect12 '.$animation.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;">';
            
            if ($group['square_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
								<div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
									<div class="info" style="background:'.$color.'">
								<h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$group['square_title'].'</h3>
								<p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['square_desc'].'</p>
					
					</div></a></div>';
        }

        if($effect=="effect13"){
            $output .= '<div class="ih-item square effect13 '.$animation.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;">';
            
            if ($group['square_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
								<div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
									<div class="info" style="background:'.$color.'">
								<h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$group['square_title'].'</h3>
								<p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['square_desc'].'</p>
					
					</div></a></div>';
        }
        
        if($effect=="effect14"){
            $output .= '<div class="ih-item square effect14 '.$animation.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;">';
            
            if ($group['square_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
								<div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
									<div class="info" style="background:'.$color.'">
								<h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$group['square_title'].'</h3>
								<p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['square_desc'].'</p>
					
					</div></a></div>';
        }        
        
        if($effect=="effect15"){
            $output .= '<div class="ih-item square effect15 '.$animation.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'';
            
            if ($group['square_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
								<div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
									<div class="info" style="background:'.$color.'">
								<h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$group['square_title'].'</h3>
								<p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['square_desc'].'</p>
					
					</div></a></div>';
        }        
        
                  
        $output .='</li>'; 
          
    }
        
    $output .= '</div>';   
         

}   