<?php
namespace model;

include "management.php";
include "trait_mysql_db.php";
class User implements Management 
{
  use database;

  public $id;
  public $name;
  public $email;
  public $gender;
  public $accountCreationDate;
  public $userLevel;
  protected $connection;
  function __construct($parameters)
  {
      /*the object expects an array to be passed with the following items
          $id,$name,$email,$birthDate,$gender,$accountCreationDate,$userLevel
        */
    
    (string) $this->id = uniqid();
    (string) $this->name = $parameters['name'];
    (string) $this->email = $parameters['email'];
    (string) $this->gender = $parameters['gender'];
    (string) $this->$birthDate = $parameters['$birthDate'];
    (string) $this->accountCreationDate = $parameters['accountCreationDate'];
    $this->userLevel = $parameters['userLevel'];
    if (is_null($this->userLevel) == TRUE) 
    {
      $this->userLevel = null;
      $this->userLevel = 0;
    }
    if (is_null($parameters['accountCreationDate']) == TRUE or $this->accountCreationDate == "") 
    {
      $this->accountCreationDate = date("d:m:Y");
    }
  }


 
}






