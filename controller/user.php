<?php
include __DIR__+"..\model\traits\trait_mysql_db.php";
include __DIR__+"..\model\user.php";

function NewUser($data)
{
    $user = new User();
    $user->NewUser($data);
    foreach((array)$user as $key => $value){
        if($value == NULL){
            return false;
        }
    }
    $user->setQuery("","newUser");
    $user->setconnection($db_type="mysql",$PDO_host="localhost",$PDO_dbname="",$PDO_port=3306, $PDO_user="user", $PDO_password="user");
    $result = $user->executeQuery((array)$user,"newUser",$encoding);
    return $result;
}   
/* 
@param $array = ["email"=>$email,"password"=>$password]
*/
function LoginUser($array){
    $user = new User();
    $set->setQuery("","login");
    $user->setconnection($db_type="mysql",$PDO_host="localhost",$PDO_dbname="",$PDO_port=3306, $PDO_user="user", $PDO_password="user");
    $param = $user->executeQuery(["email"=>$array["email"]],"login",$encoding);
    $user->ReSetUser($param);
    if($user->email==$array["email"] && $user->password == md5($array["password"])){
        return [True, $user];
    }else{
        return [False];
    }
}

function ChangeInfo($array){
    $user = new User();
    $user->ReSetUser((array)$array);
    $user->setQuery("","changeinfo");
    $user->setconnection($db_type="mysql",$PDO_host="localhost",$PDO_dbname="",$PDO_port=3306, $PDO_user="user", $PDO_password="user");
    $result = $user->executeQuery((array)$user,"changeinfo",$encoding);
    return $result;
}