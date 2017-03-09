<?php
    header('Content-type:text/html;charset="utf-8"');
    
    $arry = array(
        array('id'=>'1', 'webname'=>'赵一鸣博客', 'weburl'=>'http://www.zymseo.com'),
        array('id'=>'2', 'webname'=>'太原雅辉装修网', 'weburl'=>'http://www.0351zhuangxiu.com')
    );
    
    echo json_encode($arry);