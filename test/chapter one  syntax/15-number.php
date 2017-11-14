<?php

//表达式与运算符
//表达式——只要有值的东西都可以叫表达式

//算术运算符
//+ - * / %  **幂次方

echo 3%8; //除不开，依旧是3。

echo "<br/>";

echo 8%3;//2

echo "<br/>";

echo 3%-8;//后面的操作数 负号没有作用 依旧是3

echo "<br/>";

echo -3%8;//除不开 取前面的数值  -3

echo "<br/>";

echo -3%-8;//-3

echo '<hr/>';

//第四部分 1-2选择题
$a=8;$b=2;$i=3;
echo $i%$b*$a;
echo "<br/>";

echo $i+$a/$b;
echo "<br/>";

echo $b*$i/$a;
echo "<br/>";

echo $a%$b-$i;
echo "<hr/>";







//递增递减运算符
//++  -- 前缀形式 先加减1 再执行
//		 后缀形式 先执行 再加减1


//整数支持递增、递减
 $i=1;
 echo ++$i.'<br/>';//2
 
 echo $i.'<br/>';//2

 $a=1;
 echo $a++.'<br/>';//1 先执行$a 再去加1

 echo $a;

echo '<hr/>';


//浮点支持递增、递减
$b=12.3;
$b++;
echo $b.'<br/>';

++$b;
echo $b.'<br/>';

echo '<hr/>';

//布尔值不支持递增递减

$c=true;

$c++;

echo $c."<br/>";

++$c;

echo $c."<br/>";

echo "<hr/>";

//null只支持递增，不支持递减

$d=null;

$d++;

echo $d.'<br/>';

$e=null;
$e--;

echo "#".$e."#";

echo "<hr/>";

//字符串只支持递增，不支持递减

$str='a';
$str++;
echo $str.'<br/>';//b

$str='b';
$str--;
echo $str."<br/>";


$str='z';
$str++;
echo $str."<br/>";//aa 进一位

$str='abc';
$str++;
echo $str."<br/>";//abd 递增最后一位

$str='a9';
$str++;
echo $str."<br/>";//9+1=10 十进制 a进一位  b0

echo '<hr/>';


//ord($var)得到指定字符的ASCII码值

$str='a';
echo ord($str).'<br/>';//a的acsii码值为97

//chr($ascii)根据指定字符得到相对应的元素

$str=99;
echo chr($str);//c
echo '<hr/>';





//字符连接符  . 来连接字符串
echo 'a'.'b'.'c';
echo '<br/>';

echo 'a','b','c';
echo '<br/>';

$str1='hello';
$str2='world';
// $newStr=$str1,$str2;//赋值给一个新的变量。两个变量中间不能用逗号。逗号只能在echo中用于连接


$newStr=$str1.$str2;
echo $newStr;
echo '<hr/>';






//赋值运算符  = += -= *= /= .=
$username='king';
$i=3;
$i+=5;

echo $i.'<br/>';

$i=2;
$i-=5;

echo $i.'<br/>';
echo "<hr/>";

$str='hello';
$str.= ' world';//.=用来连接字符串

echo $str.'<br/>';


$str3.='hello';//未定义过$str3;$str3为null 转换为空字符串。
echo $str3.'<br/>';







//mt_rand($min,$max)产生$min到$max之间的随机数

echo mt_rand(1,9);

echo '<br/>';

//四位随机数验证码。每个数字颜色不一样 
//通过字符串拼接和mt_rand()函数的方法
$validate ='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(1,9).'</span>';
$validate.='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(1,9).'</span>';
$validate.='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(1,9).'</span>';
$validate.='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(1,9).'</span>';

echo "<hr/>";
echo $validate;

echo "<br/>";
echo "<br/>";

//练习三位验证码
$validate='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(1,9).'</span>';
$validate.='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(1,9).'</span>';
$validate.='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(1,9).'</span>';


echo $validate;

echo "<hr/>";

//1-9选择题

$a=6;$a/=3;$a*=2;$a%=3;
echo $a.=3;//13;

echo "<hr/>";





//比较运算符
//== 等于运算符 TRUE，如果类型转换后 $a 等于 $b。
//=== 全等运算符TRUE，如果 $a 等于 $b，并且它们的类型也相同。


var_dump(
  1==true, 
  1=='1',
  0==false,
  0==null,
  //以上都为true 类型不同 但是值相等
  1===true, 
  1==='1',
  0===false
  //类型不同 三等肯定不相等
	);
echo '<hr/>';

//!= 不相等  !==不全等 

var_dump(
 1!=true,//false;
 1!='1',//false;
 0!=false,//false;

 1!==true,//true;
 1!=='1'//true;
);
echo '<hr/>';

//$a <=> $b  太空船运算符（组合比较符） 
//PHP7开始提供。
//左边大于右边 返回1 
//两边相等 返回0
//左边小于右边 返回-1


var_dump(
  1<=>0.5,//-1
  1<=>1,//0
  1<=>2,//1
  0<=>null,//0
  0<=>false//0
);

echo "<hr/>";
var_dump(
	'a'<=>'b',//-1
	'b'<=>'a',//1
	'a'<=>'a'//0
	);


//$a??$b??$c  NULL 合并操作符
//PHP7开始提供。
//返回从左往右第一个存在且不为 NULL 的操作数。如果都没有定义且不为 NULL，则返回 null

 $var='beibei';
var_dump(
	$abc??$def??$var, //'beibei'.未定义的变量当成null
	null??$var??null,//跳过第一个null，拿到第二位的操作数
	true??$var??'123',//true,直接拿到第一个操作数
	$aa??$bb??$cc,//如果全未定义，则直接返回null
	0??false??null??'$var'//拿到第一个操作数，int 0
						  //0 和false 不会转换为null
	);
echo "<hr/>";
//1-11选择题
$a=4;
$b=5;
echo ++$a+$b--.'<br/>'; //$a->5  递减后置位 $b-- ->5 
echo $a>$b; //$b ->4 true  int 1

echo '<hr/>';







//逻辑运算符  
//&& 如果第一个表达式为false，那么结果就为false
//那么第二个表达式就被短路（执行不到第二个表达式）
echo'逻辑与'.'<br/>';
$i=0;$j=5;
if($i&&++$j){
	echo 'true'.'<br/>';
}else{
	echo "false".'<br/>';
};
echo $i,'<br/>'.$j.'<br/>';//$i=0 ->flase。$j被短路，所以没有执行前置递增。

echo "<br/>";



//  || 如果第一个表达式为true，那么结果就为true
//那么第二个表达式就被短路（执行不到第二个表达式）
echo "逻辑或".'<br/>';
$i=4;$j=6;
if($i++||--$j){
	echo 'true'.'<br/>';
}else{
	echo "false".'<br/>';
};
echo $i,'<br/>'.$j.'<br/>';//$j未改变

echo "<br/>";


//  $a xor $b   逻辑异或,如果 $a 或 $b 任一为 TRUE，但不同时是，返回TRUE。但如果两个都是TRUE,则结果为false
echo "逻辑异或".'<br/>';
var_dump(
	true xor true, //false
	false xor true,// true
	true xor false,// true
	false xor false//false
);

echo '逻辑非'.'<br/>';
//逻辑非
var_dump(
   !true,//false
   !false//true 
	);

echo "<hr/>";

echo "小练习";
$i=1;
$j=0;
var_dump(
  !0,//boolean  true
  ++$abcdef&&--$alksjdflk,//null可递增 不可递减 boolean false
  --$i||--$j  //boolean true
);

//@。当将其放置在一个 PHP 表达式之前，该表达式可能产生的任何错误信息都被忽略掉。
@var_dump($sdlkjflskdf); 
echo "<hr/>";





//三元运算符
echo '三元运算符'.'<br/>';
//exp1?exp2:exp3
$username='king';
echo $username=='king'?"true":"false";

echo "<br/>";

//特殊情况
 $res=1?:'abc';//如果缺少第二个表达式 结果又为真。 那返回的就是第一个表达式。结果返回1
 
echo $res.'<br/>';




//运算符优先级
//想改变优先级可以通过（）
//有短路的情况优先考虑短路
$i=1;$j=0;
if($p=$i--||$j++){//=等于号的优先级很低 所以先运行递增递减在运行||，最后赋值给$p
	echo "true";
}else{
	echo "false";
}

echo $i."<br/>";//$i int 0 为true。
echo $j."<br/>";//$j int 0 $j短路，$j不执行后置递增。
echo $p."<br/>";// $p->1 
 



echo "<hr/>";



//优先级运算符的练习
$i=3;
$j=8;

echo "{$i}+{$j}".$i+$j;//. 和+ 为同等级运算符。执行按照从左到右的顺序
//系统把'{$i}+{$j}'这个字符串和数字3去拼接
//等到结果为'3+83',取合法数值3。和后面的数值8相加。
//得到结果11

echo '<br/>';

echo "{$i}+{$j}=".($i+$j);//添加（）。让+先运算
//等到结果3+8=11

echo "<hr/>";



//优先级运算 1-15例子
$i=5;
$j=3;
if($p=($i++ + $j)*$i){//乘号后面的变量i 已经执行过++运算 $i=6
	echo "aa";
}else{
	echo "bb";
}
var_dump($i,$j,$p);