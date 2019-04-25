<?php
define(__DIR__,"","/var/www/html");
<<<<<<< HEAD
include "traits/PDO_db.trait.php";
include "traits/config.trait.php";
include "traits/log.trait.php";
include "traits/hash.trait.php";
class User{
  use database;
  use config;
  use log;
  use hash;
  protected $idUser;
  public $nameUser;
  public $emailUser;
  public $birthDateUser;
  public $genderUser;
  public $dateCreationUser;
  public $permissionUser;
=======

class User
{
  use db;
  use config;
  use log;
  use auth;

  protected $id;
  public $name;
  public $email;
  public $gender;
  public $accountCreationDate;
  public $userLevel;
>>>>>>> 0.8AlphaVersion

  function __construct(){
    $this->idUser = NULL;
    $this->nameUser = NULL;
    $this->emailUser = NULL;
    $this->birthDateUser = NULL;
    $this->genderUser = NULL;
    $this->passwordUser = NULL;
    $this->dateCreationUser = NULL;
    $this->permissionUser = NULL;
    $this->QUERIES = Null;
  }

  public function changeUser($parameters)
  {
      /*the object expects an array to be passed with the following items
          $idUser,$nameUser,$emailUser,$birthDateUser,$genderUser,$dateCreationUser,$permissionUser
        */
    
    if(isset($parameters['idUser']))$this->idUser = $parameters["idUser"];
    if(isset($parameters['nameUser']))(string) $this->nameUser = $parameters['nameUser'];
    if(isset($parameters['emailUser']))(string) $this->emailUser = $parameters['emailUser'];
    if(isset($parameters['passwordUser']))$this->passwordUser = $parameters["passwordUser"];
    if(isset($parameters['genderUser']))(string) $this->genderUser = $parameters['genderUser'];
    if(isset($parameters['birthDateUser']))$this->birthDateUser = new \DateTime($parameters['$birthDateUser']);
    if(isset($parameters['birthDateUser']))$this->birthDateUser = $this->birthDateUser->format('YYYY-MM-DD');
    if(isset($parameters['dateCreationUser']))(string) $this->dateCreationUser = $parameters['dateCreationUser'];
    if(isset($parameters['permissionUser']))$this->permissionUser = $parameters['permissionUser'];
    
  }

  public function newUser($parameters)
  {
      /*the object expects an array to be passed with the following items
          $idUser,$nameUser,$emailUser,$birthDateUser,$genderUser,$dateCreationUser,$permissionUser
        */
<<<<<<< HEAD
    
    if(isset($parameters['nameUser']))(string) $this->nameUser = $parameters['nameUser'];
    if(isset($parameters['emailUser']))(string) $this->emailUser = $parameters['emailUser'];
    if(isset($parameters['passwordUser']))$this->passwordUser = md5($parameters["passwordUser"]);
    if(isset($parameters['genderUser']))(string) $this->genderUser = $parameters['genderUser'];
    if(isset($parameters['birthDateUser']))$this->birthDateUser = new \DateTime($parameters['birthDateUser']);
    if(isset($parameters['birthDateUser']))$this->birthDateUser = $this->birthDateUser->format('YYYY-MM-DD');
    
=======
        if(isset($parameters['id']))(string) $this->id = $parameters['id'];
    if(isset($parameters['name']))(string) $this->name = $parameters['name'];
    if(isset($parameters['email']))(string) $this->email = $parameters['email'];
    if(isset($parameters['password']))$this->password = md5($parameters["password"]);
    if(isset($parameters['gender']))(string) $this->gender = $parameters['gender'];
    if(isset($parameters['birthDate']))(string) $this->$birthDate = $parameters['$birthDate'];
    if(isset($parameters['accountCreationDate']))(string) $this->accountCreationDate = $parameters['accountCreationDate'];
    if(isset($parameters['userLevel']))$this->userLevel = $parameters['userLevel'];
    if (is_null($parameters['accountCreationDate']) == TRUE or $this->accountCreationDate == "") 
    {
      $this->accountCreationDate = date("Y-m-d H:i:s");
    }
>>>>>>> 0.8AlphaVersion
  }

 
}






