<?php
namespace traits;

trait Log{
    private $logErrorFile;
    private $logQueryFile;

    function setFiles($array){
        foreach($array as $key=> $value){
            $this->$key = $value;
        }
    }
    
    private function LogQuery($queryName, $object, $result)
    {
        $date = date("Y-m-d h:m:s");
        $fileForLog = fopen($this->logErrorFile,"a+");
        $queryMensage = "[{$date}]Query named {$queryName} executed in this form "+$QUERIES[$queryName]+"\nwith this result"+json_encode($result)+"\nin this object(json format)'"+json_encode((array)$object)+"'\n\n";
        fwrite($fileforLog, $message);
        fclose($fileForLog);
    }

    private function LogError($error){
        $date = date("Y-m-d h:m:s");
        $file = __FILE__;
        
        $message = "[{$date}] [{$file}] An error was found: {$error}";
        $errorMensage = error_log($message);
        $fileForLog = fopen($this->logErrorFile,"a+");
        fwrite($fileforLog, $message);
        fclose($fileForLog);
        return False;
    }
}

?>