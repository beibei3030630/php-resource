<?php
$func=function(){
	return "this is a test";
};
echo $func();

echo "<br/>";
$func=function($user){
	return "talking to ".$user;
};
echo $func("beibei");

$array=[1,2,3,4,5];
print_r(array_map(function($i){return $i*2;}, $array));
//Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )


echo call_user_func(function($j){return $j;},'Hello beibei3030630');
//Hello beibei3030630

$func=create_function('$x,$y', 'return $x+$y;');
echo $func(2,5);