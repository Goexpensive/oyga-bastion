<?php

function wpbastion_remove_shortcodes() {
   
   remove_shortcode( 'ux_banner' );

}
add_action( 'after_setup_theme', 'wpbastion_remove_shortcodes', 100 );


?>