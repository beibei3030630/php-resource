<?php
// $filename=__DIR__.'/file_get_contents test.txt';
// $data=Array(
// 	['name'=>'beibei3030630'],
// 	['age'=>'22'],
// 	['sex'=>'female']
// 	);
// $data=serialize($data);
// file_put_contents($filename,$data);

// $res=unserialize(file_get_contents($filename));
// print_r($res);

// Array
// (
//     [0] => Array
//         (
//             [name] => beibei3030630
//         )

//     [1] => Array
//         (
//             [age] => 22
//         )

//     [2] => Array
//         (
//             [sex] => female
//         )

// )


$filename=__DIR__.'/test1.txt';
$data=['a','b','c'];
file_put_contents($filename, $data);
$res=file_get_contents($filename);
print_r($res);
//abc


