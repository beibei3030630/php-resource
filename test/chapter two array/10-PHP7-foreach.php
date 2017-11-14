<?php
//php7之后，foreach不再改变内部数组指针 
$array=[0,1,2];
foreach ($array as &$value) {
	var_dump(current($array));
}

//foreach通过值遍历，操作的值为数组的副本
$array=[0,1,2];
$ref=&$array;
echo "遍历销毁过一个元素的数组<br/>";
foreach ($array as $val ) {
	echo $val."<br/>";
	unset($array[1]);
}
echo "<br/>";
echo "打印遍历后的数组及之前引用原地址的数组";
var_dump($array,$ref);

$arr=["aa","bb"];
foreach ($arr as $value) {
	echo $value."<br/>";
	$arr[2]="cc";
}

