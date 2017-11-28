<?php
 //冒泡模式 从大到小排列
 $arr=[3,2,6,8,1,9,4,5,1,2];
 function bubbleFunc($arr){
 	$countNum=count($arr);
 	for($k=1;$k<$countNum;$k++){
 		for($i=0;$i<$countNum-$k;$i++){
 			if($arr[$i]<$arr[$i+1]){
 				$tmp=$arr[$i+1];
 				$arr[$i+1]=$arr[$i];
 				$arr[$i]=$tmp;
 			}
 		}
 	}
 	return $arr;
 }
 $res=join(' ',bubbleFunc($arr));
 echo $res;
