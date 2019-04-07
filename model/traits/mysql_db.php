<?php
namespace traits;



trait database{


    protected $mysql_host;
    protected $mysql_user;
    protected $mysql_password;
    protected $connection;

    public function setconnection($mysql_host, $mysql_user, $mysql_password){
        $this->mysql_host = $mysql_host;
        $this->mysql_user = $mysql_user;
        $this->mysql_password = $mysql_password;
    }

    protected function connect(){
        $this->connection = new PDO($this->mysql_host, $this->mysql_user, $this->mysql_password);
    }
    ##Encondings: 
    ##"/[^0-9a-zA-Z@-Z.]/" only letter, numbers and "@"s, "."s
    ##"/[^[:alpha:]_]/" only letter, numbers
    ##"/[^0-9]/" only numbers
    protected function command($array,$querie,$encoding=NULL){
        $stmt = $this->connection->prepare($querie);
        foreach($array as $key => $value){
            ##needs ":key" this format in key
            if(enconding != NULL){
                $value = preg_replace($encoding, '',$value);
                $stmt-> bindValue($key, $value);
            }else{
                $stmt-> bindValue($key, $value);
            }

        }
        $run = $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt -> closeCursor();
        
        return $result;
        }
    
    protected function closeConnection(){
        $this->connection->close();
    }

        
}





