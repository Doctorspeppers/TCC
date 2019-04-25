<?php
namespace model;


class Post 
{
  use database;
  use config;
  use log;

  protected $idPost;
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
  protected $QUERIES;

  public function __construct()
  {
    $this->$title = null;
    $this->$author = null;
    $this->$idAuthor = null;
    $this->$text = null;
    $this->$date = null;
    $this->$rating = null;
    $this->$noLoginVote = null;
    $this->$loginVote = null;
    $this->$views = null;
    $this->$images = null;
  }

  public function changePost($post)
  {  
    $this->idPost=uniqid();
    if(isset($post["title"]))(string)$this->$title = $post['title'];
    if(isset($post["author"]))(string)$this->$author = $post['author'];
    if(isset($post["idAuthor"]))(string)$this->$idAuthor = $post['idAuthor'];
    if(isset($post["text"]))(string)$this->$text = $post['text'];
    if(isset($post["date"]))(string)$this->$date = $post['date'];
    if(isset($post["rating"]))(string)$this->$rating = $post['rating'];
    if(isset($post["noLoginVote"]))(string)$this->$noLoginVote = $post['noLoginVote'];
    if(isset($post["loginVote"]))(string)$this->$loginVote = $post['loginVote'];
    if(isset($post["views"]))(string)$this->$views = $post['views'];
    if(isset($post["images"]))(string)$this->$images = $post['images'];
    if (is_null($this->date) == TRUE) {
        $this->date = date("Y-m-d H:i:s");
    }
  }

}




