<?php
/**
 * 路由文件
 */
namespace core\lib;
use core\lib\config;

class route {
	public $control;
	public $action;
	public function __construct() {
		if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/') {
			$path = $_SERVER['REQUEST_URI'];
			$patharr = explode('/', trim($path, '/'));
			if (isset($patharr[0])) {
				$this->control = $patharr[0];
			}
			unset($patharr[0]);
			if (isset($patharr[1])) {
				$this->action = $patharr[1];
				unset($patharr[1]);
			} else {
				$this->action = config::get('ACTION', 'route');
			}
			$count = count($patharr) + 2;
			$i = 2;
			while ($i < $count) {
				if (isset($patharr[$i + 1])) {
					$_GET[$patharr[$i]] = $patharr[$i + 1];
				}
				$i = $i + 2;
			}
		} else {
			$this->control = config::get('CTRL', 'route');
			$this->action = config::get('ACTION', 'route');
		}
	}
}