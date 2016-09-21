<?php
/**
 * file类型 日志文件
 */
namespace core\lib\driver\log;
use \core\lib\config;

class file {
	public $path;
	public function __construct() {
		$this->path = config::get('OPTION', 'log');
	}
	public function log($message, $file = 'log') {
		if (!is_dir($this->path['PATH'])) {
			mkdir($this->path['PATH'], '0777', $file);
		}
		return file_put_contents($this->path['PATH'] . $file . '.php', date('Y-m-d H:i:s') . json_encode($message) . \PHP_EOL, \FILE_APPEND);
	}
}