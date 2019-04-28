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
        $data = $user->convertParams($data);
        
        $result = $user->executeQuery($data,"newUser",["/[^0-9a-zA-Z@-Z.]/"]);
        #$user->LogQuery("newUser", $user,$result);
        return $result;
    }catch(Exception $e){
        #$user->logError($e);
        return $e;
    }
}


/* 
@param $array = ["ip"=>$ip,"email"=>$Useremail,"password"=>$Userpassword]
*/


function updateUser($array){
    $user = new User();
    $user->SetConfigs($file="../config/user.ini");
    try{
        $array = $user->convertParams($array);
        $result = $user->executeQuery($array,"updateUser","/[^0-9a-zA-Z@-Z X]/");
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

            return $result;
        }catch(Exception $e){
            $user->logError($e);
            return False;
        }
    
}
#$user = ["nameUser"=>"Pedro","emailUser"=>"pedro@gmail.com","birthDateUser"=>"25-04-2002","passwordUser"=>"test", "genderUser"=>"male"];
#$result = newUser($user);
#$user = LoginUser(["emailUser"=>"pedro@gmail.com","passwordUser"=>"test","ip"=>"192.168.123.123"]);

#var_dump($user);