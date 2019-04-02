<?php

include "management.php";
include "trait_mysql_db.php";

class Search implements Management
{
    use database;

    protected $database;
}

?>
