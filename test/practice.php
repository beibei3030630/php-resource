<?php
echo "正整数：",256,'<br/>';
echo "负整数: ",-256,'<br/>';

$words="Tom said:\"I'm pond of php\"";
echo $words;

$string='knowledge is power!';
echo $string{1}.$string{2}.$string{3};

echo "<hr/>";
$float_num=4.25E-3;
echo $float_num;
echo "<hr/>";
$num=1.23*e^4;
echo $num;

echo '<hr/>';
echo 1+"1.5abc";

echo "<hr/>";

echo "<hr/>";


$var=12.5;
settype($var, string);//永久转换类型
$res=is_string($var);//检测类型
echo $res;	//得到结果 1

echo "<hr/>";

$str="beibei";
$result=floatval($str);
echo $result;

echo "<hr/>";

$str='A3eb6';
echo strval($str);
echo "<hr/>";
echo floatval($str);
echo "<hr/>";
echo boolval($str);
echo "<hr/>";
echo intval($str);
echo "<hr/>";
echo (bool)$str;