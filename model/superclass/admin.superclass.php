<?php
namespace asSuperClass;
include "../abstractClass/user.abstracclass.php";

class admin extends \asAbstractClass\User{

    public function __construct($configFile)
    {
        \asAbstractClass\User::__construct($configFile);
    }


    protected function verifyPermission($codeAction):bool
    {
        if($this->QUERIES[$codeAction]["permission"] <= $this->permissionUser){
            return True;
        }else{
            return False;
        }
     }

}
?>