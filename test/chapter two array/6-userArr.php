<?php
$arr2[0];
//根据下标0找到$arr2下的第一个元素

$arr1["username"];
//根据键名username找到$arr1键名下的键值
$users[]=["id"=>1,"username"=>"neon","email"=>"1686310541@qq.com"];
$users[]=["id"=>8,"username"=>"neon","email"=>"1686310541@qq.com"];
$users[]=["id"=>1,"username"=>"neon","email"=>"1686310541@qq.com"];
$users[]=["id"=>1,"username"=>"neon","email"=>"1686310541@qq.com"];
print_r($users);

$test=123;
$res=(array)$test;
var_dump($res);
print_r($res);

$int=789;
$arr1=settype($int, 'array');
var_dump($int);
print_r($res);

$null="";
$arr1=settype($null, "array");
print_r($null);
var_dump($arr1);