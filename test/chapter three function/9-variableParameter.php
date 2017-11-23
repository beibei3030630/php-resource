<?php
function variableParamFunc(){
	return func_num_args();
}
echo variableParamFunc("1","2","3","4");
//返回实参个数。


function paramFunc(){
	return func_get_args();
}
var_dump(paramFunc("1",2,3.5,"4"));
//返回一个包含函数参数列表的数组
/*array (size=4)
  0 => string '1' (length=1)
  1 => int 2
  2 => float 3.5
  3 => string '4' (length=1) */

  function var_dump2(){
  	if(func_num_args()<=0){
  	//当实参个数为0，程序结束
  		return;
  	}
  	$params=func_get_args();
  	foreach ($params as $param) {
  		if(is_integer($param)){
  			echo "int {$param}<br/>";
  			 continue;
  		//当前参数为整数，输出当前参数。
  		//并跳过本次循环，进行下一次循环
  		}
  		if(is_float($param)){
  			echo  "float {$param}<br/>";
  			 continue;
  		}
  		if(is_string($param)){
  			echo  "string {$param}<br/>";
  			 continue;
  		}
  	}
  }
  var_dump2("2",3,4.5,"abc");