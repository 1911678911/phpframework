<?php
namespace core;
class framework {
	static public $classMap = [];
	public $assign;
	static public function run() {
		$route = new \core\lib\route();
		$controlClass = $route->control . 'Controller';
		$action = $route->action . "Action";
		$ctlfile = APP . '/controller/' . $controlClass . '.php';
		if (is_file($ctlfile)) {
			include $ctlfile;
			$ctlClass = '\\' . MODULE . '\controller\\' . $controlClass;
			if (class_exists($ctlClass)) {
				//控制器类的API类实例化
				$rc = new \ReflectionClass($ctlClass);
				if ($rc->hasMethod($action)) {
					//控制器类实例化
					$controller = $rc->newInstance();
					$method = $rc->getMethod($action);
					$method->invoke($controller);
				}
			}
			\core\lib\log::init();
			\core\lib\log::log('ctl' . $controlClass . 'action' . $action);
		} else {
			echo 'error!';
		}

	}
	//自动加载文件
	static public function load($class) {
		$class = str_replace('\\', '/', $class);
		//避免类文件重复加载
		if (isset($classMap[$class])) {
			return true;
		} else {
			$file = PHPFRAMEWORK . '/' . $class . '.php';
			if (is_file($file)) {
				include $file;
				self::$classMap[$class] = $class;
			} else {
				return false;
			}
		}
	}
}