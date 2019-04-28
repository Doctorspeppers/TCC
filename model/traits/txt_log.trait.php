<?php
namespace astrait;
define(__DIR__,"/var/www/html/TCC",true);

trait log{
    private $logErrorFile;
    private $logQueryFile;

    function setFiles($array){
        foreach($array as $key=> $value){
            $this->$key = $value;
        }
    }
    
    
    protected function LogQuery($queryName, $result,$anyNinfo)
    {
        if(isset($this->logQueryFile)){
            $date = date("Y-m-d h:m:s");
            $fileForLog = fopen($this->logErrorFile,"a+");
            $message = "[{$date}]Query named {$queryName} executed in this form "+$this->QUERIES[$queryName]+"\n with this infos:'".$anyNinfo."'with this result".json_encode($result)."'";
            fwrite($this->fileforLog, $message);
            fclose($fileForLog);
            return True;
        }
    }
}
?>