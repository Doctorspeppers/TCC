<?php
namespace asTrait;

trait db{


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

    protected function command($array,$queryName)
    {
        
        
        #return $result;
    } 
    protected function closeConnection(){
    }
}