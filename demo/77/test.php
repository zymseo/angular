<?php
/**
 * Created by PhpStorm.
 * User: t
 * Date: 2017/2/14
 * Time: 10:59
 */
    header('Content-type:text/html;charset="utf8"');

    /* class A{
        private $name = 'zym';
        public $age = 23;
        protected $work = 'PHP开发工程师';
    }
    
  
    
    class B extends A{
        public function run(){
            echo $this->work;
        }
    }
    
    $b = new B(); */

    /* echo disk_total_space('.') / pow(1024, 3).'<br/>';
    echo disk_free_space('.').'<br/>';
    echo dirname(__FILE__).'<br/>';//返回某个文件的目录部分
    var_dump(file_exists('./test.php')).'<br/>';//判断某个文件或目录是否存在
    echo filetype('./test.php');//判断类型（目录或文件）
    echo getcwd().'<br/>';//返回当前文件属于哪个目录
    //echo filesize('./1.html').'<br/>';//文件大小
    
    //var_dump(rename('2.html', '1.html'));//重命名文件名，返回值是true或false
    echo '<pre>';
    //print_r(scandir('.'));//以数组形式返回当前目录下的所有文件或文件夹
    
    /* //以数组形式返回某个目录下的某种文件，并且不带【.】和【..】
    $dir1 = glob('./*.html');
    print_r($dir1); */
    
    /* $dir = opendir('.');
    while($file=readdir($dir)){
        if($file!='.' || $file!='..'){
            echo $file.'<br/>';
        }
    }
    closedir($dir); */
    
    //array_map('unlink', glob('./*.html')); */
    
    
    /* function del_dir($dirname){
        $dir = opendir($dirname);
        while($file=readdir($dir)){
            $filepath = $dirname.'\\'.$file;
            if($file!='.' && $file!='..'){
                if(is_dir($filepath)){
                    if(count(glob($filepath))>0){
                        del_dir($filepath);
                    }else{
                        rmdir($filepath);
                    }
                }else{
                    unlink($filepath);
                }
            }
        }
        closedir($dir);
        rmdir($dirname);
    }
    del_dir('a'); */

    /* if(is_executable('vcredist_x64.exe')){
        echo '这是一个可执行文件，大小为：'.filesize('vcredist_x64.exe');
    } */
    
    /* $file = fopen('1.txt','r+');
    echo fread($file,filesize('1.txt'));
    fwrite($file, ',好吧');
    rewind($file);
    echo fread($file, filesize('1.txt'));
    fclose($file); */
    
    /* $file = fopen('http://www.baidu.com','r');
    while($row = fgets($file)){
        echo $row;
    } */
    
    /* $file = fopen('1.txt', 'a+');//写读模式，默认将光标定位到最后边
    fwrite($file, '明天就要放假啦!');
    rewind($file);
    echo fread($file, filesize('1.txt'));
    fclose($file); */
    
    /* $file = file_get_contents('http://www.baidu.com');
    file_put_contents('aa.html',$file); */
    
    echo ord('z');

   