<?php

  $array = array();
	$array['Google Search']['Google Images']['Google Maps']='http://www.google.com';
	$array['Yahoo Search']['Yahoo Mail']['Yahoo Video']='http://www.yahoo.com';
	$array['Bing Search']['Bing Shopping']['Bing Entertainment']='http://www.bing.com';
	$array['Ask Search']['Ask Local']['Ask Reference']='http://www.ask.com';
	
	print_r($array);
	
	foreach ($array as $key => $value) {
		foreach ($value as $value1) {
			foreach ($value1 as $value2) {
					echo '<a href="' . $value2 . '">' . $key . '</a></br>';
			}
		}	
	}
	
?>