<?php
namespace Classe;



class Item
{
    use \asTrait\database;
    use \asTrait\config;
    use \asTrait\auth;

    protected $idItem;
    public $nameItem;
    public $descItem;
    public $pricesInfo;

    public function __construct($configFile)
    {
        $this->SetConfigs(__DIR__.$configFile);
    }

    public function showAllItems(){
        try{

            $result = $this->executeQuery("","showAllItems","/[^0-9a-zA-Z@-Z.]/");
            if(\sizeof($result) != 0){
              return $result;  
            }else{
              return False;
            }
          }catch(Exception $e){
            //Retorna falso pra não dar aquele vexame
            return $e;
          }
    }
    
    public function infoItem($data){
        try{
            #["idItem"=>]
            $result = $this->executeQuery($data,"infoItem","/[^0-9a-zA-Z@-Z.]/");
            if(\sizeof($result) != 0){
            return $result;  
            }else{
            return False;
            }
        }catch(Exception $e){
            //Retorna falso pra não dar aquele vexame
            return $e;
      }
    }

    public function pricesItem($data){
        try{
            #["idItem"=>]
            $result = $this->executeQuery($data,"pricesItem","/[^0-9a-zA-Z@-Z.]/");
            if(\sizeof($result) != 0){
                for($a=0;$a < sizeof($result);$a++){
                    $array[$result[$a]["nameStore"]][$result[$a]['datePrice']] = $result[$a]["valuePrice"]; 
                }
                return $array;  
            }else{
                return False;
            }
        }catch(Exception $e){
            //Retorna falso pra não dar aquele vexame
            return $e;
      }
    }
    public function commentsItem($data){
        try{
            #["idItem"=>]
            $result = $this->executeQuery($data,"commentsItem","/[^0-9a-zA-Z@-Z.]/");
            if(\sizeof($result) != 0){
              return $result;  
            }else{
              return False;
            }
          }catch(Exception $e){
            //Retorna falso pra não dar aquele vexame
            return $e;
          }
    }
    public function searchItem($data){
        try{
            #["search"=>]
            $result = $this->executeQuery($data,"searchItem","/[^0-9a-zA-Z@-Z.]/");
            if(\sizeof($result) != 0){
              return $result;  
            }else{
              return False;
            }
          }catch(Exception $e){
            //Retorna falso pra não dar aquele vexame
            return $e;
          }
    }

    public function newItem($data){
        try{
            #["nameItem"=>,"descItem"=>]
            $result = $this->executeQuery($data,"newItem","/[^0-9a-zA-Z@-Z.]/");
            if(\sizeof($result) == 0){
              return True;  
            }else{
              return False;
            }
          }catch(Exception $e){
            //Retorna falso pra não dar aquele vexame
            return $e;
          }
    }

    public function deleteItem($data){
        try{
            #["idItem"=>]
            $result = $this->executeQuery($data,"deleteItem","/[^0-9a-zA-Z@-Z.]/");
            if(\sizeof($result) == 0){
              return $result;  
            }else{
              return False;
            }
          }catch(Exception $e){
            //Retorna falso pra não dar aquele vexame
            return $e;
          }
    }
    public function addPrice($data){
        try{
            #['datePrice'=>'','valuePrice'=>'','idStore'=>'','idItem'=>'']
            $result = $this->executeQuery($data,"addPrice","/[^0-9a-zA-Z@-Z.]/");
            if(\sizeof($result) == 0){
              return $result;  
            }else{
              return False;
            }
          }catch(Exception $e){
            //Retorna falso pra não dar aquele vexame
            return $e;
          }
    }

    public function deletePrice($data){
      try{
          #['idPrice'=>'']
          $result = $this->executeQuery($data,"deletePrice","/[^0-9a-zA-Z@-Z.]/");
          if(\sizeof($result) == 0){
            return $result;  
          }else{
            return False;
          }
        }catch(Exception $e){
          //Retorna falso pra não dar aquele vexame
          return $e;
        }
    }

    public function alterPrice($data){
      try{
          #['idPrice'=>'','valuePrice'=>'','datePrice'=>'']
          $result = $this->executeQuery($data,"alterPrice","/[^0-9a-zA-Z@-Z.]/");
          if(\sizeof($result) == 0){
            return $result;  
          }else{
            return False;
          }
        }catch(Exception $e){
          //Retorna falso pra não dar aquele vexame
          return $e;
        }
    }


}

?>