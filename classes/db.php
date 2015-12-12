<?php
class Db
{
	public $link;
	function __construct()
	{
		$this->link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWD, DB_NAME);
		if (!$this->link) {
			echo "Ведутся технические работы";
			die();
		}
	}

	public function getAuthInfo($login){
		return "query";
	}

	public function close(){
		mysqli_close($this->link);
	}
}
?>