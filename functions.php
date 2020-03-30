<?php





// exercice 1 30/03/2020


// ma première action
function test_hook(){
	echo '<p class="hello"> Moi comprendre !!</p>';
}
add_action( 'test', 'test_hook');







add_filter( 'the_content', 'display_time_ago' );

// Hook time ago
function display_time_ago ( $content ) {

		$content .= "
	" . __( '<br>Posté il y a ', 'wpcandy' ) . human_time_diff( get_the_time('U'), current_time('timestamp') );

		return $content;

} 

