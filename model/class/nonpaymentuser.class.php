<?php
namespace asClass;
define(__DIR__,"","/var/www/html/TCC");
include __DIR__."/../superclass/normuser.superclass.php";

class nonPaymentUser extends \asSuperClass\normuser{
    public function __construct($configFile)
    {
        parent::__construct($configFile);
    }

    

}


?>