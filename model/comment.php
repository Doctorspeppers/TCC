<?php

include "management.php";
class Comments implements Management
{
	protected $database;
	public $path;
	public $userID;
	public $reviewID;
	public $comment;
	public $date;
	
	function __construct($path, $userId, $reviewId, $comment, $date=null){
		/*
			Define the vars in object for manipulation in others functions
		*/
		$formdate = DateTime::createFromFormat('d/m/Y');
		$this->path = $path;
		$this->userId = $userId;
		$this->reviewId = $reviewId;
		$this->comment = $comment;
		if($formdate && $formdate->format('d/m/Y') === $date){
		   $this->date = $date;
		}else{
			$this->date = $formdate;
		}
	}


}


?>