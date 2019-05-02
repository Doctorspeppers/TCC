<?php
namespace asAbstractClass;
define(__DIR__,"","/var/www/html/TCC/");
include __DIR__."/../traits/PDO_db.trait.php";
include __DIR__."/../traits/config.trait.php";
include __DIR__."/../traits/txt_log.trait.php";
include __DIR__."/../traits/token_auth.trait.php";
include __DIR__."/../interface/user.interface.php";
abstract class User implements \asInterface\User{
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
    $this->QUERIES = Null;
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
      /*the object expects an array to be passed with the following items
          $idUser,$nameUser,$emailUser,$birthDateUser,$genderUser,$dateCreationUser,$permissionUser
        */
    
    if(isset($parameters['idUser']))$this->idUser = $parameters["idUser"];
    if(isset($parameters['nameUser']))(string) $this->nameUser = $parameters['nameUser'];
    if(isset($parameters['emailUser']))(string) $this->emailUser = $parameters['emailUser'];
    if(isset($parameters['passwordUser']))$this->passwordUser = $parameters["passwordUser"];
    if(isset($parameters['genderUser']))(string) $this->genderUser = $parameters['genderUser'];
    if(isset($parameters['birthDateUser']))$this->birthDateUser = new \DateTime($parameters['birthDateUser']);
    if(isset($parameters['birthDateUser']))$this->birthDateUser = $this->birthDateUser->format('YYYY-MM-DD');
    if(isset($parameters['dateCreationUser']))(string) $this->dateCreationUser = $parameters['dateCreationUser'];
    if(isset($parameters['permissionUser']))$this->permissionUser = $parameters['permissionUser'];
    
  }

  public static function convertParams($parameters)
  {
      /*the object expects an array to be passed with the following items
          $idUser,$nameUser,$emailUser,$birthDateUser,$genderUser,$dateCreationUser,$permissionUser
        */
    if(isset($parameters['newPasswordUser']))$parameters['newPasswordUser'] = md5($parameters["newPasswordUser"]);
    if(isset($parameters['passwordUser']))(string)$parameters['passwordUser'] = md5($parameters["passwordUser"]);
    if(isset($parameters['birthDateUser']))$parameters['birthDateUser'] = new \DateTime($parameters['birthDateUser']);
    if(isset($parameters['birthDateUser']))$parameters['birthDateUser'] = $parameters['birthDateUser']->format('Y-m-d');
    return $parameters;
  }


  public function newUser($data)
  {
      try{
        
        $data = $this->convertParams($data);
        
        $verify = $this->executeQuery($data,"verifyEmail","/[^0-9a-zA-Z@-Z.]/");
        if(\sizeof($verify) == 0){

          $result = $this->executeQuery($data,"newUser","/[^0-9a-zA-Z@-Z.]/");
          return $result;  
        }else{
          return False;
        }
      }catch(Exception $e){
          #$user->logError($e);
        $e->getMessage();
      }
  }

  public function DeleteUser($passwordUser){
    return True;
  }


  function LoginUser( $ip, $emailUser, $passwordUser)
  {
    try{
        
        $array = $this->convertParams(["ip"=>$ip,"emailUser"=>$emailUser,"passwordUser"=>$passwordUser]);
        $param = $this->executeQuery($array,"selectUser","/[^0-9a-zA-Z@-Z X]/");
        if($param[0]["emailUser"] == $array["emailUser"] && $param[0]["passwordUser"] == $array["passwordUser"]){
            $this->changeUser($param[0]);
            $this->newToken($array["ip"],"PT12H00S","newToken");
            return True;
    }else{
        return False;
    }
    }catch(Exception $e){
        $this->logError($e);
        return True;
    }   
  }

  protected function getUser():void
  {
    try{
      $result = $this->executeQuery(["idUser"=>$this->idUser],"pickUser","/[^0-9]/");
      $this->changeUser($result[0]);
    }catch(Exception $e){
      $this->logError($e);
    }
  }

  public function UpdateUserInformation($informationsChanged, $data)
  {
    try{
        if(count($informationsChanged) == count($data)){
          for($i=0;$i <= count($data); $i++){
            if($informationsChanged[$i]=="passwordUser" or $informationsChanged[$i]== "permissionUser" or $informationsChanged[$i]== "idUser"){
              return False;
            }else{
              $array[$informationsChanged[$i]] = $data[$i];
            }
          }
          $this->executeQuery($array,"updateUser","/[^0-9a-zA-Z@-Z X]/");
          $this->getUser();
          return True;
        }else{
          return False;
        }
    }catch(Exception $e){
        $this->logError($e);
        return [False];
    }
  }
  ## The existing constraint on information that can be changed, eg password, for this there is another function
  public function FavoriteAdd($idItem){
    try{
      $this->executeQuery(["idUser"=>$this->idUser,"idItem"=>$idItem],"favoriteAdd","/[^0-9]/");
    }catch(Exception $e){

    }
  }

  public function ChangePassword($oldPasswordUser, $newPasswordUser)
  {
    try{
      if(strlen($newPasswordUser)> 5){
        $result = $this->executeQuery(["idUser"=>$this->idUser,"oldPasswordUser"=>$oldPasswordUser, "newPasswordUser"=>$newPasswordUser],"updateUser","/[^0-9a-zA-Z@-Z X]/");
        return True;
      }else{
        return False;
      }
  }catch(Exception $e){
      #$this->logError($e);
      return False;
  }
  }
  #public function requestNewPassword($email){

  #}


  public function resetUser(){
        reset($this);
  }
 
}






