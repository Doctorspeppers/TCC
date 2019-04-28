<?php
namespace asClass;
define(__DIR__,"","/var/www/html");


class Search
{
    use traits\db;
    use traits\config;
    use traits\log;

    protected $database;
}


