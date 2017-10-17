<?php
header('content-type:text/html;charset=utf-8');
//常量是一个简答的标识符，常量一经定义在脚本执行期间是不能改变的

//系统常量
//PHP_VERSION PHP的版本
//PHP_OS PHP的运行系统
//PHP_INT_MAX 整形的最大值

echo PHP_VERSION;

echo '<br/>';

echo PHP_OS;

echo '<br/>';

echo PHP_INT_MAX;

echo '<br/>';

//自定义常量 
//define()函数定义常量
//define(NAME, VALUE)
//常量名称不加$
//常量名称最好大写，以字母或者下划线开始
//常量默认区分大小写
//常量作用域是全局
//常量一经定义，在脚本执行期间是不能改变的。
//常量的值可以是标量类型，也可以是数组
echo'<hr/>';
define('TEST','this is a test');

echo TEST;

define('TEST','hello world'); //已经定义过常量的值，不能再定义了
echo TEST; 

define('USERNAME', 'beibei3030630');
define('AGE',12);
define('MARRIED', true);
define('SALARY',123456.789);


echo '用户名'.USERNAME.'<br/>';
echo '年龄为'.AGE."<br/>";
echo '是否结婚'.MARRIED."<br/>";
echo '月薪为'.SALARY.'<br/>';

echo '<hr/>';
//常量默认区分大小写
define('TEST1','hello world');
echo TEST1;
echo test1; //未定义过 直接转换成字符串输出。





//const关键字定义常量

