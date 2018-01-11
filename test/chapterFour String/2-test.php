<?php
header('content-type:text/html;charset=utf-8');
//ord chr
$char='k';
echo ord($char);//根据给定的字符返回ASCII码值
echo "<br/>";
echo chr(ord($char));//chr根据ascii码值返回字符

$string='abcdef';
echo substr($string,0,1);//a
echo substr($string,2,2);//cd
echo substr($string,3);//def
echo substr($string,-2);//ef
echo substr($string,-4,-2);//cd
echo substr($string,0,-3);//abc
echo substr($string,-4,-2);//cd

echo "<hr/>";
$str1="abcdef";//第一个字符a ascii码值为97
$str2="b";//第一个字符b ascii码值为98
print_r(strcmp($str1, $str2));//只比较第一个字符，返回-1。
//因为a比b小1，所以为-1。

//查找字符串
$foo = "0123456789a123456789b123456789c";
var_dump(strrpos($foo,'7'));
if(strpos($foo,'0')===false){
	echo "不存在数字0";
}

$str=trim(" ABC ");
echo "X".$str."X";//XABCX

$password="baobao9056";
echo md5($password);
