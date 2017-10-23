<?php 
//使用switch 练习当前时间的输出

//date($format,$time):格式化日期
//Y：4位的年份
//m:2位的月份
//d:2位的日

//H:2位的小时
//i:2位的分钟
//s:2位的秒数

//w:返回一周内的第几天，0-6(0代表星期日)


//时区
//date_default_timezone_get() 得到当前时区，默认为utc 
//date_default_timezone_set() 设置时区 中国时区为PRC

date_default_timezone_set('PRC');


$week=date("w");
switch ($week) {
	case '0':
		$week='天';
		break;
case '1':
		$week='一';
		break;
case '2':
		$week='二';
		break;
case '3':
		$week='三';
		break;
case '4':
		$week='四';
		break;
case '5':
		$week='五';
		break;
case '6':
		$week='六';
		break;
	   default:
	   break;
}

echo date("Y年m月d日 H:i:s 星期{$week}");