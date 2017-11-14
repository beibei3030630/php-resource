<?php
echo "注意while中的continue和break一定要在continue和break之前加上变量++，否则不运行循环体之后的代码会造成死循环。";
echo "<hr/>";

//while（exp）{
// 	循环体;
// }
echo "while循环测试<br/>";
$i=1;
while($i<=3){
	echo "whileTest<br/>";
	$i++;
}

echo "<hr/>";

// do{
// 	循环体
// }while（exp）
// do while循环语句，无论表达式是否为真，无条件循环一次循环体。

echo "do while循环测试<br/>";
echo "表达式为假，也会执行一次循环体<br/>";
$i=6;
do{
	echo "doWhileTest<br/>";
	$i++;
}while($i<=5);

echo "<hr/>";

$i=1;
while ($i<=10) {
	if($i==3){
		break;
	}
	echo $i,'<br/>';
	$i++;
}
echo "<hr/>";

$i=1;
while($i<=5){
	if($i==3){
		$i++;
		//continue之后$i依旧为3，又为死循环。$i++一定要加在continue之前。continue之后就不再执行循环体内的代码了。
		continue;
	}	
	echo $i,'<br/>';
	$i++;
	
}