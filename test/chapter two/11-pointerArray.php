<?php
/*
key()
	得到当前指针所在位置的键名，如果不存在返回null
current()
	得到当前指针所在位置的键值，如果不存在返回false
next()
	将数组指针向下移动一位，并且返回当前指针所在位置的键值，如果没有返回false
prev()
	将数组指针向上移动一位，并且返回当前指针所在位置的键值，如果没有返回false
end()
	将数组指针移动到数组开始，并且返回当前指针所在位置的键值，如果没有返回false
reset()
	将数组指针移动到数组末尾，并且返回当前指针所在位置的键值，如果没有返回false
 */
echo "<pre>";
$arr=[
	"a","b","c",
	35=>"test",
	"username"=>"king",
	"age"=>12
];

echo "当前指针所在位置元素的键名：".key($arr)."<br/>";
echo "当前指针所在位置元素的键值：".current($arr)."<br/>";

next($arr);
echo "当前指针所在位置元素的键名：".key($arr)."<br/>";
echo "当前指针所在位置元素的键值：".current($arr)."<br/>";

next($arr);
echo "当前指针所在位置元素的键名：".key($arr)."<br/>";
echo "当前指针所在位置元素的键值：".current($arr)."<br/>";

next($arr);
echo "当前指针所在位置元素的键名：".key($arr)."<br/>";
echo "当前指针所在位置元素的键值：".current($arr)."<br/>";

next($arr);
echo "当前指针所在位置元素的键名：".key($arr)."<br/>";
echo "当前指针所在位置元素的键值：".current($arr)."<br/>";
next($arr);
echo "当前指针所在位置元素的键名：".key($arr)."<br/>";
echo "当前指针所在位置元素的键值：".current($arr)."<br/>";
//指针到末尾
var_dump(next($arr));
echo "</pre>";

$arr=[
	"c",
	"a",
	""=>"d",
	false=>"abc",
	"b","c",
	35=>"test",
	"username"=>"king",
	"age"=>12
];
while(!is_null(key($arr))){
	echo key($arr)."--".current($arr)."<br/>";
	next($arr);
};	

end($arr);
echo "当前指针所在位置元素的键名：".key($arr)."<br/>";
echo "当前指针所在位置元素的键值：".current($arr)."<br/>";

reset($arr);

echo "当前指针所在位置元素的键名：".key($arr)."<br/>";
echo "当前指针所在位置元素的键值：".current($arr)."<br/>";

$arr=[
	"c",
	"a",
	""=>"d",
	false=>"abc",
	"b","c",
	35=>"test",
	"username"=>"king",
	"age"=>12
];
end($arr);
while (!is_null(key($arr))) {
	echo key($arr)."--".current($arr)."<br/>";
	prev($arr);
}


//输出文件扩展名
$filename='1.txt.php';
$res=explode(".", $filename);
$ext=end($res);
echo "1.txt.php文件扩展名为：".$ext;


