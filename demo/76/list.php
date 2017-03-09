<?php
    header('Content-type:text/html;charset="utf-8"');
    
    $webList = array(
        array('webid'=>1, 'webname'=>'赵一鸣个人博客', 'weburl'=>'http://www.zymseo.com'),
        array('webid'=>2, 'webname'=>'太原雅辉装修网', 'weburl'=>'http://www.0351zhuangxiu.com')
    );
    
    echo json_encode($webList);