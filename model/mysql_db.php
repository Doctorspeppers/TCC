<?php




class database{


    protected $mysql_host;
    protected $mysql_user;
    protected $mysql_password;
    protected $connection;

    function __construct(Type $var = null)
    {
        $this->mysql_host = $mysql_host;
        $this->mysql_user = $mysql_user;
        $this->mysql_password = $mysql_password;
    }

    function connect(){
        $this->connection = new PDO($this->mysql_host, $this->mysql_user, $this->mysql_password);
    }

    function querie($array,$querie){
        $stmt = $this->connection->prepare($querie);
        foreach($array as $key => $value){
            ##needs ":key" this format in key
            $value = preg_replace('/[^[:alpha:]_]/', '',$value);
            $stmt-> bindValue($key, $value);
        }
        $run = $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt -> closeCursor();
        return $result;
        }
    
    function closeConnection(){
        $this->connection->close();
    }

        
}





?>