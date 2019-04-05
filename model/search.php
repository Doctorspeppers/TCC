<?php
namespace model;

include "model\management.php";
include "model\trait_mysql_db.php";

class Search implements Management
{
    use database;

    protected $database;
}


