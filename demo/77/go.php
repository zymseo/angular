<?php
	header('Content-type:text/html;charset="utf8"');

	$str = 'abcdefghijklmnopqrstuvwxyz';
	$arry = array();
	for($i=0; $i<strlen($str); $i++){
		array_push($arry, $str[$i]);
	}
	echo '<pre/>';
	print_r($arry);