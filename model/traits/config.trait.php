<?php
namespace astrait;
define(__DIR__,"/var/www/html/TCC",true);
trait config{
    public function SetConfigs($file=Null,$arg=Null,$replace=False){
        if($arg != Null){
            extract($arg, EXTR_PREFIX_SAME, "fun");
        }elseif($file !=Null){
            $fileIniOpen = parse_ini_file($file);
        }else{
            return False;
        } 
        if(isset($this->PDO_logErrorFile) == False or $replace == True){
            if(isset($fileIniOpen["logErrorFile"]) == True)$this->logErrorFile = $fileIniOpen["logErrorFile"];
            if(isset($logErrorFile) == True)$this->logErrorFile = $logErrorFile;
            if(isset($fun_logErrorFile) == True)$this->logErrorFile = $fun_logErrorFile;
        }
        if(isset($this->PDO_logQueryFile) == False or $replace == True)
        {
            if(isset($fileIniOpen["logQueryFile"]) != Null)$this->logQueryFile = $fileIniOpen["logQueryFile"];
            elseif(isset($logQueryFile) == True)$this->logQueryFile = $logQueryFile;
            elseif(isset($fun_logQueryFile) == True)$this->logQueryFile = $fun_logQueryFile;
        }
        if(isset($this->PDO_host) == False or $replace == True)
        {
            if(isset($fileIniOpen["PDO_host"]) == True)$this->PDO_host = $fileIniOpen["PDO_host"];
            elseif(isset($PDO_host) == True)$this->PDO_host = $PDO_host;
            elseif(isset($fun_PDO_host) == True)$this->PDO_host = $fun_PDO_host;
        }
        if(isset($this->PDO_port) == False or $replace == True)
        {
            if(isset($fileIniOpen["PDO_port"]) == True)$this->PDO_port = $fileIniOpen["PDO_port"];
            elseif(isset($PDO_port) == True)$this->PDO_port = $PDO_port;
            elseif(isset($fun_PDO_port) == True)$this->PDO_port = $fun_PDO_port;
        }
        if(isset($this->PDO_dbname) == False or $replace == True)
        {
            if(isset($fileIniOpen["PDO_dbname"]) == True)$this->PDO_dbname = $fileIniOpen["PDO_dbname"];
            elseif(isset($PDO_dbname) == True)$this->PDO_dbname = $PDO_dbname;
            elseif(isset($fun_PDO_dbname) == True)$this->PDO_dbname = $fun_PDO_dbname;
        }
        if(isset($this->PDO_user) == False or $replace == True){
            if(isset($fileIniOpen["PDO_user"]) == True)$this->PDO_user = $fileIniOpen["PDO_user"];
            elseif(isset($PDO_user) == true)$this->PDO_user = $PDO_user;
            elseif(isset($fun_PDO_user) == True)$this->PDO_user = $fun_PDO_user;
        }
        if(isset($this->PDO_password) == False or $replace == True)
        {
            if(isset($fileIniOpen["PDO_password"]) == True)$this->PDO_password = $fileIniOpen["PDO_password"];
            elseif(isset($PDO_password) == True)$this->PDO_password = $PDO_password;
            elseif(isset($fun_PDO_password) == True)$this->PDO_password = $fun_PDO_password;
        }
        if(isset($this->PDO_type) == False or $replace == True)
        {
            if(isset($fileIniOpen["PDO_type"]) == True)$this->PDO_type = $fileIniOpen["PDO_type"];
            elseif(isset($PDO_type) == True)$this->PDO_type = $PDO_type; 
            elseif(isset($fun_PDO_type) == True)$this->PDO_type = $fun_PDO_type;
        }
        if(isset($this->QUERIES) == False or $replace == True){
            if(isset($fileIniOpen["QUERIES"]) == True)$this->QUERIES = $fileIniOpen["QUERIES"];
            elseif(isset($QUERIES) == True)$this->QUERIES = $QUERIES;
            elseif(isset($fun_QUERIES) == True)$this->QUERIES = $fun_QUERIES;
        }
               
    }
}
?>