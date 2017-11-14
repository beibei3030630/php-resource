<?php
//接收以？形式传递的数据，需要通过$_GET['名称']
echo '搜索词： '.$_GET['keyword'];

echo '<hr/>';

echo '搜索词:  '.$_REQUEST['keyword'];