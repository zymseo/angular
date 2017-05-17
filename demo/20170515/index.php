<?php
	header('Content-type:text/html;charset="utf8"');

	/*$str = 'hello world!';

	echo substr($str, strpos($str, ' ')+1) . '<br/>';

	echo strstr($str, ' ') . '<br/>';

	echo stristr($str, 'Wo') . '<br/>';

	echo strrchr($str, 'o') . '<br/>';*/

	/*$str = 'hello world!';

	echo str_replace('h', 'H', $str) . '<br/>';

	echo str_replace(array('h', 'w'), array('H', 'W'), $str);*/

	/*echo strcmp('3', '22') . '<br/>';
	echo strnatcmp('3', '22') . '<br/>';//自然数比较
	echo strcasecmp('hello', 'HELLO') . '<br/>';//不区分大小写比较
	echo strncmp('2016', '2017', 3);//前n位数比较*/

	/*$url = 'http://www.zymseo.com/blog?a=1&b=2&c=3';
	$arry = parse_url($url);
	echo '<pre/>';
	print_r($arry);

	$query = $arry['query'];
	parse_str($query);
	echo $a . '<br/>';
	echo $b . '<br/>';
	echo $c . '<br/>';*/

	/*//对中文进行编码和解码
	$str = '赵一鸣PHP学习笔记';
	$encode = urlencode($str);
	echo $encode . '<br/>';
	$decode = urldecode($encode);
	echo $decode . '<br/>';*/

	/*$str = '<h1>hello 赵一鸣</h1>';
	echo htmlspecialchars($str) . '<br/>';
	echo htmlspecialchars_decode($str);*/

	/*$str = 'zym"seo';
	//判断php.ini配置文件中是否开启了预定义字符自动转义
	if(!get_magic_quotes_gpc()){
		echo addslashes($str);
	}else{
		echo $str;
	}*/

	/*$arry = array('webname'=>'赵一鸣博客','url'=>'http://www.zymseo.com');
	while(list($a, $b) = each($arry)){
		echo $a . '+' . $b . '<br/>';
	}*/

	/*$arry = array('webname'=>'赵一鸣博客','url'=>'http://www.zymseo.com');
	next($arry);
	echo key($arry) . '<br/>';
	reset($arry);
	echo key($arry) . '<br/>';
	echo count($arry);*/

	/*$arry = array('webname'=>'赵一鸣博客','url'=>'http://www.zymseo.com');
	echo in_array('赵一鸣博客', $arry) . '<br/>';
	echo in_array(1, $arry) . '<br/>';
	echo array_search('赵一鸣博客', $arry) . '<br/>';
	echo array_search('1', $arry);*/

	/*$arry = array('webname'=>'赵一鸣博客','url'=>'http://www.zymseo.com');
	echo '<pre />';
	print_r(array_change_key_case($arry));//改变数组键名大小写，默认改为小写
	print_r(array_change_key_case($arry, CASE_UPPER));
	print_r(array_change_key_case($arry, CASE_LOWER));*/

	/*$arry = array('name'=>'zym','blog'=>'http://www.zymseo.com','work'=>'web','qq'=>'1047832475','wechat'=>'zhao-seo');
	echo '<pre />';
	print_r(array_chunk($arry, 2));//将数组每隔n个分一个组，组成一个二维数组*/

	/*$arry1 = array('webname','weburl');
	$arry2 = array('赵一鸣博客','http://www.zymseo.com');
	echo '<pre />';
	print_r(array_combine($arry1, $arry2));//合并两个数组，第一个数组的值作为键名，第二个数组的值作为键值。*/

	/*$arry1 = array('webname'=>'赵一鸣博客','weburl'=>'http://www.zymseo.com','webtime'=>'2年');
	$arry2 = array('webname'=>'赵一鸣博客','weburl'=>'http://www.zymseo.com');
	echo '<pre />';
	print_r(array_diff($arry1, $arry2));//返回在其他数组中不存在的值（第一个数组有，第二个数组没有）*/

	/*$arry1 = array('webname'=>'赵一鸣博客','weburl'=>'http://www.zymseo.com','webtime'=>'2年');
	$arry2 = array('webname'=>'赵一鸣博客','weburl'=>'http://www.zymseo.com');
	echo '<pre />';
	print_r(array_diff_key($arry1, $arry2));//返回在其他数组中不存在的键名（第一个数组有，第二个数组没有）；*/

	/*$arry1 = array('webname'=>'赵一鸣博客','weburl'=>'http://www.zymseo.com','webtime'=>'2年');
	$arry2 = array('webname'=>'赵一鸣博客','weburl'=>'http://www.baidu.com','baidu'=>'http://www.baidu.com');
	echo '<pre />';
	print_r(array_diff_assoc($arry1, $arry2));//只要键名或键值有一个不一样，就返回（第一个数组有，第二个数组没有）*/

	/*$arry = array('class1'=>'seo课程','class2'=>'web课程','weburl'=>'http://www.zymseo.com');
	function callback($v){
		if( strpos($v, '课程') ){
			return true;
		}else{
			return false;
		}
	}
	print_r(array_filter($arry, 'callback'));*/

	/*//数组过滤
	$arry = array(
		array('name'=>'', 'size'=>'123', 'path'=>'./1.jpg'),
		array('name'=>'2.jpg', 'size'=>'456', 'path'=>'./2.jpg'),
		array('name'=>'3.jpg', 'size'=>'789', 'path'=>'./3.jpg')
	);
	function callback($v){
		if($v['name']!=''){
			return true;
		}else{
			return false;
		}
	}
	$newArry = array_filter($arry, 'callback');
	echo '<pre>';
	print_r($newArry);*/

	/*$arry = array('webname'=>'赵一鸣博客','weburl'=>'http://www.zymseo.com','webtime'=>'2年');
	echo '<pre />';
	print_r(array_flip($arry));//将数组的键名与键值互换*/

	/*$arry = array('webname'=>'赵一鸣博客','weburl'=>'http://www.zymseo.com','webtime'=>'2年');
	echo array_key_exists('webname', $arry) . '<br/>';//判断数组中是否存在某个键名
	echo '<pre />';
	print_r(array_keys($arry));//返回数组中所有的键名并组成一个新的数组*/

	/*$arry = array('苹果','桃子','梨','橘子','梨','苹果');
	echo '<pre>';
	print_r(array_unique($arry));//删除数组中的重复元素，不改变原数组
	foreach($arry as $v){
		echo $v.'<br/>';
	}*/

	/*//array_map()：对数组每个元素都执行回调函数，并且用return返回执行结果，不改变原数组
	$arry = array(100, 200, 300, 400, 500);
	echo '<pre />';
	function callback($v){
		if($v<=300){
			return $v += 100;
		}else{
			return $v;
		}
	}
	print_r(array_map('callback', $arry));
	print_r($arry);*/

	/*$arry = array(100, 200, 300, 400, 500);
	echo '<pre />';
	function callback(&$v){
		if($v<=300){
			$v += 100;
		}
	}
	if(array_walk($arry, 'callback')){
		print_r($arry);
	}*/

	/*$name = '赵一鸣';
	echo '<pre />';
	print_r(compact('name'));//将变量变成数组，变量名作为键名，变量值作为键值。*/

	/*$arry = array('name'=>'张三', 'sex'=>'男');
	extract($arry);//将数组转为变量，键名作为变量名，键值作为变量值。
	echo $name . '<br/>';
	echo $sex;*/

	/*$arry1 = array('webname'=>'赵一鸣博客','weburl'=>'http://www.zymseo.com','query'=>'a=1&b=2&c=3');
	$arry2 = array('webname'=>'百度','weburl'=>'http://www.baidu.com');
	echo '<pre>';
	print_r(array_merge_recursive($arry1,$arry2));//递归的合并数组，如果有重复的键名，则生成多维数组*/

	/*$arry = array('seo','php','seo',100,200,100,'seo');
	echo '<pre>';
	print_r(array_count_values($arry));//统计数组中的每个元素各自出现了多少次，并生成一个新的数组*/

	/*echo '<pre/>';
	print_r(range(2, 20, 3));//生成指定范围内的数组，第三个参数是步长值*/

	/*$arry = array();
	for($i=0; $i<5; $i++){
		$arry[] = mt_rand(0, 100);
	}
	echo '<pre>';
	print_r($arry);*/

	/*$arry = array(1, 2, 3, 4, 5);
	echo array_product($arry);*/

	/*$arry = array(1, 2, 3, 4, 5);
	function fn($a){
		$b = 1;
		$count = count($a)-1;
		foreach($a as $v){
			$b*=$v;
		}
		echo $b;
	}	
	fn($arry);*/

/*	$arry = array('weburl'=>'http://www.zymseo.com','webname'=>'zymblog','webtime'=>'1年');
	echo '<pre>';
	$tmpArry = array_rand($arry, 2);//返回包含随机键名的数组
	$newArry = array();
	foreach($tmpArry as $value){
		array_push($newArry, $arry[$value]);
	}

	print_r(array_combine($tmpArry, $newArry));*/

	/*$arry = array(1, 2, 3, 4);
	array_splice($arry, 2, 2, 'seo');
	print_r($arry);*/

	/*$arry = array(1, 2, 3, 4);
	function callback($a, $b){
		return $a += $b;
	}
	echo array_reduce($arry, 'callback', 0);//用回调函数递归操作数组，第三个参数是回调函数中的第一个参数，回调函数中的第二个参数是数组中的每一个元素*/

	/*$arry = array(1, 2, 3, 4);
	function callback($v){
		if($v<=2){
			return $v += 1;
		}else{
			return $v;
		}
	}
	print_r(array_map('callback', $arry));//通过回调函数对数组中的每一个元素进行操作*/

	/*$arry = array('webname'=>'baidu', 'weburl'=>'http://www.baidu.com', 'webtime'=>'2 years');
	krsort($arry);
	print_r($arry);*/

	/*class Person {
		private $name;
		private $sex;
		private $age;
		static $work;
		public function __construct($name, $sex, $age, $work){
			$this->name = $name;
			$this->sex = $sex;
			$this->age = $age;
			self::$work = $work;
		}
		protected function eat(){
			return '吃饭';
		}
		public function eatDetail(){
			return $this->eat();
		}
		public function showDetail(){
			return $this->show();
		}
		private function show(){
			return '姓名：' . $this->name. ';性别：' . $this->sex . ';年龄：' . $this->age . ';工作：' . self::$work;
		}
	}
	$person = new Person('赵一鸣', '男', '24', 'web');
	echo $person->showDetail() . '<br/>';
	echo $person->eatDetail();*/

	/*abstract class Person {
		public $name = 'zym';
		public $age;
		public $sex;
		abstract function show();
	}

	//$person = new Person(); //报错
	
	class Son extends Person {
		public function show(){
			return $this->name;
		}
	}

	$son = new Son();
	echo $son->show();*/

    /*class Person {
        private $name;
        protected $age;
        private $sex;
        public $num = 0;

        public function __construct($name, $age, $sex){
            $this->name = $name;
            $this->age = $age;
            $this->sex = $sex;
        }

        public function __toString(){
            //$arry = get_class_methods(__CLASS__);//获得当前类的所有方法
            //$str = implode('-', $arry);
            //return $str;

            //获得当前对象的所有属性值
            $arry = get_object_vars($this);
            $str = implode('-', $arry);
            return $str;
        }

        //获取不存在或无权限的属性值时自动执行
        public function __get($name){
            echo '正在获取'.$name.'的值！';
        }

        //设置不存在或无权限访问的属性值时自动执行
        public function __set($name, $value){
            echo '想要设置' . $name . '的值为' . $value;
        }

        //判断某个属性是否存在时自动执行
        public function __isset($name){
            echo '正在判断'.$name.'是否存在！';
        }

        //删除一个不存在或无权限访问的属性值时自动执行
        public function __unset($name){
            echo '正在删除' . $name . '属性！';
        }

        //执行serialize方法时自动执行
        public function __sleep(){
            return array('name', 'age');
        }

        //执行unserialize方法时自动执行
        public function __wakeup(){
            $this->num += 1;
            echo $this->num;
        }
    }

    $person = new Person('zym', 24, 'man');
    //echo $person->age;
    //$person->name = '张三';
    //if( isset($person->name) ){
     //   echo $person->name . '<br/>';
    //}
   // unset($person->name);
    $p1 = serialize($person);
    echo '<pre/>';
    echo $p1 . '<br/>';
    echo $person->num . '<br/>';
    $p2 = unserialize($p1);
    print_r($p2);*/

    /*//自动加载类，当实例化一个对象时，发现不存在某个类，就会自动根据路径进行加载。
    function __autoload($className){
        include $className.'.class.php';
    }
    $test = new Test();
    echo $test->show();*/

    /*echo disk_total_space('.') . '<br/>';//磁盘总容量
    echo disk_free_space('.') . '<br/>';//磁盘剩余容量
    echo dirname(__FILE__) . '<br/>';//文件路径的目录部分
    echo file_exists('./test.html') . '<br/>';//判断某个文件是否存在
    echo filetype('./Test.class.php') . '<br/>';//判断文件类型，是文件还是文件夹
    echo filetype('../82') . '<br/>';
    echo getcwd() . '<br/>';//获取【当前】文件所在目录，不需要参数
    echo '<pre/>';
    print_r(scandir('.'));
    print_r(glob('./*'));
    //unlink('./test.html');*/

    /*$files = opendir('./a');
    while($a = readdir($files)){
        if($a!='.' && $a!='..'){
            unlink('./a/'.$a);
        }
    }*/

    

