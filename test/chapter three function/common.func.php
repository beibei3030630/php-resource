<?php
function getExt($filename){
	$array=explode('.',$filename);
	return array_pop($array);
}
