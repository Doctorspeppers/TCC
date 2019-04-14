<?php
namespace model;
define(__DIR__,"","/var/www/html/TCC");

class User
{
  use database;
  use config;
  use log;

  protected $id;
  public $name;
  public $email;
  public $gender;
  public $accountCreationDate;
  public $userLevel;

  function __construct(){
    $this->id = NULL;
    $this->name = NULL;
    $this->email = NULL;
    $this->birthDate = NULL;
    $this->gender = NULL;
    $this->password = NULL;
    $this->accountCreationDate = NULL;
    $this->userLevel = NULL;
    $this->QUERIES = Null;
  }

  public function changeUser($parameters)
  {
      /*the object expects an array to be passed with the following items
          $id,$name,$email,$birthDate,$gender,$accountCreationDate,$userLevel
        */
    
    (string) $this->id = uniqid();
    if(isset($parameters['name']))(string) $this->name = $parameters['name'];
    if(isset($parameters['email']))(string) $this->email = $parameters['email'];
    if(isset($parameters['password']))$this->password = md5($parameters["password"]);
    if(isset($parameters['gender']))(string) $this->gender = $parameters['gender'];
    if(isset($parameters['birthDate']))(string) $this->$birthDate = $parameters['$birthDate'];
    if(isset($parameters['accountCreationDate']))(string) $this->accountCreationDate = $parameters['accountCreationDate'];
    if(isset($parameters['userLevel']))$this->userLevel = $parameters['userLevel'];
    if (is_null($parameters['accountCreationDate']) == TRUE or $this->accountCreationDate == "") 
    {
      $this->accountCreationDate = date("d:m:Y");
    }
  }

 
}






