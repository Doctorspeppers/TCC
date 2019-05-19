<?php
namespace asSuperClass;
include "../abstractClass/user.abstracclass.php";

class admin extends \asAbstractClass\User{

    


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