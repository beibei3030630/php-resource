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
//拼接数组
$newArr=array_merge($arr1,$arr2,$arr3);
//mehod1使用mt_rand加循环遍历4为验证码
$str='';
for($i=1;$i<=4;$i++){
  $str.=$newArr[mt_rand(0,count($newArr)-1)];
}
echo $str;
echo "<hr/>";
//method2 使用array_rand随机获取键名，通过array_flip互换键值和键名的位置。得到随机验证码。
//获取验证码
$arr1=range(0,9);
$arr2=range("a","z");
$arr3=range("A","Z");
//拼接数组
$newArr=array_merge($arr1,$arr2,$arr3);
$resArr=array_rand(array_flip($newArr),4);
$string=join("",$resArr);
echo $string;

//打乱数组
$newArr=[1,2,3,4,5];
shuffle($newArr);
print_r($newArr);


//模拟用户数据插入数据库
//INSERT user(username,password,email) VALUES('aaa','bbb','ccc');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>
</head>
<body>
	<form action="#" method="post">
		<input type="text" name="username"/>
		<br/>
		<input type="text" name="password"/>
		<br/>
		<input type="text" name="email"/>
		<br/>
		<input type="submit" value="提交"/>
	</form>
</body>
</html>

<?php
	 $username=$_POST['username'];
	 $password=$_POST['password'];
	 $email=$_POST['email'];
	 $arr=compact('username','password','email');
	 //INSERT user(username,password,email) VALUES('aaa','bbb','ccc');
	 $arrKeys=join(",",array_keys($arr));
	 $arrValues="'".join("','",array_values($arr))."'";
	 $res="INSERT user($arrKeys) VALUES($arrValues)";
	 echo $res;
	?>
