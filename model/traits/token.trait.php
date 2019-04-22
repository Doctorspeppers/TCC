<?php

trait token{
    public $idToken;#
    private $token;#
    private $hashIPToken;#
    private $expireToken;
    private $creationToken;
    private $idUser;

    /*

    $timetoken = "12H0M0S",
    */ 

    public function newToken($ip,$timeToken,$idUser, $QUERY,$forThis=True)
    {
        $token = md5(rand());
        $hashIPToken = $token."".md5($ip);
        $dateCreationToken = date("Y-m-d H:i:s");
        $expireDate = new DateTime($dateCreationToken);
        $expireDate->add(new DateInterval($timeToken));
        $expireDate =  $expireDate->format('Y-m-d H:i:s');
        $this->command(['token'=>$token,'hashIPToken'=>$hashIPToken,'dateCreationToken'=>$dateCreationToken,'expireDateToken'=>$expireDateToken,'idUser'=>$idUser],'newToken',"/[^[:alpha:]_]/");
        if($forthis==False){
            return getToken($token,$hashIPToken);
        }elseif($forthis==True){
            $tempObj = getToken($token,$hashIPToken);
            $this->idToken = $tempObj["token"];
            $this->token = $token;
            $this->hashIPToken = $hashIPToken;
            $this->expireDate = $expireDate;
            $this->dateCreatioToken = $dateCreationToken; 
            $this->idUser = $idUser;
        }
    }

    protected function getToken($token,$hashIpToken){
        return $this->comand(["token"=>$token,"hashIpToken"=>$hashIpToken],"getToken","/[^[:alpha:]_]/");
    }
    
    protected function clearTokens(){
        $this->comand(Null,"DeleteoutdatedToken","/[^[:alpha:]_]/");
    }

   

}

?>