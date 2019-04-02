<?php
include "management.php";
include "trait_mysql_db.php";
class Review implements Management
{
  use database;
  protected $idReviews;
  public $title;
  public $author;
  protected $idAuthor;
  public $text;
  public $date;
  public $rating;
  public $noLoginVote;
  public $loginVote;
  public $views;
  public $images;
  protected $database;

  function __construct($review=NULL)
  {  
    $this->idReviews=uniqid();
    $this->$title = $review['title'];
    $this->$author = $review['author'];
    $this->$idAuthor = $review['idAuthor'];
    $this->$text = $review['text'];
    $this->$date = $review['date'];
    $this->$rating = $review['rating'];
    $this->$noLoginVote = $review['noLoginVote'];
    $this->$loginVote = $review['loginVote'];
    $this->$views = $review['views'];
    $this->$images = $review['images'];
    if (is_null($this->date) == TRUE) {
        $this->date = date("d:m:Y");
    }
  
  }

}



?>
