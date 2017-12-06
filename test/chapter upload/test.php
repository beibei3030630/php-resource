<?php
$allowExt=['hmtl','word'];
$ext='excel';
if(!in_array($ext, $allowExt)){
	echo '不存在';
}else{
	echo '存在';
}