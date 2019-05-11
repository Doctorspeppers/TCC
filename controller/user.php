<?php
namespace controller;
include "../model/class/nonpaymentuser.class.php";
$user = new \asClass\nonPaymentUser("/../../config/user.ini");



if($_GET["command"] == "newUser"){
    $result = $user->newUser($_POST);
    if(\gettype($result) == "array"){
        if(sizeof($result) == 0){
            $_POST["result"]="<p>Ok, seu cadastro foi efetivado com sucesso</p>";
        }else{
            $_POST["result"] = "<p>Erro inesperado</p>";
        }
    }elseif($result == False){
        
        $_POST["result"] = "<p>Seu email ja esta cadastrado</p>";
    }
}



if($_GET["command"] == "LoginUser"){
    $result = $user->LoginUser($_GET["ip"],$_POST);
    if($result == True){
        $_POST["result"]="<p>Ok, seu login foi efetuado com sucesso</p>";
    }elseif($result == False){
        $_POST["result"] = "<p>Verifique seu email ou sua senha, alguma informação esta incorreta</p>";
    }
}





header('Location: ../index.php');