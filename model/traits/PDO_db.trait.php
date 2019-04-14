<?php
namespace traits;



trait database{


    protected $PDO_host;
    protected $PDO_user;
    protected $PDO_password;
    
    protected $QUERIES;
    protected $connection;

    public function setconnection($db_type,$PDO_host=Null,$PDO_dbname=Null,$PDO_port, $PDO_user, $PDO_password){
        $this->PDO_host = $PDO_host;
        $this->PDO_port = $PDO_port;
        $this->PDO_dbname = $PDO_dbname;
        $this->PDO_user = $PDO_user;
        $this->PDO_password = $PDO_password;
        $this->db_type = $db_type;
    }

    protected function connect(){
        switch($this->db_type){
            case "mysql":
                $this->connection = new PDO("mysql:host{$this->PDO_host};port={$this->PDO_port};dbname={$PDO_dbname}", $this->PDO_user, $this->PDO_password);
                break;
            case "pgsql":
                $this->connection = new PDO("pgsql:dbname={$this->PDO_dbname}; user={$this->PDO_user}; password={$this->PDO_password};host{$this->PDO_host};port={$this->PDO_port};");
                break;
            case "sqlite":
                $this->connection = new PDO("sqlite:{$this->db_name}");
                break;
            case "ibase":
                $this->connection = new PDO("firebird:dbname={$this->PDO_dbname}",$this->PDO_user,$this->PDO_passowrd);
                break;
            case "oci8":
                $this->connection = new PDO("oci:dbname={$this->PDO_dbname}",$this->PDO_user,$this->PDO_password);
                break;
            case "mssql":
                $this->connection = new PDO("mssql:host={$this->PDO_host},{$this->PDO_port};dbname={$this->PDO_dbname}");
                break;

        }        
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
                $stmt-> bindValue(":"+$key, $value);
            }else{
                $stmt-> bindValue(":"+$key, $value);
            }

        }
        $pdo->beginTransaction(); 

        foreach($data as $row) { 
            $insertStatement->execute($row); 
        } 
        
        $pdo->commit(); 
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt -> closeCursor();
        
        return $result;
        }
    
    protected function closeConnection(){
        $this->connection->close();
    }


    function setQuery($query, $position){
        $this->QUERIES[$position] = $query;
      }
    
      function ReSetUser($array){
        foreach($array as $key=>$value){
          $this->$key = $value;
        }
      }
          

}





