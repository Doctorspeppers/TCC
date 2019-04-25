<?php
define(__DIR__,"","/var/www/html");
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
    
    if(isset($parameters['nameUser']))(string) $this->nameUser = $parameters['nameUser'];
    if(isset($parameters['emailUser']))(string) $this->emailUser = $parameters['emailUser'];
    if(isset($parameters['passwordUser']))$this->passwordUser = md5($parameters["passwordUser"]);
    if(isset($parameters['genderUser']))(string) $this->genderUser = $parameters['genderUser'];
    if(isset($parameters['birthDateUser']))$this->birthDateUser = new \DateTime($parameters['birthDateUser']);
    if(isset($parameters['birthDateUser']))$this->birthDateUser = $this->birthDateUser->format('YYYY-MM-DD');
    
  }

 
}






