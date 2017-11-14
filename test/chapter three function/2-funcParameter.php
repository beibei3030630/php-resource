<?php
//自定义两个数字，相加两个数字之间的所有数字，包括两个数字
function sum($x,$y){
	$sum=0;
	for(;$x<=$y;$x++){
		$sum+=$x;
	}
	echo $sum;
}
sum(7,8);


