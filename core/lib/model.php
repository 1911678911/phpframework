<?php
namespace core\lib;
/**
 *模型基础类
 */
class model extends \medoo {
	public function __construct() {
		$databaseConfig = config::all('database');
		// try {
		// 	parent::__construct($databaseConfig['DSN'], $databaseConfig['USERNAME'], $databaseConfig['PASSWORD']);
		// } catch (\PDOException $e) {
		// 	P($e->getMessage());
		// }
		$options = config::all('database');
		parent::__construct($options);
	}
}