<?php
//递归调用
function test($i){
	echo $i."<br/>"; 
	if($i>=0){
		$func=__FUNCTION__;
		$func($i-1);   
	}
	echo $i."<br/>";
}
test(3);