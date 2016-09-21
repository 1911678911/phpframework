<?php
namespace core\lib;
/**
 * log日志文件
 */
class log {
	static $class;
	static public function init() {
		$dirver = config::get('DRIVER', 'log');
		$class = '\core\lib\driver\log\\' . $dirver;
		self::$class = new $class;
	}
	static public function log($name) {
		self::$class->log($name);
	}
}