<?php
//自动转换（隐式转换）
//其它类型转换成数值型
 echo "1+true的值为:",1+true,'<br/>';//2 true->1

 echo "1+false的值为：",1+false,'<br/>';//1 false->0

 echo "1+null的值为:",1+null,'<br/>';//1 null->0

 echo 1+'3king','<br/>';//3king->3

 echo 1+'king'.'<br/>';//king->0 //取不到合法数值为0

 echo 1+"2a3b4c",'<br/>';//2a3b4c->2

 echo 1+"21a3b4c",'<br/>';//21a3b4c-> 21 只取合法数值 
 						  //取到第一个非法数值结束

 echo 1+"2e2a3c",'<br/>';//2e2->科学计数法 200 

 echo 1+'true';// “true”以不合法数值开头，直接转换成0

echo "<hr/>";


//其它类型转换成字符串型
//数值型直接转换成数值
//true->1 null，false->空字符串
//对象不能直接转换成字符串
echo 'king<br/>';

echo true."<br/>";//true->1

echo "#".false."#"."<br/>";//false->空字符串

echo "@".null."@"."<br/>";//null->空字符串

$arr=array();
echo $arr."<br/>";//输出空字符串

$handle=fopen("./test.html","r");
echo $handle;//Resource id #3

$obj=new StdClass();//对象不能直接转换成字符串，会报致命错误，会终止程序。

echo "<br/>";

echo "aaa"."0";



