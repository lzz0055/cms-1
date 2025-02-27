<?php
/*
 
 
 
'--------------------------------------------------------
 
 
'--------------------------------------------------------
*/
define('IS_ADMIN', TRUE); // 后台标识
define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME)); // 后台文件名
define('FCPATH', str_replace("\\", "/", dirname(__FILE__).'/')); // 网站根目录
require('index.php'); // 引入主文件