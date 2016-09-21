<?php
namespace app\controller;
abstract class baseController {
	//变量赋值视图
	public function assign($name, $value) {
		$this->assign[$name] = $value;
	}

	//加载模板
	public function display($file) {
		$templatePath = APP . '/views/';
		$filePath = $templatePath . $file;
		if (is_file($filePath)) {
			\Twig_Autoloader::register();
			$loader = new \Twig_Loader_Filesystem(APP . '/views');
			$twig = new \Twig_Environment($loader, array(
				'cache' => PHPFRAMEWORK . '/log/twig',
				'debug' => DEBUG,
			));
			$template = $twig->loadTemplate($file);
			$template->display($this->assign);
		} else {
			throw new \Exception('eror views not find .'+$file);
		}
	}
}