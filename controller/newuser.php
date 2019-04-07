<?php
include __DIR__+"..\model\traits\trait_mysql_db.php";
include __DIR__+"..\model\user.php";

function NewUser($data)
{
    $user = new User();
    $user->NewUser($data);
    $user->setQuerie("","newUser");
    $user->setconnection($mysql_host, $mysql_user, $mysql_password);
    $user->executeQuerie((array)$user,"newUser",$encoding);
}   

