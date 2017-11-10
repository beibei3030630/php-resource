<?php
$arr=[0,1,2];
print_r($arr);
$arr=[
	[3.4=>5.6]
];
print_r($arr);
$arr=array(
	array("id"=>"123"),
	array("id"=>"456"),
	array("id"=>"789")
	);
print_r($arr);

$str="-0.5";
if($str<60&&$str>=0):
	echo "不及格";
elseif($str>=60&&$str<70):
	echo "不错";
elseif ($str>=70&&$str<80):
	echo "良好";
elseif($str>=80&&$str<=100):
	echo "优秀";
else:
	echo "分数错误";
endif;