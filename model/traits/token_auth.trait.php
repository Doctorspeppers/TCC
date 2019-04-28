<?php
namespace astrait;
define(__DIR__,"/var/www/html/TCC",true);
trait auth{
    private $token;
    private $hashIPToken;
    private $expireToken;
    private $creationToken;

    /*

    $timetoken = "12H0M0S",
    */ 

    public function newToken($ip,$timeToken,$QUERY,$forThis=True)
    {
        $token = md5(rand());
        $hashIPToken = md5($token."".md5($ip));
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
    
    protected function clearTokens(){
        $this->comand(Null,"DeleteoutdatedToken","/[^[:alpha:]_]/");
    }

   

}

?>