<?php
 

trait database{


    protected $PDO_host;
    protected $PDO_user;
    protected $PDO_password;
    protected $QUERIES;
    protected $connection;

    public function setconnection($db_type=Null,$PDO_host=Null,$PDO_dbname=Null,$PDO_port=Null, $PDO_user=Null, $PDO_password=Null){
        $this->PDO_host = $PDO_host;
        $this->PDO_port = $PDO_port;
        $this->PDO_dbname = $PDO_dbname;
        $this->PDO_user = $PDO_user;
        $this->PDO_password = $PDO_password;
        $this->db_type = $db_type;
    }

    protected function connect(){
        switch($this->PDO_type){
            case "mysql":
                $this->connection = new PDO("mysql:host=$this->PDO_host;dbname=$this->PDO_dbname", $this->PDO_user, $this->PDO_password,array(
                    PDO::ATTR_EMULATE_PREPARES=>false,
                    PDO::MYSQL_ATTR_DIRECT_QUERY=>false,
                    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
                ));
                break;
            case "pgsql":
                $this->connection = new PDO("pgsql:dbname={$this->PDO_dbname}; user={$this->PDO_user}; password={$this->PDO_password};host{$this->PDO_host};port={$this->PDO_port};");
                break;
            case "sqlite":
                $this->connection = new PDO("sqlite:{$this->PDO_name}");
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
    ##"/[^0-9a-zA-Z@-Z X]/" only letter, numbers and "@"s, "."s
    ##"/[^[:alpha:]_]/" only letter, numbers
    ##"/[^0-9]/" only numbers
    protected function command($array,$querie,$encoding=NULL){
        try{
            $this->connect();
            $commandLine = $this->connection->prepare($querie);
            
            foreach($array as $key => $value){
                $value = preg_replace($encoding, '',$value);
            }
            foreach($array as $key => $value){
                $querie = str_replace(":".$key,$value,$querie);
                
            }
            
            $commandLine = $this->connection->prepare($querie);
           
            $commandLine->execute();
            
            $result = $commandLine->fetchAll();
            
            return $result;
        }catch (PDOException $e){
            return $e->getMessage();   
        }
        
    }
    
    
  public function setQuerie($querie, $position){
    $this->QUERIES[$position] = $querie;
  }

  public function executeQuery($anyNinfo,$querie,$encoding){
    $querie = $this->command($anyNinfo,$this->QUERIES[$querie],$encoding);
    return $querie;
  }


    protected function closeConnection(){
        $this->connection->close();
    }


    function setQuery($query, $position){
        $this->QUERIES[$position] = $query;
      }

}





