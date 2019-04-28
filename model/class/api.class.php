<?php
namespace asClass;

class api{
    use db;
    use log;
    use config;
    use auth;
    public $requisition;
    protected $content;
    protected $hashAuth;
    protected $auth;

    public function __construct($type_requisition, $content,$encoding)
    {
        $this->type_requisition = $type_requisition;
        // build a PHP variable from JSON sent using POST method
        if($type_requisition == "POST"){
            header("Content-Type: application/json");
            $this->content["data"] = json_decode(stripslashes(file_get_contents("php://input")));
            $this->content["auth"] = json_decode(stripslashes($_GET["auth"]));
            $this->content["ip"] = json_decode(stripslashes($_GET["ip"]));
        }elseif($type_requisition == "GET"){
            $this->content["data"] = json_decode(stripslashes($_GET["data"]));
            $this->content["auth"] = json_decode(stripslashes($_GET["auth"]));
            $this->content["ip"] = json_decode(stripslashes($_GET["ip"]));
        }else{
            return false;
        }
        $this->content["data"] = preg_replace($encoding, '',$this->content["data"]);
        $this->content["auth"] = preg_replace("/[^[:alpha:]_]/", '',$this->content["auth"]);
        $this->content["ip"] = preg_replace("/[^0-9a-zA-Z.]/", '',$this->content["ip"]);
    } 

    public function result($requisition_response){
        if($this->type_requisition == "POST" && $this->auth = True){
            echo json_encode($requisition_response);
        }elseif($this->type_requisition == "GET" && $this->auth = True){
            echo $requisition_response;
        }
    }
}


?>
