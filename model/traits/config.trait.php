<?php

trait config{
    public function SetConfigs($args=Null,$file=Null,$replace=False){
        if($args!=Null){
            extract($args, EXTR_PREFIX_SAME, "fun");
        }elseif($file !=Null){
            $fileIniOpen = parse_ini_file($file);
            extract($fileIniOpen);
        }else{
            return False;
        } 
        if($this->PDO_logErrorFile == Null or $replace == True){
            if(is_exists($logErrorFile))$this->logErrorFile = $logErrorFile;
            if( is_exists($fun_logErrorFile))$this->logErrorFile = $fun_logErrorFile;
        }
        if($this->PDO_logQueryFile == Null or $replace == True)
        {
            if(is_exists($logQueryFile))$this->logQueryFile = $logQueryFile;
            if(is_exists($fun_logQueryFile))$this->logQueryFile = $fun_logQueryFile;
        }
        if($this->PDO_host == Null or $replace == True)
        {
            if(is_exists($PDO_host))$this->PDO_host = $PDO_host;
            if(is_exists($fun_PDO_host))$this->PDO_host = $fun_PDO_host;
        }
        if($this->PDO_port == Null or $replace == True)
        {
            if(is_exists($PDO_port))$this->PDO_port = $PDO_port;
            if(is_exists($fun_PDO_port))$this->PDO_port = $fun_PDO_port;
        }
        if($this->PDO_dbname == Null or $replace == True)
        {
            if(is_exists($PDO_dbname))$this->PDO_dbname = $PDO_dbname;
            if(is_exists($fun_PDO_dbname))$this->PDO_dbname = $fun_PDO_dbname;
        }
        if($this->PDO_user == Null or $replace == True){
            if(is_exists($PDO_user))$this->PDO_user = $PDO_user;
            if(is_exists($fun_PDO_user))$this->PDO_user = $fun_PDO_user;
        }
        if($this->PDO_password == Null or $replace == True)
        {
        if(is_exists($PDO_password))$this->PDO_password = $PDO_password;
        if(is_exists($fun_PDO_password))$this->PDO_password = $fun_PDO_password;
        }
        if($this->PDO_type == Null or $replace == True)
        {
            if(is_exists($PDO_type))$this->PDO_type = $PDO_type; 
            if(is_exists($fun_PDO_type))$this->PDO_type = $fun_PDO_type;
        }
        if($this->QUERIES == Null or $replace == True){
            if(is_exists($QUERIES))$this->QUERIES = $QUERIES;
            if(is_exists($fun_QUERIES))$this->QUERIES = $fun_QUERIES;
        }
               
    }
}
?>