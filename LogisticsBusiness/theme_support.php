<?php

// Widgets are registered here: /functions/sidebar.php
	
// Adding WP Functions & Theme Support
function joints_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );
	
	// Default thumbnail size
	set_post_thumbnail_size(125, 125, true);

	// Add RSS Support
	add_theme_support( 'automatic-feed-links' );
	
	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );
	
	// Add HTML5 Support
	add_theme_support( 'html5', 
	         array( 
	         	'comment-list', 
	         	'comment-form', 
	         	'search-form', 
	         ) 
	);
	
	// Adding post format support
	 add_theme_support( 'post-formats',
		array(
			'aside',             // title less blurb
			'gallery',           // gallery of images
			'link',              // quick link to other site
			'image',             // an image
			'quote',             // a quick quote
			'status',            // a Facebook like status update
			'video',             // video
			'audio',             // audio
			'chat'               // chat transcript
		)
	); 
	
	// Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
	$GLOBALS['content_width'] = apply_filters( 'joints_theme_support', 1200 );		
	
} /* end theme support */

add_action( 'after_setup_theme', 'joints_theme_support' );

add_filter( 'body_class', function( $classes ) {
    return array_merge( $classes, array( 'logisticsbusiness--font' ) );
} );

global $count;
$count = 0;

/******************/
// functions to add the posts in the required row/column format
// If large-3 there will be 4 grid-columns or if large-4 there will be 3 columns
function addPostHtml_TopRow($counter) {			

	$postnum = $counter;	
	if( $postnum === 0  ) {
		echo " <div class=\"row post-display-grid\" data-equalizer> ";		
		
		// add small screens adverts
		echo " <div class=\"row show-for-small-only hide-for-print\"> ";
			echo " <div class=\"small-12 columns panel small-screen-adverts float-left\" data-equalizer-watch> ";		
				echo " <div class=\"entry-content\" itemprop=\"articleBody\"> ";				
					if ( is_active_sidebar( 'small-screen-ad-area' ) ) {		
					dynamic_sidebar( 'small-screen-ad-area' );			
					}
				echo " </div> ";
			echo " </div> ";
		echo " </div> ";
			
	}	
		if( $postnum <= 2 ){			
			echo " <div class=\"large-4 medium-4 small-12 columns panel float-left\" data-equalizer-watch> ";		
				echo " <section class=\"entry-content\" itemprop=\"articleBody\"> ";		
					//echo $postnum;
					echo "<a href=' ";
						echo the_permalink() . " ' >";
						echo get_the_post_thumbnail( $post_id, 'thumbnail' );
					echo " </a> ";
					echo "<h4 class='red-title'><a href=' ";
						echo the_permalink() . " ' >";
						echo the_title();
						echo " </a></h4> ";
					echo the_excerpt('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>');
				echo "</section>";			
			echo "</div>";
			echo "<hr class='show-for-small-only' />";	
		}	
	if( $postnum === 2  ) {
		echo "</div>";
	}	
}

/******************/

function addPostHtml_Sevens($counter2) {	
	$postnum = $counter2;
	//echo $postnum . " html sevens postnum <br />";
	if( $postnum === 1  ) {
		//echo "<p> start row </p>";
		echo " <div class=\"row post-display-grid\" data-equalizer> ";
		
		// add small screens adverts
		echo " <div class=\"row show-for-small-only hide-for-print\"> ";
			echo " <div class=\"small-12 columns panel small-screen-adverts float-left\" data-equalizer-watch> ";		
				echo " <div class=\"entry-content\" itemprop=\"articleBody\"> ";				
					if ( is_active_sidebar( 'small-screen-ad-area' ) ) {		
					dynamic_sidebar( 'small-screen-ad-area' );			
					}
				echo " </div> ";
			echo " </div> ";
		echo " </div> ";		
	}	
	
	if( $postnum >= 1 && $postnum <= 4 ){			
		echo " <div class=\"large-3 medium-3 small-12 columns panel float-left\" data-equalizer-watch> ";		
			echo " <section class=\"entry-content\" itemprop=\"articleBody\"> ";
				//echo $postnum;
				echo "<a href=' ";
					echo the_permalink() . " ' >";
					echo get_the_post_thumbnail( $post_id, 'thumbnail' );
				echo " </a> ";
				echo "<h4 class='red-title'><a href=' ";
					echo the_permalink() . " ' >";
					echo the_title();
					echo " </a></h4> ";
				echo the_excerpt('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>');
			echo "</section>";			
		echo "</div>";
		echo "<hr class='show-for-small-only' />";		
	}
		
	if( $postnum === 4  ) {
		//echo "<p> end row </p>";
		echo "</div>";			
	}	
	
	if( $postnum === 5  ) {
		//echo "<p> start row </p>";
		echo " <div class=\"row post-display-grid\" data-equalizer> ";
		
		// add small screens adverts
		echo " <div class=\"row show-for-small-only hide-for-print\"> ";
			echo " <div class=\"small-12 columns panel small-screen-adverts float-left\" data-equalizer-watch> ";		
				echo " <div class=\"entry-content\" itemprop=\"articleBody\"> ";				
					if ( is_active_sidebar( 'small-screen-ad-area' ) ) {		
					dynamic_sidebar( 'small-screen-ad-area' );			
					}
				echo " </div> ";
			echo " </div> ";
		echo " </div> ";
	}	

	if( $postnum >= 5 && $postnum <= 7 ){			
		echo " <div class=\"large-4 medium-4 small-12 columns panel float-left\" data-equalizer-watch> ";		
			echo " <section class=\"entry-content\" itemprop=\"articleBody\"> ";
				//echo $postnum;
				echo "<a href=' ";
					echo the_permalink() . " ' >";
					echo get_the_post_thumbnail( $post_id, 'thumbnail' );
				echo " </a> ";
				echo "<h4 class='red-title'><a href=' ";
					echo the_permalink() . " ' >";
					echo the_title();
					echo " </a></h4> ";
				echo the_excerpt('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>');
			echo "</section>";			
		echo "</div>";			
	}	
	if( $postnum === 7 ) {
		//echo "<p> end row </p>";
		echo "</div>";			
	}
}


/******************/
/* acf_people_row */
/******************/

global $acf_loop_count;

function acf_people_row($acf_count) {

	if( $acf_count % 2 !== 0 ) {
		echo '<div class="row margin-top-15">';
		//echo 'row';
	}
	
	$name = 'name_' . $acf_count;
	if( get_field($name) ){                           
		echo '<div class="large-2 medium-3 small-12 columns">';
			$picture = 'picture_' . $acf_count; 
			$image1 = get_field($picture);
			if( !empty($image1) ):
				  
			  $size = 'thumbnail';
			  $thumb = $image1['sizes'][ $size ];
										  
			  echo '<img src=" ' . $thumb . ' " alt=" ' . $image1['alt'] . ' " />';
			endif;
		echo '</div>';
		
		echo '<div class="large-4 medium-9 small-12 columns margin-top-10">';                                
			echo '<h3 class="red-title no-margin"> ';			   
			  the_field($name);
			echo '</h3>';
			echo '<p>';
			  $role = 'role_' . $acf_count;
			  the_field($role);
			echo '<br></p>';
			echo '<p>';
			echo 'Tel:';
			  $phone = 'phone_' . $acf_count;
			  the_field($phone);
			echo '<br>';
			echo ' Email: <a href="mailto: ';
			  $email = 'email_' . $acf_count;
			  the_field($email); 
			echo ' "> ' ;
			  the_field($email);
			echo '</a>';
			echo ' <p> ';                           
		echo ' </div> ';
		echo '<div class="show-for-small-only"> <hr /> </div>';	
	}
	
	if( $acf_count % 2 === 0 ) {
		echo '</div>';
	}
} 

/******************/

// add widget content wrapper to before widget
add_filter( 'dynamic_sidebar_params', 'check_sidebar_params' );
function check_sidebar_params( $params ) {
    global $wp_registered_widgets;

    $settings_getter = $wp_registered_widgets[ $params[0]['widget_id'] ]['callback'][0];
    $settings = $settings_getter->get_settings();
    $settings = $settings[ $params[1]['number'] ];

    if ( $params[0][ 'after_widget' ] == '</div></div>' ) {        
		$params[0][ 'before_widget' ] .= '<div class="right-bottom-sidebar-container">';
	}

    return $params;
}

/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 14;
}

add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


/**
 * Hide category-ids 29, 30, 88 on the home page
 */
function exclude_category($query) {
	if ( $query->is_home ) {
		$query->set('cat', '-8, -29, -30, -31, -32, -88');
	}
	return $query;
}
add_filter('pre_get_posts', 'exclude_category');

