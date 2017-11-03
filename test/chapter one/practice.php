<?php
// echo "正整数：",256,'<br/>';
// echo "负整数: ",-256,'<br/>';

// $words="Tom said:\"I'm pond of php\"";
// echo $words;

// $string='knowledge is power!';
// echo $string{1}.$string{2}.$string{3};

// echo "<hr/>";
// $float_num=4.25E-3;
// echo $float_num;
// echo "<hr/>";
// $num=1.23*e^4;
// echo $num;

// echo '<hr/>';
// echo 1+"1.5abc";

// echo "<hr/>";

// echo "<hr/>";


// $var=12.5;
// settype($var, string);//永久转换类型
// $res=is_string($var);//检测类型
// echo $res;	//得到结果 1

// echo "<hr/>";

// $str="beibei";
// $result=floatval($str);
// echo $result;

// echo "<hr/>";

// $str='A3eb6';
// echo strval($str);
// echo "<hr/>";
// echo floatval($str);
// echo "<hr/>";
// echo boolval($str);
// echo "<hr/>";
// echo intval($str);
// echo "<hr/>";
// echo (bool)$str;

// echo "<hr/>";
// $tel=123;
// settype($tel, "real");
// var_dump($tel);
// echo "<hr/>";

// $email='1000@imooc.com';
// settype($email, "int");
// var_dump($email);
// settype($email, "bool");
// var_dump($email);
// settype($email,"float");
// var_dump($email);

// echo "<hr/>";

// echo TEST;
// var_dump(TEST);


// define("TEST1","this is a test");
// var_dump(defined("TEST1"));//boolean false

// print_r(get_defined_constants());

// echo "<hr/>";
// $search=$_POST['search'];
// echo $search;

// echo "<hr/>";
// $input=$_GET['input'];
// echo $input;

// echo "<hr/>";
//  $i=5;
// echo $i+++$i--."<br/>"; //$i--的时候$i=6 5+6=11
// echo ++$i."<br/>";//经过$i-- $i=5。++$i先执行，$i=6
// echo $i--."<br/>";//$i-- 后执行，$i还是6

// echo "<hr/>";

// echo $i="1"."+"."2";

// echo "<hr/>";
// $jump="www.imooc.com";
// $content="慕课网";
// $imooc="<a href='.$jump.'>$content</a>";
// echo $imooc;

// echo "<hr/>";

// $str3.='hello';//未定义过$str2;$str2为null 转换为空字符串。
// echo $str3.'<br/>';

// echo "<hr/>";
// $a=6;
// $a/=3;
// $a*=2;
// $a%=3;
// echo $a.=3;

// echo "<hr/>";

// var_dump($aaa??null??$cccc);

// echo "<hr/>";
// $a=4;
// $b=5;
// echo ++$a+$b--;
// echo $a>$b;
// echo "<hr/>";

// $i=0;$j=1;
// if($i++&&$j){
// 	echo "true";
// }else{
// 	echo "false";
// }
// echo "<hr/>";

// $i=1;$j=0;
// if($p=$i--||$j++){
// 	echo "true";
// }else{
// 	echo "false";
// }
// echo $i."<br/>";
// echo $j."<br/>";
// echo $p."<br/>";

// echo "<hr/>";
// $i=5;
// $j=3;
// if($p=($i++ + $j)*$i){
// 	echo "aa";
// }else{
// 	echo "bb";
// }
// var_dump($i,$j,$p);
echo "<hr/>";

//练习一
$num=$_POST['num'];
if(is_numeric($num)){
	if($num%2!=0){
	echo "是奇数";
	}else{
		echo "不是奇数";
	}
}else{
	echo "请输入合法字符";
}

echo "<hr/>";
$year=$_POST['year'];
if(is_numeric($year)&&strlen($year)==4){
	if(($year%4==0&&$year%100!=0)||$year%400==0){
		echo "闰年";
	}else{
		echo "不是闰年";
	}
}else{
	echo "请输入合法年份";
}

echo"<hr/>";
$number=$_POST['number'];
if(is_numeric($number)){
	switch($number){
		case $number<60:
		echo "分数不及格";
		break;
		case 60<=$number&&$number<90:
		echo "分数一般";
		break;
		case 90<=$number&&$number<=100;
		echo "hao";
		break;
	}
}

echo "<hr/>";
echo max(45,45,45,45,45,45);

echo "<hr/>";
$test=" ";
switch ($test==null) {
	case true:
		echo "真";
	default:
		echo "imooc";
	case false:
		echo '假';
		break;
}

echo "<hr/>";

date_default_timezone_set("prc");
$num=date("w");
switch($num){
	case 0:
	$week="日";
	break;
case 1:
	$week="一";
	break;
case 2:
	$week="二";
	break;
case 3:
	$week="三";
	break;
case 4:
	$week="四";
	break;
case 5:
	$week="五";
	break;
case 6:
	$week="六";
	break;						
}
echo date("Y年m月d日 H:i:s 星期{$week}");
echo "<hr/>";

$time=date("H");
switch($time){
	case 5<=$time&&$time<10:
	$time="早上好";
	break;
	case  10<=$time&&$time<14:
	$time="中午好";
	break;
	case 14<=$time&&$time<18:
	$time="下午好";
	break;
	case 18<=$time&&$time<21:
	$time="晚上好";
	break;
	default:
	$time="休息时间";
	break;
}
echo  date("Y年m月d日 H：i：s{$time}");

echo "<hr/>";

for($i=1;$i<100;$i++){
	if($i>=3){
		break;//退出当次循环，循环结束
	}
	echo $i."<br/>";
}//输出1、2

echo "<hr/>";
//输出一个三行五列的表格
echo "<table border=1 width=80% cellpadding=0 cellspacing=0>";
for ($i=0; $i <3 ; $i++) { 
	echo "<tr>";
	for ($j=0; $j <5 ; $j++) { 
		echo "<td>*</td>";
	}
	echo "</tr>";
}
echo "</table >";


//输出99乘法表;
echo "<table border='1' width=80% cellpadding=0 cellspacing=0>";
	for ($i=1; $i <10 ; $i++) { 
		echo "<tr>";
		for ($j=1; $j <=$i ; $j++) { 
			echo "<td>{$j}x{$i}=".($i*$j)."</td>";
		}
		echo "</tr>";
	}
echo "</table>";

echo "<hr/>";
//百钱买百鸡练习题
/*百钱买百鸡的问题算是一套非常经典的不定方程的问题，题目很简单：公鸡5文钱一只，母鸡3文钱一只，小鸡3只一文钱，
 用100文钱买一百只鸡,其中公鸡，母鸡，小鸡都必须要有，问公鸡，母鸡，小鸡要买多少只刚好凑足100文钱。
*/

for($i=1;$i<=100;$i++){
	for($j=1;$j<=100;$j++){
		for($k=1;$k<=100;$k++){
			if(($i*5+$j*3+(1/3)*$k==100)&&($i+$j+$k==100)){
				echo "公鸡：{$i}只，母鸡:{$i}只，小鸡{$k}只"."<br/>";
			}
		}
	}
}



//过桥问题
/*假设某人有100,000现金。
每经过一次路口需要进行一次交费。
交费规则为当他现金大于50,000时每次需要交5%如果现金小于等于50,000时每次交5,000。
请写一程序计算此人可以经过多少次这个路口。*/
for($i=0,$j=100000;$j>5000;$i++){
	if($j>50000){
		$j-=$j*0.05;
		
	}else{
		$j-=5000;
	}
}
echo $i;


echo "<hr/>";





//四位彩色验证码
for ($i=0; $i <4 ; $i++) { 
	echo "<span style='color:rgb(".mt_rand(0,255).",".mt_rand(0,255).",".mt_rand(0,255).")'>".mt_rand(0,9)."</span>";
}

$arr=[3,4,5];
print_r($arr);

$arr=array(
	array("1","6",5),
	array("1","6",5),
	array("1","6",5)
	);
print_r($arr);