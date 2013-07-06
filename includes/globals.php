<?php
	
	$params = explode('/',$_SERVER['PHP_SELF']);
	$k_count = count($params);
	$current_page = $params[$k_count-1];
	//echo $current_page;
	
	function pr($data = null) {
		if (is_array($data)) {
			echo '<pre>';
			print_r($data);
			echo '</pre>';
		} else {
			echo "<pre>$data</pre>";
		}
	}
	

