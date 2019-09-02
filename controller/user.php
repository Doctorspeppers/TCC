<?php
namespace controller;
include "../model/class/users.php";
$user = new User("/../../config/user.ini");
session_start();
if(isset($_GET["command"])){
    $comando = $_GET["command"];
}else{
    \header('Location:../index.php');
}
if($comando == "newUser"){
    $result = $user->newUser($_POST);
    if(\gettype($result) == "array"){
        if(sizeof($result) == 0){
            $_SESSION["result"]="<p>Ok, seu cadastro foi efetivado com sucesso</p>";
            \header('Location:../index.php');
        }else{
            $_SESSION["result"] = "<p>Erro inesperado</p>";
            \header('Location:../index.php');
        }

    }elseif($result == False){ 
        
        $_SESSION["result"] = "<p>Seu email ja esta cadastrado</p>";
        \header('Location:../index.php');
    }
}elseif($comando == "LoginUser"){
    
    $result = $user->LoginUser($_POST,12); 
    
    if($result == True){
        $_SESSION["result"]="<p>Ok, seu login foi efetuado com sucesso</p>";
        $_SESSION["usuario"] = serialize($user);
        \header('Location:../index.php');
    }elseif($result == False){
        $_SESSION["result"] = "<p>Verifique seu email ou sua senha, alguma informação esta incorreta</p>";
        \header('Location:../index.php');
        
    }
}elseif($comando == "changeInfo"){
    if(isset($_SESSION["usuario"])){
        $user = unserialize($_SESSION["usuario"]);
        $result = $user->UpdateUserInformation(array_keys($_POST),$_POST);
        if($result == True){       
            $_SESSION["result"]="<p>Ok, seus dados foram alterados com sucessos</p>";
            $_SESSION["usuario"] = serialize($user);
            \header('Location:../index.php');
        }elseif{
            $_SESSION["result"] = "<p>Alguma informação esta incorreta, tente novamente</p>";
            \header('Location:../index.php');
        }
    }


}elseif($comando == "changePassword"){
    if(isset($_SESSION["usuario"])){
        $user = unserialize($_SESSION["usuario"]);
        $user->changePassword($_POST["oldPassword"],$_POST["newPassword"]);
        if($result == True){       
            $_SESSION["result"]="<p>Ok, sua senha foi alterada com sucessos</p>";
            $_SESSION["usuario"] = serialize($user);
            \header('Location:../index.php');
        }else{
            $_SESSION["result"] = "<p>Alguma informação esta incorreta, tente novamente</p>";
            \header('Location:../index.php');
        }

    }
}elseif($comand =="postComment"){
    if(isset($_SESSION["usuario"])){
        $user = unserialize($_SESSION["usuario"]);
        $result = $user->postComment($_POST);
        if($result == TRUE){
            $_SESSION["result"]="<p>Ok, seu comentario foi postado com sucessos</p>";
            \header('Location:'.$_GET["url"]);
        }else{
            $_SESSION["result"]="<p>Alguma informação esta incorreta.</p>";
            \header('Location:'.$_GET["url"]);
        }
    }


}elseif($comando == "deleteComment"){

    if(isset($_SESSION["usuario"])){
        $user = unserialize($_SESSION["usuario"]);
        $result = $user->deleteComment($_POST);
        if($result == TRUE){
            $_SESSION["result"]="<p>Ok, seu comentario foi deletado com sucessos</p>";
            \header('Location:'.$_GET["url"]);
        }else{
            $_SESSION["result"]="<p>Alguma informação esta incorreta.</p>";
            \header('Location:'.$_GET["url"]);
        }
    }

}elseif($comando == "editComment"){

    if(isset($_SESSION["usuario"])){
        $user = unserialize($_SESSION["usuario"]);
        $result = $user->editComment($_POST);
        if($result == TRUE){
            $_SESSION["result"]="<p>Ok, seu comentario foi editado com sucessos</p>";
            \header('Location:'.$_GET["url"]);
        }else{
            $_SESSION["result"]="<p>Alguma informação esta incorreta.</p>";
            \header('Location:'.$_GET["url"]);
        }
    }

}elseif($comando == "logout"){
    $user->clearTokens();
    unset($_SESSION["usuario"]);
    session_unset();
    session_destroy();
    unset($_COOKIE["PHPSESSID"]);
    $_SESSION = [];

}else{
    \header('Location:../index.php');
}

\header('Location:../index.php');