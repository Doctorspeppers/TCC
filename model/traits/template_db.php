<?php
namespace traits;


trait database{


    protected $host;
    protected $user;
    protected $password;
    protected $connection;

    public function setconnection($host, $user, $password, $dbname)
    {

    }

    protected function connect()
    {
        
    }

    protected function command($array,$query)
    {
        
        
        return $result;
    } 
    protected function closeConnection(){
    }
}