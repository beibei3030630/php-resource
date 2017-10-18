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

//直接使用常量名称即可得到常量的值
echo '用户名'.USERNAME.'<br/>';
echo '年龄为'.AGE."<br/>";
echo '是否结婚'.MARRIED."<br/>";
echo '月薪为'.SALARY.'<br/>';

echo '<hr/>';
//常量默认区分大小写
define('TEST1','hello world');
echo TEST1;
echo test1; //未定义过 直接转换成字符串输出。
echo '<br/>';




//const关键字定义常量
//const NAME=值
const WEB_TITLE='king的个人博客';
const WEB_BLOG_URL='http://blog.phpfamily.org';
const WEB_ADMIN='king';
const TEST1="abcdefg";

echo WEB_TITLE,'<br/>';
echo WEB_BLOG_URL,'<br/>';
echo WEB_ADMIN,'<br/>';
echo TEST1;//之前定义过,重复赋值没有用

echo '<hr/>';


//constant($name) 使用constant函数输出常量的值
//constant里的参数要加引号，否则会报错
echo constant('WEB_TITLE').'<br/>';
echo constant('WEB_BLOG_URL').'<br/>';
echo constant('WEB_ADMIN').'<br/>';

echo constant('PHP_VERSION');//同样可以使用constant函数查看php版本号;

const PHP_VERSION='7.1.0.5';//Notice:Constant PHP_VERSION already defined


//检测常量名称是否存在
//define(name) 如果存在返回true 否则返回false

echo '<hr/>';

echo defined('TEST1');//输出结果 布尔转换成字符串
var_dump(defined('TEST1'));//boolean true

var_dump(defined('PHP_VERSION'));

echo defined('KING');//检测一个不存在的常量。结果false转换成空字符串。


//得到所有已定义的常量。
//get_defined_constants();返回的是数组，包括系统常量和自定义常量。

//print_r()打印数组的信息。
print_r(get_defined_constants());



