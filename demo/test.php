<?php
/**
 * Created by PhpStorm.
 * User: t
 * Date: 2017/2/22
 * Time: 9:43
 */

$arry = array('1', '2', '3');

$a = array_splice($arry, 0, 1, 'hello');
print_r($arry);