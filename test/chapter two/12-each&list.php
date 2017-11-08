<?php
//each — 返回数组中当前的键／值对并将数组指针向前移动一步键值对被返回为四个单元的数组，键名为0，1，key和 value。如果内部指针越过了数组的末端，则 each() 返回 FALSE。



//list()
$arr=[1,2,3];
list($var1,$var2,$var3)=$arr;
list(,$var2,$var3)=$arr;
list(,,$var3)=$arr;

//echo $var1."+".$var2."+".$var3;



echo $d;

$arr=[
	[1,'alice',12],
	[2,'tom',22],
	[3,'jack',32]
];
foreach ($arr as list($id,$name,$age)) {
	echo $id."--".$name."--".$age."<br/>";
}
$arr=[
	"a","b","c"
];
echo "<hr/>";
$arr=[
	"a"=>"aaa",
	"b"=>"bbb",
	"c",
	"username"=>"king",
	33=>"ddd"
];
while (list($k,$v)=each($arr)) {//$k,$v会对应数组中下标为[0]和[1]的值
	echo $k."--".$v."<br/>";
}	