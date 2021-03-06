<?php
namespace Classe;
define(__DIR__,"","/var/www/html/TCC/");

class User{
  use \asTrait\database;
  use \asTrait\config;
  #use \asTrait\log;
  use \asTrait\auth;

  protected $idUser;
  public $nameUser;
  public $emailUser;
  public $birthDateUser;
  public $genderUser;
  public $dateCreationUser;
  public $permissionUser;
  public $passwordUser;

  function __construct($configFile){
    $this->SetConfigs(__DIR__.$configFile);
    $this->idUser = NULL;
    $this->nameUser = NULL;
    $this->emailUser = NULL;
    $this->birthDateUser = NULL;
    $this->genderUser = NULL;
    $this->passwordUser = NULL;
    $this->dateCreationUser = NULL;
    $this->permissionUser = NULL;
  }

  public function changeUser($parameters):void
  {
      /**
          *the object expects an array to be passed with the following items
          * @param idUser INT, the same used and tagged by DB
          * @param nameUser string, name of user in the sistem or the nickname
          * @param emailUser  string, email of user used for verification and password change
          * @param passwordUser string, in hash md5 format
          * @param birthDateUser object, in MySQL format date
          * @param genderUser string, with the gender full name
          * @param dateCreationUser object, in MySQL format date
          * @param permissionUser INT, normal user use "1" integer in this param
        */
    
    if(isset($parameters['idUser']))$this->idUser = $parameters["idUser"];
    if(isset($parameters['nameUser']))(string) $this->nameUser = $parameters['nameUser'];
    if(isset($parameters['emailUser']))(string) $this->emailUser = $parameters['emailUser'];
    if(isset($parameters['passwordUser']))$this->passwordUser = $parameters["passwordUser"];
    if(isset($parameters['genderUser']))(string) $this->genderUser = $parameters['genderUser'];
    if(isset($parameters['birthDateUser']))$this->birthDateUser = new \DateTime($parameters['birthDateUser']);
    if(isset($parameters['birthDateUser']))$this->birthDateUser = $this->birthDateUser->format('Y-M-D');
    if(isset($parameters['dateCreationUser'])) $this->dateCreationUser = new \DateTime($parameters['dateCreationUser']);
    if(isset($parameters['dateCreationUser']))$this->dateCreationUser = $this->dateCreationUser->format('Y-M-D');
    if(isset($parameters['permissionUser']))$this->permissionUser = $parameters['permissionUser'];
    
  }

  /** the object expects an array to be passed with the following items
    * @param newPasswordUser string,
    * @param passwordUser string,
    * @param birthDateUser string,
    * Function for alter for adapt in the business rules this params,
    * ! Just alter this function if your business rules set another default type. 
    * * THIS IS AMAZING

  */
  public static function convertParams($parameters)
  {
    if(isset($parameters['newPasswordUser']))$parameters['newPasswordUser'] = md5($parameters["newPasswordUser"]);
    if(isset($parameters['passwordUser']))(string)$parameters['passwordUser'] = md5($parameters["passwordUser"]);
    if(isset($parameters['birthDateUser']))$parameters['birthDateUser'] = new \DateTime($parameters['birthDateUser']);
    if(isset($parameters['birthDateUser']))$parameters['birthDateUser'] = $parameters['birthDateUser']->format('Y-m-d');
    if(isset($parameters['permissionUser'])!=False)$parameters['permissionUser'] = 1;
    return $parameters;
  }

  /**
   * newUser:
   * Used for creat new user in Database 
   */
  public function newUser($data)
  {
      try{
        #Convert params for the business rules 
        $data = $this->convertParams($data);
        #Executing DB trait for change and commit changes of new user in DB tables
        $verify = $this->executeQuery($data,"verifyEmail","/[^0-9a-zA-Z@-Z.]/");
        if(\sizeof($verify) == 0){
          $result = $this->executeQuery($data,"newUser","/[^0-9a-zA-Z@-Z.]/");
          return $result;  
        }else{
          return False;
        }
      }catch(Exception $e){
        //Retorna falso pra não dar aquele vexame
        return false;
      }
  }

 
  function LoginUser($data,$tempo)
  {
    try{
       
        $data = $this->convertParams($data);
        
        $param = $this->executeQuery($data,"selectUser","/[^0-9a-zA-Z@-Z X]/");
        if(isset($param[0])){
          if($param[0]["emailUser"] == $data["emailUser"] && $param[0]["passwordUser"] == $data["passwordUser"]){
              $this->changeUser($param[0]);
              $this->newToken("PT".strval($tempo)."H00S","newToken"); 
              return True;
        }else{
          return False;
        }
    }else{
        return False;
    }
    }catch(Exception $e){
      //Retorna falso pra não dar aquele vexame
      return false;
    }   
  }

  protected function getUser():void
  {
    try{
      $result = $this->executeQuery(["idUser"=>$this->idUser],"pickUser","/[^0-9]/");
      $this->changeUser($result[0]);
    }catch(Exception $e){
      //Retorna falso pra não dar aquele vexame
    }
  }

  public function UpdateUserInformation($informationsChanged, $data)
  {
    try{
        if(count($informationsChanged) == count($data)){
          for($i=0;$i <= count($data); $i++){
            if($informationsChanged[$i]=="passwordUser" or $informationsChanged[$i]== "permissionUser" or $informationsChanged[$i]== "idUser"){
              return False;

          }
            $this->executeQuery($data,"updateUser","/[^0-9a-zA-Z@-Z X]/");
            $this->getUser();
            return True;
          }
      }else{
          return False;
        }
        
    }catch(Exception $e){
        //Retorna falso pra não dar aquele vexame
        return [False];
    }
  }
  ## The existing constraint on information that can be changed, eg password, for this there is another function
  public function FavoriteAdd($idItem){
    try{
      $this->executeQuery(["idUser"=>$this->idUser,"idItem"=>$idItem],"favoriteAdd","/[^0-9]/");
    }catch(Exception $e){
      return False;
      //Retorna falso pra não dar aquele vexame
    }
  }

  public function ChangePassword($oldPasswordUser, $newPasswordUser)
  {
    try{
      if(strlen($newPasswordUser)> 5){
        $result = $this->executeQuery(["idUser"=>$this->idUser,"oldPasswordUser"=>$oldPasswordUser, "newPasswordUser"=>md5($newPasswordUser)],"updateUser","/[^0-9a-zA-Z@-Z X]/");
        $this->getUser();
        return True;
      }else{
        return False;
      }
  }catch(Exception $e){
      //Retorna falso pra não dar aquele vexame
      return False;
  }
  }

  public function postComment($data){
    
      try{
          $data["idUser"] = $this->idUser;
          $result = $this->executeQuery($data,"postComment","/[^0-9a-zA-Z@-Z X]/");
          if(\sizeof($result) == 0){
            return True;  
          }else{
            return False;
          }
    }catch(Exception $e){
        //Retorna falso pra não dar aquele vexame
        return False;
    }
  }


  public function deleteComment($data){
    
      try{
          $data["idUser"] = $this->idUser;
          $result = $this->executeQuery($data,"deleteComment","/[^0-9a-zA-Z@-Z X]/");
          if(\sizeof($result) == 0){
            return True;  
          }else{
            return False;
          }
    }catch(Exception $e){
        //Retorna falso pra não dar aquele vexame
        return False;
    }
  }

  public function editComment($data){
    
      try{
          $data["idUser"] = $this->idUser;
          $result = $this->executeQuery($data,"editComment","/[^0-9a-zA-Z@-Z X]/");
          if(\sizeof($result) == 0){
            return True;  
          }else{
            return False;
          }
    }catch(Exception $e){
        //Retorna falso pra não dar aquele vexame
        return False;
    }
  }
  #public function requestNewPassword($email){

  #}


  public function resetUser(){
        reset($this);
  }
 
}






