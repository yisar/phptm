<?php
/*
file model.class.php
Model基类
*/

defined('ACC') || exit('ACC Denied');
class model
{
	protected $table = NULL;
	protected $db = NULL;
	public function __construct()
	{
		$this->db = mysql_::getInstance();

	}
	public function table($table)
	{
		$this->table = $table;
	}

}
