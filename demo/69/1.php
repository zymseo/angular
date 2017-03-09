<?php
	//header('Content-type:text/html;charset="utf8"');

	$content = file_get_contents('php://input');
	print_r(json_decode($content, true));