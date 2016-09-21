<?php
/**
 *入口文件
 */
define('PHPFRAMEWORK', realpath('./'));
define('CORE', PHPFRAMEWORK . '/core');
define('APP', PHPFRAMEWORK . '/app');
define('MODULE', 'app');
define('DEBUG', true);
require 'vendor/autoload.php';
if (DEBUG) {
	$whoops = new \Whoops\Run;
	$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
	$whoops->register();
	ini_set('display_errors', 'On');
} else {
	ini_set('display_errors', "Off");
}
//引入公共函数
include CORE . '/common/function.php';
//引入框架
include CORE . '/framework.php';
//注册自动加载函数
spl_autoload_register('\core\framework::load');
//启动框架
\core\framework::run();