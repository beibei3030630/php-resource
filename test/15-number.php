<?php

//表达式与运算符
//表达式——只要有值的东西都可以叫表达式

//算术运算符
//+ - * / %  **幂次方

echo 3%8; //除不开，依旧是3。

echo "<br/>";

echo 8%3;//2

echo "<br/>";

echo 3%-8;//后面的操作数 负号没有作用 依旧是3

echo "<br/>";

echo -3%8;//除不开 取前面的数值  -3

echo "<br/>";

echo -3%-8;//-3

echo '<hr/>';

//第四部分 1-2选择题
$a=8;$b=2;$i=3;
echo $i%$b*$a;
echo "<br/>";

echo $i+$a/$b;
echo "<br/>";

echo $b*$i/$a;
echo "<br/>";

echo $a%$b-$i;
echo "<hr/>";







//递增递减运算符
//++  -- 前缀形式 先加减1 再执行
//		 后缀形式 先执行 再加减1


//整数支持递增、递减
 $i=1;
 echo ++$i.'<br/>';//2
 
 echo $i.'<br/>';//2

 $a=1;
 echo $a++.'<br/>';//1 先执行$a 再去加1

 echo $a;

echo '<hr/>';


//浮点支持递增、递减
$b=12.3;
$b++;
echo $b.'<br/>';

++$b;
echo $b.'<br/>';

echo '<hr/>';

//布尔值不支持递增递减

$c=true;

$c++;

echo $c."<br/>";

++$c;

echo $c."<br/>";

echo "<hr/>";

//null只支持递增，不支持递减

$d=null;

$d++;

echo $d.'<br/>';

$e=null;
$e--;

echo "#".$e."#";

echo "<hr/>";

//字符串只支持递增，不支持递减

$str='a';

$str++;

echo $str.'<br/>';//b

$str='b';
$str--;
echo $str."<br/>";


$str='z';
$str++;
echo $str."<br/>";//aa 进一位

$str='abc';
$str++;
echo $str."<br/>";//abd 递增最后一位

$str='a9';
$str++;
echo $str."<br/>";//9+1=10 a进一位  b0

echo '<hr/>';


//ord($var)得到指定字符的ASCII码值

$str='a';

echo ord($str).'<br/>';//a的acsii码值为97

//chr($ascii)根据指定字符得到相对应的元素

$str=99;
echo chr($str);//c
echo '<hr/>';





//字符连接符  . 来连接字符串
echo 'a'.'b'.'c';
echo '<br/>';

echo 'a','b','c';
echo '<br/>';

$str1='hello';
$str2='world';
// $newStr=$str1,$str2;//赋值给一个新的字符串。两个字符串中间不能用逗号。逗号只能在echo中用于连接


$newStr=$str1.$str2;
echo $newStr;
echo '<hr/>';






//赋值运算符  = += -= *= /= .=
$username='king';
$i=3;
$i+=5;

echo $i.'<br/>';

$i=2;
$i-=5;

echo $i.'<br/>';
echo "<hr/>";

$str='hello';
$str.= ' world';//.=用来连接字符串

echo $str.'<br/>';


$str3.='hello';//未定义过$str2;$str2为null 转换为空字符串。
echo $str3.'<br/>';







//mt_rand($min,$max)产生$min到$max之间的随机数

echo mt_rand(1,9);