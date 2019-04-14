<?php
define(__DIR__,"","/var/www/html/TCC");

class api{
    use database;
    use log;
    use config;
    public $requisition;
    protected $content;
    protected $hashAuth;
    protected $auth;

    public function __construct($type_requesition, $requesition,$encoding)
    {
        $this->requisition = $requisition;
        header("Content-Type: application/json");
        // build a PHP variable from JSON sent using POST method
        if($requesition == "POST"){
            $this->content["data"] = json_decode(stripslashes(file_get_contents("php://input")));
            $this->content["auth"] = json_decode(stripslashes($_GET["auth"]));
        }elseif($requisition == "GET"){
            $this->content["data"] = json_decode(stripslashes($_GET["data"]));
            $this->content["auth"] = json_decode(stripslashes($_GET["auth"]));
        }else{
            return false;
        }
        $this->content["data"] = preg_replace($encoding, '',$value);
    } 

    public function VerifyAuth($queryName){
        $this->hashAuth = ["token"=>md5("".$this->content["auth"]["ip"]."-".$this->content["auth"]["token"])];
        $result = $this->command($hashAuth,$queryName,$encoding=NULL);
        if (len($result)>1 or !$result or $result == FALSE){
            $this->auth =  False;
        }elseif($result["hashAuth"] == $this->hashAuth){
            $this->auth = True;
        }
    }

    public function result($requisition_response){
        if($type_requesition == "POST" && $this->auth = True){
            echo json_encode($requisition_response);
        }elseif($type_requesition == "GET" && $this->auth = True){
            echo $requisition_response;
        }
    }
}


?>