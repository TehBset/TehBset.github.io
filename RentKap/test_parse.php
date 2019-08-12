<?php
	$check = is_dir('img/slider0');
	$n = 0;
	while ($check) {
		$n++;
	    $check = is_dir('img/slider'."$n");
	}
	for ($i = 0; $i < $n; $i++) {
	$path = "slider"."$i"; 
	$dir  = "img/$path";
	$files1 = scandir($dir);
	print_r($files1);
	}
 ?>