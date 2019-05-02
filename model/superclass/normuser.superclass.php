<?php
namespace asSuperClass;
define(__DIR__,"","/var/www/html/TCC");
include __DIR__."/../abstractclass/user.abstractclass.php";


class normuser extends \asAbstractClass\User{
    public function __construct($configFile)
    {
        \asAbstractClass\User::__construct($configFile);
    }

}

?>