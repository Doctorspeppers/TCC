<?php
namespace asSuperClass;
include "../abstractClass/user.abstracclass.php";

class normuser implements \asAbstractClass\User{
    public function __construct($configFile)
    {
        \asAbstractClass\User::__construct($configFile);
    }

}

?>