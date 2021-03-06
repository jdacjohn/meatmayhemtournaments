<div class="portfolio-sidebyside clearfix">

	<div class="ten columns">
	
		<?php if( get_post_meta( get_the_ID(), 'minti_embed', true ) == "" ){ ?>
					
			<div id="portfolio-slider" class="flexslider">
				<ul class="slides">
				<?php global $wpdb, $post;
			    $meta = get_post_meta( get_the_ID( ), 'minti_screenshot', false );
			    if ( !is_array( $meta ) )
			    	$meta = ( array ) $meta;
			    if ( !empty( $meta ) ) {
			    	$meta = implode( ',', $meta );
			    	$images = $wpdb->get_col( "
			    	SELECT ID FROM $wpdb->posts
			    	WHERE post_type = 'attachment'
			    	AND ID IN ( $meta )
			    	ORDER BY menu_order ASC
			    	" );
			    	foreach ( $images as $att ) {
			    		// Get image's source based on size, can be 'thumbnail', 'medium', 'large', 'full' or registed post thumbnails sizes
			    		$src = wp_get_attachment_image_src( $att, 'ten-columns' );
			    		$src2= wp_get_attachment_image_src( $att, '');
			    		$src = $src[0];
			    		$src2 = $src2[0];
			    		// Show image
			    		echo "<li><a href='". $src2 . "' rel='prettyPhoto[slides]' class='prettyPhoto'><img src='{$src}' /></a></li>";
			    	}
			    } ?>
		    	</ul>
		    </div>
				    
		<?php } else { ?>
				    
		    <?php  
		    if (get_post_meta( get_the_ID(), 'minti_source', true ) == 'vimeo') {  
		        echo '<div id="portfolio-video" class="ten columns alpha"><iframe src="http://player.vimeo.com/video/'.get_post_meta( get_the_ID(), 'minti_embed', true ).'?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="960" height="540" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>';  
		    }  
		    else if (get_post_meta( get_the_ID(), 'minti_source', true ) == 'youtube') {  
		        echo '<div id="portfolio-video" class="ten columns alpha"><iframe width="960" height="540" src="http://www.youtube.com/embed/'.get_post_meta( get_the_ID(), 'minti_embed', true ).'?rel=0&showinfo=0&modestbranding=1&hd=1&autohide=1&color=white" frameborder="0" allowfullscreen></iframe></div>';  
		    }  
		    else {  
		        echo '<div id="portfolio-video" class="ten columns alpha">'.get_post_meta( get_the_ID(), 'minti_embed', true ).'</div>'; 
		    }  
		    ?>
		    
		<?php } ?>
	
	</div>
	
	<div class="six columns">
		
		<div class="portfolio-detail-description">
			<h3 class="title"><span><?php _e('Project Description', 'minti'); ?></span></h3>
			<div class="portfolio-detail-description-text"><?php the_content(); ?></div>
		</div>
		
		<?php if( get_post_meta( get_the_ID(), 'minti_portfolio-details', true ) == 1 ) { ?>
		<div class="portfolio-detail-attributes">
			<h3 class="title"><span><?php _e('Project Details', 'minti'); ?></span></h3>
				<ul>
					<?php if( get_post_meta( get_the_ID(), 'minti_portfolio-client', true ) != "") { ?>
					<li><strong><?php _e('Client', 'minti'); ?></strong> <?php echo get_post_meta( get_the_ID(), 'minti_portfolio-client', true ); ?></li>
					<?php } ?>	
					<li><strong><?php _e('Date', 'minti'); ?></strong> <?php the_date() ?></li>
					<li><strong><?php _e('Tags', 'minti'); ?></strong> <?php $taxonomy = strip_tags( get_the_term_list($post->ID, 'portfolio_filter', '', ', ', '') ); echo $taxonomy; ?></li>
				</ul>
					<?php if( get_post_meta( get_the_ID(), 'minti_portfolio-link', true ) != "") { ?>
					<a href="<?php echo get_post_meta( get_the_ID(), 'minti_portfolio-link', true ); ?>" target="_blank" class="button"><?php _e('Launch Project', 'minti'); ?></a>
					<?php } ?>				
		</div>
		<?php } ?>
		
		<div class="clear"></div>
	
	</div>
</div>