<?php
$filename=__DIR__.'/test2.txt';
$handle=fopen($filename, 'rb+');
while (!feof($handle)) {
   echo fgetss($handle).'<br/>';
}
fclose($handle);

