<?php
namespace core\lib;
/**
 *加载配置文件
 */
class config {
	static public $conf = [];
	static public function get($name, $file) {
		$file = PHPFRAMEWORK . '\core\conf\\' . $file . '.php';
		if (isset(self::$conf[$file])) {
			return self::$conf[$file][$name];
		} else {
			if (is_file($file)) {
				$conf = include $file;
				if (isset($conf[$name])) {
					self::$conf[$file] = $conf;
					return $conf[$name];
				} else {
					throw new \Exception("没有这个配置选项" . $name);
				}
			} else {
				throw new \Exception("没有这个配置文件" . $file);
			}
		}
	}

	//加载整个文件
	static public function all($file) {
		$file = PHPFRAMEWORK . '\core\conf\\' . $file . '.php';
		if (isset(self::$conf[$file])) {
			return self::$conf[$file];
		} else {
			if (is_file($file)) {
				$conf = include $file;
				self::$conf[$file] = $conf;
				return $conf;
			} else {
				throw new \Exception("没有这个配置文件" . $file);
			}
		}
	}
}