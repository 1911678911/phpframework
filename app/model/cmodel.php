<?php
namespace app\model;

class cmodel extends \core\lib\model {
	public $table = 'c';

	//列出全部
	public function lists() {
		$ret = $this->select($this->table, "*");
		return $ret;
	}

	//获取一条
	public function getOne($id) {
		$ret = $this->get($this->table, "*", array(
			'id' => $id,
		));
		return $ret;
	}

	//编辑一条
	public function setOne($id, $data) {
		return $this->update($this->table, $data, array(
			'id' => $id,
		));
	}

	//删除一条
	public function delOne($id) {
		return $this->delete($this->table, array(
			'id' => $id,
		));
	}
}
