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
		$this->path = null;
		$this->userId = null;
		$this->reviewId = null;
		$this->comment = null;
	}

	function newComment($comment){
		/*
			Define the vars in object for manipulation in others functions
		*/
		$formdate = DateTime::createFromFormat('d/m/Y');
		if($formdate && $formdate->format('d/m/Y') === $date){
		   $this->date = $date;
		}else{
			$this->date = $formdate;
		}
	}


	function setQuerie($querie, $position){
		$this->QUERIES[$position] = $querie;
	  }
	
	  public function executeQuerie($anyNinfo,$querie,$encoding){
		$querie = $this->command($andNinfo,$this->$QUERIES[$querie],$encoding);
	  }
}


