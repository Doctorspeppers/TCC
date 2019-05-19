<?php
namespace controller;
include "../model/class/nonpaymentuser.class.php";
$user = new \asClass\nonPaymentUser("/../../config/user.ini");
$comando = null;
if(isset($_GET["command"])){
    $comando = $_GET["command"];
}else{
    \header('header:../index.php');
}
if($comando == "newUser"){
    $result = $user->newUser($_POST);
    if(\gettype($result) == "array"){
        if(sizeof($result) == 0){
            $_POST["result"]="<p>Ok, seu cadastro foi efetivado com sucesso</p>";
            \header('header:../index.php');
        }else{
            $_POST["result"] = "<p>Erro inesperado</p>";
            \header('header:../index.php');
        }

    }elseif($result == False){
        
        $_POST["result"] = "<p>Seu email ja esta cadastrado</p>";
        \header('header:../index.php');
    }
}elseif($comando == "LoginUser"){
    
    $result = $user->LoginUser($_POST,12); 
    if($result == True){
        $_POST["result"]="<p>Ok, seu login foi efetuado com sucesso</p>";
        \header('header:../index.php');
    }elseif($result == False){
        $_POST["result"] = "<p>Verifique seu email ou sua senha, alguma informação esta incorreta</p>";
        \header('header:../index.php');
        
    }
}else{
    \header('header:../index.php');
}

\header('header:../index.php');