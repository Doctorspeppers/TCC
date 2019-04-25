<?php
namespace traits;
define(__DIR__,"","/var/www/html");

trait auth{
    public $idToken;
    private $token;
    private $hashIPToken;
    private $expireToken;
    private $creationToken;
    private $idUser;

    /*
    $timetoken = "12H0M0S",
    */ 

    public function newAuth($ip,$timeToken,$idUser, $QUERY,$forThis=True)
    {
        $token = md5(rand());
        $hashIPToken = $token."".md5($ip);
        $dateCreationToken = date("Y-m-d H:i:s");
        $expireDate = new DateTime($dateCreationToken);
        $expireDate->add(new DateInterval($timeToken));
        $expireDate =  $expireDate->format('Y-m-d H:i:s');
        $this->command(['token'=>$token,'hashIPToken'=>$hashIPToken,'dateCreationToken'=>$dateCreationToken,'expireDateToken'=>$expireDateToken,'idUser'=>$idUser],'newToken',"/[^[:alpha:]_]/");
        if($forthis==False){
            return getAuth($token,$hashIPToken);
        }elseif($forthis==True){
            $tempObj = getAuth($token,$hashIPToken);
            $this->idToken = $tempObj["token"];
            $this->token = $token;
            $this->hashIPToken = $hashIPToken;
            $this->expireDate = $expireDate;
            $this->dateCreatioToken = $dateCreationToken; 
            $this->idUser = $idUser;
        }
    }

    protected function verifyAuth($token,$ip){
        $hashIpToken = $token."".md5($ip);
        $result = $this->comand(["token"=>$token,"hashIpToken"=>$hashIpToken],"verifyToken","/[^[:alpha:]_]/");
        if(len($result) == 0){
            $this->comand("","deleteoutdatedToken","/[^[:alpha:]_]/");
            return False;
        }else{
            return True;
        }
    }

    protected function getAuth($token,$ip){
        return $this->comand(["token"=>$token,"hashIpToken"=>$token."".md5($ip)],"getAuth","/[^[:alpha:]_]/");
    }
    
    protected function clearAuths(){
        $this->comand(Null,"DeleteoutdatedToken","/[^[:alpha:]_]/");
    }

   

}

?>