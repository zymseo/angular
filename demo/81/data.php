<?php
	header('Content-type:text/html;charset="utf8"');

	$userList = array(
		array('id'=>1, 'uname'=>'张三', 'email'=>'1@qq.com', 'tel'=>'13126919251'),
		array('id'=>2, 'uname'=>'李四', 'email'=>'2@qq.com', 'tel'=>'13226919251'),
		array('id'=>3, 'uname'=>'王五', 'email'=>'3@qq.com', 'tel'=>'13326919251')
	);

	echo json_encode($userList);