<?php
/*
Plugin Name: Hack Day
Plugin URI: http://nataliepo.com
Description: TESTING! HEYO!
Author: nataliepo
Version: 1.0
Author URI: http://nataliepo.com
*/

function address_shortcode($atts) {
	$str = '<p>Dude McGee<br />';
	

	/* Defines the default value in case it's not defined in the
	 * shortcode (post body) */
	extract(shortcode_atts(array('location' => 'MN'), $atts));
	
	if ($atts['location'] == 'MN') {
		return $str . '24 Gumpdrop Lane<br />
		Some Town, MN 34612</p>';
	}
	else {
		return $str . '100 Times Square #24236<br />
		New York, NY 10101</p>';
	}
}


add_shortcode ('bgaddress', 'address_shortcode');


?>