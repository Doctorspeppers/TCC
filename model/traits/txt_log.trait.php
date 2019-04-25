<?php


trait log{
    private $logErrorFile;
    private $logQueryFile;

    function setFiles($array){
        foreach($array as $key=> $value){
            $this->$key = $value;
        }
    }
    
    protected function LogQuery($queryName, $object, $result)
    {
        if(isset($this->logQueryFile)){
            $date = date("Y-m-d h:m:s");
            $fileForLog = fopen($this->logErrorFile,"a+");
            $message = "[{$date}]Query named {$queryName} executed in this form "+$QUERIES[$queryName]+"\nwith this result"+json_encode($result)+"\nin this object(json format)'"+json_encode((array)$object)+"'\n\n";
            fwrite($this->fileforLog, $message);
            fclose($fileForLog);
            return True;
        }
    }

    protected function LogError($error){
        if(isset($this->logQueryFile)){
            $date = date("Y-m-d h:m:s");
            $file = __FILE__;
            
            $message = "[{$date}] [{$file}] An error was found: {$error}";
            $errorMensage = error_log($message);
            $fileForLog = fopen($this->logErrorFile,"a+");
            fwrite($this->fileforLog, $message);
            fclose($fileForLog);
            return False;
        }
    }
}
?>