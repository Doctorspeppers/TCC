<?php
namespace asTrait;

trait auth{
    protected $token;
    protected $hashIPToken;
    protected $expireToken;
    protected $creationToken;

    /*

    $timetoken = "12H0M0S",
    */ 

    static function getUserIpAddr(){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
    

    public function newToken($timeToken,$QUERY,$forThis=True)
    {
        $token = md5(uniqid());
        
        $hashIPToken = md5($this->getUserIpAddr());
        $dateCreationToken = date("Y-m-d H:i:s");
        $expireDate = new \DateTime($dateCreationToken);
        $expireDate->add(new \DateInterval($timeToken));
        $expireDate =  $expireDate->format('Y-m-d H:i:s');
        $this->executeQuery(['token'=>$token,'hashIPToken'=>$hashIPToken,
        'dateCreationToken'=>$dateCreationToken,'expireDateToken'=>$expireDate,
        'fk_idUser'=>$this->idUser],$QUERY,"/[^0-9a-zA-Z@-Z X]/");
        if($forThis==False){
            return $this->getToken($token,$hashIPToken);
        }elseif($forThis==True){
            $tempObj = $this->getToken($token,$hashIPToken);
            $this->token = $token;
            $this->hashIPToken = $hashIPToken;
            $this->expireDate = $expireDate;
            $this->dateCreatioToken = $dateCreationToken; 
        }
    }

    protected function getToken($token,$hashIpToken){
        return $this->executeQuery(["token"=>$token,"hashIpToken"=>$hashIpToken,"currentDate"=>date("Y-m-d H:i:s")],"getToken","/[^[:alpha:]_]/");
    }
    
    public function clearTokens(){
        $this->executeQuery(Null,"DeleteoutdatedToken","/[^[:alpha:]_]/");
    }

   

}

?>