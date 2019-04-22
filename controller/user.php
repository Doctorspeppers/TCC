<?php
include __DIR__+"..\model\traits\trait_mongo_db.trait.php";
include __DIR__+"..\model\traits\config.trait.php";
include __DIR__+"..\model\traits\log.trait.php";
include __DIR__+"..\model\user.php";



function NewUser($data)
{
    $user = new User();
    $user->SetConfigs($file="../config/user.ini");
    try{
        $user->NewUser($data);
        foreach((array)$user as $key => $value){
            if($value == NULL){
                return false;
            }
        }
        $user->setQuery("","newUser");
        $user->setconnection($db_type="mysql",$PDO_host="localhost",$PDO_dbname="",$PDO_port=3306, $PDO_user="user", $PDO_password="user");
        $result = $user->executeQuery((array)$user,"newUser",$encoding);
        $user->LogQuery($queryName, $user,$result);
        return $result;
    }catch(Exception $e){
        $user->logError($e);
        return False;
    }
}   
/* 
@param $array = ["email"=>$email,"password"=>$password]
*/
function LoginUser($array){
    $user = new User();
    $user->SetConfigs($file="../config/user.ini");
    try{
    $user->setconnection($db_type="mysql",$PDO_host="localhost",$PDO_dbname="",$PDO_port=3306, $PDO_user="user", $PDO_password="user");
    $param = $user->executeQuery(["email"=>$array["email"],"password"=>md5($array["password"])],"login",$encoding);
    if($user->email==$array["email"] && $user->password == md5($array["password"])){
        $user->ReSetUser($param);
        $user->LogQuery($queryName, $user,$result);
        return [True, $user];
    }else{
        return [False];
    }
    }catch(Exception $e){
        $user->logError($e);
        return [False];
    }   
}

function ChangeInfo($array){
    $user = new User();
    $user->SetConfigs($file="../config/user.ini");
    try{
    $user->ReSetUser((array)$array);
    $user->setQuery("","changeinfo");
    $user->setconnection($db_type="mysql",$PDO_host="localhost",$PDO_dbname="",$PDO_port=3306, $PDO_user="user", $PDO_password="user");
    $result = $user->executeQuery((array)$user,"changeinfo",$encoding);
    $user->LogQuery($queryName, $user,$result);
    return $result;
    }catch(Exception $e){
        $user->logError($e);
        return False;
    }
}