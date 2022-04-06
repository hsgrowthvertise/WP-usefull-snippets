<?php
add_shortcode('URL_FIELD', 'get_url_key_value');
function get_url_key_value($atts) { //usage  [URL_FIELD key='urlkey' or='defaultvalue']
	$a = shortcode_atts(array('key'=>'','or'=>''), $atts);
	return (($a['key'] !='') && isset($_GET[$a['key']])) ? $_GET[$a['key']] : $a['or'];
}
