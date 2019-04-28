<?php
namespace asClass;

class Comments
{
	use traits\db;
  	use traits\config;
  	use traits\log;
	
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

	


}

