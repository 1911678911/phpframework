<?php
namespace app\controller;

/**
 * 默认index控制器
 */
class indexController extends baseController {

	public function __construct() {
	}
	//默认动作
	public function indexAction() {
		$model = new \app\model\guestmodel;
		$list = $model->lists();
		$this->assign('data', $list);
		$this->display('index.html');
	}

	//添加留言
	public function addAction() {
		$data = "Hello Test";
		$this->assign('data', $data);
		$this->display('add.html');
	}

	//保存留言
	public function saveAction() {
		$data = [];
		$data['title'] = post('title');
		$data['content'] = post('content');
		$model = new \app\model\guestmodel;
		$result = $model->addOne($data);
		if ($result) {
			jump('/');
		}
	}
}