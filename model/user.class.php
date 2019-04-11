<?php
namespace model;


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
  protected $QUERIES;
  protected $connection;
  function __construct(){
    $this->id = NULL;
    $this->name = NULL;
    $this->email = NULL;
    $this->birthDate = NULL;
    $this->gender = NULL;
    $this->password = NULL;
    $this->accountCreationDate = NULL;
    $this->userLevel = NULL;
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

  function setQuery($query, $position){
    $this->QUERIES[$position] = $query;
  }

  function ReSetUser($array){
    foreach($array as $key=>$value){
      $this->$key = $value;
    }
  }
  

  public function executeQuery($anyNinfo,$query,$encoding){
    $query = $this->command($andNinfo,$this->$QUERIES[$query],$encoding);
    return $query;
  }

 
}






