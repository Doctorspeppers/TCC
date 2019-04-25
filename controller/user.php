<?php


include "../model/user.class.php";
/*
@data array ["nameUser"=>"","email"=>,"birthDateUser"=>,"passwordUser"=>, "genderUser"=>]
*/
function newUser($data)
{
    $user = new User();

    $user->SetConfigs($file=__DIR__."/../config/user.ini");
    try{
        $user->NewUser($data);
       
        $result = $user->executeQuery($data,"newUser",["/[^0-9a-zA-Z@-Z.]/"]);
        #$user->LogQuery("newUser", $user,$result);
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
    $user = new model\User();
    $user->SetConfigs($file="../config/user.ini");
    try{
    $param = $user->executeQuery(["email"=>$array["email"],"password"=>md5($array["password"])],"login",$encoding);
    if($user->email==$array["email"] && $user->password == md5($array["password"])){
        $user->ReSetUser($param);
        #$user->LogQuery("selectUser", $user,"/[^0-9a-zA-Z@-Z.]/");
        return [True, $user];
    }else{
        return [False];
    }
    }catch(Exception $e){
        $user->logError($e);
        return [False];
    }   
}

function updateUser($array){
    $user = new model\User();
    $user->SetConfigs($file="../config/user.ini");
    try{
        $result = $user->executeQuery((array)$user,"updateUser","/[^0-9a-zA-Z@-Z.]/");
        #$user->LogQuery("updateUser", $user,$result);
        return $result;
    }catch(Exception $e){
        $user->logError($e);
        return False;
    }
}

function getUser($array){
        $user = new User();
        $user->SetConfigs($file="../config/user.ini");
        try{
            $result = $user->executeQuery($array,"selectUser","/[^0-9a-zA-Z@-Z.]/");
            #$user->LogQuery("updateUser", $user,$result);
            return $result;
        }catch(Exception $e){
            $user->logError($e);
            return False;
        }
    
}

$user = ['emailUser'=>"pedro@doutor",'passwordUser'=>"tes2"];
$result = getUser($user);
var_dump($result);