<?php


    $effect = $options['square2_effect'];
    $image_width = $options['square2_image_width'];
    $image_height = $options['square2_image_height'];
    $column_space = $options['square2_column_space'];
    $row_space = $options['square2_row_space'];
    $link_open = $options['square2_link_open'];
    $s2position = $options['square2_position'];
    $font = $options['square2_font'];
    $heading_font_size = $options['square2_heading_font_size'];
    $heading_color = $options['square2_heading_color'];
    $move_texts = $options['square2_move_texts'];
    
    $s2responsive = $options['square2_responsive'];
    $s2mobile_image_width = $options['square2_mobile_image_width'];
    $s2mobile_image_height = $options['square2_mobile_image_height'];
    $s2ipad_image_width = $options['square2_ipad_image_width'];
    $s2ipad_image_height = $options['square2_ipad_image_height'];
    
    
    
    

    if( ! empty( $options['square2_option'] ) ) {

    $groups = $options['square2_option'];
   
    $output = '<style>@import url(https://fonts.googleapis.com/css?family='.$font.');</style>';
    
    
    $output .= '<div class="square2style">';

        foreach( $groups as $group ){
            
        $image = $group['square2_image'];
        
        $image = wp_get_attachment_image_src( $image, 'full' );
        
		if($effect=="effect1"){
		    
            if ($group['square2_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square2_link'].'">';
            }
            else { $output .='<a>'; }        
        
        	$output .= '<div id="square-box" class="burst-circle ahe-square-teal" style="height: '.$image_height.'px; width: '.$image_width.'px; margin: 0 '.$column_space.'px '.$row_space.'px;">
        					<div class="ahe-square"></div>
        					<img src="'.$image[0].'">
        					<h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';" >'.$group['square2_title'].'</h1>
        				</div></a>';
		}

		if($effect=="effect2"){
        	if ($group['square2_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square2_link'].'">';
            }
            else { $output .='<a>'; }        
        
        	$output .= '<div id="square-box" class="burst-circle strawberry" style="height: '.$image_height.'px; width: '.$image_width.'px; margin: 0 '.$column_space.'px '.$row_space.'px;">
        					<div class="ahe-square"></div>
        					<img src="'.$image[0].'">
        					<h1 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';" >'.$group['square2_title'].'</h1>
        				</div></a>';
		}

		if($effect=="effect3"){
        	if ($group['square2_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square2_link'].'">';
            }
            else { $output .='<a>'; }        
        
        	$output .= '<div id="square-box" class="burst-circle grape" style="height: '.$image_height.'px; width: '.$image_width.'px; margin: 0 '.$column_space.'px '.$row_space.'px;">
        					<div class="ahe-square"></div>
        					<img src="'.$image[0].'">
        					<h1 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';" >'.$group['square2_title'].'</h1>
        				</div></a>';
		}
        
		if($effect=="effect4"){
        	if ($group['square2_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square2_link'].'">';
            }
            else { $output .='<a>'; }        
        
        	$output .= '<div id="square-box" class="burst-circle orange" style="height: '.$image_height.'px; width: '.$image_width.'px; margin: 0 '.$column_space.'px '.$row_space.'px;">
        					<div class="ahe-square"></div>
        					<img src="'.$image[0].'">
        					<h1 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';" >'.$group['square2_title'].'</h1>
        				</div></a>';
		}        
        
		if($effect=="effect5"){
        	if ($group['square2_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square2_link'].'">';
            }
            else { $output .='<a>'; }        
        
        	$output .= '<div id="square-box" class="burst-rumb ahe-square-teal" style="height: '.$image_height.'px; width: '.$image_width.'px; margin: 0 '.$column_space.'px '.$row_space.'px;">
        					<div class="ahe-square"></div>
        					<img src="'.$image[0].'">
        					<h1 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$group['square2_title'].'</h1>
        				</div></a>';
		}        
        
		if($effect=="effect6"){
        	if ($group['square2_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square2_link'].'">';
            }
            else { $output .='<a>'; }        
        
        	$output .= '<div id="square-box" class="burst-rumb strawberry" style="height: '.$image_height.'px; width: '.$image_width.'px; margin: 0 '.$column_space.'px '.$row_space.'px;">
        					<div class="ahe-square"></div>
        					<img src="'.$image[0].'">
        					<h1 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; " >'.$group['square2_title'].'</h1>
        				</div></a>';
		}        
        
		if($effect=="effect7"){
        	if ($group['square2_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square2_link'].'">';
            }
            else { $output .='<a>'; }        
        
        	$output .= '<div id="square-box" class="burst-rumb grape" style="height: '.$image_height.'px; width: '.$image_width.'px; margin: 0 '.$column_space.'px '.$row_space.'px;">
        					<div class="ahe-square"></div>
        					<img src="'.$image[0].'">
        					<h1 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; " >'.$group['square2_title'].'</h1>
        				</div></a>';
		}        
        
		if($effect=="effect8"){
        	if ($group['square2_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square2_link'].'">';
            }
            else { $output .='<a>'; }        
        
        	$output .= '<div id="square-box" class="burst-rumb orange" style="height: '.$image_height.'px; width: '.$image_width.'px; margin: 0 '.$column_space.'px '.$row_space.'px;">
        					<div class="ahe-square"></div>
        					<img src="'.$image[0].'">
        					<h1 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; " >'.$group['square2_title'].'</h1>
        				</div></a>';
		}
        
		if($effect=="effect9"){
        	if ($group['square2_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square2_link'].'">';
            }
            else { $output .='<a>'; }        
        
        	$output .= '<div id="square-box" class="burst-up ahe-square-teal" style="height: '.$image_height.'px; width: '.$image_width.'px; margin: 0 '.$column_space.'px '.$row_space.'px;">
        					<div class="ahe-square"></div>
        					<img src="'.$image[0].'">
        					<h1 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; " >'.$group['square2_title'].'</h1>
        				</div></a>';
		}        
        
		if($effect=="effect10"){
        	if ($group['square2_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square2_link'].'">';
            }
            else { $output .='<a>'; }        
        
        	$output .= '<div id="square-box" class="burst-up strawberry" style="height: '.$image_height.'px; width: '.$image_width.'px; margin: 0 '.$column_space.'px '.$row_space.'px;">
        					<div class="ahe-square"></div>
        					<img src="'.$image[0].'">
        					<h1 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; " >'.$group['square2_title'].'</h1>
        				</div></a>';
		}                        
		if($effect=="effect11"){
        	if ($group['square2_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square2_link'].'">';
            }
            else { $output .='<a>'; }        
        
        	$output .= '<div id="square-box" class="burst-up grape" style="height: '.$image_height.'px; width: '.$image_width.'px; margin: 0 '.$column_space.'px '.$row_space.'px;">
        					<div class="ahe-square"></div>
        					<img src="'.$image[0].'">
        					<h1 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; " >'.$group['square2_title'].'</h1>
        				</div></a>';
		}        
        
		if($effect=="effect12"){
        	if ($group['square2_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square2_link'].'">';
            }
            else { $output .='<a>'; }        
        
        	$output .= '<div id="square-box" class="burst-up orange" style="height: '.$image_height.'px; width: '.$image_width.'px; margin: 0 '.$column_space.'px '.$row_space.'px;">
        					<div class="ahe-square"></div>
        					<img src="'.$image[0].'">
        					<h1 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; " >'.$group['square2_title'].'</h1>
        				</div></a>';
		}         
		if($effect=="effect13"){
        	if ($group['square2_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square2_link'].'">';
            }
            else { $output .='<a>'; }        
        
        	$output .= '<div id="square-box" class="burst-side ahe-square-teal" style="height: '.$image_height.'px; width: '.$image_width.'px; margin: 0 '.$column_space.'px '.$row_space.'px;">
        					<div class="ahe-square"></div>
        					<img src="'.$image[0].'">
        					<h1 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; " >'.$group['square2_title'].'</h1>
        				</div></a>';
		}        
		if($effect=="effect14"){
        	if ($group['square2_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square2_link'].'">';
            }
            else { $output .='<a>'; }        
        
        	$output .= '<div id="square-box" class="burst-side strawberry" style="height: '.$image_height.'px; width: '.$image_width.'px; margin: 0 '.$column_space.'px '.$row_space.'px;">
        					<div class="ahe-square"></div>
        					<img src="'.$image[0].'">
        					<h1 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; " >'.$group['square2_title'].'</h1>
        				</div></a>';
		}        
        
		if($effect=="effect15"){
        	if ($group['square2_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square2_link'].'">';
            }
            else { $output .='<a>'; }        
        
        	$output .= '<div id="square-box" class="burst-side grape" style="height: '.$image_height.'px; width: '.$image_width.'px; margin: 0 '.$column_space.'px '.$row_space.'px;">
        					<div class="ahe-square"></div>
        					<img src="'.$image[0].'">
        					<h1 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; " >'.$group['square2_title'].'</h1>
        				</div></a>';
		}         
        
		if($effect=="effect16"){
        	if ($group['square2_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square2_link'].'">';
            }
            else { $output .='<a>'; }        
        
        	$output .= '<div id="square-box" class="burst-side orange" style="height: '.$image_height.'px; width: '.$image_width.'px; margin: 0 '.$column_space.'px '.$row_space.'px;">
        					<div class="ahe-square"></div>
        					<img src="'.$image[0].'">
        					<h1 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; " >'.$group['square2_title'].'</h1>
        				</div></a>';
		}        
        
		if($effect=="effect17"){
        	if ($group['square2_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square2_link'].'">';
            }
            else { $output .='<a>'; }        
        
        	$output .= '<div id="square-box" class="triangle ahe-square-teal" style="height: '.$image_height.'px; width: '.$image_width.'px; margin: 0 '.$column_space.'px '.$row_space.'px;">
        					<div class="ahe-square"></div>
        					<img src="'.$image[0].'">
        					<h1 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; " >'.$group['square2_title'].'</h1>
        				</div></a>';
		}        
        
		if($effect=="effect18"){
        	if ($group['square2_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square2_link'].'">';
            }
            else { $output .='<a>'; }        
        
        	$output .= '<div id="square-box" class="triangle strawberry" style="height: '.$image_height.'px; width: '.$image_width.'px; margin: 0 '.$column_space.'px '.$row_space.'px;">
        					<div class="ahe-square"></div>
        					<img src="'.$image[0].'">
        					<h1 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; " >'.$group['square2_title'].'</h1>
        				</div></a>';
		}        
		if($effect=="effect19"){
        	if ($group['square2_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square2_link'].'">';
            }
            else { $output .='<a>'; }        
        
        	$output .= '<div id="square-box" class="triangle grape" style="height: '.$image_height.'px; width: '.$image_width.'px; margin: 0 '.$column_space.'px '.$row_space.'px;">
        					<div class="ahe-square"></div>
        					<img src="'.$image[0].'">
        					<h1 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; " >'.$group['square2_title'].'</h1>
        				</div></a>';
		}         
        
		if($effect=="effect20"){
        	if ($group['square2_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['square2_link'].'">';
            }
            else { $output .='<a>'; }        
        
        	$output .= '<div id="square-box" class="triangle orange" style="height: '.$image_height.'px; width: '.$image_width.'px; margin: 0 '.$column_space.'px '.$row_space.'px;">
        					<div class="ahe-square"></div>
        					<img src="'.$image[0].'">
        					<h1 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; " >'.$group['square2_title'].'</h1>
        				</div></a>';
		}         
        
        
        
        
        
        
        
          
    }
        
    $output .= '</div>';   
         

}   