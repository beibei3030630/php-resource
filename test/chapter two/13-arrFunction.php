<?php
//求字符串的和与乘积
 $string="2,3,5,19,39";
 $arr=explode(",",$string);
 $sum=array_sum($arr);
 echo $sum."<br/>";
 
 $string="2,3,5,19,39";
 $arr=explode(",",$string);
 $product=array_product($arr);
 echo $product;

echo "<hr/>";



 //截取文件扩展名，并检测扩展名是否在["jpg","jpeg","gif","png"]中
 $allowExts=["jpg","jpeg","gif","png"];
 $filename="1.text.jpg";
 $fileArr=explode(".", $filename);
 $ext=end($fileArr);//method1 通过end()函数拿到文件扩展名
 $ext=array_pop($fileArr);//method2 通过弹出最后一个元素拿到文件扩展名
 if(in_array($ext,$allowExts)){
 	echo "文件类型合法";
 }else{
 	echo "文件类型不合法";
 }

echo "<hr/>";

//快速生成字符串
$str1=join("",range(0,9));
$str2=join("",range("a","z"));
$str3=join("",range("A","Z"));

//四位验证码
$arr1=range(0,9);
$arr2=range("a","z");
$arr3=range("A","Z");
$newArr=array_merge($arr1,$arr2,$arr3);
$str='';
for($i=1;$i<=4;$i++){
  $str.=$newArr[mt_rand(0,count($newArr)-1)];
}
echo $str;
echo "<hr/>";
$resArr=array_rand(array_flip($newArr),4);
$string=join("",$resArr);
echo $string;


