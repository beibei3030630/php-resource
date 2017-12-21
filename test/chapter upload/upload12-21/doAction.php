<?php
header('content-type:text/hmtl;charset=utf-8');
require_once('./commonFunc.php');
$files=$_FILES['myFile'];
// echo getFileInfo($files);
echo getFileInfo($files);