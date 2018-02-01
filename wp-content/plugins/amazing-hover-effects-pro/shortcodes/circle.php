<?php


    $effect = $options['circle_effect'];
    $animation = $options['circle_animation'];
    $color = $options['circle_color'];
    $image_width = $options['circle_image_width'];
    $image_height = $options['circle_image_height'];
    $column_space = $options['circle_column_space'];
    $row_space = $options['circle_row_space'];
    $border = $options['circle_border'];
    $underline = $options['circle_underline'];
    $link_open = $options['circle_link_open'];
    $cposition = $options['circle_position'];
    $font = $options['circle_font'];
    $heading_font_size = $options['circle_heading_font_size'];
    $heading_color = $options['circle_heading_color'];
    $desc_font_size = $options['circle_desc_font_size'];
    $desc_color = $options['circle_desc_color'];
    $move_top = $options['circle_move_top'];
    $responsive = $options['circle_responsive'];
    $mobile_image_width = $options['circle_mobile_image_width'];
    $ipad_image_width = $options['circle_ipad_image_width'];
    


   
    if ($underline) {
        $underline = 'none';
    }

    if( ! empty( $options['circle_option'] ) ) {

    $groups = $options['circle_option'];
   
    
    $output = '<style>@import url(https://fonts.googleapis.com/css?family='.$font.');</style>';
    

    if ( $border ) {
	$output .='<style>.ih-item.circle .img::before {
                  box-shadow: none;
                }</style>';
	}

    $output .= '<div class="hover-cols">';

        foreach( $groups as $group ){
            
        $image = $group['circle_image'];
        
        $image = wp_get_attachment_image_src( $image, 'full' );
        
        $output .='<li class="hover_effects_li" style="margin: 0 '.$column_space.'px '.$row_space.'px;">';
        
        if($effect=="effect1"){
            $output .= '<div class="ih-item circle effect1" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'">';
            
            if ($group['circle_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['circle_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <div class="info-back" >
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_top.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['circle_title'].'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['circle_desc'].'</p>
                    
                    </div></div></a></div>';
        }


        if($effect=="effect2"){
            $output .= '<div class="ih-item circle effect2 '.$animation.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'">';
            
            if ($group['circle_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['circle_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_top.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['circle_title'].'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['circle_desc'].'</p>
                    
                    </div></a></div>';
        }

        if($effect=="effect3"){
            $output .= '<div class="ih-item circle effect3 '.$animation.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'">';
            
            if ($group['circle_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['circle_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_top.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['circle_title'].'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['circle_desc'].'</p>
                    
                    </div></a></div>';
        }
          
        if($effect=="effect4"){
            $output .= '<div class="ih-item circle effect4 '.$animation.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'">';
            
            if ($group['circle_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['circle_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_top.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['circle_title'].'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['circle_desc'].'</p>
                    
                    </div></a></div>';
        }
        
        if($effect=="effect5"){
            $output .= '<div class="ih-item circle effect5 '.$animation.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'">';
            
            if ($group['circle_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['circle_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info">
                                <div class="info-back" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_top.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['circle_title'].'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['circle_desc'].'</p>
                    
                    </div></div></a></div>';
        }        

        if($effect=="effect6"){
            $output .= '<div class="ih-item circle effect6 scale_down_up" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'">';
            
            if ($group['circle_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['circle_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_top.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['circle_title'].'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['circle_desc'].'</p>
                    
                    </div></a></div>';
        }

        if($effect=="effect7"){
            $output .= '<div class="ih-item circle effect7 '.$animation.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'">';
            
            if ($group['circle_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['circle_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <div class="info-back">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_top.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['circle_title'].'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['circle_desc'].'</p>
                    
                    </div></div></a></div>';
        }
        
        if($effect=="effect8"){
            $output .= '<div class="ih-item circle effect8 '.$animation.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'">';
            
            if ($group['circle_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['circle_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="img-container">
                                  <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                </div>
                                <div class="info-container">
                                  <div class="info" style="background:'.$color.'">
                                    <h3 style="letter-spacing: 0px; margin-top: '.$move_top.'px; font-family: '.$font.'; font-size: '.$heading_font.'px; color:'.$heading_color.';">'.$group['circle_title'].'</h3>
                                    <p style="font-family: '.$font.'; border-top: '.$underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['circle_desc'].'</p>
                                  </div>
                </div></a></div>';
        }        
        
        if($effect=="effect9"){
            $output .= '<div class="ih-item circle effect9 '.$animation.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'">';
            
            if ($group['circle_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['circle_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_top.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['circle_title'].'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['circle_desc'].'</p>
                    
                    </div></a></div>';
        }
        
        if($effect=="effect10"){
            $output .= '<div class="ih-item circle effect10 top_to_bottom" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'">';
            
            if ($group['circle_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['circle_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_top.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['circle_title'].'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['circle_desc'].'</p>
                    
                    </div></a></div>';
        }        

        if($effect=="effect11"){
            $output .= '<div class="ih-item circle effect11 '.$animation.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'">';
            
            if ($group['circle_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['circle_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_top.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['circle_title'].'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['circle_desc'].'</p>
                    
                    </div></a></div>';
        }        

        if($effect=="effect12"){
            $output .= '<div class="ih-item circle effect12 '.$animation.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'">';
            
            if ($group['circle_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['circle_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_top.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['circle_title'].'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['circle_desc'].'</p>
                    
                    </div></a></div>';
        }
        
        if($effect=="effect13"){
            $output .= '<div class="ih-item circle effect13 from_left_and_right" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'">';
            
            if ($group['circle_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['circle_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <div class="info-back">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_top.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['circle_title'].'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['circle_desc'].'</p>
                    
                    </div></div></a></div>';
        }
        
        if($effect=="effect14"){
            $output .= '<div class="ih-item circle effect14 '.$animation.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'">';
            
            if ($group['circle_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['circle_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_top.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['circle_title'].'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['circle_desc'].'</p>
                    
                    </div></a></div>';
        }        
        
        
        if($effect=="effect15"){
            $output .= '<div class="ih-item circle effect15 left_to_right" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'">';
            
            if ($group['circle_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['circle_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_top.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['circle_title'].'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['circle_desc'].'</p>
                    
                    </div></a></div>';
        }
        
        if($effect=="effect16"){
            $output .= '<div class="ih-item circle effect16 left_to_right" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'">';
            
            if ($group['circle_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['circle_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_top.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['circle_title'].'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['circle_desc'].'</p>
                    
                    </div></a></div>';
        }        
        
        if($effect=="effect17"){
            $output .= '<div class="ih-item circle effect17" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'">';
            
            if ($group['circle_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['circle_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_top.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['circle_title'].'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['circle_desc'].'</p>
                    
                    </div></a></div>';
        }                        
        

        if($effect=="effect18"){
            $output .= '<div class="ih-item circle effect18 '.$animation.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'">';
            
            if ($group['circle_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['circle_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info">
                                <div class="info-back" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_top.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['circle_title'].'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['circle_desc'].'</p>
                    
                    </div></div></a></div>';
        }

        if($effect=="effect19"){
            $output .= '<div class="ih-item circle effect19" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'">';
            
            if ($group['circle_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['circle_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_top.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['circle_title'].'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['circle_desc'].'</p>
                    
                    </div></a></div>';
        }

        if($effect=="effect20"){
            $output .= '<div class="ih-item circle effect20 '.$animation.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'">';
            
            if ($group['circle_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['circle_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="spinner"></div>
                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info">
                                <div class="info-back" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_top.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['circle_title'].'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['circle_desc'].'</p>
                    
                    </div></div></a></div>';
        }
                  
    $output .='</li>'; 
          
    }
        
    $output .= '</div>';   
         

}   