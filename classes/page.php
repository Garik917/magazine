<?php
class Page
{
	public $url;
	function __construct()
	{
		$this->url = $_SERVER["PHP_SELF"];
	}
	public function getTitle(){
		$arr = explode("/", $this->url);
		return $arr[1];
	}
}
?>