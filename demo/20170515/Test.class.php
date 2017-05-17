<?php
/**
 * Created by PhpStorm.
 * User: t
 * Date: 2017/5/17
 * Time: 14:14
 */

class Test {
    public $num;

    public function __construct(){
        $this->num = 12345;
    }

    public function show(){
        return $this->num;
    }
}