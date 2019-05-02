<?php
namespace controller;
include "../model/class/nonpaymentuser.class.php";
$user = new \asClass\nonPaymentUser("/../../config/user.ini");



if($_GET["command"] == "newUser"){
    $result = $user->newUser($_POST);
    if(\gettype($result) == "array"){
        if(sizeof($result) == 0){
            print("<p>Ok, seu cadastro foi efetivado com sucesso</p>");
        }else{
            print("<p>Erro inesperado</p>");
        }
    }elseif($result == False){
        print("<p>Seu email ja esta cadastrado</p>");
    }
}