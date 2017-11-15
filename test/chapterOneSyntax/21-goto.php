<?php

echo "goto Test";

echo "<hr/>";

goto TEST; //跳到标识符，中间的会被忽略

echo "test1"; 

TEST:

echo "test2";


echo "<hr/>";

echo "goto不能跳进循环<br/>";

// goto TEST1;

// for($i=0;$i<6;$i++){
// 	echo "string";
// 	TEST1:
// 	echo "string2"; //Fatal error: 'goto' into loop or switch statement is disallowed in D:\wamp\wamp\www\test\21-goto.php on line 20 报错
// }

echo "<hr/>";

echo "goto可以跳出循环<br/>";
for($i=0;$i<=2;$i++){
	echo "string<br/>";//goto会跳出循环，string只执行一遍。
	goto TEST2;
	echo "string2";
}

TEST2:
	echo "Hello world";


