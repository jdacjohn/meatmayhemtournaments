<?php


    $effect = $options['caption_effect'];
    //$animation = $options['caption_animation'];
    $color = $options['caption_color'];
    $image_width = $options['caption_image_width'];
    $image_height = $options['caption_image_height'];
    $column_space = $options['caption_column_space'];
    $row_space = $options['caption_row_space'];
    $border = $options['caption_border'];
    //$underline = $options['caption_underline'];
    $link_open = $options['caption_link_open'];
    $caposition = $options['caption_position'];
    $font = $options['caption_font'];
    $heading_font_size = $options['caption_heading_font_size'];
    $heading_color = $options['caption_heading_color'];
    $desc_font_size = $options['caption_desc_font_size'];
    $desc_color = $options['caption_desc_color'];
    //$move_top = $options['caption_move_top'];
    $cresponsive = $options['caption_responsive'];
    $cmobile_image_width = $options['caption_mobile_image_width'];
    $cmobile_image_height = $options['caption_mobile_image_height'];
    $cipad_image_width = $options['caption_ipad_image_width'];
    $cipad_image_height = $options['caption_ipad_image_height'];
    



    if( ! empty( $options['caption_option'] ) ) {

    $groups = $options['caption_option'];
   
    
    $output = '<style>@import url(https://fonts.googleapis.com/css?family='.$font.');</style>';
    
    if ( $border ) {
	$output .='<style>.wcp-caption-plugin {
                      border: medium none !important;
                      box-shadow: none !important;
                    }</style>';
	}
        
    $output .= '<ul class="ahe-caption">';

        foreach( $groups as $group ){
            
        $image = $group['caption_image'];
        
        $image = wp_get_attachment_image_src( $image, 'full' );
        
        $output .='<li class="caption_li" style="margin: 0 '.$column_space.'px '.$row_space.'px;">';
        
        if($effect=="effect1"){
            $output .= '<div  class="wcp-caption-plugin" style="width:'.$image_width.'px; height:'.$image_height.'px; border: 12px solid #F5F5F5; box-shadow: 1px 2px 2px #cacaca;border-radius: ;">';
            
            if ($group['caption_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['caption_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="image-caption-box">
                <div class="caption spaceoutleft-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['caption_title'].'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['caption_desc'].'</p>
                            </div>
                        </div>
                </div>
                        <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }


        if($effect=="effect2"){
            $output .= '<div class="wcp-caption-plugin" style="width:'.$image_width.'px; height:'.$image_height.'px; border: 12px solid #F5F5F5;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">';
            
            if ($group['caption_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['caption_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="image-caption-box">
                <div class="caption spaceoutup-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: #ffffff; opacity: ;">
                        <div style="display:table;height:100%;width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['caption_title'].'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['caption_desc'].'</p>
                            </div>
                        </div>
                </div>
                        <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">           
                </div>
            </a>
            </div>';
        }


        if($effect=="effect3"){
            $output .= '<div class="wcp-caption-plugin" style="width:'.$image_width.'px; height:'.$image_height.'px; border: 12px solid #F5F5F5;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">';
            
            if ($group['caption_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['caption_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="image-caption-box">
                <div class="caption spaceoutdown-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: #ffffff; opacity: ; ">
                        <div style="display:table;height:100%;width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['caption_title'].'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['caption_desc'].'</p>
                            </div>
                        </div>
                </div>
                        <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">
                </div>
                </a>
            </div>';
        }
          
        if($effect=="effect4"){
            $output .= '<div style="width:'.$image_width.'px; height:'.$image_height.'px; border: 12px solid #F5F5F5;box-shadow: 1px 2px 2px #cacaca;border-radius: ;" class="wcp-caption-plugin">';
            
            if ($group['caption_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['caption_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="image-caption-box">
                <div style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: #ffffff; opacity: ; " class="caption spaceoutright-image captiontext">
                        <div style="display:table;height:100%;width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['caption_title'].'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['caption_desc'].'</p>
                            </div>
                        </div>
                </div>
                            <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">
                    </div>
                </a>
            </div>';
        }
        
        
        
        if($effect=="effect5"){
            $output .= '<div style="width:'.$image_width.'px; height:'.$image_height.'px; border: 12px solid #F5F5F5;box-shadow: 1px 2px 2px #cacaca;border-radius: ;" class="wcp-caption-plugin">';
            
            if ($group['caption_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['caption_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="image-caption-box" style="perspective: 2500px; perspective-origin: 50% 50%;">
                <div style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: #ffffff; opacity: ; " class="caption flip-image-horizontal captiontext">
                        <div style="display:table;height:100%;width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['caption_title'].'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['caption_desc'].'</p>                        
                            </div>
                        </div>
                </div>
                        <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">
                </div>
            </a>
            </div>';
        }        

        if($effect=="effect6"){
            $output .= '<div style="width:'.$image_width.'px; height:'.$image_height.'px; border: 12px solid #F5F5F5;box-shadow: 1px 2px 2px #cacaca;border-radius: ;" class="wcp-caption-plugin">';
            
            if ($group['caption_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['caption_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="image-caption-box" style="perspective: 2500px; perspective-origin: 50% 50%;">
                <div style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: #000000; opacity: ; " class="caption flip-image-vertical captiontext">
                        <div style="display:table;height:100%;width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['caption_title'].'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['caption_desc'].'</p>
                            </div>
                        </div>
                </div>
                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">
                </div>
                </a>
            </div>';
        }

        if($effect=="effect7"){
            $output .= '<div style="width:'.$image_width.'px; height:'.$image_height.'px; border: 12px solid #F5F5F5;box-shadow: 1px 2px 2px #cacaca;border-radius: ;" class="wcp-caption-plugin">';
            
            if ($group['caption_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['caption_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="image-caption-box" style="perspective: 2500px; perspective-origin: 50% 50%;">
                <div style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: #ffffff; opacity: ; " class="caption page-turn-from-top captiontext">
                        <div style="display:table;height:100%;width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['caption_title'].'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['caption_desc'].'</p>
                            </div>
                        </div>
                </div>
                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">
                </div>
                </a>
    
            </div>';
        }
        
        if($effect=="effect8"){
            $output .= '<div style="width:'.$image_width.'px; height:'.$image_height.'px; border: 12px solid #F5F5F5;box-shadow: 1px 2px 2px #cacaca;border-radius: ;" class="wcp-caption-plugin">';
            
            if ($group['caption_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['caption_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="image-caption-box" style="perspective: 2500px; perspective-origin: 50% 50%;">
                <div style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: #ffffff; opacity: ; " class="caption page-turn-from-bottom captiontext">
                        <div style="display:table;height:100%;width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['caption_title'].'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['caption_desc'].'</p>
                            </div>
                        </div>
                </div>
                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">
                </div>
                </a>
    
            </div>';
        }        
        
        if($effect=="effect9"){
            $output .= '<div style="width:'.$image_width.'px; height:'.$image_height.'px; border: 12px solid #F5F5F5;box-shadow: 1px 2px 2px #cacaca;border-radius: ;" class="wcp-caption-plugin">';
            
            if ($group['caption_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['caption_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="image-caption-box">
                <div style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: #ffffff; opacity: ; " class="caption swap-caption captiontext">
                        <div style="display:table;height:100%;width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['caption_title'].'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['caption_desc'].'</p>
                            </div>
                        </div>
                </div>
                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">
                </div>
                </a>
    
            </div>';
        }
        
        if($effect=="effect10"){
            $output .= '<div style="width:'.$image_width.'px; height:'.$image_height.'px; border: 12px solid #F5F5F5;box-shadow: 1px 2px 2px #cacaca;border-radius: ;" class="wcp-caption-plugin">';
            
            if ($group['caption_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['caption_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="image-caption-box">
                <div style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: #ffffff; opacity: ; " class="caption rotateup-image captiontext">
                        <div style="display:table;height:100%;width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['caption_title'].'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['caption_desc'].'</p>
                            </div>
                        </div>
                </div>
                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">
                </div>
                </a>
    
            </div>';
        }        

        if($effect=="effect11"){
            $output .= '<div style="width:'.$image_width.'px; height:'.$image_height.'px; border: 12px solid #F5F5F5;box-shadow: 1px 2px 2px #cacaca;border-radius: ;" class="wcp-caption-plugin">';
            
            if ($group['caption_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['caption_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="image-caption-box">
                <div style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: #ffffff; opacity: ; " class="caption rotatedown-image captiontext">
                        <div style="display:table;height:100%;width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['caption_title'].'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['caption_desc'].'</p>
                            </div>
                        </div>
                </div>
                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">
                </div>
                </a>
    
            </div>';
        }        

        if($effect=="effect12"){
            $output .= '<div style="width:'.$image_width.'px; height:'.$image_height.'px; border: 12px solid #F5F5F5;box-shadow: 1px 2px 2px #cacaca;border-radius: ;" class="wcp-caption-plugin">';
            
            if ($group['caption_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['caption_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="image-caption-box">
                <div style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: #ffffff; opacity: ; " class="caption fall-down-image captiontext">
                        <div style="display:table;height:100%;width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['caption_title'].'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['caption_desc'].'</p>
                            </div>
                        </div>
                </div>
                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">
                </div>
                </a>
    
            </div>';
        }
        
        if($effect=="effect13"){
            $output .= '<div style="width:'.$image_width.'px; height:'.$image_height.'px; border: 12px solid #F5F5F5;box-shadow: 1px 2px 2px #cacaca;border-radius: ;" class="wcp-caption-plugin">';
            
            if ($group['caption_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['caption_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="image-caption-box">
                <div style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: #ffffff; opacity: ; " class="caption zoom-image-out-caption-twist captiontext">
                        <div style="display:table;height:100%;width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['caption_title'].'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['caption_desc'].'</p>
                            </div>
                        </div>
                </div>
                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">
                </div>
                </a>
    
            </div>';
        }
        
        if($effect=="effect14"){
            $output .= '<div style="width:'.$image_width.'px; height:'.$image_height.'px; border: 12px solid #F5F5F5;box-shadow: 1px 2px 2px #cacaca;border-radius: ;" class="wcp-caption-plugin">';
            
            if ($group['caption_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['caption_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="image-caption-box">
                <div style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: #ffffff; opacity: ; " class="caption opendoorup-image captiontext">
                        <div style="display:table;height:100%;width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['caption_title'].'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['caption_desc'].'</p>
                            </div>
                        </div>
                </div>
                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">
                </div>
                </a>
    
            </div>';
        }        
        
        
        if($effect=="effect15"){
            $output .= '<div style="width:'.$image_width.'px; height:'.$image_height.'px; border: 12px solid #F5F5F5;box-shadow: 1px 2px 2px #cacaca;border-radius: ;" class="wcp-caption-plugin">';
            
            if ($group['caption_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['caption_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="image-caption-box">
                <div style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: #ffffff; opacity: ; " class="caption tinright-image captiontext">
                        <div style="display:table;height:100%;width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['caption_title'].'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['caption_desc'].'</p>
                            </div>
                        </div>
                </div>
                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">
                </div>
                </a>
    
            </div>';
        }
        
        if($effect=="effect16"){
            $output .= '<div style="width:'.$image_width.'px; height:'.$image_height.'px; border: 12px solid #F5F5F5;box-shadow: 1px 2px 2px #cacaca;border-radius: ;" class="wcp-caption-plugin">';
            
            if ($group['caption_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['caption_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="image-caption-box">
                <div style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: #ffffff; opacity: ; " class="caption rotateleft-image captiontext">
                        <div style="display:table;height:100%;width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['caption_title'].'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['caption_desc'].'</p>
                            </div>
                        </div>
                </div>
                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">
                </div>
                </a>
    
            </div>';
        }        
        
        if($effect=="effect17"){
            $output .= '<div style="width:'.$image_width.'px; height:'.$image_height.'px; border: 12px solid #F5F5F5;box-shadow: 1px 2px 2px #cacaca;border-radius: ;" class="wcp-caption-plugin">';
            
            if ($group['caption_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['caption_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="image-caption-box">
                <div style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: #ffffff; opacity: ; " class="caption opendoorleft-image captiontext">
                        <div style="display:table;height:100%;width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['caption_title'].'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['caption_desc'].'</p>
                            </div>
                        </div>
                </div>
                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">
                </div>
                </a>
    
            </div>';
        }                        
        

        if($effect=="effect18"){
            $output .= '<div style="width:'.$image_width.'px; height:'.$image_height.'px; border: 12px solid #F5F5F5;box-shadow: 1px 2px 2px #cacaca;border-radius: ;" class="wcp-caption-plugin">';
            
            if ($group['caption_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['caption_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="image-caption-box">
                <div style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: #ffffff; opacity: ; " class="caption simple-fade captiontext">
                        <div style="display:table;height:100%;width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['caption_title'].'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['caption_desc'].'</p>
                            </div>
                        </div>
                </div>
                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">
                </div>
                </a>
    
            </div>';
        }

        if($effect=="effect19"){
            $output .= '<div style="width:'.$image_width.'px; height:'.$image_height.'px; border: 12px solid #F5F5F5;box-shadow: 1px 2px 2px #cacaca;border-radius: ;" class="wcp-caption-plugin">';
            
            if ($group['caption_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['caption_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="image-caption-box">
                <div style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: #ffffff; opacity: ; " class="caption foolish-image captiontext">
                        <div style="display:table;height:100%;width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['caption_title'].'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['caption_desc'].'</p>
                            </div>
                        </div>
                </div>
                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">
                </div>
                </a>
    
            </div>';
        }

        if($effect=="effect20"){
            $output .= '<div style="width:'.$image_width.'px; height:'.$image_height.'px; border: 12px solid #F5F5F5;box-shadow: 1px 2px 2px #cacaca;border-radius: ;" class="wcp-caption-plugin">';
            
            if ($group['caption_link']) {
            $output .='<a target="'.$link_open.'" href="'.$group['caption_link'].'">';
            }
            else { $output .='<a>'; }
            
            $output .='<div class="image-caption-box">
                <div style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: #ffffff; opacity: ; " class="caption opendoorright-image captiontext">
                        <div style="display:table;height:100%;width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$group['caption_title'].'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$group['caption_desc'].'</p>
                            </div>
                        </div>
                </div>
                <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">
                </div>
                </a>
    
            </div>';
        }
        
                  
    $output .='</li>'; 
          
    }
        
    $output .= '</ul>';   
         

}   