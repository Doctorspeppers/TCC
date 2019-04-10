<?php
include __DIR__+"..\model\traits\PDO_db.trait.php";
include __DIR__+"..\model\user.php";

function NewUser($data)
{
    $user = new User();
    $user->NewUser($data);
    $user->setQuery("","newUser");
    $user->setconnection($db_type="mysql",$PDO_host="localhost",$PDO_dbname="",$PDO_port=3306, $PDO_user="user", $PDO_password="user");
    $user->executeQuery((array)$user,"newUser",$encoding);
}   

