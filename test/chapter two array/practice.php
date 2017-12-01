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
echo "<hr/>";
$arr=[
	"abc"=>['a'=>[1,2,3],'b'=>[4,5,6],'c'=>[7,8,9]],
	"def"=>['d'=>[10,11,12],'e'=>[13,14,15],'f'=>[16,17,18]]
];
$i=0;
foreach ($arr as $value) {
	foreach ($value as $key => $v) {
		$files[$i]=$v[0];
		// $files[$i]=$v['b'][$key];
		// $files[$i]=$v['c'][$key];
		// $files[$i]=$v['d'][$key];
		// $files[$i]=$v['e'][$key];
		// $files[$i]=$v['f'][$key];
		$i++;
	}
}
print_r($files);