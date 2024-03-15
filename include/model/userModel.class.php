<?php
/*
file userModel.class.php
用户管理类
*/
defined('ACC') || exit('ACC Denied');

class userModel extends model
{
	protected $table = 'user';

	public function add($username, $nickname, $password, $email, $type = 0)
	{
		$arr = array();
		$arr['regip'] = $_SERVER['REMOTE_ADDR'];
		$arr['regtime'] = time();
		$arr['username'] = $username;
		$arr['nickname'] = $nickname;
		$arr['password'] = $password;
		$arr['email'] = $email;
		$arr['type'] = $type;
		$re = $this->db->autoExecute($this->table, $arr);
		if ($re) {
			$this->login($email, $password);
		}
		return $re;
	}

	public function exists_uname($uname)
	{
		$sql = 'select count(*) from ' . $this->table . ' where username=\'' . $uname . '\'';
		return $this->db->getOne($sql) != 0;
	}

	public function exists_email($email)
	{
		$sql = 'select count(*) from ' . $this->table . ' where email=\'' . $email . '\'';
		return $this->db->getOne($sql) != 0;
	}

	public static function getUsername($uid)
	{
		$db = mysql_::getInstance();
		$sql = 'select username from user where uid=' . $uid;
		return $db->getOne($sql);
	}

	public static function getUser($uid)
	{
		$db = mysql_::getInstance();
		$sql = 'select * from user where uid=' . $uid;
		return $db->getRow($sql);
	}

	public function login($email, $pass)
	{
		$isLogin = false;
		$sql = 'select uid,type,username,nickname,email,password,regtime,lastlogin from ' . $this->table . ' where email=\'' . $email . '\'';
		$row = $this->db->getRow($sql);
		if (count($row) > 0) {
			if ($row['email'] === $email && $row['password'] === $pass) {
				$isLogin = true;
				$_SESSION = $row;
				$_SESSION['nickname'] = htmlspecialchars($_SESSION['nickname']);
				$upsql = 'update ' . $this->table .
					' set lastip=\'' . $_SERVER['REMOTE_ADDR'] .
					'\',lastlogin=\'' . time() .
					'\' where uid=' . $row['uid'];
				$this->db->query($upsql);
			}
		}
		$isLogin || $this->logout();
		return $isLogin;
	}

	public function update($uid, $data)
	{
		return $this->db->autoexecute($this->table, $data, 'update', 'uid=' . $uid);
	}

	public static function isLogin()
	{
		return isset($_SESSION['username']);
	}

	public static function logout()
	{
		$temp = isset($_SESSION['template']) ? $_SESSION['template'] : 'default';
		$_SESSION = array();
		$_SESSION['template'] = $temp;
	}


}