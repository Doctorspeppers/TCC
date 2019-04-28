<?php
namespace astrait;
define(__DIR__,"/var/www/html/TCC",true);
trait db{


    protected $host;
    protected $user;
    protected $password;
    protected $connection;

    public function setconnection($host, $user, $password, $db_name){
        $this->mongo_host = $host;
    }

    protected function connect(){
        $this->connection = new \MongoClient($this->mongo_host);
    }

    protected function selectcollection($database,$collection){
    	$this->connection = $this->connection->selectCollection($database,$collection);
    }

    protected function insertOne($array){
    $result = $this->connection->insertOne($array);
    return $result;
    }

    protected function command($query){
       $result = $this->connection->command($query);
        
       return $result;
    }
    
    protected function closeConnection(){
       $this->connection->close();
    }   
}