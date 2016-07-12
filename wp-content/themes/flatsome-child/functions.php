<?php
/* ADD custom theme functions here  */

require get_stylesheet_directory() . '/inc/init.php';


function wpbastion_get_template_url(){
	
	return get_stylesheet_directory_uri() ;

}
add_shortcode( 'base_template_url' , 'wpbastion_get_template_url' );