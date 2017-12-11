<?php
$handle=fopen(__DIR__.'/user.txt', 'rb+');
$rows=[];
while ($row=fgetcsv($handle,0,'-')) {
	$rows[]=$row;
}
print_r($rows);
fclose($handle);


$arr=[
[1,'jack',18],
[2,'john',22],
[3,'tom',30]
];
$handle=fopen(__DIR__.'/user.txt', 'ab+');
foreach ($arr as $key => $val) {
	PHP_EOL.fputcsv($handle,$val);
}
fclose($handle);

$relatedArr=[
	['num'=>1,'name'=>'jack','age'=>18],
	['num'=>2,'name'=>'john','age'=>22],
	['num'=>3,'name'=>'tom','age'=>30]
];
$handle=fopen(__DIR__.'/user.txt', 'wb+');
//关联数组也只会把键值内容转成csv格式的文件
foreach ($relatedArr as $key => $val) {
	PHP_EOL.fputcsv($handle, $val,'-');
	//把每一行数组以'-'分割,转成csv格式写入文件
}
fclose($handle);