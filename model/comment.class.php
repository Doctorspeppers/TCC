<?php
namespace model;

class Comments
{
	use database;
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


