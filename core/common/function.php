<?php

//调试公共函数
function P($var) {
	if (is_bool($var)) {
		dump($var);
	} else if (is_null($var)) {
		dump($var);
	} else {
		dump($var);
	}
}

//获取post提交的数据
function post($name, $default = false, $filter = false) {
	if (isset($_POST[$name])) {
		if ($filter) {
			switch ($filter) {
			case 'int':
				if (is_numeric($_POST[$name])) {
					return $_POST[$name];
					break;
				} else {
					return $default;
					break;
				}
			default:
				return $_POST[$name];
				break;
			}
		} else {
			return $_POST[$name];
		}
	} else {
		return $default;
	}
}

//页面跳转公共函数
function jump($url) {
	header('Location:' . $url);
}