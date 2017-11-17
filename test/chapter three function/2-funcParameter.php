<?php
header('content-type:text/html;charset=utf-8');
//自定义两个数字，相加两个数字之间的所有数字，包括两个数字
// function sum($x,$y){
// 	$sum=0;
// 	for(;$x<=$y;$x++){
// 		$sum+=$x;
// 	}
// 	echo $sum;
// }
// sum(7,8);


//传参给表格 定义几行几列
function param($rows,$cols,$bgColor='pink',$content="x"){
	$table="<table border='1' cellpadding='0' cellspacing='0' bgColor={$bgColor} width='30%'>";
	for($i=1;$i<=$rows;$i++){
		$table.="<tr>";
		for($j=1;$j<=$cols;$j++) { 
			$table.="<td>{$content}</td>";
		}
		$table.="</tr>"	;
	}
	$table.="</table>";
	return $table;
}
echo param(3,5);

echo "<hr/>";
function paramTest($i,$k=100){
	return $i+$k;
}
echo paramTest(3);

// 截取文件的扩展名
echo "<hr/>";
function getExt($filename){
	$ext=explode('.',$filename);
	return array_pop($ext);
}
$res=getExt('1.php');
echo $res;
echo "<br/>";
function getExt2($filename){
	return $ext=pathinfo(strtolower($filename),PATHINFO_EXTENSION);
}
echo getExt2("2.html");










