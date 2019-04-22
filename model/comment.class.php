<?php
namespace model;
define(__DIR__,"","/var/www/html");
class Comments
{
	use db;
  	use config;
  	use log;
	
	protected $database;
	public $path;
	public $userID;
	public $reviewID;
	public $comment;
	public $date;
	
	function __construct()
	{	
		
		$this->userId = null;
		$this->reviewId = null;
		$this->comment = null;
	}

	public function ReSetComment($array){
		foreach($array as $key=>$value){
		  $this->$key = $value;
		}


}
}

